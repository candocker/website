<?php

namespace ModuleWebsite\Controllers;

class ClassicalController extends AbstractController
{
    use TraitClassical;

    public function home()
    {
        $cacheData = $this->request->input('cache_data');
        if ($cacheData) {
            $this->dealDatas();exit();
        }

        $datas = $this->getBookInfos(true);
        $datas['pageCode'] = 'home';
        return $this->customView('list', $datas);
    }

    public function bookCatalogue($code = null)
    {
        $datas = $this->getChapterInfos($code, true);

        $datas['pageCode'] = in_array($code, ['zhouyi', 'shijing']) ? $code : 'common';
        return $this->customView('list', $datas);
    }

    public function show($bookCode, $chapterCode)
    {
        /*$file = $this->getBasePath() . "chuci/lisao.php";
        $lines = file($file);
        $spell = $content = '';
        foreach ($lines as $line) {
            if (strpos($line, 'class="s_t"') != false) {
                $spell .= strip_tags($line);
            }
            if (strpos($line, 'class="s_b"') != false) {
                $content .= trim(strip_tags($line));
            }
            if (strpos($line, '<strong>') != false) {
                $content .= trim(strip_tags($line));
            }
        }
        echo $spell . '<br />';
        echo $content;exit();*/

        if ($bookCode == 'zhouyi') {
            $datas = $this->getDetailZhou($chapterCode);
        } else {
            $file = $this->getBasePath() . "{$bookCode}/{$chapterCode}.php";
            $datas = require($file);
        }

        $datas['tdkData'] = $this->formatTdk($datas);
        $datas['pageCode'] = in_array($bookCode, ['shijing', 'zhouyi']) ? $bookCode : 'common';
        return $this->customView('detail', $datas);
    }

    protected function getBookInfos($withTdk = false)
    {
        $bookListFile = $this->getBasePath() . 'book/list.php';
        $bookDatas = require($bookListFile);
        if ($withTdk) {
            $bookDatas['tdkData'] = $this->formatTdk($bookDatas);
            return $bookDatas;
        }
        return $bookDatas;
    }

    protected function getChapterInfos($bookCode, $withTdk = false)
    {
        $bookDatas = $this->getBookInfos();
        if ($bookCode == 'zhouyi') {
            $chapterDatas = $this->getListZhou();
        } else {
            $chapterFile = $this->getBasePath() . "book/{$bookCode}.php";
            $chapterDatas = require($chapterFile);
        }

        $bookData = $bookDatas['books'][$bookCode];
        $chapterDatas['tdkData'] = $this->formatTdk($bookData);
        $chapterDatas = array_merge($bookData, $chapterDatas);
        $chapterDatas['bookCode'] = $bookCode;
        return $chapterDatas;
    }

    protected function formatTdk($datas)
    {
        $tdkData = [
            'title' => $datas['title'] ?? '古典精华',
            'keywords' => $datas['kewowrd'] ?? '',
            'description' => $datas['description'] ?? '',
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
