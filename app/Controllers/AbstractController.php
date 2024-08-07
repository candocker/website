<?php

declare(strict_types = 1);

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\View\FileViewFinder;
use Illuminate\Support\Facades\App;
use Framework\Baseapp\Controllers\AbstractController as AbstractControllerBase;

abstract class AbstractController extends AbstractControllerBase
{
    public function _listCommon($params, $view, $repositoryCode, $module)
    {
        $repository = $this->getPointRepository($modelCode, $module);
        $info = $model->find($id);
        $lists = $this->repository->paginate(null, ['*']);
        if (empty($info)) {
            echo 'info no exist';exit();
        }
        //print_R($info);
        $datas = [
            'view' => $view,
            'title' => $info['name'],
            'description' => $info['description'],
            'keyword' => $info['tag'],
            'info' => $info,
        ];
        return $this->customView($view, $datas);
    }

    public function _showCommon($id, $view, $modelCode, $module)
    {
        $model = $this->getModelObj($modelCode);
        $info = $model->find($id);
        if (empty($info)) {
            echo 'info no exist';exit();
        }
        //print_R($info);
        $datas = [
            'view' => $view,
            'title' => $info['name'],
            'description' => $info['description'],
            'keyword' => $info['tag'],
            'info' => $info,
        ];
        return $this->customView($view, $datas);
    }

    public function isMobile($force = false)
    {
        if (empty($force)) {
            return null;
        }
        return $this->resource->isMobile();
    }

    protected function customView($view, $datas = [], $viewPath = null)
    {
        $viewPath = is_null($viewPath) ? $this->viewPath() : $viewPath;
        $view = $viewPath . '.' . $view;
        $viewPre = $this->viewPre();
        /*$datas = array_merge([
            'title' => 'title',
            'keywords' => 'keywords',
            'description' => 'description'
        ], $datas);*/
        $datas['navDatas'] = $this->getNavDatas();
        $datas['bigNav'] = $datas['bigNav'] ?? '';
        $datas['currentNav'] = $datas['currentNav'] ?? '';
        if (!isset($datas['tdkData'])) {
            $datas['tdkData'] = [
                'title' => 'title',
                'keywords' => 'keywords',
                'description' => 'description',
            ];
        }
        $datas = $this->resource->formatResultDatas($datas);
        //print_r($datas);exit();
        return view($view, ['datas' => $datas]);
    }

    protected function getNavDatas()
    {
        return [];
    }

    protected function viewPre()
    {
        View::addLocation(app_path().'/views');
        $mobile = $this->isMobile();
        $path = is_null($mobile) ? '' : ($mobile ? 'mobile' : 'pc');
        //$path = 'mobile';
        if ($this->resource->isMobile()) {
            View::share('mobileClass', 'mobile');
        } else {
            View::share('mobileClass', '');
        }

        $viewBasePath = dirname(dirname(__DIR__)) . '/resources/views/';
        //$paths = [resource_path('views') . '/' . $path];
        $paths = [$viewBasePath . $path];
        $finder = new FileViewFinder(App::make ('files'), $paths);
        View::setFinder ($finder);
    }

    public function getBasePath()
    {
        return config('culture.material_path');
    }

    protected function getAppcode()
    {
        return 'website';
    }
}
