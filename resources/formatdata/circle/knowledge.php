<?php
$thumbs = [
    'https://q.zhuige.com/wp-content/uploads/2022/09/velizar-ivanov-9bFLTsaP_xo-unsplash-350x250-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/10/1-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/pexels-ready-made-4297815-2048x1368-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1631016800696-5ea8801b3c2a.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1609405979808-08669e982546.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/original-6.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1609405979808-08669e982546.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/neonbrand-tokYjYqaPB0-unsplash-1-2048x1365-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1603015268928-a9f7b3edaf27.jpg',
];
return [
    'id' => rand(1, 1000),
    'title' => rand(1, 20) . '积分下载：追格资讯小程序（开源版）',
    //'badge' => '',
    'badge' => ['', '视频号', 'VIP专享折扣', '热门'][rand(1, 3)],
    'limit' => ['score', 'free', 'jiliv', 'cost'][rand(0, 3)],
    'cost_ios_switch' => '0',
    'cost_price' => rand(1, 1000),
    'cost_score' => rand(20, 100),
    'thumbnail' => $thumbs[rand(0, 8)],
    'views' => rand(1, 10000),
    'likes' => rand(2, 2000),
    'author' => [],
    'driect_link_switch' => rand(0, 1),
    'driect_link' => ['', 'finder:sphwkm4cNAFnRLs;feedId:export/UzFfAgtgekIEAQAAAAAAvOcs9EiqdwAAAAstQy6ubaLX4KHWvLEZgBPEvKE4Qm0bNpSCzNPgMJqauEWipKDkSE3LOgnvvvnO', 'finder:sphwkm4cNAFnRLs;feedId:export/UzFfAgtgekIEAQAAAAAAK-MYBhovcgAAAAstQy6ubaLX4KHWvLEZgBPE3aBIf0ACU5aCzNPgMJqa6ZlpXm-YSN0XdrWd-ALq'][rand(0, 2)],
    'driect_link' => 'appid:wx589dff586a7c9b4f',
    'is_shipinhao' => rand(0, 1),
    'finder' => 'sphwkm4cNAFnRLs',
    'feedId' => ['export/UzFfAgtgekIEAQAAAAAAvOcs9EiqdwAAAAstQy6ubaLX4KHWvLEZgBPEvKE4Qm0bNpSCzNPgMJqauEWipKDkSE3LOgnvvvnO', 'export/UzFfAgtgekIEAQAAAAAAK-MYBhovcgAAAAstQy6ubaLX4KHWvLEZgBPE3aBIf0ACU5aCzNPgMJqa6ZlpXm-YSN0XdrWd-ALq'][rand(0, 1)],


    'post_type' => 'zhuige_res',
    'post_type_name' => '知识库',
    'link' => '/pages/resource/detail/detail',
    'stick' => 0,
];
