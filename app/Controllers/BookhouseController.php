<?php

namespace ModuleWebsite\Controllers;

class BookhouseController extends AbstractController
{
    use TraitBook;

    public function home()
    {
        $this->viewPre();
        $bookSorts = $this->getModelObj('culture-bookSort')->get();
        $results = [];
        foreach ($bookSorts as $bookSort) {
            $books = $this->getModelObj('culture-book')->where(['category' => $bookSort['code']])->get();
            $sortData = $bookSort->toArray();
            $sortData['books'] = $books->toArray();
            $results[] = $sortData;
        }

        $datas = [
            'tdkData' => ['title' => 'title'],
            'data' => $results,
        ];
        $view = view('book.index', ['datas' => $datas]);
        //\Storage::disk('local')->put('views/' . request()->path(), $view->render());
        return $view;
    }

    public function bookList($bookCode = null)
    {
        $this->viewPre();
        //$bookCode = $this->request->input('book_code');
        $bookInfo = $this->getModelObj('culture-book')->where(['code' => $bookCode])->first();
        if (empty($bookInfo)) {
            exit('no book');
        }
        $chapterInfos = $this->getModelObj('culture-chapter')->where(['book_code' => $bookCode])->orderBy('serial', 'asc')->get();
        $datas = [];
        return view('book.list1', ['datas' => $chapterInfos]);
    }

    public function bookDetail($bookCode, $chapterCode)
    {
        $this->viewPre();
        $chapterInfo = $this->getModelObj('culture-chapter')->where(['book_code' => $bookCode, 'code' => $chapterCode])->first();
	    $file = $chapterInfo->getChapterFile($chapterInfo, false);
        $contents = file($file);
        $datas = [
            'chapterInfo' => $chapterInfo->toArray(),
            'contents' => $contents,
        ];
        return view('book.detail', ['datas' => $datas]);
    }
}
