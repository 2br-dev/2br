<?php

declare(strict_types=1);

namespace Fastest\Core\Module;

class vacModule extends Module
{
    
    public function router()
    {
        return $this->listMethod();
    }
    

    public function listMethod()
    {
   
        //$cache = 'module.vac.list';

        $vac = Q("SELECT * FROM `#_mdd_vacancies` WHERE `visible` = 1",array())->all();

       // exit(__($vac));

        return [
            'vac'               =>   $vac,
            'template'          =>  'list'
        ];
    }

}