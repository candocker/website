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
        $datas['comparison'] = $this->comparison();
        return $this->customView('home', $datas);
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
}
