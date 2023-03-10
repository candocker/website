<?php

namespace ModuleWebsite\Presenters;

/**
 * Class BrandPresenter.
 *
 * @package namespace ModuleWebsite\Presenters;
 */
class BrandPresenter extends AbstractPresenter
{
    public function getProductDatas($brand)
    {
        return $brand->products;
    }

    public function getStoreDatas($brand)
    {
        return $brand->stores;
    }

    public function getWebsiteDatas($brand)
    {
        return $brand->websites;
    }
}
