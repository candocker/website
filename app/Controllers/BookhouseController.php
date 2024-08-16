<?php

namespace ModuleWebsite\Controllers;

class BookhouseController extends AbstractController
{
    use TraitBook;

    public function foreignSorts()
    {
        $datas = $this->getBookhouseServiceObj()->_getSeries('foreign');
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
        $force = $this->request->input('force', false);
        $datas = $this->getBookhouseServiceObj()->_getSortBooks($force);
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

    public function getBookhouseServiceObj()
    {
        return $this->getServiceObj('culture-bookhouse');
    }
}
