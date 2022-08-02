<?php

namespace ModuleWebsite\Controllers;

trait TraitClassical
{
    public function getListZhou($code = null)
    {
        $file = $this->getBasePath() . "cachedata/zhouyi.php";
        $infos = require($file);
        if (!is_null($code)) {
            return $infos[$code];
        }
        $datas = [
            'chapters' => [
                ['name' => '上经', 'infos' => array_slice($infos, 0, 30), 'desc' => '周，代名也。易，書名也。其卦本伏羲所畫，有交易、變易之義，故謂之易。其辭則文王、周公所繫，故繫之周。以其簡袠重大，故分為上下兩篇。《經》則伏羲之畫，文王、周公之辭也。並孔子所作之《傳》十篇，凡十二篇。中間頗為諸儒所亂。近世晁氏始正其失，而未能盡合古文。呂氏又更定著為《經》二卷、《傳》十卷，乃復孔氏之舊云。'],
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

    public function bak()
    {
        /*if ($bookCode == 'zhouyi') {
            $chapterDatas = $this->getListZhou();
        } else {*/
        //}
        /*if ($bookCode == 'zhouyi') {
            $datas = $this->getListZhou($chapterCode);
        } else {*/
        //}
        //
        /*$cacheData = $this->request->input('cache_data');
        if ($cacheData) {
            $this->dealDatas();exit();
        }*/

        /*$basePath = $this->getBasePath();
        foreach ($datas['books'] as $bookCode => $data) {
            //if (in_array($bookCode, ['zhouyi', 'shijing', 'yizhuan'])) {
            if (in_array($bookCode, ['shijing', 'guwenguanzhi', 'daodejing', 'chuci', 'lunyu', 'daxue', 'mengzi', 'xunzi', 'zhuangzi', 'zhongyong', 'mozi', 'yizhuan'])) {
                continue;
            }
            $file = $basePath . "book/{$bookCode}_catalogue.php";
            $chapters = $this->getChapterInfos($bookCode);
            //print_r($chapters);exit();
            $keyValues = [];
    
            foreach ($chapters['chapters'] as $chapter) {
                    foreach ($chapter['infos'] as $cCode => $data) {
                        $keyValues[$cCode] = $data;
                    }
            }
            //print_r($keyValues);exit();
    
                $str = "<?php\nreturn [\n";
            foreach ($keyValues as $key => $value) {
                //print_r($value);exit();
                $spell = $value['spell'] ?? '';
                $symbolStr = implode(',', $value['symbol']);
                $rKey = $value['serial'] < 10 ? '0' . $value['serial'] . $key : $value['serial'] . $key;
                echo "'" . $rKey . "', ";
                $str .= "    '{$rKey}' => [\n        'code' => '{$rKey}', 'serial' => {$value['serial']}, 'binSerial' => {$value['binSerial']}, 'name' => '{$value['name']}', 'spell' => '{$spell}', 'brief' => '{$value['brief']}', \n        'down' => '{$value['down']}', 'up' => '{$value['up']}', 'downOther' => '{$value['downOther']}', 'upOther' => '{$value['upOther']}', 'symbol' => [{$symbolStr}],\n    ],\n";
            }
            $str .= "];";
            echo $str;
            //file_put_contents($file, $str);
        }
        echo $str;exit();
        print_r($datas);exit();*/
    }
}
