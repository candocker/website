<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Str;
use Swoolecan\Foundation\Helpers\CommonTool;

trait TraitUnidata
{
    public function thirddata($app, $module, $action)
    {
        return $this->getContentData($app, $module, $action);
    }

    protected function getContentData($app, $module, $action)
    {
        $file = $file = base_path() . "/vendor/candocker/website/resources/thirddata/{$app}/{$module}-{$action}.json";
        $text = file_get_contents($file);
        $data = json_decode(trim($text), true);
        return $this->successCustom($data);
    }
}
