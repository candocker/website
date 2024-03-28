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
}
