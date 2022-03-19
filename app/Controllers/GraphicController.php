<?php

namespace ModuleWebsite\Controllers;

class GraphicController extends AbstractController
{
    public function home($code = null, $extcode = null)
    {
        $params = $this->request->all();
        $graphicModel = $this->getModelObj('culture-graphic');
        $datas['graphics'] = $this->getGraphicDatas($graphicModel, $code, $extcode, $params);
        $datas['tdkData'] = [
            'title' => '驾驭浩瀚的网络信息',
            'keywords' => '',
            'description' => '',
        ];
        $datas['footerLinks'] = $graphicModel->getFooterLinks();
        return $this->customView('home', $datas);
    }

    protected function getGraphicDatas($graphicModel, $code, $extcode, $params)
    {
        $code = empty($code) ? 'home' : $code;
        $graphicInfo = $graphicModel->where(['code' => $code])->first();

        $datas = $graphicModel->formatResultDatas($code, $extcode, $params);
        return $datas;
    }

	protected function viewPath()
	{
		return 'graphic';
	}
}
