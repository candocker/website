<?php

namespace ModuleWebsite\Controllers;

class GraphicController extends AbstractController
{
    public function home()
    {
        $this->getHuman();
        return $this->customView('home');
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
		return 'graphic';
	}
}
