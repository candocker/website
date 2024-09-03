<?php

namespace ModuleWebsite\Controllers;

class BookhouseController extends AbstractController
{
    use TraitBook;
    use TraitUnidata;

    public function infolist()
    {
        $infoType = $this->request->input('info_type');
        //$datas = $this->getFetchDataServiceObj()->getFigureDetail($infoType);
        $datas = $this->getCircleTestInfos($infoType);
        //print_r($datas);
        return $this->success($datas);
    }

    public function figureDetail()
    {
        $figureCode = $this->request->input('figure_code');
        $datas = $this->getFetchDataServiceObj()->getFigureDetail($figureCode);
        return $this->success($datas);
    }

    public function groupDetail()
    {
        $groupCode = $this->request->input('group_code');
        $datas = $this->getFetchDataServiceObj()->getGroupDetail($groupCode);
        $datas['articles'] = [
            'title' => '文章',
            'items' => $this->getCircleDatas('article'),
        ];
        return $this->success($datas);
    }

    public function knowledgeSorts()
    {
        $navType = $this->request->input('nav_type');
        $bigSortCode = $this->request->input('big_sort_code');
        $sortCode = $this->request->input('sort_code');
        $datas = [];
        if ($navType == 'book') {
            $service = $this->getBookhouseServiceObj();
            $datas = $bigSortCode == 'sort' ? $service->getPointBooks($sortCode) : $service->getSeries($sortCode);
        } elseif (in_array($navType, ['figure', 'history'])) {
            $datas = $this->getFetchDataServiceObj()->getGroupInfos($sortCode);
        }
        return $this->success($datas);
    }

    public function knowledgeBigSorts()
    {
        $navType = $this->request->input('nav_type');
        $bigSortCode = $this->request->input('big_sort_code');
        $datas = [];
        if ($navType == 'book') {
            $datas = $this->getBookhouseServiceObj()->getBigSorts($bigSortCode);
        } elseif (in_array($navType, ['history', 'figure'])) {
            $datas = $this->getFetchDataServiceObj()->getSubjectInfos($bigSortCode);
        }
        return $this->success($datas);
    }

    public function getTableDatas()
    {
        $bigsort = $this->request->input('bigsort');
        $sort = $this->request->input('sort');
        $datas = $this->getBookhouseServiceObj()->getVolumeBooks($bigsort, $sort);
        //print_r($resutls);exit();
        return $this->success($datas);
    }

    public function home()
    {
        $this->viewPre();
        $results = $this->getBookhouseServiceObj()->_getSortBooks();
        $datas = [
            'tdkData' => ['title' => '图书分类-图书在线阅读，鲁迅全集、汉译学史名著'],
            'sortBooks' => $results,
        ];
        $view = view('book.index', ['datas' => $datas]);
        //\Storage::disk('local')->put('views/' . request()->path(), $view->render());
        return $view;
    }

    public function readerSortBooks()
    {
        $datas = $this->getBookhouseServiceObj()->_getSortBooks();
        return $this->success($datas);
    }

    public function bookList($bookCode = null)
    {
        $this->viewPre();
        $datas = $this->getBookhouseServiceObj()->_bookDetail($bookCode);
        return view('book.list1', ['datas' => $datas]);
    }

    public function readerBookInfo()
    {
        $bookCode = $this->request->input('book_code');
        $datas = $this->getBookhouseServiceObj()->_bookDetail($bookCode);
        return $this->success($datas);
    }

    public function readerChapterDetail()
    {
        $bookCode = $this->request->input('book_code');
        $chapterCode = $this->request->input('chapter_code');

        $datas = $this->getBookhouseServiceObj()->getChapterDetail($bookCode, $chapterCode, 'string');
        return $this->success($datas);
    }

    public function bookDetail($bookCode, $chapterCode)
    {
        $this->viewPre();
        $datas = $this->getBookhouseServiceObj()->getChapterDetail($bookCode, $chapterCode);
        return view('book.detail', ['datas' => $datas]);
    }

    public function houseLoan()
    {
        $this->viewPre();
        $datas = $this->getBookhouseServiceObj()->myLoan();
        //print_r($datas); exit();
        $view = view('simple.loan', ['datas' => $datas]);
        return $view;
    }

    public function getFetchDataServiceObj()
    {
        return $this->getServiceObj('infocms-fetchData');
    }

    public function getBookhouseServiceObj()
    {
        return $this->getServiceObj('culture-bookhouse');
    }
}
