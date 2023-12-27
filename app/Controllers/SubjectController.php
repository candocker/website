<?php

namespace ModuleWebsite\Controllers;

class SubjectController extends AbstractController
{
	public function home()
	{
        $datas = [
            'tdkData' => [
                'title' => '专题系列',
                'description' => '专题系列',
                'keywords' => '',
            ],
            'datas' => [],
        ];
        //$this->init();
        return $this->customView('home', $datas);
	}

    public function chineseClassics()
    {
        return $this->dealDatas('chinese-classics');
    }

    public function human()
    {
        return $this->dealDatas('human');
    }

    public function chineseHistory()
    {
        return $this->dealDatas('chinese-history');
    }

    public function foreignHistory()
    {
        return $this->dealDatas('foreign-history');
    }

    public function foreignCivilization()
    {
        return $this->dealDatas('foreign-civilization');
    }

    public function dealDatas($bigSort)
    {
        $code = $this->getRouteParam('code');
        $path = empty($code) ? "{$bigSort}/index" : "{$bigSort}/{$code}";
        $datas = $this->getPointDatas($path);
        return $this->customView('home', $datas);

        $data = $this->getRepositoryObj('culture-dynasty')->getDetail('qing');
        $data = $this->getRepositoryObj('culture-figure')->getDetail('luxun');
        return $this->customView('human', ['info' => $data]);
    }

	protected function viewPath()
	{
		return 'subject';
	}

    public function getNavDatas()
    {
        return $this->getPointDatas();
    }

    public function getPointDatas($pointPath = null)
    {
        $path = $this->getBasePath() . 'subject/';;
        $path .= empty($pointPath) ? 'index.php' : "{$pointPath}.php";
        return require($path);
    }

    protected function getGatherService()
    {
        return $this->getServiceObj('gather');
    }

    protected function init()
    {
        $path = $this->getBasePath() . 'subject/';
        $datas = $this->getNavDatas();
        $str = "<?php\nreturn [\n'tdkData' => [\n    'title' => '";
        foreach ($datas as $nav => $navData) {
            $catalogStr = "'catalogs' => [\n    'template' => 'table',\n    'data' => [\n    'infos' => [\n";
            foreach ($navData['subNavs'] as $subNav => $subNavData) {
                $subNavFile = $path . $nav . '/' . $subNav . '.php';
                if (true) {//!file_exists($subNavFile)) {
                    $subNavStr = $str . "{$subNavData['name']}',\n    'keywords' => '',\n    'description' => '',\n],\n];";
                    file_put_contents($subNavFile, $subNavStr);
                }
                $catalogStr .= "        ['code' => '{$subNav}', 'name' => '{$subNavData['name']}', 'url' => '/{$nav}-{$subNav}'],\n";
            }
            $navStr = $str . "{$navData['name']}',\n    'keywords' => '',\n    'description' => '',\n],\n'datas' => [\n{$catalogStr}    ],\n    ],\n],\n],\n];";
            $navFile = $path . $nav . '/index.php';
            if (true) {//!file_exists($navFile)) {
                file_put_contents($navFile, $navStr);
            }
        }
    }
}
