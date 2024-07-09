<?php

$titles = [
    '追格小程序你期望发布什么功能模块？',
    '你是什么样的心态在运营小程序？',
    '你关注什么样的商城模块',
];
$excerpts = [
    '你期望追格发布什么功能模块？欢迎跟帖回复！',
    '你是什么样的心态在运营小程序？',
    '你关注什么样的商城模块，欢迎投票。',
];
$optionTitles = [
    'WooCommerce商城',
    '微信小商店',
    '基于WordPress开发的商城',
    '微信流量主（圈子模块）',
    '敏感词库',
    '商城（基于WP）',
    '闲置物品',
    '系统消息',
    '其他请跟帖回复',
    '其他',
];
$pointOptions = [];
$vCount = rand(3, 7);
for ($i = 1; $i <= $vCount; $i++) {
    $pointOptions[] = [
        'opt' => $i, 'title' => $optionTitles[rand(0, 9)], 'count' => rand(10, 100), 'rate' => rand(20, 99), 'xuan' => rand(0, 1),
    ];
}

return [
        'id' => rand(1, 1000),
        'title' => $titles[rand(0, 2)],
        'excerpt' => $excerpts[rand(0, 2)],
        'type' => ['multi', 'pk'][rand(0, 1)],
        'count' => rand(20, 1000),
        'option_a' => [
          'opt' => 'a',
          'image' => 'https://q.zhuige.com/wp-content/uploads/2022/11/jq1669539665RMGJDM.jpg',
          'title' => '情怀',
          'count' => 156,
          'rate' => 61,
          'xuan' => 0,
        ],
        'option_b' => [
          'opt' => 'b',
          'image' => 'https://q.zhuige.com/wp-content/uploads/2022/11/jq1669539668JEMHBA.jpg',
          'title' => '盈利',
          'count' => 99,
          'rate' => 39,
          'xuan' => 0,
        ],

        'options' => $pointOptions,
        'deadline' => '05/16/2023',
        'my_vote' => '',
        'is_end' => rand(0, 1),
        'post_type' => 'zhuige_vote',
        'post_type_name' => '投票',
        'link' => '/pages/vote/detail/detail',
        'author' => [],
        'time' => '2022-11-28',
        'stick' => 0,
];
