<?php

namespace ModuleWebsite\Controllers;

class BookController extends AbstractController
{
    use TraitBook;

    public function home()
    {
        $this->viewPre();
        $datas = $this->getBookInfos('book', null, true);
        //print_r($datas);
        $view = view('book.index', ['datas' => $datas]);
        //\Storage::disk('local')->put('views/' . request()->path(), $view->render());
        return $view;
    }

    public function bookList()
    {
        $this->viewPre();
        $datas = [];
        return view('book.list', ['datas' => $datas]);
    }

    public function bookDetail()
    {
        $this->viewPre();
        $datas = [];
        return view('book.detail', ['datas' => $datas]);
    }
}
