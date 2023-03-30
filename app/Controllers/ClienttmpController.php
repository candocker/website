<?php

namespace ModuleWebsite\Controllers;

class ClienttmpController extends AbstractController
{
    use TraitClient;

    public function home($module = null, $action = null)
    {
        return $this->testTmp('client', $module, $action);
    }

    public function index($module = null, $action = null)
    {
        return $this->testTmp('client1', $module, $action);
    }

    protected function testTmp($pre, $module, $action)
    {
        $file = $file = base_path() . "/storage/tmp/zhuigenew/{$module}-{$action}";
        if (!file_exists($file)) {
            $file = base_path() . "/storage/tmp/zhuige/{$module}-{$action}.json";
        }
        $text = file($file);
        $data = json_decode($text[0], true);
        return $this->successCustom($data);
    }
}
