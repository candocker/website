<?php
$thumbs = [
    'https://q.zhuige.com/wp-content/uploads/2022/10/25.png',
    'https://q.zhuige.com/wp-content/uploads/2022/10/17.png',
    'https://q.zhuige.com/wp-content/uploads/2022/10/36.png',
    'https://q.zhuige.com/wp-content/uploads/2022/10/44.png',
];
return [
    'id' => 1983,
    'title' => ['追格小程序“模块”', '追格产品抵扣券', '企业官网小程序（多模板）', '追格Vip会员'][rand(0, 3)],
    'excerpt' => ['追格小程序“插件模块”4选1', '追格企业官网小程序（专业版）1套', '直减券（5000抵￥500）可购追格产品使用', '追格小程序VIP会员（周卡会员）'][rand(0, 3)],
    'thumbnail' => $thumbs[rand(0, 3)],
    'price' => rand(1000, 50000),
    'quantity' => rand(10, 100),
    'post_type' => 'zhuige_goods',
    'post_type_name' => '积分商品',
    'link' => '/pages/points/goods/goods',
    'stick' => 0,
];
