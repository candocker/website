<?php
return [
    'name' => '经典古籍',
    'brief' => '经典古典经书',
    'books' => [
        'zhouyi' => [
            'name' => '周易',
            'brief' => '卦象(伏羲)、 卦辞(文王)、爻辞(周公)、易传(孔子)',
            //'name' => '群经之首-周易',
            //'keywords' => '经典，周易，易经，易传',
        ],
        'lunyu' => [
            'name' => '论语',
            'brief' => '论语描述',
            'rowCount' => 4,
            'rowCountMobile' => 4,
        ],
        'daodejing' => [
            'name' => '道德经',
            'brief' => '道德经描述',
            'rowCount' => 4,
            'noteType' => 'inner',
            'rowCountMobile' => 4,
        ],
        'daxue' => [
            'name' => '大学',
            'brief' => '大学描述',
            'rowCount' => 4,
            'rowCountMobile' => 2,
        ],
        'zhongyong' => [
            'name' => '中庸',
            'brief' => '中庸描述',
            'rowCount' => 4,
            'rowCountMobile' => 4,
        ],
        'mengzi' => [
            'name' => '孟子',
            'brief' => '孟子描述',
            //'rowspan' => 43,
            'onlyName' => true,
            'noteType' => 'inner',
            'chapterList' => true,
            'cUnit' => '段',
            'rowCount' => 2,
            'rowCountMobile' => 2,
        ],
        'zhuangzi' => [
            'name' => '庄子',
            'brief' => '庄子描述',
            'noteType' => 'inner',
            'rowCount' => 4,
            'rowCountMobile' => 4,
        ],
        'shijing' => [
            'spell' => 1,
            'rowspan' => 15,
            'name' => '诗经',
            'brief' => '诗经',
            'rowCount' => 5,
            'rowCountMobile' => 3,
        ],
        'chuci' => [
            'spell' => 1,
            'name' => '楚辞',
            'brief' => '诗经',
            'rowCount' => 5,
            'rowCountMobile' => 3,
        ],
        'guwenguanzhi' => [
            //'rowspan' => 10,
            'name' => '古文观止',
            'withAuthor' => 1,
            'brief' => '古文观止',
            'noteType' => 'inner',
            'rowCount' => 2,
            'rowCountMobile' => 2,
        ],
        'mozi' => [
            'name' => '墨子',
            'brief' => '墨子描述',
            'rowCount' => 5,
            'rowCountMobile' => 3,
        ],
        'xunzi' => [
            'name' => '荀子',
            'brief' => '荀子描述',
            'rowCount' => 5,
            'rowCountMobile' => 3,
        ],
        'yizhuan' => [
            'name' => '易传',
            'brief' => '易传',
            'rowCount' => 5,
            'rowCountMobile' => 3,
        ],
    ],
];
