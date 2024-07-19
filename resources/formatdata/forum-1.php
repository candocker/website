<?php
return [
'code' => 0,
'message' => '操作成功！',
'data' => [
    'forum' => [
        'id' => 1,
        'name' => '古籍',
        'user_count' => rand(100, 10000),
        'post_count' => rand(100, 5000),
        'is_follow' => rand(0, 1),
        'is_owner' => rand(0, 1),
        'logo' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054LVKPNJ.jpg',
        'background' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-5.jpg',
        'notice' => '追格小程序是一个积木式小程序搭建框架，基于Uniapp+WordPress开发，代码免费开源不加密且支持二开，安装追格相应扩展模块，简单配置即可快速搭建不限于圈子社区、知识付费、活动报名、资讯等类型小程序。',
        'ad_link' => [
            'title' => '追格小程序安装文档、常见问题',
            'link' => 'https://www.zhuige.com/docs/cat/39.html',
        ],
        'location' => [
            'marker' => '',
            'address' => '',
            'longitude' => '',
            'latitude' => '',
        ],
        'ad_custom' => [
        ],
        'ad_menu' => [
            [
                'title' => '追格',
                'link' => 'https://www.zhuige.com',
            ],
            [
                'title' => '代码下载',
                'link' => 'https://www.zhuige.com/product/zg',
            ],
            [
                'title' => '文档',
                'link' => 'https://www.zhuige.com/docs/cat/39.html',
            ],
            [
                'title' => '加群',
                'link' => 'https://www.zhuige.com/uploads/20210830/b04bd53d02ac94e4ed7de6907bbe4ebc.png',
            ],
        ],
        'ad_imgs' => [
            'title' => '圈内推荐',
            'items' => [
                [
                    'title' => '本代码下载',
                    'badge' => 'Hot',
                    'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/marjan-blan-marjanblan-k06giuMSd6s-unsplash-750x536-1.jpg',
                    'link' => 'https://www.zhuige.com/product/zg.html',
                    'price' => '￥0.00',
                ],
                [
                    'title' => '安装/帮助文档',
                    'badge' => '',
                    'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/velizar-ivanov-9bFLTsaP_xo-unsplash-350x250-1.jpg',
                    'link' => 'https://www.zhuige.com/docs.html',
                    'price' => '→ 看看',
                ],
                [
                    'title' => '追格小程序（全模块）',
                    'badge' => '推荐',
                    'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/manny-moreno-Wxq7U4jaPfM-unsplash-350x250-1.jpg',
                    'link' => 'https://www.zhuige.com/product/zgxcx.html',
                    'price' => '￥6800',
                ],
                [
                    'title' => '插件模块市场',
                    'badge' => '',
                    'image' => 'https://q.zhuige.com/wp-content/uploads/2022/09/tt.jpg',
                    'link' => 'https://www.zhuige.com/product.html?cat=24',
                    'price' => '￥19.9起',
                ],
            ],
        ],
    ],
    'traffic_list' => [
        'ad' => 'adunit-c6f42e937c6a3fd4',
        'frequency' => '3',
        'title' => '微信流量主广告',
        'desc' => '我是一个有温度的广告',
    ],
],
];
