<?php
$titles = [
    '小功能：列表打开H5',
    '小功能：付费阅读全文',
    '小功能：列表打开公众号',
    '小功能：列表打开小程序',
    '小功能：列表打开视频号',
    '小功能：详情页自定义按钮',
    '小功能：认证用户阅读全文',
    '小功能：内容种草（追格块）',
    '小功能：代码高亮html、css、javascript',
];
$excerpts = [
    '本文仅做“认证用户阅读全文”小功能演示。',
    '本文仅做“付费阅读全文”小功能演示使用，请勿付费购买。',
    '代码高亮：支持html、css、javascript，以下内容仅供演示。 jQuery(docume...',
    '小功能演示，列表自定义打开链接，支持打开：H5、公众号、视频号、第三方小程序、内部小程序页面。',
    '我是一篇“追格块”演示内容，追格块方便推荐商品、活动等信息，演示如下： &nbsp; 链接支持：打开...',
    '本文仅做“点赞阅读全文”小功能演示，并无实际内容。点击即展开全文，便于内容互动。 &nbsp; 内容...',
    '本文仅做“详情页自定义按钮”小功能演示，支持打开：H5、公众号、视频号、第三方小程序、内部小程序页面...',
];
$thumbs = [
    'https://q.zhuige.com/wp-content/uploads/2022/09/ssa.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/08/a3.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/61d04cd580c26.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/h1-post-2-img-2.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/DeathtoStock_Holiday2.jpg',
    'https://www.zhuige.com/uploads/20220316/cd9bb1878a8e1d171769ae88a6063e15.jpg',
    'https://www.zhuige.com/uploads/20210912/7099f99f590b2a09b50fb4328fe12e50.png',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1631016800696-5ea8801b3c2a.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1635098996111-35c4a66b3b66.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/joshua-earle-234740-unsplash-1200x750-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/grant-ritchie-1154815-unsplash-1024x683-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/neonbrand-tokYjYqaPB0-unsplash-1-2048x1365-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/austin-johnson-sUO1FYKPsHw-unsplash-2048x1365-1.jpg',
];
$count = rand(1, 5);
$pointThumbs = [];
for ($i = 1; $i <= $count; $i++) {
    $pointThumbs[] = $thumbs[rand(0, 12)];
}
return [
    'id' => rand(1, 1000),
    'title' => $titles[rand(0, 8)],
    'comment_count' => rand(20, 1000),
    'excerpt' => $excerpts[rand(0, 6)],
    'thumbnails' => $pointThumbs,
    'views' => rand(10, 10000),
    'likes' => rand(2000, 5000),
    'author' => [],
    'stick' => 0,
    'driect_link_switch' => rand(0, 1),
    'driect_link' => ['', 'https://mp.weixin.qq.com/s/yAjUshSPun_2OGm6lfW5oA', 'appid:wx589dff586a7c9b4f', 'https://www.zhuige.com/', 'finder:sphwkm4cNAFnRLs;feedId:export/UzFfAgtgekIEAQAAAAAAvOcs9EiqdwAAAAstQy6ubaLX4KHWvLEZgBPEvKE4Qm0bNpSCzNPgMJqauEWipKDkSE3LOgnvvvnO'][rand(0, 4)],
    'badge' => ['', 'vip免费', '精选'][rand(0, 2)],
    'read_limit' => ['free', 'cost', 'like', 'score', 'certify'][rand(0, 4)],
    'cost_price' => '1',
    'cost_score' => '10',
    'cost_ios_switch' => '0',
    'post_type' => 'post',
    'post_type_name' => '文章',
    'link' => '/pages/cms/detail/detail',
];
