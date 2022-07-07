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
            'title' => '群经之首-周易',
            'keywords' => '经典，周易，易经，易传',
            'description' => '',
        ];
        return $this->customView('list', $datas);
    }

    public function scripturesPoetry()
    {
        $datas = $this->getListPoetry();
        $datas['tdkData'] = [
            'title' => '群经之首-周易',
            'keywords' => '经典，周易，易经，易传',
            'description' => '',
        ];
        return $this->customView('list', $datas);
    }

    public function bookCatalogue($code = null)
    {
        $datas = $this->getBookDetail($code, 'chapter');
        $datas['bookCode'] = $code;
        $datas['tdkData'] = [
            'title' => $datas['name'] . '-' . $datas['brief'],
            'keywords' => '',
            'description' => '',
        ];
        return $this->customView('catalogue', $datas);
    }

    public function detailZhou($code = null)
    {
        $datas = $this->getDetailZhou($code);
        $datas['tdkData'] = [
            'title' => $datas['name'] . '-' . $datas['brief'],
            'keywords' => '',
            'description' => '',
        ];
        $datas['mobileClass'] = $this->resource->isMobile() ? 'mobile' : '';
        return $this->customView('detail', $datas);
    }

    public function show($bookCode, $chapterCode)
    {
        $datas = $this->getBookDetail($bookCode, $chapterCode);
        $datas['tdkData'] = [
            'title' => $datas['name'] . '-' . $datas['brief'],
            'keywords' => '',
            'description' => '',
        ];
        return $this->customView('show', $datas);
    }

    public function home($code = null, $extcode = null)
    {
        $datas = [
            'title' => '经典古籍',
            'brief' => '经典古典经书',
        ];
        $datas['books'] = [
            ['code' => 'zhouyi', 'name' => '周易'],
            ['code' => 'lunyu', 'name' => '论语'],
            ['code' => 'daodejing', 'name' => '道德经'],
            ['code' => 'daxue', 'name' => '大学'],
            ['code' => 'zhongyong', 'name' => '中庸'],
            ['code' => 'mengzi', 'name' => '孟子'],
            ['code' => 'zhuangzi', 'name' => '庄子'],
            ['code' => 'shijing', 'name' => '诗经'],
            //['code' => 'mozi', 'name' => '墨子'],
            //['code' => 'xunzi', 'name' => '荀子'],
            //['code' => 'tongshu', 'name' => '通书'],
        ];
        $datas['tdkData'] = [
            'title' => '古典精华',
            'keywords' => '',
            'description' => '',
        ];
        return $this->customView('home', $datas);
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
