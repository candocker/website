<?php

namespace ModuleWebsite\Controllers;

class BlogController extends AbstractController
{
    public function articleList($code = null, $extcode = null)
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = [];
        $data = $service->getListInfos('cultureArticle', $where, true);
        return $this->responseResult($data);
        return $this->testTmp('articleList');
    }

    public function articleHottest()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = [];
        $data = $service->getListInfos('cultureArticle', $where);
        return $this->responseResult($data);
        return $this->testTmp('ahot');
    }

    public function articleCalendar()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $data = $service->getArticleCalendar();
        return $this->responseResult($data);
        return $this->testTmp('acalendar');
    }

    public function articleDetail($id)
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = ['id' => $id];
        $data = $service->getInfoDetail('cultureArticle', $where);
        return $this->responseResult($data);

        $text = file('/data/backup/dealdata/tmp/article.json');
        $model = $this->getModelObj('culture-cultureArticle');
        $info = $model->find(2);
        $data = json_decode($text[0], true);
        $data['result']['title'] = $info['title'];
        //$data['result']['content'] = file_get_contents('/tmp/content.txt');//$info['content'];
        $data['result']['content'] = $info['content'];
        return $this->successCustom($data);
    }

    public function articleRelate($id)
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $data = $service->getInfoRelate('cultureArticle', $id);
        return $this->responseResult($data);
        return $this->testTmp('acontext');
    }

    public function tag()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = [];
        $data = $service->getListInfos('tag', $where, true);
        return $this->responseResult($data);
        return $this->testTmp('tag');
    }

    public function tagHottest()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = [];
        $data = $service->getListInfos('tag', $where);
        return $this->responseResult($data);
    }

    public function option()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $data = $service->getOptionData();
        return $this->responseResult($data);
        return $this->testTmp('option');
    }


    public function tmp()
    {
        $text = file('/data/backup/dealdata/tmp/admin.json');
        $data = json_decode($text[0], true);
        return $this->successCustom($data);
        echo $text[0];exit();
        $request = $this->request;
        $inTest = config('app.inTest');
        if (empty($inTest)) {
            return $this->error(400, '非法请求');
        }
        $method = ucfirst($request->input('method', ''));
        $method = "_test{$method}";
        $this->$method($request);
    }

    public function statistic()
    {
        return $this->testTmp('statistic');
    }

    public function archive()
    {
        return $this->testTmp('archive');
    }

    public function category()
    {
        return $this->testTmp('category');
    }

    public function comment()
    {
        return $this->testTmp('comment');
    }

    public function disqus()
    {
        return $this->testTmp('disqus');
    }

    public function userinfo()
    {
        return $this->testTmp('userinfo');
    }

    public function announce()
    {
        return $this->testTmp('announce');
    }

    public function admin()
    {
        return $this->testTmp('admin');
    }

    protected function testTmp($code)
    {
        $text = file('/data/backup/dealdata/tmp/' . $code . '.json');
        $data = json_decode($text[0], true);
        return $this->successCustom($data);
        echo $text[0];exit();
    }

    protected function responseResult($data)
    {
        $result = [
            'status' => 'success', 
            'message' => 'OK',
            'params' => [
                'isAuthenticated' => false,
                'isUnauthenticated' => true,
                'url' => '/article',
                'method' => 'GET',
                'routes' => (object)[],
                'payload' => ['state' => 1, 'public' => 1],
            ],
            'result' => $data,
        ];
        return $this->successCustom($result);
        echo json_encode($result);exit();
    }
}
