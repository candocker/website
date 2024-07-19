<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Str;
use Swoolecan\Foundation\Helpers\CommonTool;

trait TraitUnidata
{
    public function thirddata($app, $module, $action)
    {
        $method = '_' . $module . ucfirst($action);
        if (method_exists($this, $method)) {
            return $this->$method($app);
        }
        return $this->getContentData($app, $module, $action);
    }

    public function _postsList_last2($app)
    {
        $types = [
            'zhuige_vote' => 'vote',
            'zhuige_bbs_topic' => 'topic',
            'zhuige_goods' => 'score',
            'zhuige_business_card' => 'merchant',
            'zhuige_res' => 'knowledge',
            'zhuige_column' => 'course',
            'post' => 'article',
            'zhuige_activity' => 'activity',
        ];
        $type = $this->request->input('post_type');
        $type = $types[$type] ?? 'topic';
        $items = $this->getCircleDatas($type);
        //var_export($items);exit();
        return [
            'code' => 0,
            'message' => '操作成功！',
            'data' => ['sticky_count' => 0, 'topics' => $items, 'more' => 'nomore'],
        ];
    }

    public function _forumDetail($app)
    {
        $id = $this->request->input('forum_id');
        $id = $id > 1 ? 1 : $id;
        $file = base_path() . "/vendor/candocker/website/resources/formatdata/forum-{$id}.php";
        $baseData = require($file);
        $userDatas = $this->getRandUserData(rand(5, 10));
        $baseData['data']['forum']['users'] = $userDatas;
        return $baseData;
    }

    public function _bookHome($app)
    {
        $file = base_path() . "/vendor/candocker/website/resources/formatdata/circle/book-home.php";
        $baseData = require($file);
        return $baseData;
    }

    public function _settingHome($app)
    {
        $file = base_path() . "/vendor/candocker/website/resources/formatdata/{$app}/home.php";
        $baseData = require($file);

        /*$types = [
            //'zhuige_vote' => 'vote',
            //'zhuige_bbs_topic' => 'topic',
            'zhuige_goods' => 'score',
            //'zhuige_business_card' => 'merchant',
            'zhuige_res' => 'knowledge',
            'zhuige_column' => 'course',
            'post' => 'article',
            'zhuige_activity' => 'activity',
        ];
        foreach ($types as $type => $file) {
            $items = $this->getCircleDatas($file);
            $pData = [
                'title' => $type,
                'post_type' => $type,
                'items' => $items,
            ];
            if ($file == 'activity') {
                $pData['banner'] = 'https://www.zhuige.com/uploads/20210912/7099f99f590b2a09b50fb4328fe12e50.png';
                $pData['subtitle'] = 'subtitle';
            }
            $baseData['data']['rec_posts'][] = $pData;
        }*/
        //var_export($baseData);exit();
        return $baseData;
    }

    public function getCircleDatas($type)
    {
        $num = rand(3, 6);
        $fileKnowledge = base_path() . "/vendor/candocker/website/resources/formatdata/circle/{$type}.php";
        $items = [];
        for ($i = 0; $i <= $num; $i++) {
            $items[] = require($fileKnowledge);
        }
        return $items;
    }

    public function getRandUserData($num, $type = 'simple')
    {
        $baseDatas = require(base_path() . "/vendor/candocker/website/resources/formatdata/circle/userinfo.php");
        $result = [];
        for ($i = 1; $i <= $num; $i++) {
            $data = [
                'user_id' => rand(1, 100),
                'nickname' => $names[rand(0, 19)],
                'avatar' => $avatars[rand(0, 20)],
                'reward' => 'https://q.zhuige.com/wp-content/uploads/2023/10/jq1696170093VTRVIP.jpg',
                'post_count' => rand(1, 1000),
                'fans_count' => rand(100, 10000),
                'is_follow' => rand(0, 1),
                'owner' => rand(0, 1),
                //'reward' => '',
            ];
            if ($type !== 'simple') {
                $data['certify'] = [
                    'status' => 1,
                    'cid' => ['guanfang', 'chuangzuo'][rand(0, 1)],
                    'icon' => ['https://q.zhuige.com/wp-content/uploads/2022/08/lvv.png', 'https://q.zhuige.com/wp-content/uploads/2022/08/8888.png'][rand(0, 1)],
                    'name' => $titles[rand(0, 8)],
                ];
                $data['vip'] = [
                    'status' => 1,
                    'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/09/vv1-1.png',
                    'expire' => '2099-09-09',
                ];
            }
            $result[] = $data;
        }
        return $result;
    }
}
