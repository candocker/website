<?php

namespace ModuleWebsite\Controllers;

class GraphicController extends AbstractController
{
    public function home()
    {
        $datas = [];
        $datas['tdkData'] = [
            'title' => '定制自己的网络导航,驾驭浩瀚的网络信息',
            'keywords' => '',
            'description' => '',
        ];
        return $this->customView('home', $datas);
    }

	protected function viewPath()
	{
		return 'graphic';
	}
}
