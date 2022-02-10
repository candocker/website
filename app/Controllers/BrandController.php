<?php

namespace ModuleWebsite\Controllers;

class BrandController extends AbstractController
{
    public function home($code)
    {
        return $this->_showCommon($code, 'home', 'brand', 'infocms');
    }

    public function store($code)
    {
		$datas = [
			'title' => 'ggggg', 
			'keywords' => 'key', 
			'description' => 'description',
			'view' => 'store',
		];
        return $this->customView('store', $datas);
    }

	public function shop()
	{
		$datas = [
			'title' => 'ggggg', 
			'keywords' => 'key', 
			'description' => 'description',
			'view' => 'shop',
		];
        return $this->customView('shop', $datas);
	}

	public function product()
	{
		$datas = [
			'title' => 'ggggg', 
			'keywords' => 'key', 
			'description' => 'description',
			'view' => 'product',
		];
        return $this->customView('product', $datas);
	}

    public function detail($code)
    {
        return $this->_showCommon($code, 'detail', 'brand', 'infocms');
    }

	protected function viewPath()
	{
		return 'brand';
	}
}
