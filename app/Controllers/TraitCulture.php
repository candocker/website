<?php

namespace ModuleWebsite\Controllers;

trait TraitCulture
{

    public function getNavDatas()
    {
        return [
            'series' => [
                'name' => '经典图书系列',
                'subNavs' => [
                    'luxun' => ['name' => '鲁迅图书'],
                    'swxueshu' => ['name' => '商务学术翻译'],
                    'jdguji' => ['name' => '经典古籍'],
                ],
            ],
            'human' => [
                'name' => '名人堂',
            ],
            'book' => [
                'name' => '经典著作',
            ],
        ];
    }
}
