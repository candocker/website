<?php
$logos = [
    'https://q.zhuige.com/wp-content/uploads/2022/07/微信小程序logo.png',
    'https://q.zhuige.com/wp-content/uploads/2022/09/tracey-hocking-738638-unsplash-scaled-e1662276737729-550x367-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/thought-catalog-640705-unsplash-1024x683-1.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/07/1.png',
];
$thumbs = [
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1609405979808-08669e982546.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/03330.png',
    'https://q.zhuige.com/wp-content/uploads/2022/09/photo-1631016800696-5ea8801b3c2a.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/09/neonbrand-tokYjYqaPB0-unsplash-1-2048x1365-1.jpg',
];
$badges = ['追格', '优惠活动', '插件模块', '付费报名', '自定义表单', '联系我们', '自定义', 'xxx'];
return [
    'id' => rand(1, 1000),
    'title' => ['追格小程序“活动报名”模块活动', '【付费报名】追格积分抽奖活动体验', '联系与反馈', '自定义活动报名'][rand(0, 3)],
    'logo' => $logos[rand(0, 3)],
    'time' => [
        'from' => ['10/02/2022', '10/22/2023', '11/23/2024'][rand(0, 2)],
        'to' => ['12/31/2024', '01/22/2025', '11/20/2025'][rand(0, 2)],
    ],
    'is_end' => rand(0, 1),
    'badges' => [$badges[rand(0, 7)], $badges[rand(0, 7)], $badges[rand(0, 7)]],
    'cost' => rand(0, 10),
    'thumbnail' => $thumbs[rand(0, 3)],
    'my_enroll' => 0,
    'post_type' => 'zhuige_activity',
    'post_type_name' => '活动报名',
    'link' => '/pages/activity/detail/detail',
    'stick' => 0,
];
