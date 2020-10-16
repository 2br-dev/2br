<?php
declare(strict_types=1);

namespace Fastest\Core\Module;

final class projectsModule extends \Fastest\Core\Module\Module
{
    
    public function router()
    {
        if (isset($this->arguments[1]))
        {
            return $this->errorPage;
        }

        if (isset($this->arguments[0]))
        {
            return $this->itemMethod($this->arguments[0]);
        }

        return $this->listMethod();
    }
    

    public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.projects.list';

        # Получение списка
        #
        if (!($projects = $this->compiled($cache)))
        {
            $projectsbefore2015 = Q("SELECT `p`.`title`, `p`.`short_desc`, `p`.`link`, `f2`.`file` 
                                     FROM `#_mdd_projects` as `p`
                                     LEFT JOIN `#__sys_files` as `f2` ON `f2`.`gid` LIKE `p`.`cover` AND `f2`.`prefix` LIKE 'original'
                                     WHERE `p`.`visible`=1 AND `p`.`year` = ?s 
                                     ORDER BY `p`.`ord` ASC", array('before2015'))->all();
            $projects2016 = Q("SELECT `p`.`title`, `p`.`short_desc`, `p`.`link`, `f2`.`file` 
                                     FROM `#_mdd_projects` as `p`
                                     LEFT JOIN `#__sys_files` as `f2` ON `f2`.`gid` LIKE `p`.`cover` AND `f2`.`prefix` LIKE 'original'
                                     WHERE `p`.`visible`=1 AND `p`.`year` = ?s 
                                     ORDER BY `p`.`ord` ASC", array('year2016'))->all();
            $projects2017 = Q("SELECT `p`.`title`, `p`.`short_desc`, `p`.`link`, `f2`.`file` 
                                     FROM `#_mdd_projects` as `p`
                                     LEFT JOIN `#__sys_files` as `f2` ON `f2`.`gid` LIKE `p`.`cover` AND `f2`.`prefix` LIKE 'original'
                                     WHERE `p`.`visible`=1 AND `p`.`year` = ?s 
                                     ORDER BY `p`.`ord` ASC", array('year2017'))->all();
            $projects2018 = Q("SELECT `p`.`title`, `p`.`short_desc`, `p`.`link`, `f2`.`file` 
                                     FROM `#_mdd_projects` as `p`
                                     LEFT JOIN `#__sys_files` as `f2` ON `f2`.`gid` LIKE `p`.`cover` AND `f2`.`prefix` LIKE 'original'
                                     WHERE `p`.`visible`=1 AND `p`.`year` = ?s 
                                     ORDER BY `p`.`ord` ASC", array('year2018'))->all();

            if(!empty($projectsbefore2015)){
                foreach ($projectsbefore2015 as $key => $value) {
                    $projectsbefore2015[$key]['file_replaced'] = str_replace('\\', '/', $value['file']);
                }
            }

            if(!empty($projects2016)){
                foreach ($projects2016 as $key => $value) {
                    $projects2016[$key]['file_replaced'] = str_replace('\\', '/', $value['file']);
                }
            }

            if(!empty($projects2017)){
                foreach ($projects2017 as $key => $value) {
                    $projects2017[$key]['file_replaced'] = str_replace('\\', '/', $value['file']);
                }
            }

            if(!empty($projects2018)){
                foreach ($projects2018 as $key => $value) {
                    $projects2018[$key]['file_replaced'] = str_replace('\\', '/', $value['file']);
                }
            }

            //$this->setCache($cache, $projects);
        }

        //exit(__($projects2018));
        # Мета теги
        #
        $meta = $this->metaData($projects);
        

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'projectsbefore2015'         =>  $projectsbefore2015,
            'projects2016' => $projects2016,
            'projects2017' => $projects2017,
            'projects2018' => $projects2018,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.projects.item.'.$system;

        if (!($projects = $this->compiled($cache)))
        {
            $projects = Q("SELECT * FROM `#_mdd_projects` WHERE `visible`='1' AND `link` LIKE ?s LIMIT 1", [ $system ])->row();

            $projects['link'] = $this->linkCreate($projects['link']);
            //$projects['date'] = Dates($projects['date'], $this->locale);

            //$file = new Files;

            //if (isset($projects['photo']))
            //{
            //    $projects['photo'] = $file->getFilesByGroup($projects['photo'], ['original'], ['id', 'title', 'file', 'ord', 'created'], true);
            //}

            //$this->setCache($cache, $projects);
        }

        # Мета теги
        #
        $meta = $this->metaData($projects);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($projects, [ 'id', 'id', 'title', 'link' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'title' => '' ],
            'project'     =>  $projects,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block'
        ];
    }
}