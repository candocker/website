<?php

namespace ModuleWebsite\Controllers;

class GraphicController extends AbstractController
{
    public function home($code = null, $extcode = null)
    {
        $params = $this->request->all();
        $graphicService = $this->getServiceObj('culture-graphic');
        $datas['graphics'] = $this->getGraphicDatas($graphicService, $code, $extcode, $params);
        $datas['tdkData'] = [
            'title' => '驾驭浩瀚的网络信息',
            'keywords' => '',
            'description' => '',
        ];
        $datas['footerLinks'] = $graphicService->getFooterLinks();
        return $this->customView('home', $datas);
        return $this->_showCommon($code, 'home', 'brand', 'infocms');
    }

    protected function getGraphicDatas($graphicService, $code, $extcode, $params)
    {
        $code = empty($code) ? 'home' : $code;

        $datas = $graphicService->formatResultDatas($code, $extcode, $params);
        return $datas;
    }

	protected function viewPath()
	{
		return 'graphic';
	}
}
