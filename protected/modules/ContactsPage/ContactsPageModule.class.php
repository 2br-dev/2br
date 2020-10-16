<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class ContactsPageModule extends Module
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

        $cache = 'module.ContactsPage.list';

        # Получение списка
        #
        if (!($ContactsPage = $this->compiled($cache)))
        {
            $ContactsPage = Q("SELECT * FROM `#_mdd_ContactsPage` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($ContactsPage))
            {
                foreach ($ContactsPage as &$ContactsPage_item)
                {
                    $ContactsPage_item['date'] = Dates($ContactsPage_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $ContactsPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($ContactsPage);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'ContactsPage'         =>  $ContactsPage,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.ContactsPage.item.'.$system;

        if (!($ContactsPage = $this->compiled($cache)))
        {
            $ContactsPage = Q("SELECT * FROM `#_mdd_ContactsPage` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $ContactsPage['link'] = $this->linkCreate($ContactsPage['system']);
            $ContactsPage['date'] = Dates($ContactsPage['date'], $this->locale);

            $file = new Files;

            if (isset($ContactsPage['photo']))
            {
                $ContactsPage['photo'] = $file->getFilesByGroup($ContactsPage['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->setCache($cache, $ContactsPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($ContactsPage);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($ContactsPage, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'ContactsPage'     =>  $ContactsPage,
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