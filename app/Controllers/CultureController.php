<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class CultureController extends AbstractController
{
    public function home($sort = 'pingtai')
    {
        $datas = [];
        return $this->customView('home', ['datas' => $datas]);
    }

    public function luxunResume()
    {
        $repository = $this->getRepositoryObj('culture-series');
        $pointCodes = ['luxunquanji1938', 'luxunquanji2005', 'luxunquanji1958', 'luxunquanji1981', 'luxunmanuscript', 'luxunmanuall'];
        $datas = $repository->getSeriesDatas($pointCodes);
        return $this->success($datas);
    }

    public function luxunWorks()
    {
        $repository = $this->getRepositoryObj('culture-series');
        $pointCodes = ['luxunquanji1938', 'luxunquanji2005', 'luxunquanji1958', 'luxunquanji1981', 'luxunmanuscript', 'luxunmanuall'];
        $datas = $repository->getSeriesDatas($pointCodes);
        return $this->success($datas);
    }

    public function series($sort = '', $volumeId = null)
    {
        //$datas = $this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        //$datas = [];

        $params = $this->request->all();
        $graphicService = $this->getServiceObj('culture-graphic');

        if (!empty($volumeId)) {
            $view = 'series-book';
            $datas = $graphicService->formatVolumeDatas($volumeId);
        } else if (!empty($sort)) {
            $view = 'series-volume';
            $datas = $graphicService->formatSeriesDatas($sort);
        } else {
            $view = 'series';
            $datas = $graphicService->formatAllSeries();
        }
        //return $this->success($datas);

        //$datas = $graphicService->formatResultDatas($sort, $extcode, $params);
        return $this->customView($view, $datas);
    }

    public function timeline($sort = '')
    {
        $datas = [];//$this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        return $this->customView('timeline', $datas);
    }

    public function view($code = '')
    {
        $code = empty($code) ? 'home' : $code;
        $view = 'dealed/' . $code;
        //echo $view;exit();
        return $this->customView($view);
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

    public function getNavDatas()
    {
        return [
            'series' => [
                'name' => '经典图书系列',
                'subnav' => [
                    'luxun' => ['name' => '鲁迅图书'],
                    'swxueshu' => ['name' => '商务学术翻译'],
                    'jdguji' => ['name' => '经典古籍'],
                ],
            ],
        ];
    }
}
