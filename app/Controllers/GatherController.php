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
        $datas = [
            'title' => '知识汇编',
            'description' => '书籍、历史、人物知识大荟萃',
        ];
        return $this->customView('home', $datas);
	}

    public function series($bigsort = '', $sort = '')
    {
        $graphicService = $this->getServiceObj('culture-graphic');
        $datas = $this->getGatherService()->getSeriesDatas($bigsort, $sort);
        $datas['currentNav'] = 'series';
        $view = 'series';

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

    protected function getGatherService()
    {
        return $this->getServiceObj('gather');
    }
}
