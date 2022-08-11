<?php

namespace ModuleWebsite\Controllers;

class HumanController extends AbstractController
{
    use TraitCulture;

    public function home()
    {
        $data = $this->getHuman();
        return $this->customView('human', ['info' => $data]);
    }

    public function view()
    {
        $code = $this->getRouteParam('code');
        return $this->customView($code);
    }

    public function detail()
    {
        return $this->customView('show');
    }

    public function resume()
    {
        return $this->customView('resume');
    }

	public function isMobile($force = false)
	{
        if (empty($force)) {
		    return null;
        }
        return parent::isMobile($force);
	}

	protected function viewPath()
	{
		return 'website';
	}

    public function getHuman()
    {
        $code = $this->getRouteParam('code');
        $humanData = $this->getRepositoryObj('culture-figure')->getDetail($code);
        return $humanData;
    }
}
