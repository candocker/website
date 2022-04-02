<?php

namespace ModuleWebsite\Controllers;

class ClassicalController extends AbstractController
{
    use TraitClassical;

    public function listinfo($code = null)
    {
        //$this->dealDatas();exit();
        $datas = $this->getListDatas($code);
        $datas['tdkData'] = [
            'title' => '驾驭浩瀚的网络信息',
            'keywords' => '',
            'description' => '',
        ];
        return $this->customView('list', $datas);
    }

    public function detail($code = null)
    {
        $datas = $this->getDetail($code);
        $symbols = [0 => '■■■　■■■', 1 => '■■■■■■■'];
        foreach ([0, 0, 1, 1, 1, 0] as $sKey) {
            $datas['symbols'][] = $symbols[$sKey];
        }
        $datas['tdkData'] = [
            'title' => '驾驭浩瀚的网络信息',
            'keywords' => '',
            'description' => '',
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

    protected function dealDatas()
    {
        $divinations = [
            'qian', 'kun', 'zhun', 'meng', 'xu', 'song', 'shi', 'bi',
            'xiaoxu', 'lv', 'tai', 'pi', 'tongren', 'dayou', 'qiands', 'yu',
            'sui', 'gu', 'lin', 'guan', 'shihe', 'bish', 'bo', 'fu',
            'wuwang', 'daxu', 'yi', 'daguo', 'kan', 'li', 'xian', 'heng',
            'dun', 'dazhuang', 'jin', 'mingyi', 'jiaren', 'kui', 'jian', 'xie',
            'shun', 'yifl', 'guai', 'gou', 'cui', 'sheng', 'kunzs', 'jing', 
            'ge', 'ding', 'zhen', 'gen', 'jianfs', 'guimei', 'feng', 'lvhs',
            'xun', 'dui', 'huan', 'jie', 'zhongfu', 'xiaoguo', 'jiji', 'weiji',
        ];
        $tmp = [];
        $basePath = base_path();
        foreach ($divinations as $key => $elem) {
            $filePath = $key < 9 ? '0' . ($key + 1) : $key + 1;
            $filePath .= $elem . '.php';
            $file = $basePath . '/vendor/candocker/website/migrations/zhouyi/' . $filePath;
            $tmp[$elem] = require($file);
        }
        var_export($tmp);
    }
}
