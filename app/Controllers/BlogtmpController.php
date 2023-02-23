<?php

namespace ModuleWebsite\Controllers;

class BlogtmpController extends AbstractController
{
    public function articleList($code = null, $extcode = null)
    {
        return $this->testTmp('articleList');
    }

    public function articleHottest()
    {
        return $this->testTmp('ahot');
    }

    public function articleCalendar()
    {
        return $this->testTmp('acalendar');
    }

    public function articleDetail($id)
    {
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
        return $this->testTmp('acontext');
    }

    public function tagAll()
    {
        return $this->testTmp('tag-all');
    }

    public function tag()
    {
        return $this->testTmp('tag');
    }

    public function tagHottest()
    {
        return $this->testTmp('tag-hottest');
    }

    public function option()
    {
        return $this->testTmp('option');
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
}
