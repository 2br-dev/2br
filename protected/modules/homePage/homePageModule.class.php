<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class homePageModule extends Module
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

        $cache = 'module.homePage.list';

        # Получение списка
        #
        if (!($homePage = $this->compiled($cache)))
        {
            $homePage = Q("SELECT * FROM `#_mdd_homePage` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($homePage))
            {
                foreach ($homePage as &$homePage_item)
                {
                    $homePage_item['date'] = Dates($homePage_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $homePage);
        }

        # Мета теги
        #
        $meta = $this->metaData($homePage);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'homePage'          =>  $homePage,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.homePage.item.'.$system;

        if (!($homePage = $this->compiled($cache)))
        {
            $homePage = Q("SELECT * FROM `#_mdd_homePage` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $homePage['link'] = $this->linkCreate($homePage['system']);
            $homePage['date'] = Dates($homePage['date'], $this->locale);

            $file = new Files;

            if (isset($homePage['photo']))
            {
                $homePage['photo'] = $file->getFilesByGroup($homePage['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->setCache($cache, $homePage);
        }

        # Мета теги
        #
        $meta = $this->metaData($homePage);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($homePage, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'homePage'     =>  $homePage,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        // exit(__($this->getProjectList()));
        return [
            'template' => 'block',
            'projectList' => $this->getProjectList()
        ];
    }
    // 
    private function getProjectList() {
        $result = [];
        // получить все видимые проекты
        $response = Q("SELECT id, label, preview, content, preview_video FROM `db_mdd_projects` WHERE visible = 1 ORDER BY `ord` DESC LIMIT 12", [])->all();
        if(empty($response)) {
            return $result;
        }
        $file = new \Files;
        foreach ($response as $key => $row) {
            $result[$key] = [];
            $result[$key]['id'] = $row['id'];
            $result[$key]['label'] = $row['label'];
            $result[$key]['content'] = $row['content'];
            // парсинг превью
            $preview = $file->getFilesByGroup($row['preview'], ['original'], ['alt', 'file'], true);
            $preview_video = $file->getFilesByGroup($row['preview_video'], ['original'], ['file']);

            

            if(!empty($preview)) {
                $preview = array_shift($preview);
                // 
                $result[$key]['preview'] = [
                    'alt' => $preview['original']['alt'],
                    'src' => str_ireplace("\\", "/", $preview['original']['file']),
                    'type' => 'image'
                ];
            }else if(!empty($preview_video)){
                $preview_video = array_shift($preview_video);
                // 
                $result[$key]['preview'] = [
                    'src' => str_ireplace("\\", "/", $preview_video['file']),
                    'type' => 'video'
                ];
            }
        }   
        // 
        return $result;
    }
}