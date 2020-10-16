<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class AgencyPageModule extends Module
{
    
    public function router()
    {
        return $this->blockMethod();
    }
    

    public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.AgencyPage.list';

        # Получение списка
        #
        if (!($AgencyPage = $this->compiled($cache)))
        {
            $AgencyPage = Q("SELECT * FROM `#_mdd_AgencyPage` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($AgencyPage))
            {
                foreach ($AgencyPage as &$AgencyPage_item)
                {
                    $AgencyPage_item['date'] = Dates($AgencyPage_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $AgencyPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($AgencyPage);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'AgencyPage'         =>  $AgencyPage,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.AgencyPage.item.'.$system;

        if (!($AgencyPage = $this->compiled($cache)))
        {
            $AgencyPage = Q("SELECT * FROM `#_mdd_AgencyPage` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $AgencyPage['link'] = $this->linkCreate($AgencyPage['system']);
            $AgencyPage['date'] = Dates($AgencyPage['date'], $this->locale);

            $file = new Files;

            if (isset($AgencyPage['photo']))
            {
                $AgencyPage['photo'] = $file->getFilesByGroup($AgencyPage['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->setCache($cache, $AgencyPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($AgencyPage);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($AgencyPage, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'AgencyPage'     =>  $AgencyPage,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block',
            'commandList' => $this->getCommand()
        ];
    }

    // 
    private function getCommand() {
        $result = [];
        // получить все видимые проекты
        $response = Q("SELECT title, name, description, img FROM `db_mdd_comand` WHERE visible = 1", [])->all();
        if(empty($response)) {
            return $result;
        }
        //
        $file = new \Files;
        //
        foreach ($response as $value) {
            $img = $file->getFilesByGroup($value['img'], ['original'], ['alt', 'file'], true);
            if(!empty($img)) {
                $img = array_shift($img);
                // 
                $img = [
                    'alt' => $img['original']['alt'],
                    'src' => str_ireplace("\\", "/", $img['original']['file'])
                ];
            }
            $result[] = [
                'name' => $value['name'],
                'title' => $value['title'],
                'description' => $value['description'],
                'img' => $img
            ];
        }
        // 
        return $result;
    }
}