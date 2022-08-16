<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class CultureController extends AbstractController
{
    use TraitCulture;

    public function home($sort = 'pingtai')
    {
        $datas = [];
        return $this->customView('home', ['datas' => $datas]);
    }

    public function series($sort = '', $volumeId = null)
    {
        //$datas = $this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        //$datas = [];

        $params = $this->request->all();
        $graphicService = $this->getServiceObj('culture-graphic');

        if (!empty($volumeId)) {
            $view = 'series-book';
            $datas = $graphicService->formatVolumeDatas($volumeId);
        } else if (!empty($sort)) {
            $view = 'series-volume';
            $datas = $graphicService->formatSeriesDatas($sort);
        } else {
            $view = 'series';
            $datas = $graphicService->formatAllSeries();
        }
        $datas['currentNav'] = 'series';
        //return $this->success($datas);

        //$datas = $graphicService->formatResultDatas($sort, $extcode, $params);
        return $this->customView($view, $datas);
    }

    public function human()
    {
        $code = $this->getRouteParam('code');
        $data = $this->getRepositoryObj('culture-figure')->getDetail($code);
        return $this->customView('human', ['info' => $data]);
    }

    public function dynasty()
    {
        $code = $this->getRouteParam('code');
        $data = $this->getRepositoryObj('culture-dynasty')->getDetail($code);
        return $this->success($data);
        return $this->customView('dynasty', ['info' => $data]);
    }

    public function book()
    {
        $code = $this->getRouteParam('code');
        $data = $this->getRepositoryObj('culture-book')->getDetail($code);
        return $this->customView('book', ['info' => $data]);
    }

	protected function viewPath()
	{
		return 'website';
	}

	public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
	}

    public function view()
    {
        $path = request()->input('path', '');
        $filepath = request()->input('filepath', '');
        if (empty($path)) {
            $path = '/data/htmlwww/laravel-system/vendor/candocker/website/resources/views/website/dealed/';
            $files = CommonTool::getPathFiles($path);
            foreach ($files as $file) {
                if (in_array($file, ['bak', 'home.blade.php'])) {
                    continue;
                }
                $subPath = $path . $file;
                $subFiles = CommonTool::getPathFiles($subPath);
                foreach ($subFiles as $subFile) {
                    if (is_dir($subPath . '/' . $subFile)) {
                        continue;
                    }
                    $subFile = str_replace('.blade.php', '', $subFile);
                    echo "<a href='/dev-view?path={$file}&filepath={$subFile}' target='_blank'>{$file}-{$subFile}</a><br />";
                }
            }
            exit();
        }
        $view = 'dealed/home';
        $datas = [
            'path' => $path,
            'file' => $filepath,
            'currentNav' => '',
        ];
        if (in_array($filepath, ['_sample-page-1'])) {
            $datas['navAuto'] = true;
            $datas['navOverlay'] = true;
        }
        return $this->customView('dealed/home', $datas);
    }

	/*public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
    }*/

    public function luxunResume()
    {
        $repository = $this->getRepositoryObj('culture-series');
        $pointCodes = ['luxunquanji1938', 'luxunquanji2005', 'luxunquanji1958', 'luxunquanji1981', 'luxunmanuscript', 'luxunmanuall'];
        $datas = $repository->getSeriesDatas($pointCodes);
        return $this->success($datas);
    }

    public function luxunWorks()
    {
        $repository = $this->getRepositoryObj('culture-series');
        $pointCodes = ['luxunquanji1938', 'luxunquanji2005', 'luxunquanji1958', 'luxunquanji1981', 'luxunmanuscript', 'luxunmanuall'];
        $datas = $repository->getSeriesDatas($pointCodes);
        return $this->success($datas);
    }
}
