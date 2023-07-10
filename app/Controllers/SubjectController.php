<?php

namespace ModuleWebsite\Controllers;

class SubjectController extends AbstractController
{
	public function home()
	{
        $datas = [
            'title' => '专题系列',
            'description' => '专题系列',
            'tdkData' => [
                'title' => '专题系列',
                'description' => '专题系列',
                'keywords' => '',
            ],
        ];
        return $this->customView('home', $datas);
	}

    public function chineseClassics()
    {
        $code = $this->getRouteParam('code');
        $data = [];//$this->getRepositoryObj('culture-figure')->getDetail('luxun');
        return $this->customView('chinese-classics.' . $code, ['info' => $data]);
    }

    public function humanLuxun()
    {
        $code = $this->getRouteParam('code');
        $data = $this->getRepositoryObj('culture-figure')->getDetail('luxun');
        return $this->customView('human-luxun.' . $code, ['info' => $data]);
    }

    public function human()
    {
        $code = $this->getRouteParam('code');
        $data = $this->getRepositoryObj('culture-figure')->getDetail($code);
        return $this->customView('human', ['info' => $data]);
    }

    public function dynasty()
    {
        $code = $this->getRouteParam('code');
        $data = [];//$this->getRepositoryObj('culture-dynasty')->getDetail($code);
        //return $this->success($data);
        return $this->customView('dynasty', ['info' => $data]);
    }

    public function graphic($code = '')
    {
        $graphicService = $this->getServiceObj('culture-graphic');
        $datas = [];
        $view = 'graphic';

        return $this->customView($view, $datas);
    }

	protected function viewPath()
	{
		return 'subject';
	}

    public function getNavDatas()
    {
        return [
            'human-luxun' => [
                'name' => '鲁迅专栏',
                'subNavs' => [
                    'works' => ['name' => '作品'],
                    'graphic' => ['name' => '图说'],
                ],
            ],
            'chinese-classics' => [
                'name' => '中华经典',
                'subNavs' => [
                    'yijing' => ['name' => '易经'],
                    'kong' => ['name' => '孔子'],
                    'shisanjing' => ['name' => '十三经'],
                    'ruxue' => ['name' => '儒学'],
                    'zhuzibaijia' => ['name' => '诸子百家'],
                ],
            ],
            'chinese-history' => [
                'name' => '中国历史',
                'subNavs' => [
                    'luguo' => ['name' => '鲁国'],
                ],
            ],
            'foreign-history' => [
                'name' => '外国历史',
                'subNavs' => [
                    'america' => ['name' => '美国'],
                    'ancient-greek' => ['name' => '古希腊'],
                    'ancient-rome' => ['name' => '古罗马'],
                ],
            ],
            'foreign-academic' => [
                'name' => '外国学术',
                'subNavs' => [
                    'philosophy-history' => ['name' => '哲学史'],
                ],
            ],
        ];
    }

    protected function getGatherService()
    {
        return $this->getServiceObj('gather');
    }
}
