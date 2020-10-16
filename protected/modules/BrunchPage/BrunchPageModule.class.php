<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class BrunchPageModule extends Module
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

        $cache = 'module.BrunchPage.list';

        # Получение списка
        #
        if (!($BrunchPage = $this->compiled($cache)))
        {
            $BrunchPage = Q("SELECT * FROM `#_mdd_BrunchPage` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($BrunchPage))
            {
                foreach ($BrunchPage as &$BrunchPage_item)
                {
                    $BrunchPage_item['date'] = Dates($BrunchPage_item['date'], $this->locale);
                }
            }

            $this->setCache($cache, $BrunchPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($BrunchPage);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'BrunchPage'         =>  $BrunchPage,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.BrunchPage.item.'.$system;

        if (!($BrunchPage = $this->compiled($cache)))
        {
            $BrunchPage = Q("SELECT * FROM `#_mdd_BrunchPage` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $BrunchPage['link'] = $this->linkCreate($BrunchPage['system']);
            $BrunchPage['date'] = Dates($BrunchPage['date'], $this->locale);

            $file = new Files;

            if (isset($BrunchPage['photo']))
            {
                $BrunchPage['photo'] = $file->getFilesByGroup($BrunchPage['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->setCache($cache, $BrunchPage);
        }

        # Мета теги
        #
        $meta = $this->metaData($BrunchPage);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($BrunchPage, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'BrunchPage'     =>  $BrunchPage,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block',
            'slider' => $this->getPhotoForSlider(),
            'events' => $this->getSchedule(),
        ];
    }
    // 
    // 
    private function getPhotoForSlider() {
        $result = [];
        // получить все видимые проекты
        $response = Q("SELECT img FROM `db_mdd_brunchslider` WHERE visible = 1", [])->all();
        if(empty($response)) {
            return $result;
        }
        //
        
        //
        $file = new \Files;
        //
        foreach ($response as $value) {
            $img = $file->getFilesByGroup($value['img'], ['original'], ['alt', 'file'], true);
            if(!empty($img)) {
                $img = array_shift($img);
                // 
                $img = [
                    'alt' => $img['original']['alt'],
                    'src' => str_ireplace("\\", "/", $img['original']['file'])
                ];
            }
            $result[] = $img;
        }
        // 
        return $result;
    }
    // 
    // 
    private function getSchedule() {
        $result = [];
        // получить все видимые проекты
        $response = Q("SELECT event_date, time, text FROM `db_mdd_brunchevents` WHERE visible = 1 ORDER BY event_date DESC", [])->all();
        if(empty($response)) {
            return $result;
        }
        //
        foreach ($response as $value) {
            $array = explode(';', $value['text']);
            foreach ($array as $key => $row) {
                if($row == '') {
                    unset($array[$key]);
                }
            }
            // 
            $weekDay = date("w", strtotime($value['event_date']));
            if($weekDay == 0) {
                $weekDay = 'Воскресенье';
            } else if($weekDay == 1) {
                $weekDay = 'Понедельник';
            } else if($weekDay == 2) {
                $weekDay = 'Вторник';
            } else if($weekDay == 3) {
                $weekDay = 'Среда';
            } else if($weekDay == 4) {
                $weekDay = 'Четверг';
            } else if($date == 5) {
                $weekDay = 'Пятница';
            } else if($weekDay == 6) {
                $weekDay = 'Суббота';
            }
            // 
            $monthDay = date("j", strtotime($value['event_date']));
            //
            $month = date("n", strtotime($value['event_date']));
            //
            if($month == 1) {
                $month = 'Января';
            } else if($month == 2) {
                $month = 'Февраля';
            } else if($month == 3) {
                $month = 'Марта';
            } else if($month == 4) {
                $month = 'Апреля';
            } else if($month == 5) {
                $month = 'Мая';
            } else if($month == 6) {
                $month = 'Июня';
            } else if($month == 7) {
                $month = 'Июля';
            } else if($month == 8) {
                $month = 'Августа';
            } else if($month == 9) {
                $month = 'Сентября';
            } else if($month == 10) {
                $month = 'Октября';
            } else if($month == 11) {
                $month = 'Ноября';
            } else if($month == 12) {
                $month = 'Декабря';
            }
            // 
            $result[] = [
                'date' => $monthDay . ' ' .$month,
                'weekDay' => $weekDay,
                'time' => $value['time'],
                'rows' => $array
            ];
        }
        // 
        return $result;
    }
}