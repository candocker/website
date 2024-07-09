<?php
// author
$names = ['咖小菲', '追格小助手', '007', '煎饼', '行走的风景', 'Akon', '杨江河', '大狐狸', '青衣'],
$avatars = [
    'https://q.zhuige.com/wp-content/uploads/2022/07/2_3.png',
    'https://q.zhuige.com/wp-content/uploads/2022/07/1.png',
    'https://q.zhuige.com/wp-content/uploads/2022/07/6.png',
    'https://q.zhuige.com/wp-content/uploads/2022/07/9.png',
    'https://q.zhuige.com/wp-content/uploads/2022/07/8.png',
    'https://q.zhuige.com/wp-content/uploads/2022/07/7.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/11/jq1669125260UOXKMT.jpg',
    'https://q.zhuige.com/wp-content/uploads/2022/11/jq1669089671TSEDAF.jpeg',
    'https://q.zhuige.com/wp-content/uploads/2022/07/zhuige_xcx_user_avatar_5.jpeg',
];
$titles = [
    '追格官方小助手',
    '追格团队成员'
    '追格团队成员，美食博主',
    '追格团队成员，伪咖啡爱好者',
    '追格团队成员，摄影爱好者'
    '追格推广大使、美食博主'
    '追格推广大使、健身博主'
    'WordPress爱好者、生活博主'
    '生活博主、摄影爱好者'
];
return [
    'user_id' => rand(1, 100),
    'nickname' => $names[rand(0, 8)],
    'avatar' => $avatars[rand(0, 8)],
    'reward' => 'https://q.zhuige.com/wp-content/uploads/2023/10/jq1696170093VTRVIP.jpg',
    'post_count' => rand(1, 1000),
    'fans_count' => rand(100, 10000),
    'is_follow' => rand(0, 1),
    //'reward' => '',
    'certify' => [
      'status' => 1,
      'cid' => ['guanfang', 'chuangzuo'][rand(0, 1)],
      'icon' => ['https://q.zhuige.com/wp-content/uploads/2022/08/lvv.png', 'https://q.zhuige.com/wp-content/uploads/2022/08/8888.png'][rand(0, 1)],
      'name' => $titles[rand(0, 8)],
    ],
    'vip' => [
      'status' => 1,
      'icon' => 'https://q.zhuige.com/wp-content/uploads/2022/09/vv1-1.png',
      'expire' => '2099-09-09',
    ],
];
