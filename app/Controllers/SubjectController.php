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

    public function graphic($code = '')
    {
        $graphicService = $this->getServiceObj('culture-graphic');
        $datas = [];
        $view = 'graphic';

        return $this->customView($view, $datas);
    }

    public function series($bigsort = '', $sort = '')
    {
        $graphicService = $this->getServiceObj('culture-graphic');
        $datas = $this->getGatherService()->getSeriesDatas($bigsort, $sort);
        $datas = $this->formatNav($datas);
        $view = $datas['view'];

        return $this->customView($view, $datas);
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
        return [
            'history' => [
                'name' => '历史图谱',
                'subNavs' => [
                    'luguo' => ['name' => '鲁国'],
                ],
            ],
            'human' => [
                'name' => '人物图谱',
                'subNavs' => [
                    'luxun' => ['name' => '鲁迅'],
                    'zhuzibaijia' => ['name' => '诸子百家'],
                    'kongdizi' => ['name' => '孔门弟子'],
                ],
            ],
        ];
    }

    protected function getGatherService()
    {
        return $this->getServiceObj('gather');
    }
}
