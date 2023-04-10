<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class CssController extends AbstractController
{
    public function home($sort = 'pingtai')
    {
        $elem = $this->request->input('elem');
        $elem = empty($elem) ? 'home' : $elem;
        $datas = ['elem' => $elem, 'elems' => $this->getElemDatas()];
        return $this->customView('home', $datas);
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
		return 'study';
	}

	public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
	}

    public function getElemDatas()
    {
        return [
            'flex',
            'position',
            'test',
            'test1',
            'align',
            'attrselect',
            'background',
            'base',
            'border',
            'box',
            'dimension',
            'display',
            'float',
            'font',
            'group',
            'home',
            'image',
            'jscss',
            'list',
            'media',
            'nav1',
            'nav',
            'outline',
            'padding',
            'pseudo',
            'select',
            'table',
            'text',
        ];
    }
}
