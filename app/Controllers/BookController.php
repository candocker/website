<?php

namespace ModuleWebsite\Controllers;

class BookController extends AbstractController
{
    public function home()
    {
        $this->viewPre();
        $datas = [];
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
