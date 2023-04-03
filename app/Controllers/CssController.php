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
