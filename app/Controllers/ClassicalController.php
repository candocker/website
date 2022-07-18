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

        $datas = $this->getBookInfos(null, true);
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

        $bookData = $this->getBookInfos($bookCode);
        if ($bookCode == 'zhouyi') {
            $datas = $this->getDetailZhou($chapterCode);
        } else {
            $file = $this->getBasePath() . "{$bookCode}/{$chapterCode}.php";
            $datas = require($file);
            if (isset($bookData['noteType']) && $bookData['noteType'] == 'inner') {
                $datas = $this->formatInnerNote($datas);
            }
        }

        $datas['bookData'] = $bookData;
        $datas['tdkData'] = $this->formatTdk($datas);
        $datas['pageCode'] = in_array($bookCode, ['shijing', 'zhouyi']) ? $bookCode : 'common';
        return $this->customView('detail', $datas);
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
        if ($bookCode == 'zhouyi') {
            $chapterDatas = $this->getListZhou();
        } else {
            $chapterFile = $this->getBasePath() . "book/{$bookCode}.php";
            $chapterDatas = require($chapterFile);
        }

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
