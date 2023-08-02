<?php

namespace ModuleWebsite\Controllers;

class ReadController extends AbstractController
{
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

    public function readClassical()
    {
        $datas = $this->getBookInfos('book', null, true);
        //unset($datas['books']['yizhuan']);
        $datas['pageCode'] = 'home';
        $datas = $this->formatNav($datas);
        return $this->customView('list', $datas);
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

    protected function formatNav($datas)
    {
        $path = $this->request->path();
        $pos = strrpos($path, '-');
        $datas['bigNav'] = $pos !== false ? substr($path, 0, $pos) : $path;
        $datas['currentNav'] = $pos !== false ? substr($path, $pos + 1) : $path;
        return $datas;
    }

    public function bookCatalogue($code = null)
    {
        $datas = $this->getChapterInfos('book', $code, true);

        $pageCodes = [
            'yijing' => 'yijing',
            'shijing' => 'shijing',
            //'mengzi' => 'shijing',
            //'guwenguanzhi' => 'shijing'
        ];
        $bookData = $this->getBookInfos('book', $code);
        $datas['bookData'] = $bookData;
        $datas['pageCode'] = $pageCodes[$code] ?? 'common';//in_array($code, ['yijing', 'shijing']) ? $code : 'common';
        return $this->customView('list', $datas);
    }

    public function bookShow($bookCode, $chapterCode)
    {
        $bookData = $this->getBookInfos('book', $bookCode);
        $file = $this->getBasePath() . "books/{$bookCode}/{$chapterCode}.php";
        $datas = require($file);
        if (isset($bookData['noteType']) && $bookData['noteType'] == 'inner') {
            $datas = $this->formatInnerNote($datas);
        }
        $relateInfos = $this->getRelateInfo('book', $bookCode, $chapterCode);

        $datas['bookData'] = $bookData;
        $datas['bookCode'] = $bookCode;
        $datas = array_merge($relateInfos, $datas);
        $datas['tdkData'] = $this->formatTdk($datas);

        $pageCodes = [
            'yijing' => 'yijing',
            'shijing' => 'shijing',
            'chuci' => 'shijing'
        ];
        $datas['pageCode'] = $pageCodes[$bookCode] ?? 'common';
        //$datas['pageCode'] = in_array($bookCode, ['shijing', 'yijing']) ? $bookCode : 'common';
        return $this->customView('detail', $datas);
    }

    protected function getRelateInfo($sort, $bookCode, $code, $types = ['pre', 'next'])
    {
        $chapters = $this->getChapterInfos($sort, $bookCode);
        $infos = $chapters['infos'];
        $keys = array_keys($infos);
        $cIndex = array_search($code, $keys);
        $results = $infos[$code];
        foreach ($types as $type) {
            $index = $type == 'pre' ? $cIndex - 1 : $cIndex + 1;

            if ($index < 0 || $index >= count($keys)) {
                $results[$type] = ['code' => '', 'name' => '没有了'];
            } else {
                $results[$type] = $infos[$keys[$index]];
            }
        }
        return $results;
    }

    protected function formatInnerNote($datas)
    {
        foreach ($datas['chapters'] as & $chapter) {
            $i = 0;
            $notes = $chapter['notes'] ?? [];
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

    protected function getBookInfos($sort, $bookCode = null, $withTdk = false)
    {
        $bookListFile = $this->getBasePath() . $sort . 'list/index.php';
        $bookDatas = require($bookListFile);
        if (!empty($bookCode)) {
            foreach ($bookDatas['chapters'] as $chapter) {
                if (isset($chapter['books'][$bookCode])) {
                    return $chapter['books'][$bookCode];
                }
            }
        }

        if ($withTdk) {
            $bookDatas['tdkData'] = $this->formatTdk($bookDatas);
            return $bookDatas;
        }
        return $bookDatas;
    }

    protected function getChapterInfos($sort, $bookCode, $withTdk = false)
    {
        $bookData = $this->getBookInfos($sort, $bookCode);

        $chapterFile = $this->getBasePath() . $sort . "list/{$bookCode}.php";
        $chapterInfosFile = $this->getBasePath() . $sort . "list/{$bookCode}_catalogue.php";
        $chapterDatas = require($chapterFile);
        $chapterDatas['infos'] = require($chapterInfosFile);

        //print_r($chapterDatas);exit();
        $chapterDatas['tdkData'] = $this->formatTdk($bookData);
        $chapterDatas = array_merge($bookData, $chapterDatas);
        $chapterDatas['bookCode'] = $bookCode;
        return $chapterDatas;
    }

    protected function formatTdk($datas)
    {
        $tdkData = [
            'title' => $datas['name'] ?? '经典古籍',
            'keywords' => $datas['kewowrd'] ?? '',
            'description' => $datas['brief'] ?? '',
        ];
        return $tdkData;
    }

    public function getBasePath()
    {
        return config('culture.material_path');
    }

	protected function viewPath()
	{
		return 'read';
	}

    protected function getReadService()
    {
        return $this->getServiceObj('read');
    }

    public function getNavDatas()
    {
        return [
            'read' => [
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
            ],
            'book' => [
                'name' => '王灿书屋',
                'url' => 'http://book.91zuiai.com/',
            ],
        ];
    }
}
