<?php

namespace ModuleWebsite\Controllers;

class ClientController extends AbstractController
{
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
        $file = "/data/backup/dealdata/{$pre}/{$module}-{$action}.json";
        $text = file($file);
        $data = json_decode($text[0], true);
        return $this->successCustom($data);
    }
}
