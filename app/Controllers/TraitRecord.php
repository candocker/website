<?php

namespace ModuleWebsite\Controllers;

trait TraitRecord
{
    public function recordHome()
    {
        $this->viewPre();
        $results = $this->getFetchDataServiceObj()->_getSortRecords('all');
        $datas = [
            'tdkData' => ['title' => '图书分类-图书在线阅读，鲁迅全集、汉译学史名著'],
            'recordDatas' => $results,
        ];
        $view = view('book.record', ['datas' => $datas]);
        //\Storage::disk('local')->put('views/' . request()->path(), $view->render());
        return $view;
    }
}
