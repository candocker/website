<?php

namespace ModuleWebsite\Controllers;

class ReadController extends AbstractController
{
    use TraitBook;

    public function home()
    {
        $datas = [
            'title' => '碎片知识',
            'description' => '碎片化知识、碎片化学系',
            'tdkData' => [
                'title' => '碎片知识',
                'description' => '碎片化知识、碎片化学系',
                'keywords' => '',
            ],
        ];
        return $this->customView('home', $datas);
    }

    public function readJoin($sort)
    {
        $datas = $this->getBookInfos($sort, null, true);
        $datas['pageCode'] = 'join';
        $datas['sort'] = $sort;
        $datas = $this->formatNav($datas);
        return $this->customView('listjoin', $datas);
    }

    public function readJoinList($sort, $code = null)
    {
        $datas = $this->getChapterInfos($sort, $code, true);

        $bookData = $this->getBookInfos($sort, $code);
        $datas['bookData'] = $bookData;
        $datas['pageCode'] = 'joinlist';
        $datas['sort'] = $sort;
        return $this->customView('listjoin', $datas);
    }

    public function readJoinShow($sort, $bookCode, $chapterCode)
    {
        $bookData = $this->getBookInfos($sort, $bookCode);
        $file = $this->getBasePath() . "{$sort}s/{$bookCode}/{$chapterCode}.php";
        $datas = require($file);
        if (isset($bookData['noteType']) && $bookData['noteType'] == 'inner') {
            $datas = $this->formatInnerNote($datas);
        }
        $relateInfos = $this->getRelateInfo($sort, $bookCode, $chapterCode);

        $datas['bookData'] = $bookData;
        $datas['bookCode'] = $bookCode;
        $datas = array_merge($relateInfos, $datas);
        $datas['tdkData'] = $this->formatTdk($datas);
        $datas['sort'] = $sort;

        $datas['pageCode'] = 'commonjoin';
        return $this->customView('detailjoin', $datas);
    }

    public function series($bigsort = '', $sort = '')
    {
        $graphicService = $this->getServiceObj('culture-graphic');
        $datas = $this->getReadService()->getSeriesDatas($bigsort, $sort);
        $datas = $this->formatNav($datas);
        $view = $datas['view'];

        return $this->customView($view, $datas);
    }

    protected function getReadService()
    {
        return $this->getServiceObj('read');
    }

    public function getNavDatas()
    {
        return [
            /*'read' => [
                'noUrl' => true,
                'name' => '有效阅读',
                'subNavs' => [
                    'classical' => ['name' => '古籍原本'],
                    'annotation' => ['name' => '读书札记'],
                    'reference' => ['name' => '工具书'],
                ],
            ],
            'series-translation' => [
                'name' => '汉译学术名著',
                'noUrl' => true,
                'subNavs' => [
                    'philosophy' => ['name' => '哲学 (285)'],
                    'history' => ['name' => '历史·地理 (172)'],
                    'politics' => ['name' => '政治·法律·社会 (202)'],
                    'economics' => ['name' => '经济 (166)'],
                    'language' => ['name' => '语言·文艺理论 (25)'],
                    'otheracademic' => ['name' => '学术补编 (100)'],
                ],
            ],
            'series-classical' => [
                'name' => '经典图书系列',
                'noUrl' => true,
                'subNavs' => [
                    'jdguji' => ['name' => '经典古籍'],
                    'luxun' => ['name' => '鲁迅图书'],
                    'goodwork' => ['name' => '名家名作'],
                ],
            ],*/
            'book' => [
                'name' => '王灿知识库',
                'url' => 'http://book.canliang.wang/',
            ],
            'bookpc' => [
                'name' => 'PC端书屋',
                'url' => 'http://bookhouse.canliang.wang/',
            ],
        ];
    }

    public function dealBook()
    {
        $bookListFile = $this->getBasePath() . 'referencelist/index.php';
        $bookDatas = require($bookListFile);
        $sqlBook = 'INSERT INTO `wp_book` (`code`, `name`, `category`, `book_path`, `status`, `created_at`, `updated_at`) VALUES ';
        $sql = 'INSERT INTO `wp_chapter` (`code`, `chapter_type`, `serial`, `book_code`, `name`, `status`, `created_at`, `updated_at`) VALUES ';
        $command = '';
        foreach ($bookDatas['chapters'][0]['books'] as $code => $bData) {
            $datas = $this->getChapterInfos('reference', $code, true);
            //print_r($datas);exit();
            $bCode = $code;
            $infos = $datas['infos'];
            foreach ($datas['chapters'] as $cInfo) {
                $sqlBook .= "('ruxue{$cInfo['brief']}', '儒学-{$cInfo['name']}', 'ruxue', '资料库/儒学/儒学-{$cInfo['name']}', 1, NOW(), NOW()),\n";
                $i = 1;
                $command .= "mkdir /data/htmlwww/resource/books/资料库/儒学/儒学-{$cInfo['name']}/;\n";
                foreach ($cInfo['infos'] as $cCode) {
                    $serial = $i * 10;
                    $cName = $infos[$cCode]['name'];
                    $sql .= "('{$cCode}', 'common', {$serial}, 'ruxue{$cInfo['brief']}', '{$cName}', 1, NOW(), NOW()),\n";
                    $i++;
                    $filePath = $this->getBasePath() . "references/{$code}/{$cCode}.php";
                    $command .= "mv {$filePath} /data/htmlwww/resource/books/资料库/儒学/儒学-{$cInfo['name']}/;\n";
                }
            }
            echo $sqlBook;
        echo $sql;
            echo $command;exit();
            //var_dump($code);
            //print_r($datas);
            /*$nData = [
                'code' => $code,
                'name' => $bData['name'],
                'type' => 'epub',
                'category' => 'ruxue',
            ];
            $exist = $this->getModelObj('culture-book')->where(['code' => $code])->first();
            if ($exist) {
                print_r($exist->toArray());
            }
            $this->getModelObj('culture-book')->create($nData);*/
            //print_r($bData);
        }
        echo $sql;
    }
}
