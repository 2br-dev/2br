<?php
declare(strict_types=1);

namespace Fastest\Core\Module;

final class articalsModule extends \Fastest\Core\Module\Module
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

        $cache = 'module.articals.list';

        # Получение списка
        #
        if (!($articals = $this->compiled($cache)))
        {
            $articals = Q("SELECT * FROM `#_mdd_articals` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($articals))
            {
                foreach ($articals as &$articals_item)
                {
                    $articals_item['date'] = Dates($articals_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $articals);
        }

        # Мета теги
        #
        $meta = $this->metaData($articals);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'articals'         =>  $articals,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.articals.item.'.$system;

        if (!($articals = $this->compiled($cache)))
        {
            $articals = Q("SELECT * FROM `#_mdd_articals` WHERE `visible`= ?i AND `link` LIKE ?s LIMIT 1", [1, $system ])->row();

            //$articals['link'] = $this->linkCreate($articals['link']);
            //$articals['date'] = Dates($articals['date'], $this->locale);

            //$file = new Files;

            //if (isset($articals['photo']))
            //{
            //    $articals['photo'] = $file->getFilesByGroup($articals['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            //}

            //$this->setCache($cache, $articals);
        }

        # Мета теги
        #
        $meta = $this->metaData($articals);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($articals, [ 'id', 'id', 'title', 'link' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'title' => '' ],
            'artical'     =>  $articals,
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