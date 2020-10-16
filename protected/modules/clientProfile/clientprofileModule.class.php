<?php

declare(strict_types=1);

namespace Fastest\Core\Module;

class clientProfileModule extends Module
{
    
    public function router()
    {   
        return $this->blockMethod();

        // if (isset($this->arguments[1]))
        // {
        //     return $this->errorPage;
        // }

        // if (isset($this->arguments[0]))
        // {
        //     return $this->itemMethod(intval($this->arguments[0]));
        // }

        
    }
   

   /*  public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.clientProfile.list';

        # Получение списка
        #
        if (!($clientProfile = $this->compiled($cache)))
        {
            $clientProfile = Q("SELECT * FROM `#_mdd_clientProfile` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($clientProfile))
            {
                foreach ($clientProfile as &$clientProfile_item)
                {
                    $clientProfile_item['date'] = Dates($clientProfile_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $clientProfile);
        }

        # Мета теги
        #
        $meta = $this->metaData($clientProfile);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'clientProfile'         =>  $clientProfile,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.clientProfile.item.'.$system;

        if (!($clientProfile = $this->compiled($cache)))
        {
            $clientProfile = Q("SELECT * FROM `#_mdd_clientProfile` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $clientProfile['link'] = $this->linkCreate($clientProfile['system']);
            $clientProfile['date'] = Dates($clientProfile['date'], $this->locale);

            $file = new Files;

            if (isset($clientProfile['photo']))
            {
                $clientProfile['photo'] = $file->getFilesByGroup($clientProfile['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->setCache($cache, $clientProfile);
        }

        # Мета теги
        #
        $meta = $this->metaData($clientProfile);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($clientProfile, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'clientProfile'     =>  $clientProfile,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }
 */
    public function blockMethod()
    {    
        // если пользователь не авторизован или заблокирован
        if(empty($_SESSION['authId'])) {
            return [
                'template' => 'access_forbidden'
            ];
        }
        
        $block = Q("SELECT `block` FROM `db_mdd_clients` WHERE `id`= ?i", [(int) $_SESSION['authId']])->row()['block']; 
        // exit(__($block));
        if($block == 1) {
            return [
                'template' => 'access_forbidden'
            ];
        }
        //
        $id = $_SESSION['authId'];
        $clientData = Q("SELECT `title`, `logo` FROM `db_mdd_clients` WHERE `id`= ?i ", [$id])->row();
        $fl = new \Files;
        $clientData['image_file'] = $fl->getFilesByGroup($clientData['logo'], array('sm', 'original'), array('file'), true);
        foreach ($clientData['image_file'] as $value) {
            $clientData['logo'] = str_ireplace('\\','/',$value['sm']['file']);
        }
        unset($clientData['image_file']);
        // 
        $response = Q("SELECT `file_link` FROM `db_mdd_clientsfiles` WHERE `client_id`= ?i ", [$id])->all();
        $files = [];
        if(!empty($response)){
            foreach($response as $key => &$value){
                $response[$key]['image_file'] = $fl->getFilesByGroup($value['file_link'], array('original'), array('file', 'id', 'title'), true);
                foreach ($response[$key]['image_file'] as $file) {
                    $files[] = [
                        'id'   => $file['original']['id'],
                        'src'  => str_ireplace('\\','/',$file['original']['file']),
                        'type' => $this->getType($file['original']['file']),
                        'title' => $file['original']['title'],
                    ];

                }
            }
        }
        //
        return [
            'template'    => 'block',
            'logo'        => [
                               'src' => $clientData['logo'],
                               'alt' => "2-br.ru Логотип проекта {$clientData['title']}"
                             ],
            'nameProject' => $clientData['title'],
            'files'       => $files
        ];
    }
    ////////////////////////////////////////////////////
    private function getType($fileName)
    {
        $tmp = explode(".", $fileName);
        return $tmp[count($tmp) - 1];
    }
}