<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class CssController extends AbstractController
{
    public function home($sort = 'pingtai')
    {
        $elem = $this->request->input('elem');
        $elem = empty($elem) ? 'home' : $elem;
        $datas = ['elem' => $elem];
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

    public function getNavDatas()
    {
        return [
            'base' => [
                'name' => '基础',
            ],
            'senior' => [
                'name' => '进阶',
            ],
        ];
    }
}
