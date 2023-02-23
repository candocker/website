<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Str;
use Swoolecan\Foundation\Helpers\CommonTool;

trait TraitApplet
{

    public function settingDatas()
    {
        $navsortInfos = $this->getServiceObj('infocms-fetchData')->getNavsortInfos('zhuigroup');
        $topicInfos = $this->getServiceObj('infocms-fetchData')->getTopicInfos();
        return [
            'title' => 'ssss追格小程序（免费开源）',
            'desc' => '一个积木式小程序搭建框架',
            'logo' => 'https://q.zhuige.com/wp-content/uploads/2022/10/x.png',
            'slides' => $this->getSlideDatas(),
            'icons' => $navsortInfos,
            'subject_hots' => $topicInfos,
            'subject_hot_width' => '1280',
            'hot_link' => [
                'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/11/toutiao.png',
                'items' => [
                    [
                        'title' => '12.12抢先购，满1399元再减299元',
                        'link' => 'https://www.zhuige.com/product.html?cat=24',
                    ],
                    [
                        'title' => '追格小程序v1.4.0更新发布...',
                        'link' => '/pages/base/about/about',
                    ],
                ],
            ],
            'imgs_top' => [
                'title' => '追格精选',
                'items' => [
                    [
                        'title' => '追格v1.4.0发布 →',
                        'badge' => '看看',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1631016800696-5ea8801b3c2a.jpg',
                        'link' => 'https://mp.weixin.qq.com/s/eLawJRxR9c5Z7DvJAbi3mg',
                    ],
                    [
                        'title' => '企业官网小程序',
                        'badge' => '',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/10/17.png',
                        'link' => 'appid:wx589dff586a7c9b4f',
                    ],
                    [
                        'title' => '资讯小程序',
                        'badge' => '多端',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/10/25.png',
                        'link' => 'appid:wxddead77a1155c39f',
                    ],
                    [
                        'title' => '知识付费小程序 →',
                        'badge' => '￥2880',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/10/41.png',
                        'link' => 'appid:wx330d4c92336035d2',
                    ],
                ],
            ],
            'imgs_embed' => [
                'title' => '自定义位置广告',
                'items' => [
                    [
                        'title' => '课程付费专栏（模块）',
                        'badge' => 'Hot',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/velizar-ivanov-9bFLTsaP_xo-unsplash-350x250-1.jpg',
                        'link' => 'https://www.zhuige.com/product/zhuige-column.html',
                        'price' => '￥1299.00',
                    ],
                    [
                        'title' => '知识库（含视频号）',
                        'badge' => '',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/original.jpg',
                        'link' => 'https://www.zhuige.com/product/zhuige-resource.html',
                        'price' => '￥599.00',
                    ],
                    [
                        'title' => '积分抽奖（模块）',
                        'badge' => '',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1631016800696-5ea8801b3c2a.jpg',
                        'link' => 'https://www.zhuige.com/product/zhuige-lottery.html',
                        'price' => '￥999.00',
                    ],
                    [
                        'title' => '积分商城/积分任务',
                        'badge' => '',
                        'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/original-6.jpg',
                        'link' => 'https://www.zhuige.com/product/zhuige-score.html',
                        'price' => '￥899.00',
                    ],
                ],
                'position' => '2',
            ],
            'traffic_list' => [
                'ad' => 'adunit-fc394a90a065b71c',
                'frequency' => '4',
                'title' => '广告，也可以是生活的一部分',
                'desc' => '我是一个有温度的广告',
            ],
            'rec_user' => [
                'title' => '你可能感兴趣',
                'users' => [
                    [
                        'user_id' => '1',
                        'nickname' => '追格小助手',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/07/1.png',
                        'post_count' => '2',
                        'fans_count' => '1026',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'guanfang',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/lvv.png',
                            'name' => '追格官方小助手',
                        ],
                        'vip' => 
                        [
                            'status' => 1,
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/09/vv1-1.png',
                            'expire' => '2099-09-09',
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '3',
                        'nickname' => '杨江河',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/11/jq1669089671TSEDAF.jpeg',
                        'post_count' => '0',
                        'fans_count' => '547',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'guanfang',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/lvv.png',
                            'name' => '追格团队成员',
                        ],
                        'vip' => 
                        [
                            'status' => 0,
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '9',
                        'nickname' => '行走的风景',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/07/9.png',
                        'post_count' => '1',
                        'fans_count' => '189',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'chuangzuo',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/8888.png',
                            'name' => 'WordPress爱好者、生活博主',
                        ],
                        'vip' => 
                        [
                            'status' => 0,
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '6',
                        'nickname' => '007',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/07/6.png',
                        'post_count' => '1',
                        'fans_count' => '1016',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'chuangzuo',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/8888.png',
                            'name' => '追格推广大使、健身博主',
                        ],
                        'vip' => 
                        [
                            'status' => 1,
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/09/vv1-1.png',
                            'expire' => '2025-09-09',
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '8',
                        'nickname' => 'Akon',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/07/8.png',
                        'post_count' => '1',
                        'fans_count' => '54',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'chuangzuo',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/8888.png',
                            'name' => '生活博主、摄影爱好者',
                        ],
                        'vip' => 
                        [
                            'status' => 0,
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '5',
                        'nickname' => '大狐狸',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/07/zhuige_xcx_user_avatar_5.jpeg',
                        'post_count' => '0',
                        'fans_count' => '548',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'guanfang',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/lvv.png',
                            'name' => '追格团队成员，摄影爱好者',
                        ],
                        'vip' => 
                        [
                            'status' => 1,
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/09/vv1-1.png',
                            'expire' => '2099-02-09',
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '2',
                        'nickname' => '咖小菲',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/07/2_3.png',
                        'post_count' => '1',
                        'fans_count' => '1021',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'guanfang',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/lvv.png',
                            'name' => '追格团队成员，美食博主',
                        ],
                        'vip' => 
                        [
                            'status' => 1,
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/09/vv1-1.png',
                            'expire' => '2099-09-09',
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '7',
                        'nickname' => '青衣',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/07/7.jpg',
                        'post_count' => '1',
                        'fans_count' => '145',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'chuangzuo',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/8888.png',
                            'name' => '追格推广大使、美食博主',
                        ],
                        'vip' => 
                        [
                            'status' => 0,
                        ],
                        'is_follow' => 0,
                    ],
                    [
                        'user_id' => '4',
                        'nickname' => '煎饼',
                        'avatar' => 'https://q.zhuige.com/wp-content/uploads/2022/11/jq1669125260UOXKMT.jpg',
                        'post_count' => '4',
                        'fans_count' => '1022',
                        'certify' => 
                        [
                            'status' => 1,
                            'cid' => 'guanfang',
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/08/lvv.png',
                            'name' => '追格团队成员，伪咖啡爱好者',
                        ],
                        'vip' => 
                        [
                            'status' => 1,
                            'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/09/vv1-1.png',
                            'expire' => '2099-12-26',
                        ],
                        'is_follow' => 0,
                    ],
                ],
                'position' => '4',
                'switch' => '1',
            ],
            'tab_switch' => 1,
            'tabs' => [
                [
                    'id' => 'any',
                    'title' => '全部',
                ],
                [
                    'id' => 'zhuige_bbs_topic',
                    'title' => '帖子',
                ],
                [
                    'id' => 'post',
                    'title' => '文章',
                ],
                [
                    'id' => 'zhuige_res',
                    'title' => '知识库',
                ],
                [
                    'id' => 'zhuige_column',
                    'title' => '课程',
                ],
                [
                    'id' => 'zhuige_activity',
                    'title' => '活动报名',
                ],
                [
                    'id' => 'zhuige_goods',
                    'title' => '积分商品',
                ],
            ],
            'cur_tab' => 'any',
            'tab_type' => 1,
            'list_switch' => 1,
            'rec_posts' => [
                [
                    'title' => '热门圈子',
                    'more_link' => '',
                    'post_type' => 'zhuige_bbs_forum',
                    'forum_ids' => [
                        0 => '71',
                        1 => '143',
                        2 => '171',
                        3 => '53',
                    ],
                    'items' => [
                        [
                            'title' => '追格小圈',
                            'image' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054LVKPNJ.jpg',
                            'subtitle' => '成员 1029',
                            'link' => '/pages/bbs/forum/forum?forum_id=71',
                        ],
                        [
                            'title' => '生活家',
                            'image' => 'https://q.zhuige.com/wp-content/uploads/2022/07/StockSnap_LP6E5BCIJP-940x529-1.jpg',
                            'subtitle' => '成员 838',
                            'link' => '/pages/bbs/forum/forum?forum_id=143',
                        ],
                        [
                            'title' => '好物',
                            'image' => 'https://q.zhuige.com/wp-content/uploads/2022/07/2_3.png',
                            'subtitle' => '成员 158',
                            'link' => '/pages/bbs/forum/forum?forum_id=171',
                        ],
                        [
                            'title' => '我爱美食',
                            'image' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-10.jpeg',
                            'subtitle' => '成员 1023',
                            'link' => '/pages/bbs/forum/forum?forum_id=53',
                        ],
                    ],
                ],
            ],
            'thumb' => 'https://q.zhuige.com/wp-content/uploads/2022/10/1-1.jpg',
        ];
    }

    public function getSlideDatas()
    {
        $bannerInfos = $this->getServiceObj('infocms-fetchData')->getBannerInfos('book', 'home');
        $results = [];
        foreach ($bannerInfos as $info) {
            $results[] = [
                'title' => $info['title'],
                'image' => $info['attachmentUrl'],
                'link' => $info['url'],
            ];
        }
        return $results;
    }

    public function getIconDatas()
    {
        $datas = [];

        $model = $this->getModelObj('infocms-navsort');
        $infos = $model->where(['parent_code' => 'zhuigroup'])->get();
        $i = 1;
        foreach ($datas as $data) {
            $code = strtolower(CommonTool::getSpellStr($data['title'], ''));
            $navsort = $model->where('code', $code)->first();
            $attachment = $this->getModelObj('passport-attachment')->where('id', '>=', '4270')->where('name', $data['title'])->first();
            $aiData = [
                'app' => 'infocms',
                'info_table' => 'navsort',
                'info_field' => 'thumb',
                'info_id' => $code,
                'attachment_id' => $attachment['id'],
            ];
            $this->getModelObj('passport-attachmentInfo')->create($aiData);
            continue;

            $nData = [
                'code' => strtolower(CommonTool::getSpellStr($data['title'], '')),
                'orderlist' => $i,
                'parent_code' => 'zhuigroup',
                'name' => $data['title'],
                'name_short' => $data['title'],
                'path' => $data['link'],
                'status' => 1,
            ];
            $r = $model->create($nData);
            $i++;
        }
        exit();

        $service = $this->getServiceObj('passport-oss');
        foreach ($datas as $data) {
            $fileInfoExt = get_headers($data['image'], true);
            $fileInfo = pathinfo($data['image']);
            print_r($fileInfoExt);
            $file = 'common/icon/applet_zg/' . Str::uuid() . '.png';
            $info = [
                'name' => $data['title'], 
                'filename' => $data['title'] . '.' . $fileInfo['extension'],
                'filepath' => $file,
                'extension' => $fileInfo['extension'],
                'mime_type' => $fileInfoExt['Content-Type'],
                'size' => $fileInfoExt['Content-Length'],
            ];
            //print_r($info);exit();
            $r = $service->putFile($info, $file, $data['image']);
        }
    }
}
