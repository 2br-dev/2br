<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class ServicesPageModule extends Module
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

        $cache = 'module.ServicesPage.list';

        # Получение списка
        #
        if (!($ServicesPage = $this->compiled($cache)))
        {
            $ServicesPage = Q("SELECT * FROM `#_mdd_ServicesPage` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($ServicesPage))
            {
                foreach ($ServicesPage as &$ServicesPage_item)
                {
                    $ServicesPage_item['date'] = Dates($ServicesPage_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $ServicesPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($ServicesPage);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'ServicesPage'         =>  $ServicesPage,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.ServicesPage.item.'.$system;

        if (!($ServicesPage = $this->compiled($cache)))
        {
            $ServicesPage = Q("SELECT * FROM `#_mdd_ServicesPage` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $ServicesPage['link'] = $this->linkCreate($ServicesPage['system']);
            $ServicesPage['date'] = Dates($ServicesPage['date'], $this->locale);

            $file = new Files;

            if (isset($ServicesPage['photo']))
            {
                $ServicesPage['photo'] = $file->getFilesByGroup($ServicesPage['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->setCache($cache, $ServicesPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($ServicesPage);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($ServicesPage, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'ServicesPage'     =>  $ServicesPage,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block',
            'projectCount' => $this->getProjectCount()
        ];
    }
    // 
    private function getProjectCount() {
        $result = [
            'branding' => 0,
            'digital' => 0
        ];
        // получить все видимые проекты
        $response = Q("SELECT project_type FROM `db_mdd_projects` WHERE visible = 1", [])->all();
        if(empty($response)) {
            return $result;
        }
        //
        //
        foreach ($response as $value) {
            if($value['project_type'] === '01') {
                $result['branding']++;
            }
            if($value['project_type'] === '10') {
                $result['digital']++;
            }
            if($value['project_type'] === '11') {
                $result['branding']++;
                $result['digital']++;
            }
        }
        // 
        return $result;
    }
}