<?php
$titles = [
    '顺丰速运',
    'Product Hunt',
    '酱茄主题',
    'ChatGPT',
    '京东物流',
    '追格',
    '资讯小程序',
    '企业官网小程序',
    '小站点评',
];
$excerpts = [
    '快递物流综合服务商',
    '一个发掘有意思产品的平台，看看？',
    '一款优雅的WordPress图文资讯主题',
    'OpenAI研发的聊天机器人程序',
    '京东集团2007年开始自建物流，2017年4月正式成立京东物流集团，2021年5月，京东物流于香港联...',
    '致力于让每个公司拥有适合自己的小程序',
    '基于WordPress+Uniapp开发的多端资讯小程序',
    '专为企业开发的多端官网小程序',
    '一款网址导航+点评WordPress主题',
];
$logos = [
    'https://q.zhuige.com/wp-content/uploads/2023/12/xz.png',
    'https://q.zhuige.com/wp-content/uploads/2023/12/7-1.png',
    'https://q.zhuige.com/wp-content/uploads/2022/07/微信小程序logo.png',
    'https://q.zhuige.com/wp-content/uploads/2022/11/jq1668323931HTXVEV.png',
    'https://q.zhuige.com/wp-content/uploads/2023/12/962bd40735fae6cd7b89b55590f9182442a7d933a1e7.jpg',
    'https://q.zhuige.com/wp-content/uploads/2023/12/666.png',
    'https://q.zhuige.com/wp-content/uploads/2023/12/6e95b74163564bfe36afa6ed420ff313.png',
    'https://q.zhuige.com/wp-content/uploads/2024/01/0467f931f89be15fa6d56b4ced03d5ef.png',
    'https://q.zhuige.com/wp-content/uploads/2024/01/443.png',
    'https://q.zhuige.com/wp-content/uploads/2024/01/bd.png',
];
$tags = [
    ['id' => 114, 'name' => '追格'],
    ['id' => 115, 'name' => '资讯小程序'],
    ['id' => 116, 'name' => 'uniapp'],
    ['id' => 118, 'name' => '小程序'],
    ['id' => 119, 'name' => '技术服务'],
    ['id' => 121, 'name' => 'WordPress主题'],
    ['id' => 122, 'name' => '导航'],
    ['id' => 128, 'name' => 'Product Hunt'],
    ['id' => 129, 'name' => '点评'],
    ['id' => 130, 'name' => '酱茄'],
    ['id' => 131, 'name' => '官网小程序'],
    ['id' => 132, 'name' => 'WordPress'],
    ['id' => 133, 'name' => 'OpenAI'],
    ['id' => 134, 'name' => 'ChatGPT'],
    ['id' => 135, 'name' => '人工智能'],
    ['id' => 136, 'name' => '京东物流'],
    ['id' => 137, 'name' => '京东'],
    ['id' => 138, 'name' => '物流'],
    ['id' => 139, 'name' => '顺丰速运'],
    ['id' => 140, 'name' => '德邦快递'],
    ['id' => 141, 'name' => '快递'],

];
$tagCount = rand(2, 5);
$pointTags = [];
for ($i = 1; $i <= $tagCount; $i++) {
    $pointTags[] = $tags[rand(0, 20)];
}
return [
    'id' => rand(1, 1000),
    'title' => $titles[rand(0, 8)],
    'excerpt' => $excerpts[rand(0, 8)],
    'logo' => $logos[rand(0, 9)],
    'score' => [0, '5.0', '3.0', '4.0'][rand(0, 3)],
    'tags' => $pointTags,
    'driect_link_switch' => rand(0, 1),
    'driect_link' => 'https://www.xzdp.com/',
    'post_type' => 'zhuige_business_card',
    'post_type_name' => '商家名片',
    'link' => '/pages/business-card/detail/detail',
    'stick' => 0,
];
