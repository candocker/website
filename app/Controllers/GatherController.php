<?php

namespace ModuleWebsite\Controllers;

class GatherController extends AbstractController
{
	public function actionNavDatas()
	{
		$where = ['status' => 'nav'];
		return ['status' => 200, 'message' => 'OK', 'datas' => $this->model->getBookDatas($where)];
	}

	public function home()
	{
        $view = $this->request->input('view');
        $datas['comparison'] = $this->comparison();
        $datas['view'] = $view ?? 'test';
        return $this->customView('home', $datas);
	}

    public function series($bigsort = '', $sort = '')
    {
        //$datas = $this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        $datas = [];
        $view = 'series';

        $params = $this->request->all();
        $graphicService = $this->getServiceObj('culture-graphic');
        return $this->customView($view, $datas);

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
        $datas['currentNav'] = 'series';
        //return $this->success($datas);

        //$datas = $graphicService->formatResultDatas($sort, $extcode, $params);
        return $this->customView($view, $datas);
    }

	protected function viewPath()
	{
		return 'gather';
	}

	public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
	}

    protected function comparison()
    {
        $headers = ['年份', '鲁国', '孔子'];
        $startYear = -1000;
        $endYear = -400;
        $step = 10;
        $infos = [];

        for ($i = $startYear; $i <= $endYear; $i++) {
            $j = 0;
            //$infos[] = [$i, 'l', 'k'];
        }
        return ['headers' => $headers, 'infos' => $infos];
    }

    public function getNavDatas()
    {
        return [
            'series-translation' => [
                'name' => '汉译学术名著',
                'subNavs' => [
                    'philosophy' => ['name' => '哲学'],
                    'history' => ['name' => '历史·地理'],
                    'politics' => ['name' => '政治·法律·社会'],
                    'economics' => ['name' => '经济'],
                    'language' => ['name' => '语言·文艺理论'],
                    'otheracademic' => ['name' => '学术补编'],
                ],
            ],
            'series-classical' => [
                'name' => '经典图书系列',
                'subNavs' => [
                    'jdguji' => ['name' => '经典古籍'],
                    'luxun' => ['name' => '鲁迅图书'],
                ],
            ],
            'history-graphic' => [
                'name' => '历史图谱',
                'subNavs' => [
                    'luguo' => ['name' => '鲁国'],
                ],
            ],
            'human-graphic' => [
                'name' => '人物图谱',
                'subNavs' => [
                    'zhuzibaijia' => ['name' => '诸子百家'],
                    'kongdizi' => ['name' => '孔门弟子'],
                ],
            ],
        ];
    }
}
