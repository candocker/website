<?php
$titles = [
    '图文、音频、视频课程演示',
    '追格小程序安装配置文档',
    '追格“课程专栏”插件模块概述',
    'WordPress从入门到精通',
];
$thumbs = [
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1609405979808-08669e982546.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/tracey-hocking-738638-unsplash-scaled-e1662276737729-550x367-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1556742208-999815fca738.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/h1-post-2-img-2.jpg',
];
$badges = [
    '图文',
    '追格',
    '音视频',
    '试阅读',
    'Vip免费',
    '积分阅读',
    '功能演示',
    '模块介绍',
    '图文课程',
];
return [
    'id' => rand(1, 1000),
    'title' => $titles[rand(0, 3)],
    'thumbnail' => $thumbs[rand(0, 3)],
    'badges' => [$badges[rand(0, 8)], $badges[rand(0, 8)], $badges[rand(0, 8)]],
    'limit' => ['cost', 'score', 'free'][rand(0, 2)],
    'ios_price_switch' => 0,
    'cost_price' => rand(1, 10),
    'cost_score' => rand(5, 20),
    'score' => ['0', '1.0', '5.0', '4.2'][rand(0, 3)],
    'views' => rand(100, 5000),
    'post_type' => 'zhuige_column',
    'post_type_name' => '课程',
    'link' => '/pages/column/detail/detail',
    'stick' => 0,
];
