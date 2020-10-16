<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class recoveryModule extends Module
{
    
    public function router()
    {
        $hash = null;
        if(isset($_GET['link'])) {
            $hash = $_GET['link'];
        }
        return $this->blockMethod($hash);
    }

    //
    public function blockMethod($hash)
    {
        return [
            'template' => 'block',
            'hash' => $hash
        ];
    }
}