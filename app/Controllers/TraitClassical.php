<?php

namespace ModuleWebsite\Controllers;

trait TraitClassical
{
    public function getListDatas($code)
    {
        $method = "_{$code}Datas";
        $datas = $this->$method();
    }

    public function _zhouyiDatas()
    {
        $file = base_path() . "/vendor/candocker/website/migrations/cachedata/zhouyi.php";
        $infos = require($file);
        $datas = [
            'title' => '卦象(伏羲)、 卦辞(文王)、爻辞(周公)、易传(孔子)',
            'chapter' => [
                ['name' => '上经', 'infos' => array_slice($infos, 0, 30)],
                ['name' => '下经', 'infos' => array_slice($infos, 30)],
            ],
        ];
        print_r($datas);
        return $datas;
    }
}
