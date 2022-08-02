<?php

namespace ModuleWebsite\Controllers;

class ClassicalController extends AbstractController
{
    use TraitClassical;

    public function home()
    {
        /*$cacheData = $this->request->input('cache_data');
        if ($cacheData) {
            $this->dealDatas();exit();
        }*/

        $datas = $this->getBookInfos(null, true);
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
        unset($datas['books']['yizhuan']);
        $datas['pageCode'] = 'home';
        return $this->customView('list', $datas);
    }

    public function bookCatalogue($code = null)
    {
        $datas = $this->getChapterInfos($code, true);

        $pageCodes = [
            'zhouyi' => 'zhouyi',
            'shijing' => 'shijing',
            //'guwenguanzhi' => 'shijing'
        ];
        $datas['pageCode'] = $pageCodes[$code] ?? 'common';//in_array($code, ['zhouyi', 'shijing']) ? $code : 'common';
        return $this->customView('list', $datas);
    }

    public function show($bookCode, $chapterCode)
    {
        $bookData = $this->getBookInfos($bookCode);
        /*if ($bookCode == 'zhouyi') {
            $datas = $this->getListZhou($chapterCode);
        } else {*/
            $file = $this->getBasePath() . "{$bookCode}/{$chapterCode}.php";
            $datas = require($file);
            if (isset($bookData['noteType']) && $bookData['noteType'] == 'inner') {
                $datas = $this->formatInnerNote($datas);
            }
        //}
        $relateInfos = $this->getRelateInfo($bookCode, $chapterCode);

        $datas['bookData'] = $bookData;
        $datas['bookCode'] = $bookCode;
        $datas = array_merge($datas, $relateInfos);
        $datas['tdkData'] = $this->formatTdk($datas);

        $pageCodes = [
            'zhouyi' => 'zhouyi',
            'shijing' => 'shijing',
            'chuci' => 'shijing'
        ];
        $datas['pageCode'] = $pageCodes[$bookCode] ?? 'common';
        //$datas['pageCode'] = in_array($bookCode, ['shijing', 'zhouyi']) ? $bookCode : 'common';
        return $this->customView('detail', $datas);
    }

    protected function getRelateInfo($bookCode, $code, $types = ['pre', 'next'])
    {
        $chapters = $this->getChapterInfos($bookCode);
        $infos = $chapters['infos'];
        $keys = array_keys($infos);
        $cIndex = array_search($code, $keys);
        $results = $infos[$code];
        foreach ($types as $type) {
            $index = $type == 'pre' ? $cIndex - 1 : $cIndex + 1;

            if ($index < 0 || $index > count($keys)) {
                $results[$type] = ['code' => '', 'name' => '没有了'];
            } else {
                $results[$type] = $infos[$keys[$index]];
            }
        }
        return $results;
        print_r($results);exit();
    }

    protected function formatInnerNote($datas)
    {
        foreach ($datas['chapters'] as & $chapter) {
            $i = 0;
            $notes = $chapter['notes'];
            $contents = $chapter['content'];
            foreach ($contents as & $content) {
                $mids = explode(')', $content);
                $newContents = [];
                foreach ($mids as $key => $mid) {
                    $index = $key + $i;
                    $note = $notes[$index] ?? '';
                    $note = substr($note, strpos($note, ')') + 1);
                    $note = $note ? '<span class="commentinner" style="display: none; color:#3949ab; font-weight:normal; text-decoration:underline; font-style:oblique;">' . $note . '</span>' : '';
                    $mid .= $key + 1 == count($mids) ? '' : ')' . $note;
                    $newContents[$index] = $mid;
                }
                $i += $key;
                //$content = '<strong class="comment">' . implode('', $newContents) . '</strong>';
                $content = implode('', $newContents);
            }
            $chapter['content'] = $contents;
        }
        return $datas;
    }

    protected function getBookInfos($bookCode = null, $withTdk = false)
    {
        $bookListFile = $this->getBasePath() . 'book/list.php';
        $bookDatas = require($bookListFile);
        if (!empty($bookCode)) {
            return $bookDatas['books'][$bookCode];
        }

        if ($withTdk) {
            $bookDatas['tdkData'] = $this->formatTdk($bookDatas);
            return $bookDatas;
        }
        return $bookDatas;
    }

    protected function getChapterInfos($bookCode, $withTdk = false)
    {
        $bookData = $this->getBookInfos($bookCode);
        /*if ($bookCode == 'zhouyi') {
            $chapterDatas = $this->getListZhou();
        } else {*/
            $chapterFile = $this->getBasePath() . "book/{$bookCode}.php";
            $chapterInfosFile = $this->getBasePath() . "book/{$bookCode}_catalogue.php";
            $chapterDatas = require($chapterFile);
            $chapterDatas['infos'] = require($chapterInfosFile);
        //}

        //print_r($chapterDatas);exit();
        $chapterDatas['tdkData'] = $this->formatTdk($bookData);
        $chapterDatas = array_merge($bookData, $chapterDatas);
        $chapterDatas['bookCode'] = $bookCode;
        return $chapterDatas;
    }

    protected function formatTdk($datas)
    {
        $tdkData = [
            'title' => $datas['name'] ?? '古典精华',
            'keywords' => $datas['kewowrd'] ?? '',
            'description' => $datas['brief'] ?? '',
        ];
        return $tdkData;
    }

    public function getBasePath()
    {
        return base_path() . "/vendor/candocker/website/migrations/";
    }

	protected function viewPath()
	{
		return 'classical';
	}

	public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
	}
}
