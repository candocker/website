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
    }

    public function articleHottest()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = [];
        $data = $service->getListInfos('cultureArticle', $where);
        return $this->responseResult($data);
    }

    public function articleCalendar()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $data = $service->getArticleCalendar();
        return $this->responseResult($data);
    }

    public function articleDetail($id)
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = ['id' => $id];
        $data = $service->getInfoDetail('cultureArticle', $where);
        return $this->responseResult($data);
    }

    public function articleRelate($id)
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $data = $service->getInfoRelate('cultureArticle', $id);
        return $this->responseResult($data);
    }

    public function tag()
    {
        $service = $this->getServiceObj('culture-cultureArticle');
        $where = [];
        $data = $service->getListInfos('tag', $where, true);
        return $this->responseResult($data);
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
