<?php
declare(strict_types=1);
namespace Fastest\Core\Module;

class pagesitedevModule extends Module
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