<?php

namespace ModuleWebsite\Controllers;

trait TraitClassical
{
    public function getDetail($code)
    {
        return $this->_zhouyiDatas($code);
    }

    public function getListDatas($code)
    {
        $method = "_{$code}Datas";
        return $this->$method();
    }

    public function _zhouyiDatas($code = null)
    {
        $file = base_path() . "/vendor/candocker/website/migrations/cachedata/zhouyi.php";
        $infos = require($file);
        if (!is_null($code)) {
            return $infos[$code];
        }
        $datas = [
            'title' => '周易',
            'brief' => '卦象(伏羲)、 卦辞(文王)、爻辞(周公)、易传(孔子)',
            'chapters' => [
                ['name' => '上经', 'infos' => array_slice($infos, 0, 30)],
                ['name' => '下经', 'infos' => array_slice($infos, 30)],
            ],
        ];
        return $datas;
    }
}
