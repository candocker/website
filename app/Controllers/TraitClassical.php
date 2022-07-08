<?php

namespace ModuleWebsite\Controllers;

trait TraitClassical
{
    public function getDetailZhou($code)
    {
        return $this->getListZhou($code);
    }

    public function getListZhou($code = null)
    {
        $file = $this->getBasePath() . "cachedata/zhouyi.php";
        $infos = require($file);
        if (!is_null($code)) {
            return $infos[$code];
        }
        $datas = [
            'chapters' => [
                ['name' => '上经', 'infos' => array_slice($infos, 0, 30)],
                ['name' => '下经', 'infos' => array_slice($infos, 30)],
            ],
        ];
        return $datas;
    }

    protected function dealDatas()
    {
        $divinations = [
            'qian', 'kun', 'zhun', 'meng', 'xu', 'song', 'shi', 'bi',
            'xiaoxu', 'lv', 'tai', 'pi', 'tongren', 'dayou', 'qiands', 'yu',
            'sui', 'gu', 'lin', 'guan', 'shihe', 'bish', 'bo', 'fu',
            'wuwang', 'daxu', 'yi', 'daguo', 'kan', 'li', 'xian', 'heng',
            'dun', 'dazhuang', 'jin', 'mingyi', 'jiaren', 'kui', 'jian', 'xie',
            'shun', 'yifl', 'guai', 'gou', 'cui', 'sheng', 'kunzs', 'jing', 
            'ge', 'ding', 'zhen', 'gen', 'jianfs', 'guimei', 'feng', 'lvhs',
            'xun', 'dui', 'huan', 'jie', 'zhongfu', 'xiaoguo', 'jiji', 'weiji',
        ];
        $tmp = [];
        $basePath = base_path();

        $symbols = [0 => '■■■　■■■', 1 => '■■■■■■■'];
        foreach ($divinations as $key => $elem) {
            $filePath = $key < 9 ? '0' . ($key + 1) : $key + 1;
            $filePath .= $elem . '.php';
            $file = $basePath . '/vendor/candocker/website/migrations/zhouyi/' . $filePath;
            $baseInfo = require($file);
            $divinationData = $this->dealDivination($baseInfo['symbol']);
            $baseInfo['symbols'] = [];
            foreach (array_reverse($baseInfo['symbol']) as $sKey) {
                $baseInfo['symbols'][] = $symbols[$sKey];
            }

            $tmp[$elem] = array_merge($baseInfo, $divinationData);
        }
        $targetFile = $basePath . '/vendor/candocker/website/migrations/cachedata/zhouyi.php';
        $fp = fopen($targetFile,'w+');
        fwrite($fp,'<?php return ' . var_export($tmp, true) . ';');
        fclose($fp);
        echo 'ok';
    }

    protected function dealDivination($symbol)
    {
        $divinations = ['坤', '震', '坎', '兑', '艮', '离', '巽', '乾'];
        $divinationOthers = ['地', '雷', '水', '泽', '山', '火', '风', '天'];
        $split = array_chunk($symbol, 3);
        $downIndex = bindec(implode('', $split[0]));
        $upIndex = bindec(implode('', $split[1]));

        $data = [
            'down' => $divinations[$downIndex],
            'up' => $divinations[$upIndex],
            'downOther' => $divinationOthers[$downIndex],
            'upOther' => $divinationOthers[$upIndex],
            'binSerial' => bindec(implode('', array_reverse($symbol))),
        ];
        return $data;
    }
}
