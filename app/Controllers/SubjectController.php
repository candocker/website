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

    public function chineseHistory()
    {
        $code = $this->getRouteParam('code');
        $data = [];//$this->getRepositoryObj('culture-dynasty')->getDetail($code);
        //return $this->success($data);
        return $this->customView('foreign-history', ['info' => $data]);
    }

    public function foreignHistory()
    {
        $code = $this->getRouteParam('code');
        $data = [];//$this->getRepositoryObj('culture-dynasty')->getDetail($code);
        //return $this->success($data);
        return $this->customView('foreign-history', ['info' => $data]);
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
            'human' => [
                'name' => '人物',
                'subNavs' => [
                    'luxun' => ['name' => '鲁迅'],
                    'russell' => ['name' => '罗素'],
                ],
            ],
            'chinese-classics' => [
                'name' => '中华经典',
                'subNavs' => [
                    'bingjia' => ['name' => '兵家'],
                    'fajia' => ['name' => '法家'],
                    'rujia' => ['name' => '儒家'],
                    'daojia' => ['name' => '道家'],
                    'shijia' => ['name' => '释家'],
                    'zhuzi' => ['name' => '诸子'],
                    'shisanjing' => ['name' => '十三经'],
                ],
            ],
            'western-civilization ' => [
                'name' => '西方文明',
                'subNavs' => [
                    'early-greek-philosophy' => ['name' => '早期希腊哲学'],
                    'greek-three-philosophers' => ['name' => '希腊三哲'],
                    'post-greece' => ['name' => '后希腊哲学'],
                    'godfather' => ['name' => '教父哲学'],
                    'scholasticism' => ['name' => '经院哲学'],
                    'Renaissance' => ['name' => '文艺复兴'],
                    'science' => ['name' => '科学'],
                    'uk-academic ' => ['name' => '英国学术'],
                    'franch-academic' => ['name' => '法国学术'],
                    'german-academic' => ['name' => '德国学术'],
                    'american-academic' => ['name' => '美国学术'],
                    'russian-academic' => ['name' => '俄国学术'],
                    'other-western' => ['name' => '其他西方学术'],
                ],
            ],
            'chinese-history' => [
                'name' => '中国历史',
                'subNavs' => [
                    'sanhuangwudi' => ['name' => '三皇五帝'],
                    'xia' => ['name' => '夏朝'],
                    'shang' => ['name' => '商朝'],
                    'zhou' => ['name' => '周朝'],
                    'qin' => ['name' => '秦朝'],
                    'xihan' => ['name' => '西汉'],
                    'donghan' => ['name' => '东汉'],
                    'sanguo' => ['name' => '三国'],
                    'jin' => ['name' => '晋朝'],
                    'shiliuguo' => ['name' => '十六国'],
                    'nanbeichao' => ['name' => '南北朝'],
                    'sui' => ['name' => '隋朝'],
                    'tang' => ['name' => '唐朝'],
                    'wudaishiguo' => ['name' => '五代十国'],
                    'northsong' => ['name' => '北宋'],
                    'southsong' => ['name' => '南宋'],
                    'yuan' => ['name' => '元朝'],
                    'ming' => ['name' => '明朝'],
                    'qing' => ['name' => '清朝'],
                    'roc' => ['name' => '民国'],
                ],
            ],
            'foreign-history' => [
                'name' => '外国历史',
                'subNavs' => [
                    'america' => ['name' => '美国'],
                    'britain' => ['name' => '英国'],
                    'france' => ['name' => '法国'],
                    'germany' => ['name' => '德国'],
                    'russia' => ['name' => '俄罗斯'],
                    'ancient-greek' => ['name' => '古希腊'],
                    'ancient-rome' => ['name' => '古罗马'],
                ],
            ],
        ];
    }

    protected function getGatherService()
    {
        return $this->getServiceObj('gather');
    }
}
