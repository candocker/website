<?php

namespace ModuleWebsite\Controllers;

trait TraitClient
{
    public function dealRemoteUrls($type)
    {
        $result = $this->request->input('result');
        $guzzleService = $this->getServiceObj('passport-guzzle');
        //echo get_class($guzzleService);exit();
        $urlPres = [
            'zhuige' => 'https://q.zhuige.com/wp-json/zhuige/',
            'surmon' => 'https://api.surmon.me',
        ];
        $method = "_{$type}Urls";
        $urls = $this->$method();

        $urlPre = $urlPres[$type];
        $pathBase = '/data/htmlwww/laravel-system/storage/tmpdata/';
        foreach ($urls as $url) {
            $url = str_replace('{id}', 100, $url);
            $rUrl = $urlPre . $url;
            echo "<a href='{$rUrl}' target='_blank'>{$rUrl}</a><br />";
            if ($result == 'save') {
                $remoteData = file_get_contents($rUrl);
                $fileName = str_replace('/', '-', ltrim($url, '/'));
                $lFile = $pathBase . $type . '/' . $fileName;
                echo $lFile . '<br />';
                file_put_contents($lFile, $remoteData);
            }
        }
        exit();
    }

    public function _zhuigeUrls()
    {
        return [
            'bbs-list_cat.json',
            'home-huodong.json',
            'home-tiezi.json',
            'posts-list_last2.json',
            'setting-home.json',
            'user-set_mobile.json',
            'bbs-list_rec.json',
            'home-jifen.json',
            'home-wenzhang.json',
            'setting-create.json',
            'setting-login.json',
            'user-test_login.json',
            'bbs-setting_forum.json',
            'home-kecheng.json',
            'home-zhishiku.json',
            'setting-global.json',
            'setting-mine.json',
        ];
    }

    public function _surmonUrls()
    {
        return [
            '/article',
            '/article/calendar',
            '/article/hottest',
            '/article/{id}/context',
            '/article/{id}',
            '/tag',
            //'/tag/hottest',
            '/tag/all',
            '/option',

            '/comment',
            //'/disqus/comment',
            //'/disqus/thread?post_id={id}',
            '/disqus/config',
            //'/disqus/user-info',

            //'/diagram/{id}',
            '/archive',
            '/expansion/statistic',
            '/announcement',
            '/auth/admin',
            '/category',
        ];


    }
}
