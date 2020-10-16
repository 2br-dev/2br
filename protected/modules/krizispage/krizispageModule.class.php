<?php
declare(strict_types=1);
namespace Fastest\Core\Module;

class krizispageModule extends Module
{
    
    public function router()
    {
        return $this->blockMethod();
    }
    
    public function blockMethod()
    {
        return [
            'template' => 'block'
        ];
    }
}

