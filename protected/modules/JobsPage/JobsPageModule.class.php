<?php
//
declare(strict_types=1);
namespace Fastest\Core\Module;
//
class JobsPageModule extends Module
{
    
    public function router()
    {
        return $this->blockMethod();
    }

    public function blockMethod()
    {
        return [
            'template' => 'block',
            'jobs' => $this->getJobs()
        ];
    }
    //
    private function getJobs() {
        $result = [];
        // 
        $response = Q("SELECT * FROM db_mdd_jobs WHERE visible = 1", [])->all();
        if(empty($response)) {
            return $result;
        }
        //
        foreach ($response as $index => $value) {
            $result[$index] = [];
            $result[$index]['type'] = $value['type'];
            // 
            $array = explode(';', $value['skills']);
            foreach ($array as $key => $row) {
                if($row == '') {
                    unset($array[$key]);
                }
            }
            //
            $result[$index]['skills'] = $array;
            $result[$index]['desc'] = $value['desc'];
        }
        // 
        return $result;
    }
}