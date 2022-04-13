<?php

namespace ModuleWebsite\Controllers;

class ClassicalController extends AbstractController
{
    use TraitClassical;

    public function scripturesZhou()
    {
        $cacheData = $this->request->input('cache_data');
        if ($cacheData) {
            $this->dealDatas();exit();
        }
        $datas = $this->getListZhou();
        $datas['tdkData'] = [
            'title' => '驾驭浩瀚的网络信息',
            'keywords' => '',
            'description' => '',
        ];
        return $this->customView('list', $datas);
    }

    public function detailZhou($code = null)
    {
        $datas = $this->getDetailZhou($code);
        $datas['tdkData'] = [
            'title' => $datas['name'] . '-' . $datas['brief'],
            'keywords' => '',
            'description' => 'ooo',
        ];
        return $this->customView('detail', $datas);
    }

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
		return 'classical';
	}

	public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
	}
}
