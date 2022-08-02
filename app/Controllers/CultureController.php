<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class CultureController extends AbstractController
{
    public function view($code = '')
    {
        $datas = [];
        $elems = explode('_', $code);
        $view = 'sources/' . $elems[0] . '/_' . $elems[1];
        //echo $view;exit();
        return $this->customView($view);
    }

    public function home($sort = 'pingtai')
    {
        $datas = [];
        return $this->customView('home', ['datas' => $datas]);
    }

    public function luxunWorks()
    {
        $repository = $this->getRepositoryObj('culture-series');
        $pointCodes = ['luxunquanji1938', 'luxunquanji2005', 'luxunquanji1958', 'luxunquanji1981', 'luxunmanuscript', 'luxunmanuall'];
        $datas = $repository->getSeriesDatas($pointCodes);
        return $this->success($datas);
        echo 'sss';exit();
    }

    public function series($sort = '', $extcode = null)
    {
        //$datas = $this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        $datas = [];

        $params = $this->request->all();
        $graphicService = $this->getServiceObj('culture-graphic');

        $sort = empty($sort) ? 'home' : $sort;

        $datas = $graphicService->formatResultDatas($sort, $extcode, $params);
        $datas['graphics'] = $datas;

        $datas['tdkData'] = [
            'title' => '驾驭浩瀚的网络信息',
            'keywords' => '',
            'description' => '',
        ];
        //$datas['footerLinks'] = $graphicService->getFooterLinks();
        //protected function getGraphicDatas($graphicService, $code, $extcode, $params)
        return $this->customView('home', $datas);
        return $this->customView('table', $datas);
    }

    public function timeline($sort = '')
    {
        $datas = [];//$this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        return $this->customView('timeline', $datas);
    }

	protected function viewPath()
	{
		return 'website';
	}

	public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
	}
}
