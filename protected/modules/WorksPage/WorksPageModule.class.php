<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class WorksPageModule extends Module
{
    
    public function router()
    {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $filter = null;
            if(isset($_GET['filter'])) {
                $filter = $_GET['filter'];
            }
            return $this->itemMethod($_GET['id'], $filter);
        }
        return $this->blockMethod();
    }
    

    public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.WorksPage.list';

        # Получение списка
        #
        if (!($WorksPage = $this->compiled($cache)))
        {
            $WorksPage = Q("SELECT * FROM `#_mdd_WorksPage` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($WorksPage))
            {
                foreach ($WorksPage as &$WorksPage_item)
                {
                    $WorksPage_item['date'] = Dates($WorksPage_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $WorksPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($WorksPage);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'WorksPage'         =>  $WorksPage,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($id = null, $filter = null)
    {
        //
        return [
            'template' => 'item',
            'filter' => $filter,
            'project' => $this->getProject($id, $filter)
        ];
    }

    public function blockMethod()
    {
        $filterValue = null;
        $filter = null;
        if( isset($_GET['filter']) ) {
            if($_GET['filter'] == 'branding') {
                $filterValue = '01';
                $filter = 'branding';
            }
            if($_GET['filter'] == 'digital') {
                $filterValue = '10';
                $filter = 'digital';
            }
        }
        //
        return [
            'template' => 'block',
            'filter' => $filter,
            'projectList' => $this->getProjectList($filterValue)
        ];
    }
    // 
    private function getProjectList($filterValue) {
        $result = [];       
        // получить все видимые проекты
        if(!is_null($filterValue)) {
            $response = Q("SELECT id, label, preview, content FROM `db_mdd_projects` WHERE visible = 1 AND project_type = ?s OR project_type = 11 ORDER BY `created` DESC", [$filterValue])->all();
        } else {
            $response = Q("SELECT id, label, preview, content FROM `db_mdd_projects` WHERE visible = 1 ORDER BY `created` DESC", [$filterValue])->all();
        }
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
            if(!empty($preview)) {
                $preview = array_shift($preview);
                // 
                $result[$key]['preview'] = [
                    'alt' => $preview['original']['alt'],
                    'src' => str_ireplace("\\", "/", $preview['original']['file'])
                ];
            }
        }   
        // 
        return $result;
    }
    //
    private function getProject($id, $filter) {
        $result = [];
        //
        if(is_null($id)) {
            return $result;
        }
        $filterValue = 11;
        if($filter == 'branding') {
            $filterValue = '01';
        }
        if($filter == 'digital') {
            $filterValue = '10';
        }
        //
        $result['id'] = $id;
        $result['prevProject'] = null;
        $result['nextProject'] = null;
        // 
        if($filterValue != 11) {
            $nextId = Q("SELECT id FROM `db_mdd_projects` WHERE visible = 1 AND id > ?s AND (project_type = 11 OR project_type = ?s) ORDER BY id ASC LIMIT 1", [$id, $filterValue])->row();
            if(!empty($nextId)) {
                $result['nextProject'] = $nextId['id'];
            }
            // 
            $prevId = Q("SELECT id FROM `db_mdd_projects` WHERE visible = 1 AND id < ?s AND (project_type = 11 OR project_type = ?s) ORDER BY id DESC LIMIT 1", [$id, $filterValue])->row();
            if(!empty($prevId)) {
                $result['prevProject'] = $prevId['id'];
            }
            //
            $response = Q("SELECT * FROM `db_mdd_projects` WHERE visible = 1 AND id = ?s", [$id])->row();
            if(empty($response)) {
                return $result;
            }
        } else {
            $nextId = Q("SELECT id FROM `db_mdd_projects` WHERE visible = 1 AND id > ?s ORDER BY id ASC LIMIT 1", [$id])->row();
            if(!empty($nextId)) {
                $result['nextProject'] = $nextId['id'];
            }
            // 
            $prevId = Q("SELECT id FROM `db_mdd_projects` WHERE visible = 1 AND id < ?s ORDER BY id DESC LIMIT 1", [$id])->row();
            if(!empty($prevId)) {
                $result['prevProject'] = $prevId['id'];
            }
            //
            $response = Q("SELECT * FROM `db_mdd_projects` WHERE visible = 1 AND id = ?s", [$id])->row();
            if(empty($response)) {
                return $result;
            }
        }
        //
        $result['title'] = $response['title'];
        $result['content'] = $response['content'];
        $result['label'] = $response['label'];
        //
        $file = new \Files;
        // парсинг баннера
        $banner = $file->getFilesByGroup($response['banner'], ['original'], ['alt', 'file'], true);
        if(!empty($banner)) {
            $banner = array_shift($banner);
            // 
            $result['banner'] = [
                'alt' => $banner['original']['alt'],
                'src' => str_ireplace("\\", "/", $banner['original']['file'])
            ];
        }  
        //
        return $result;
    }
}