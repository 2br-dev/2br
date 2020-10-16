<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class LkPageModule extends Module
{
    
    public function router()
    {
        if(isset($this->arguments[0])) {
            return $this->blockMethod($this->arguments[0]);
        }
        return $this->blockMethod();
    }
    

    public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.LkPage.list';

        # Получение списка
        #
        if (!($LkPage = $this->compiled($cache)))
        {
            $LkPage = Q("SELECT * FROM `#_mdd_LkPage` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($LkPage))
            {
                foreach ($LkPage as &$LkPage_item)
                {
                    $LkPage_item['date'] = Dates($LkPage_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $LkPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($LkPage);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'LkPage'         =>  $LkPage,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.LkPage.item.'.$system;

        if (!($LkPage = $this->compiled($cache)))
        {
            $LkPage = Q("SELECT * FROM `#_mdd_LkPage` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $LkPage['link'] = $this->linkCreate($LkPage['system']);
            $LkPage['date'] = Dates($LkPage['date'], $this->locale);

            $file = new Files;

            if (isset($LkPage['photo']))
            {
                $LkPage['photo'] = $file->getFilesByGroup($LkPage['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->setCache($cache, $LkPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($LkPage);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($LkPage, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'LkPage'     =>  $LkPage,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod($arguments = null)
    {   
        $isAuth = false;
        $user = [];
        //
        if(isset($_SESSION['user_id'])) {
            if($_SESSION['user_id'] > 0) {
                $isAuth = true;
            }
        }
        //
        $data = [];
        $menu = null;
        $modul = './modul_personal-data.tpl';
        if(is_null($arguments) || $arguments == 'personal-data') {
            $data = $this->getUserData($_SESSION['user_id']);
            $menu = 'personal-data';
        } elseif ($arguments == 'materials') {
            $menu = 'materials';
            $modul = './modul_materials.tpl';
            $data = $this->getMaterials($_SESSION['user_id']);
        } elseif ($arguments == 'plan') {
            $menu = 'plan';
            $modul = './modul_plan.tpl';
            $data = $this->getTasks($_SESSION['user_id']);
        }  
        //
        return [
            'template' => 'block',
            'modul' => $modul,
            'menu' => $menu,
            'isAuth' => $isAuth,
            'data' => $data
        ];
    }
    //
    private function getUserData($id = null) {
        $result = [];
        //
        if(is_null($id)) {
            return $result;
        }
        //
        $response = Q("SELECT * FROM db_mdd_users WHERE visible = 1 AND id = ?s", [$id])->row();
        if(empty($response)) {
            return $result;
        }
        //
        // exit(__($response));
        $result = $response;
        //
        return $result;
    }
    //
    private function getTasks($id = null) {
        $result = [];
        //
        if(is_null($id)) {
            return $result;
        }
        //
        $response = Q("SELECT event, event_date FROM db_mdd_projectplan WHERE visible = 1 AND user_id = ?s  ORDER BY event_date ASC", [$id])->all();
        if(empty($response)) {
            return $result;
        }
        //
        foreach ($response as $key => $event) {
            $result[] = [
                'event' => $event['event'],
                'complete' => (date('Y-n-d') > date('Y-n-d', strtotime($event['event_date']))) ? 1 : 0
            ];
        }
        //
        return $result;
    }
    //
    private function getMaterials($id = null) {
        $result = [];
        //
        if(is_null($id)) {
            return $result;
        }
        //
        $response = Q("SELECT * FROM db_mdd_materials WHERE visible = 1 AND user_id = ?s ORDER BY created DESC", [$id])->all();
        if(empty($response)) {
            return $result;
        }
        //
        foreach ($response as $key => $value) {
            $year = date("Y", (int) $value['created']);
            $month = date("n", (int) $value['created']);
            $type = $value['type'];
            // 
            if(!array_key_exists($year, $result)) {
                $result[$year] = [];
            } 
            //
            if(!array_key_exists($month, $result[$year])) {
                $result[$year][$month] = [];
            } 
            //
            if(!array_key_exists($type, $result[$year][$month])) {
                $result[$year][$month][$type] = [];
            } 
        }
        //
        krsort($result);
        //
        foreach ($result as $year => $monthArray) {
            krsort($result[$year]); 
            foreach ($monthArray as $month => $typeArray) {
                ksort($result[$year][$month]); 
            }
        }
        //
        //
        $FILE = new \Files;
        foreach ($response as $key => $item) {
            $year = date("Y", (int) $item['created']);
            $month = date("n", (int) $item['created']);
            $type = $item['type'];
            //
            $result[$year][$month][$type][$key]['name'] = $item['name'];
            //
            $result[$year][$month][$type][$key]['file'] = $FILE->getFilesByGroup($item['file'], ['original'], ['file'], true);
            $result[$year][$month][$type][$key]['file'] = array_shift($result[$year][$month][$type][$key]['file']);
            $result[$year][$month][$type][$key]['file'] = array_shift($result[$year][$month][$type][$key]['file']);
            $result[$year][$month][$type][$key]['file'] = array_shift($result[$year][$month][$type][$key]['file']);
            $result[$year][$month][$type][$key]['file'] = str_replace ('\\', '/' , $result[$year][$month][$type][$key]['file']);
        }
        //
        // exit(__($result));
        //
        return $result;
    }
}