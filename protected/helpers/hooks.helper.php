<?php

final class hooksHelper extends CPInit
{
    private $sitemenu = [];

    public function __construct()
    {
        parent::__construct();
    }

    private function shopping()
    {
        # Category
        #
        if (!($category = $this->cache->getCompiled('hooks.category.list')))
        {
            $list = [];
            $category = Q("SELECT `id`, `system`  FROM `#__shop_category` WHERE `pid`!=?i AND `visible`=?i", [ 0, 1 ])->all();

            foreach ($category as $c) {
                $list[] = $c['id'] . '-' . $c['system'];
                $list[] = $c['system'];
            }

            $category = $list;

            $this->cache->setCache('hooks.category.list', $category);
        }

        if (isset($this->path[0]) && in_array($this->path[0], $category)) {
            array_unshift($this->path, CATALOG_ROOT);
        }

        # Brands
        #
        if (!($brands = $this->cache->getCompiled('hooks.brands.list')))
        {
            $brands = Q("SELECT `id`, `system`  FROM `#__shop_manufacturer` WHERE `visible`=?i", array( 1 ))->all();

            $list = [];

            foreach ($brands as $c) {
                $list[] = $c['id'] . '-' . $c['system'];
                $list[] = $c['system'];
            }

            $brands = $list;

            $this->cache->setCache('hooks.brands.list', $brands);
        }

        if (isset($this->path[0]) && in_array($this->path[0], $brands))
        {
            array_unshift($this->path, CATALOG_ROOT);
        }
    }

    private function sitemenu()
    {
        # Получение списка
        #
        if (!($sitemenu = $this->cache->getCompiled('hooks.sitemenu.list')))
        {
            $sitemenu = Q("SELECT `id`, `name`, `system` as `sys_name` FROM `#_mdd_shedulecategory` WHERE `visible`=1 AND `parent`=0 ORDER BY `ord`")->all();

            foreach ($sitemenu as &$item)
            {
                $item['link'] = sprintf('/schedule/%s', $item['sys_name']);
            }

            $this->cache->setCache('hooks.sitemenu.list', $sitemenu);
        }

        $this->sitemenu = [
            'schedule' => $sitemenu
        ];
    }

    public function init()
    {
        // $this->shopping();
        // $this->sitemenu();

        return [
            'mpath' => $this->path,
            // 'sitemenu' => $this->sitemenu
        ];
    }
}
