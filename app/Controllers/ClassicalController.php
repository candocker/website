<?php

namespace ModuleWebsite\Controllers;

class ClassicalController extends AbstractController
{
    use TraitClassical;

    public function home($code = null, $extcode = null)
    {
        $datas = $this->getBookInfos();
        $datas['pageCode'] = 'home';
        return $this->customView('list', $datas);
    }

    public function bookZhou()
    {
        $cacheData = $this->request->input('cache_data');
        if ($cacheData) {
            $this->dealDatas();exit();
        }
        $datas = $this->getListZhou();
        $datas['tdkData'] = [
            'title' => '群经之首-周易',
            'keywords' => '经典，周易，易经，易传',
            'description' => '',
        ];
        $datas['pageCode'] = 'zhouyi';
        return $this->customView('list', $datas);
    }

    public function bookCatalogue($code = null)
    {
        $file = $this->getBasePath() . "book/{$code}.php";
        $datas = require($file);
        $datas['bookCode'] = $code;
        $datas['tdkData'] = [
            'title' => $datas['name'] . '-' . $datas['brief'],
            'keywords' => '',
            'description' => '',
        ];
        $datas['pageCode'] = $code == 'shijing' ? 'shijing' : 'common';
        return $this->customView('list', $datas);
    }

    public function detailZhou($code = null)
    {
        $datas = $this->getDetailZhou($code);
        $datas['tdkData'] = [
            'title' => $datas['name'] . '-' . $datas['brief'],
            'keywords' => '',
            'description' => '',
        ];
        return $this->customView('detail', $datas);
    }

    public function show($bookCode, $chapterCode)
    {
        $datas = $this->getBookInfos($bookCode, $chapterCode);
        $datas['tdkData'] = [
            'title' => $datas['name'] . '-' . $datas['brief'],
            'keywords' => '',
            'description' => '',
        ];
        $view = in_array($bookCode, ['shijing']) ? 'detail-poetry' : 'show';
        return $this->customView($view, $datas);
    }

    public function getBasePath()
    {
        return base_path() . "/vendor/candocker/website/migrations/";
    }

    public function getBookInfos($bookCode = null, $chapterCode = null)
    {
        $file = $this->getBasePath() . "{$bookCode}/{$chapterCode}.php";

        $file = $this->getBasePath() . 'book/list.php';
        $datas = require($file);
        $datas['tdkData'] = [
            'title' => '古典精华',
            'keywords' => '',
            'description' => '',
        ];
        return require($file);
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
