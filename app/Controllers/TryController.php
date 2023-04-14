<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class TryController extends AbstractController
{
    public function test()
    {
    }

    public function timeline($sort = 'pingtai')
    {
        $datas = [];
        return $this->customView('timeline', ['datas' => $datas]);
    }

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

    public function book()
    {
        $code = $this->getRouteParam('code');
        $data = $this->getRepositoryObj('culture-book')->getDetail($code);
        return $this->customView('book', ['info' => $data]);
    }

    public function view()
    {
        $path = request()->input('path', '');
        $filepath = request()->input('filepath', '');
        if (empty($path)) {
            $path = '/data/htmlwww/new-laravel/vendor/candocker/website/resources/views/website/dealed/';
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

    public function testcss($sort = 'pingtai')
    {
        $elem = $this->request->input('elem');
        $elem = empty($elem) ? 'home' : $elem;
        $datas = ['elem' => $elem, 'elems' => $this->getElemDatas()];
        return $this->customView('css', $datas);
    }

    public function checkPackage()
    {
        $json = file_get_contents(base_path() . '/composer.lock');
        $arr = json_decode($json, true);
        $packages = [];
        $serial = 1;
        foreach ($arr['packages'] as $info) {
            $packages[$info['name']] = ['url' => $info['source']['url'], 'version' => $info['version'], 'serial' => $serial];
            $serial++;
        }

        $newArr = json_decode(file_get_contents('/data/opensource/myself/swoolecan/foundation/composer.lock'), true);
        $newArr2 = json_decode(file_get_contents('/data/opensource/myself/swoolecan/laravel-baseapp/composer.lock'), true);

        foreach ($newArr['packages'] as $info) {
            $name = $info['name'];
            $data = ['url' => $info['source']['url'], 'version' => $info['version'], 'serial' => $serial];
            if (in_array($name, array_keys($packages))) {
                $packages[$name]['new'] = $data;
            } else {
                $packages[$name] = $data;
            }
            $serial++;
        }

        foreach ($newArr2['packages'] as $info) {
            $name = $info['name'];
            $data = ['url' => $info['source']['url'], 'version' => $info['version'], 'serial' => $serial];
            if (in_array($name, array_keys($packages))) {
                $packages[$name]['new1'] = $data;
            } else {
                $packages[$name] = $data;
            }
            $serial++;
        }
        $datas['infos'] = $packages;
        return $this->customView('package', $datas);
        print_r($packages);exit();
        exit();
    }

	protected function viewPath()
	{
		return 'website';
	}

    public function getElemDatas()
    {
        return [
            'flex', 'position', 'test', 'test1', 'align', 'attrselect', 'background', 'base', 'border',
            'box', 'dimension', 'display', 'float', 'font', 'group', 'home', 'image', 'jscss',
            'list', 'media', 'nav1', 'nav', 'outline', 'padding', 'pseudo', 'select', 'table', 'text',
        ];
    }
}
