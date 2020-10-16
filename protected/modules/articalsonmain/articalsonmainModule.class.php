<?php

declare(strict_types=1);

namespace Fastest\Core\Module;

final class articalsonmainModule extends \Fastest\Core\Module\Module
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

        $cache = 'module.articalsonmain.list';

        # Получение списка
        #
        if (!($articalsonmain = $this->compiled($cache)))
        {
            $articalsonmain = Q("SELECT * FROM `#_mdd_articalsonmain` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($articalsonmain))
            {
                foreach ($articalsonmain as &$articalsonmain_item)
                {
                    $articalsonmain_item['date'] = Dates($articalsonmain_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $articalsonmain);
        }

        # Мета теги
        #
        $meta = $this->metaData($articalsonmain);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'articalsonmain'         =>  $articalsonmain,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.articalsonmain.item.'.$system;

        if (!($articalsonmain = $this->compiled($cache)))
        {
            $articalsonmain = Q("SELECT * FROM `#_mdd_articals` WHERE `visible`='1' AND `link` LIKE ?s LIMIT 1", [ $system ])->row();

            $articalsonmain['link'] = $this->linkCreate($articalsonmain['system']);
            //$articalsonmain['date'] = Dates($articalsonmain['date'], $this->locale);

            //$file = new Files;

            //if (isset($articalsonmain['photo']))
            //{
            //    $articalsonmain['photo'] = $file->getFilesByGroup($articalsonmain['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            //}

            //$this->setCache($cache, $articalsonmain);
        }

        # Мета теги
        #
        $meta = $this->metaData($articalsonmain);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($articalsonmain, [ 'id', 'id', 'title', 'link' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'title' => '' ],
            'articalsonmain'     =>  $artical,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        $articalsonmain = Q("SELECT `a`.`title`, `a`.`link`, `a`.`date`, `a`.`anons`, `a`.`link`, `f`.`file` 
                             FROM `#_mdd_articals` as `a`
                             LEFT JOIN `#__sys_files` as `f` 
                             ON `f`.`gid` LIKE `a`.`cover` AND `f`.`prefix` LIKE 'original'
                             ORDER BY `a`.`ord` DESC
                             LIMIT 2")->all();
        foreach ($articalsonmain as $key => $value) {
            $articalsonmain[$key]['file_replaced'] = str_replace('\\', '/', $value['file']);
        }
        //exit(__($articalsonmain));
        return [
            'template' => 'block',
            'articals' => $articalsonmain
        ];
    }
}