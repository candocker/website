<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Str;
use Swoolecan\Foundation\Helpers\CommonTool;

trait TraitUnidata
{
    public function thirddata($app, $module, $action)
    {
        $method = '_' . $module . ucfirst($action);
        if (method_exists($this, $method)) {
            return $this->$method($app);
        }
        return $this->getContentData($app, $module, $action);
    }

    public function _settingHome($app)
    {
        $file = base_path() . "/vendor/candocker/website/resources/formatdata/{$app}/home.php";
        $fileKnowledge = base_path() . "/vendor/candocker/website/resources/formatdata/{$app}/knowledge.php";
        $baseData = require($file);
        $num = rand(3, 10);
        $items = [];
        for ($i = 0; $i <= $num; $i++) {
            $items[] = require($fileKnowledge);
        }
        //print_r($items);
        //print_r($baseData);
        $baseData['data']['rec_posts'][] = [
            'title' => '知识库',
            'post_type' => 'zhuige_res',
            'items' => $items,
        ];
        return $baseData;
    }
}
