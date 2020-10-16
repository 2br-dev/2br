<?php

declare(strict_types=1);

namespace Fastest\Core\Module;

final class projectsonmainModule extends \Fastest\Core\Module\Module
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

        return $this->blockMethod();
    }
   

    public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.projectsonmain.list';

        # Получение списка
        #
        if (!($projectsonmain = $this->compiled($cache)))
        {
            $projectsonmain = Q("SELECT * FROM `#_mdd_projectsonmain` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($projectsonmain))
            {
                foreach ($projectsonmain as &$projectsonmain_item)
                {
                    $projectsonmain_item['date'] = Dates($projectsonmain_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $projectsonmain);
        }

        # Мета теги
        #
        $meta = $this->metaData($projectsonmain);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'projectsonmain'         =>  $projectsonmain,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.projectsonmain.item.'.$system;

        if (!($projectsonmain = $this->compiled($cache)))
        {
            $projectsonmain = Q("SELECT * FROM `#_mdd_projectsonmain` WHERE `visible`='1' AND `link` LIKE ?s LIMIT 1", [ $system ])->row();

            $projectsonmain['link'] = $this->linkCreate($projectsonmain['system']);
            //$projectsonmain['date'] = Dates($projectsonmain['date'], $this->locale);

            //$file = new Files;

            //if (isset($projectsonmain['photo']))
            //{
            //    $projectsonmain['photo'] = $file->getFilesByGroup($projectsonmain['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            //}

            //$this->setCache($cache, $projectsonmain);
        }

        # Мета теги
        #
        $meta = $this->metaData($projectsonmain);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($projectsonmain, [ 'id', 'id', 'title', 'link' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'title' => '' ],
            'projectsonmain'     =>  $projectsonmain,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        $projectsonmain = Q("SELECT `p`.`title`, `p`.`short_desc`, `f2`.`file`, `p`.`link` FROM `#_mdd_projectsonmain` as `p`
                             LEFT JOIN `#__sys_files` as `f2` ON `f2`.`gid` LIKE `p`.`cover` AND `f2`.`prefix` LIKE 'original'                             
                             ORDER BY `p`.`ord` ASC 
                             LIMIT 9")->all();
        foreach ($projectsonmain as $key => $value) {
            $projectsonmain[$key]['file_replaced'] = str_replace('\\', '/', $value['file']);
        }
        //exit(__($projectsonmain));
        return [
            'template' => 'block',
            'projects' => $projectsonmain
        ];
    }
}