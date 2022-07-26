<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class CultureController extends AbstractController
{
    public function view($code = '')
    {
        $datas = [];
        $elems = explode('_', $code);
        $view = 'sources/' . $elems[0] . '/_' . $elems[1];
        //echo $view;exit();
        return $this->customView($view);
    }

    public function home($sort = 'pingtai')
    {
        $datas = [];
        return $this->customView('home', ['datas' => $datas]);
    }

    public function graphic($sort = '')
    {
        $datas = [];//$this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        return $this->customView('table', $datas);
    }

    public function timeline($sort = '')
    {
        $datas = [];//$this->getRepositoryObj('culture-bookPublish')->getCategoryDatas($sort);
        return $this->customView('timeline', $datas);
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
}
