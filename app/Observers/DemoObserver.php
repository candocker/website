<?php

declare(strict_types = 1);

namespace ModuleWebsite\Observers;

use ModuleWebsite\Models\Demo;

class DemoObserver
{
    public function deleting(Demo $model)
    {
        //return $model->canDelete();
    }
}
