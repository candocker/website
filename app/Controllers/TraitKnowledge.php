<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Str;
use Swoolecan\Foundation\Helpers\CommonTool;

trait TraitKnowledge
{
    public function knowledgeData($module, $action)
    {
        return $this->getContentData('knowledge', $module, $action);
    }

    public function globalSetting()
    {
        return $this->getContentData('knowledge', 'global', 'setting');
    }

    public function seckillData()
    {
        return $this->getContentData('knowledge', 'seckill', 'data');
    }

    public function homeDataMobile()
    {
        $result = $this->getContentData('knowledge', 'home-data', 'mobile', 'array');
        $result['data']['classify'] = $this->_classifyDatas(0);
        return $this->successCustom($result);
    }

    public function classifyDatas()
    {
        $pid = $this->request->input('pid', 0);
        $result = $this->_classifyDatas($pid);
        return $this->success($result);
    }

    public function _classifyDatas($pid = null)
    {
        $datas = [
            ['id' => '177', 'title' => '儒家', 'pid' => '0', 'sort' => '1'],
            ['id' => '180','title' => '鲁迅','pid' => '0','sort' => '3'],
            ['id' => '190','title' => '历史','pid' => '0','sort' => '4'],
            ['id' => '194','title' => '外国历史','pid' => '0','sort' => '8'],
            ['id' => '195','title' => '外国哲学','pid' => '0','sort' => '8'],
            ['id' => '185','title' => '儒学','pid' => '177','sort' => '1'],
            ['id' => '184','title' => '孔子传','pid' => '177','sort' => '1'],
            ['id' => '178','title' => '儒学简介','pid' => '177','sort' => '0'],
            ['id' => '182','title' => '论语人物','pid' => '177','sort' => '1'],
            ['id' => '183','title' => '儒学思想','pid' => '177','sort' => '1'],
            ['id' => '186','title' => '鲁迅研究','pid' => '180','sort' => '0'],
            ['id' => '200','title' => '鲁迅画册','pid' => '180','sort' => '5'],
            ['id' => '187','title' => '鲁迅作品','pid' => '180','sort' => '1'],
            ['id' => '188','title' => '鲁迅和他的时代','pid' => '180','sort' => '2'],
            ['id' => '198','title' => '鲁迅作品版本','pid' => '180','sort' => '4'],
            ['id' => '203','title' => '史记','pid' => '190','sort' => '1'],
            ['id' => '204','title' => '资治通鉴','pid' => '190','sort' => '2'],
            ['id' => '205','title' => '历代帝王','pid' => '190','sort' => '3'],
            ['id' => '206','title' => '上下五千年年','pid' => '190','sort' => '4'],
            ['id' => '207','title' => '消失的帝国','pid' => '194','sort' => '5'],
            ['id' => '208','title' => '中东的战乱','pid' => '194','sort' => '1'],
            ['id' => '209','title' => '汉译学术名著','pid' => '195','sort' => '2'],
            ['id' => '210','title' => '宗教','pid' => '195','sort' => '2'],
        ];
        $result = [];
        foreach ($datas as $data) {
            if (!is_null($pid) && $data['pid'] != $pid) {
                continue;
            }
            $data['acid'] = 1;
            $data['status'] = 1;
            $data['css'] = 0;
            $data['name'] = '';
            $data['create_time'] = time();
            $data['update_time'] = time();
            $result[] = $data;
        }
        return $result;
    }
}
