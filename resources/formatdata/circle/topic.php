<?php
$pointComments = [];
$commentCount = rand(1, 5);
for ($i = 1; $i <= $commentCount; $i++) {
    $pointComments[] = [
        'id' => rand(1, 1000),
        'user' => [
          'user_id' => '2699',
          'is_me' => 0,
        ],
        'content' => ['你好', '666', '真不错[强]', '啥时候能增加一个用户相互私信功能呢', '你努力之后才发现，智商的鸿沟是无法逾越的。', '挺好的', '我在这里看', '可以可以了', '厉害'][rand(0, 8)],
        'approved' => '1',
        'time' => ['2024-05-13', '2024-04-27', '2024-06-29'][rand(0, 2)],
        'reply' => [['id' => '2429', 'nickname' => '亮'], ['id' => '335', 'nickname' => '小豆叮叮?'], ['id' => '605', 'nickname' => '꧁꫞꯭꯭S꯭w꯭h꯭i꯭t꯭e꯭꫞꧂'], ['id' => '1601', 'nickname' => '微信用户']][rand(0, 3)],
    ];
}
$excerpts = [
    '猎S对决',
    '午后的阳光，一杯咖啡一本书…',
    '积分阅读小功能
没有实际内容，欢迎体验???
哦，还有@好友功能哟??
...',
    '爱，始于自我欺骗，终于欺骗他人。这就是所谓的浪漫。

追格小程序一个积木式小程序搭建框架，免费开源免费下...',
    '追格小程序是一个积木式小程序搭建框架，基于Uniapp+WordPress开发，代码免费开源不加密且...',
    '生活总是让我们遍体鳞伤，但到后来，那些受伤的地方一定会变成我们z强壮的地方。',
    '每个人都会有缺陷，就像被s帝咬过的苹果，有的人缺陷比较大，正是因为s帝特别喜欢他的芬芳。',
    '生如夏花之绚烂，死如秋叶之静美。',
    '每一个不曾起舞的日子，都是对生命的辜负。',
    '我们对小时候吃的美食都有着深刻记忆……美食有着带我们回到过去的魔力。',
];

$defaultImages = [
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2023/11/66-1-1.jpg',
    'width' => '800',
    'height' => '1067',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2023/11/66-1-1-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2023/11/jq1700378875FPZPDX.jpg',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2023/11/jq1700378875FPZPDX-150x150.jpg',
    'width' => 1279,
    'height' => 1702,
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879444MFCMPX.jpg',
    'width' => '1440',
    'height' => '1080',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879444MFCMPX-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1629728106YLJYDE.jpg',
    'width' => '1080',
    'height' => '1536',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1629728106YLJYDE-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879443SKTQIZ.jpg',
    'width' => '1440',
    'height' => '1080',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879443SKTQIZ-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879444QVRVBX.jpg',
    'width' => '1440',
    'height' => '1080',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879444QVRVBX-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879444CIYSHT.jpg',
    'width' => '1440',
    'height' => '1080',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1627879444CIYSHT-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2-1.jpg',
    'width' => '1024',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2-1-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1.jpg',
    'width' => '639',
    'height' => '791',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-2.jpg',
    'width' => '1047',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-2-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original.jpg',
    'width' => '1024',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2.jpg',
    'width' => '1031',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-1.jpg',
    'width' => '1136',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-1-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/StockSnap_TNK87N7464-940x529-1.jpg',
    'width' => '940',
    'height' => '529',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/StockSnap_TNK87N7464-940x529-1-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/StockSnap_LP6E5BCIJP-940x529-1.jpg',
    'width' => '940',
    'height' => '529',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/StockSnap_LP6E5BCIJP-940x529-1-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/StockSnap_693PZB7YZT-940x529-1.jpg',
    'width' => '940',
    'height' => '529',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/StockSnap_693PZB7YZT-940x529-1-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-3.jpg',
    'width' => '564',
    'height' => '694',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-3-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-5.jpg',
    'width' => '1280',
    'height' => '854',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-5-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2-2.jpg',
    'width' => '1080',
    'height' => '1076',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2-2-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-3.jpg',
    'width' => '1280',
    'height' => '853',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-3-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-10.jpeg',
    'width' => '736',
    'height' => '736',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-10-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-9.jpeg',
    'width' => '1028',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-9-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-8.jpeg',
    'width' => '736',
    'height' => '914',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-8-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-7.jpeg',
    'width' => '1280',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-7-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-6.jpeg',
    'width' => '994',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-6-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-5.jpeg',
    'width' => '739',
    'height' => '906',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-5-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1.jpeg',
    'width' => '1280',
    'height' => '1147',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-1-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054GXUYSY.jpg',
    'width' => '1037',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054GXUYSY-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054NZBLGS.jpg',
    'width' => '563',
    'height' => '593',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054NZBLGS-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054XXKOML.jpg',
    'width' => '1022',
    'height' => '1080',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054XXKOML-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054ZLPBVT.jpg',
    'width' => '1024',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054ZLPBVT-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054GVFKSD.jpg',
    'width' => '1031',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054GVFKSD-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2.jpeg',
    'id' => '123',
    'width' => '1051',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2-150x150.jpeg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054FXNYXE.jpg',
    'width' => '1043',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054FXNYXE-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054EZJCJW.jpg',
    'width' => '750',
    'height' => '1000',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054EZJCJW-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054LVKPNJ.jpg',
    'width' => '740',
    'height' => '831',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054LVKPNJ-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054XPIQDO.jpg',
    'width' => '640',
    'height' => '640',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/jq1651999054XPIQDO-150x150.jpg',
],
[
    'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2.jpeg',
    'width' => '1051',
    'height' => '1280',
    'thumbnail' => 'https://q.zhuige.com/wp-content/uploads/2022/07/original-2-150x150.jpeg',
],
];
$imageCount = rand(1, 9);
$pointImages = [];
for ($i = 1; $i <= $imageCount; $i++) {
    $point = $defaultImages[rand(0, 10)];
    $pointImages[] = ['image' => array_merge($point, [
        'id' => rand(1, 1000),
        'alt' => ['啥啊', '不知道'][rand(0, 1)],
        'title' => ['啥啊', '不知道'][rand(0, 1)],
        'description' => ['啥啊', '不知道'][rand(0, 1)],
    ])];
}
$locations = [
    ['marker' => '金隅嘉华大厦', 'address' => '北京市海淀区上地三街9号', 'longitude' => '116.30788421631', 'latitude' => '40.0368309021'],
    ['marker' => '苏州工业园区', 'address' => '江苏省苏州市苏州工业园区苏雅路308号', 'longitude' => '120.66983795166', 'latitude' => '31.317144393921'],
    ['marker' => '北京市金隅嘉华大厦F座', 'address' => '北京市海淀区上地三街9号金隅嘉华大厦', 'longitude' => '116.30860137939', 'latitude' => '40.037528991699'],
    ['marker' => '西海子公园', 'address' => '北京市通州区西海子西路12号', 'longitude' => '116.664204', 'latitude' => '39.91441']
];
return [
    'id' => rand(10, 1000),
    'excerpt' => $excerpts[rand(0, 9)],
    'comment_count' => rand(10, 1000),
    'images' => $pointImages,
    'limit' => ['free', 'score'][rand(0, 1)],
    'score' => 5,
    'type' => ['image', 'video'][rand(0, 1)],
    'subjects' => [
        ['id' => 7, 'name' => '慢生活 漫时光'],
        ['id' => 9, 'name' => '人人都是美食家'],
        ['id' => 18, 'name' => '宠物'],
        ['id' => 19, 'name' => '镜头下的时光大美人'],
        ['id' => 20, 'name' => '小功能'],
        ['id' => 21, 'name' => '视频'],
        ['id' => 24, 'name' => '每日打卡'],
        ['id' => 25, 'name' => '咖啡'],
        ['id' => 29, 'name' => '追格'],
        ['id' => 68, 'name' => '追格小程序'],
    ],
    'author' => [],
    'forum' => [['id' => 143, 'name' => '生活家'], ['id' => 71, 'name' => '追格小圈'], ['id' => 53, 'name' => '我爱美食']][rand(0, 2)],
    'like_count' => rand(10, 5000),
    'time' => ['2023-11-24', '2025-01-01', '2024-03-20'][rand(0, 2)],
    'location' => $locations[rand(0, 3)],
    'comments' => $pointComments,
    'at_users' => [
        ['user_id' => '2', 'nickname' => '咖小菲'],
        ['user_id' => '3', 'nickname' => '杨江河'],
    ],
          'video' => [
            'url' => 'https://q.zhuige.com/wp-content/uploads/2022/07/ec0c93da05f8d4bf8ae48e74928d3a37.mp4',
            'id' => '311',
            'width' => '640',
            'height' => '360',
            'thumbnail' => 'https://q.zhuige.com/wp-includes/images/media/video.png',
            'alt' => '',
            'title' => 'ec0c93da05f8d4bf8ae48e74928d3a37',
            'description' => '',
          ],
          'video_cover' => [
            'url' => '',
            'id' => '',
            'width' => '',
            'height' => '',
            'thumbnail' => '',
            'alt' => '',
            'title' => '',
            'description' => '',
          ],
    'post_type' => 'zhuige_bbs_topic',
    'stick' => 0,
];
