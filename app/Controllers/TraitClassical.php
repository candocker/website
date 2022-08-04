<?php

namespace ModuleWebsite\Controllers;

use Overtrue\ChineseCalendar\Calendar;

trait TraitClassical
{
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

    public function test()
    {
        $calendar = new Calendar();

        $result = $calendar->solar(1881, 8, 3);
        var_dump($result);exit();
        $basePath = $this->getBasePath();
        $elems = ['n9.php', 'a.php', 'n1.php', 'n9.php'];
        $results = [];
        foreach ($elems as $elem) {
            $file = $basePath . "{$elem}";
            $data = require($file);
            foreach ($data as $key => $value) {
                if (!isset($results[$key])) {
                    $results[$key] = $value;
                } else {
                    $results[$key] = array_merge($results[$key], $value);
                }
                //echo $key . '<br />';
            }
        }
        $str = "<?php\nreturn [\n";
        foreach ($results as $rKey => $rValue) {
            $str .= "'{$rKey}' => [\n";
            foreach ($rValue as $rStr) {
                $str .= "    '{$rStr}',\n";
            }
            $str .= "],\n";
        }
        $str .= "];";
        $file = $basePath . 'luxun/resume.php';
        file_put_contents($file, $str);
        print_r($results);
        echo $basePath;
    }

    public function deal()
    {
        $datas = $this->getBookInfos(null, true);
        $basePath = $this->getBasePath();
        $cancels = ['name', 'brief', 'nameShort', 'author', 'keyword', 'nameSpell'];
        foreach ($datas['books'] as $bookCode => $bData) {
            if (!in_array($bookCode, ['shijing'])) {
            //if (in_array($bookCode, ['zhouyi', 'yizhuan'])) {
            //if (in_array($bookCode, ['shijing', 'guwenguanzhi', 'daodejing', 'chuci', 'lunyu', 'daxue', 'mengzi', 'xunzi', 'zhuangzi', 'zhongyong', 'mozi', 'yizhuan'])) {
                continue;
            }
            //$file = $basePath . "book/{$bookCode}_catalogue.php";
            $chapters = $this->getChapterInfos($bookCode);
            foreach ($chapters['infos'] as $cCode => $cData) {
                $dFile = $basePath . "{$bookCode}/{$cCode}.php";
                if (isset($cData['isLost'])) {
                    continue;
                }
                $content = file($dFile);
                foreach ($content as $index => & $iValue) {
                    if (strpos($iValue, "'name' => '第节'") !== false) {
                        //$iValue = str_replace('第节', '白话', $iValue);
                    }
                    if ($index > 10) {
                        continue;
                    }

                    foreach ($cancels as $cancel) {
                        if (strpos($iValue, "    '{$cancel}' => ") !== false) {
                            unset($content[$index]);
                        }
                    }
                }
                $nContent = implode('', $content);
                file_put_contents($dFile, $nContent);
            }
            //print_r($chapters);exit();

            /*$str = "<?php\nreturn [\n";
            $str .= "    '{$rKey}' => [\n        'code' => '{$rKey}',\n    ],\n";
            $str .= "];";
            file_put_contents($file, $str);*/
        }
        //echo $str;exit();
        //print_r($datas);exit();
    }
}
