<?php

namespace ModuleWebsite\Controllers;

class ClientController extends AbstractController
{
    use TraitClient;
    use TraitApplet;

    public function settingHome()
    {
        $datas['data'] = $this->settingDatas();
        return $this->successCustom($datas);
    }

    public function subjectDatas()
    {
        $groupCode = $this->request->input('group_code');
        $subjectDatas = $this->getServiceObj('infocms-fetchData')->getSubjectInfos($groupCode);
        $datas['data'] = [
            'subjectDatas' => $subjectDatas,
        ];
        return $this->successCustom($datas);
    }

    public function groupDatas()
    {
        $groupDatas = $this->getServiceObj('infocms-fetchData')->getGroupInfos([]);
        $datas['data'] = [
            'groupDatas' => $groupDatas,
            'cur_tab' => $groupDatas[0]['code'],
            'is_show_create_forum' => 1,
        ];
        return $this->successCustom($datas);
    }

    public function home($module = null, $action = null)
    {
        return $this->testTmp('client', $module, $action);
    }

    public function index($module = null, $action = null)
    {
        return $this->testTmp('client1', $module, $action);
    }

    protected function testTmp($pre, $module, $action)
    {
        $file = "/data/backup/dealdata/{$pre}/{$module}-{$action}.json";
        $text = file($file);
        $data = json_decode($text[0], true);
        return $this->successCustom($data);
    }
}
