<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Facades\Cache;

class BookhouseController extends AbstractController
{
    use TraitBook;

    public function foreignSorts()
    {
        $datas = $this->_getSeries('foreign');

        return $this->success($datas);
    }

    public function _getSeries($bigsort)
    {
        $bigsorts = [
            'foreign' => ['scholarism' => '学术名著', 'luxun' => '鲁迅'],
            //'chinese' => [],
        ];
        $sorts = $bigsorts[$bigsort];
        $sortCodes = array_keys($sorts);
        $infos = $this->getModelObj('culture-series')->whereIn('sort', $sortCodes)->orderBy('orderlist', 'desc')->get();
        $results = [];
        foreach ($infos as $info) {
            $sort = $info['sort'];
            if (isset($results[$sort])) {
                $results[$sort]['subSorts'][] = ['code' => $info['code'], 'name' => $info['name']];
            } else {
                $results[$sort] = ['code' => $sort, 'name' => $sorts[$sort], 'subSorts' => []];
            }
        }
        return array_values($results);
    }

    public function getTableDatas()
    {
        $bigsort = $this->request->input('bigsort');
        $sort = $this->request->input('sort');
        $volumes = $this->getModelObj('culture-seriesVolume')->where(['series_code' => $sort])->orderBy('orderlist', 'asc')->get();
        $results = $tabList = [];
        foreach ($volumes as $volume) {
            $vId = $volume['id'];
            $vNameBase = $volume['name'];
            $vName = $vNameBase . $volume['brief'];
            $vName .= $volume['book_num'] ? '( ' . $volume['book_num'] . ' )' : '';
            $vData = [
                'id' => $vId,
                'name' => $vNameBase,
                'title' => $vName,
                'description' =>$volume['description'],
            ];
            $tabList[] = $vData;
            $books = $this->getModelObj('culture-bookPublish')->where(['series_volume_id' => $vId])->orderBy('serial', 'asc')->get();
            $bookDatas = [];
            foreach ($books as $book) {
                $bookDatas[] = [
                    'name' => $book['name'],
                    'author' => $book['author'],
                    'nationality' => $book['nationality'],
                    'baidu_url_value' => $book->book ? $book->book['baidu_url'] : '',
                    'baidu_url' => $book->book && $book->book['baidu_url'] ? '百度百科' : '',
                    'onlineread' => $book->book && $book->book->type == 'epub' ? '在线阅读' : '',
                    'onlineread_value' => '/pages/book/info?book_code=' . $book['book_code'],
                    'brief' => $book['brief'],
                ];
            }
            $vData['bookDatas'] = $bookDatas;
            $results[] = $vData;
        }
        $datas = [
            'tableHeader' => $this->getTableHeaderDatas('book'),
            'tableDatas' => $results,
            'tabList' => $tabList,
        ];
        //print_r($resutls);exit();
        return $this->success($datas);
    }

    public function home()
    {
        $this->viewPre();
        $force = $this->request->input('force', false);
        $datas = $this->_getSortBooks($force);
        $view = view('book.index', ['datas' => $datas]);
        //\Storage::disk('local')->put('views/' . request()->path(), $view->render());
        return $view;
    }

    public function readerSortBooks()
    {
        $datas = $this->_getSortBooks();
        return $this->success($datas);
    }

    public function bookList($bookCode = null)
    {
        $this->viewPre();
        $datas = $this->_bookDetail($bookCode);
        return view('book.list1', ['datas' => $datas]);
    }

    public function readerBookInfo()
    {
        $bookCode = $this->request->input('book_code');
        $datas = $this->_bookDetail($bookCode);
        return $this->success($datas);
    }

    public function _bookDetail($bookCode)
    {
        $bookInfo = $this->getModelObj('culture-book')->where(['code' => $bookCode])->first();
        if (empty($bookInfo)) {
            exit('no book');
        }
        $chapterInfos = $this->getModelObj('culture-chapter')->where(['book_code' => $bookCode])->orderBy('serial', 'asc')->get();
        $chapterDatas = [];
        foreach ($chapterInfos as $cInfo) {
            $chapterDatas[] = [
                'name' => $cInfo['name'],
                'code' => $cInfo['code'],
                'chapter_type' => $cInfo['chapter_type'],
                'book_code' => $cInfo['book_code'],
                'id' => $cInfo['id'],
                'chapterId' => $cInfo['id'],
            ];
        }
        $bookData = $bookInfo->toArray();
        $figure = $bookInfo->formatAuthorData();
        $categoryData = $this->getModelObj('culture-bookSort')->where(['code' => $bookInfo['category']])->first();
        $bookData['coverUrl'] = $bookInfo->coverUrl;
        $bookData['figure']= $figure;
        $bookData['categoryName'] = $categoryData ? $categoryData['name'] : '其他分类';
        $datas = [
            'bookData' => $bookData,
            'chapterDatas' => $chapterDatas,
        ];
        return $datas;
    }

    public function readerChapterDetail()
    {
        $bookCode = $this->request->input('book_code');
        $chapterCode = $this->request->input('chapter_code');

        $datas = $this->_bookDetail($bookCode);
        $chapterInfo = $this->getModelObj('culture-chapter')->where(['book_code' => $bookCode, 'code' => $chapterCode])->first();
        //$file = $chapterInfo->getChapterFile($chapterInfo, false);
        //$contents = file($file);
        //$content = '<p>' . implode('<br /></p><br /><p>', $contents) . '</p>';
        //$content = $chapterInfo->getChapterFile($chapterInfo);

        $datas['currentChapterData'] = $chapterInfo->toArray();
        $datas['currentChapterData']['chapterId'] = $chapterInfo['id'];
        $contents = $chapterInfo->getChapterContent($chapterInfo);
        $content = implode('<p><br /></p>', $contents);
        $datas['content'] = $content;
        //$datas['file'] = $file;
        return $this->success($datas);
    }

    public function bookDetail($bookCode, $chapterCode)
    {
        $this->viewPre();
        $chapterInfo = $this->getModelObj('culture-chapter')->where(['book_code' => $bookCode, 'code' => $chapterCode])->first();
        //$file = $chapterInfo->getChapterFile($chapterInfo, false);
        //$contents = file($file);
        $contents = $chapterInfo->getChapterContent($chapterInfo);
        //print_r($contents);exit();
        $datas = [
            'bookData' => $chapterInfo->book->toArray(),
            'chapterInfo' => $chapterInfo->toArray(),
            'contents' => $contents,
        ];
        return view('book.detail', ['datas' => $datas]);
    }

    public function _getSortBooks($force = false)
    {
        $sortBookKey = 'culture-sort-books-cachekey';
        if (false) {//Cache::has($sortBookKey) && empty($force)) {
            $results = Cache::get($sortBookKey);
            //var_dump($results);exit();
        } else {

            $bookSorts = $this->getModelObj('culture-bookSort')->orderBy('orderlist', 'desc')->get();
            $results = [];
            foreach ($bookSorts as $bookSort) {
                $books = $this->getModelObj('culture-book')->where(['category' => $bookSort['code']])->orderBy('orderlist', 'desc')->get();
                $sortData = $bookSort->toArray();
                $sortData['books'] = $books->toArray();
                $results[] = $sortData;
            }

            Cache::forever($sortBookKey, $results);
        }

        $datas = [
            'tdkData' => ['title' => 'title'],
            'data' => $results,
        ];
        return $datas;
    }

    public function getTableHeaderDatas($type)
    {
        $datas = [
            'book' => [
                ['label' => '书名', 'key' => 'name', 'width' => 280, 'isFixed' => true, 'filter' => []], // 'filter' => ['labele' => '书名', 'key' => 'name']
                ['label' => '作者', 'key' => 'author', 'width' => 150, 'isFixed' => false, 'filter' => []],
                ['label' => '国籍', 'key' => 'nationality', 'width' => 80, 'isFixed' => false, 'filter' => []],
                ['label' => '在线阅读', 'key' => 'onlineread', 'width' => 100, 'isRoute' => true, 'isFixed' => false, 'filter' => []],
                ['label' => '下载阅读', 'key' => 'pdffile', 'width' => 100, 'isFixed' => false, 'filter' => []],
                ['label' => '百科', 'key' => 'baidu_url', 'width' => 100, 'isUrl' => true, 'isFixed' => false, 'filter' => []],
                ['label' => '简介', 'key' => 'brief', 'width' => 100, 'isFixed' => false, 'filter' => []],
                //['label' => '', 'key' => '', 'width' => 100, 'isFixed' => false, 'filter' => []],
            ],
        ];
        return $datas[$type];
    }
}
