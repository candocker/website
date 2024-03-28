<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Str;
use Swoolecan\Foundation\Helpers\CommonTool;

trait TraitKnowledge
{
    public function knowledgeData($module, $action)
    {
        return $this->getContentData('knowledge', $module, $action);
    }

    public function globalSetting()
    {
        return $this->getContentData('knowledge', 'global', 'setting');
    }

    public function seckillData()
    {
        return $this->getContentData('knowledge', 'seckill', 'data');
    }

    public function homeDataMobile()
    {
        return $this->getContentData('knowledge', 'home-data', 'mobile');
    }
}
