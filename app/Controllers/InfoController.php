<?php

namespace ModuleWebsite\Controllers;

class InfoController extends AbstractController
{
	public function home()
	{
        $datas = [
            'title' => '碎片知识',
            'description' => '碎片化知识、碎片化学系',
            'tdkData' => [
                'title' => '碎片知识',
                'description' => '碎片化知识、碎片化学系',
                'keywords' => '',
            ],
        ];
        return $this->customView('home', $datas);
	}

    public function categoryList($bigsort = '', $sort = '')
    {
        $graphicService = $this->getServiceObj('culture-graphic');
        $datas = [];
        $datas['bigNav'] = $bigsort;
        $datas['currentNav'] = $sort;

        return $this->customView('list', $datas);
    }

    public function show($id)
    {
        $data = [];
        return $this->customView('show', ['data' => $data]);
    }

    protected function formatNav($datas)
    {
        $path = $this->request->path();
        $pos = strrpos($path, '-');
        $datas['bigNav'] = $pos !== false ? substr($path, 0, $pos) : $path;
        $datas['currentNav'] = $pos !== false ? substr($path, $pos + 1) : $path;
        return $datas;
    }

	protected function viewPath()
	{
		return 'info';
	}

    public function getNavDatas()
    {
        $datas = $this->getRepositoryObj('infocms-category')->getPointTreeDatas(null, 2, 'list');
        $navDatas = [];
        foreach ($datas as $data) {
            $subNavs = [];
            foreach ((array) $data['subInfos'] as $subInfo) {
                $subNavs[$subInfo['code']] = ['name' => $subInfo['name']];
            }
            $navDatas[$data['code']] = ['name' => $data['name'], 'subNavs' => $subNavs];
        }
        return $navDatas;
    }

    protected function getInfocmsService()
    {
        return $this->getServiceObj('infocms');
    }
}
