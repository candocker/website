<?php

namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class NavigationController extends AbstractController
{
    public function isMobile($force = false)
    {
        if (empty($force)) {
            return null;
        }
        return parent::isMobile($force);
    }

    protected function dealDatanew()
    {
        $websiteModel = $this->getModelObj('bench-website');
        $positionInfoModel = $this->getModelObj('bench-positionInfo');
        //$navModel = $this->getModelObj('bench-navigation');
        $navsortModel = $this->getModelObj('bench-navsort');
        $navsortInfoModel = $this->getModelObj('bench-navsortInfo');

        $this->_dealDomain($websiteModel, $navsortInfoModel, $positionInfoModel);
        //$this->_dealNavData($websiteModel, $navsortInfoModel, $positionInfoModel);
    }

    protected function dealData()
    {
        $websiteModel = $this->getModelObj('bench-website');
        $positionInfoModel = $this->getModelObj('bench-positionInfo');
        //$navModel = $this->getModelObj('bench-navigation');
        $navsortModel = $this->getModelObj('bench-navsort');
        $navsortInfoModel = $this->getModelObj('bench-navsortInfo');

        //$this->_dealDomain($websiteModel, $navsortInfoModel, $positionInfoModel);
        $this->_dealNavData($websiteModel, $navsortModel, $navsortInfoModel, $positionInfoModel);
        //$this->_dealWebsiteIcon($websiteModel, $navsortModel, $navsortInfoModel, $positionInfoModel);
    }

    protected function _dealNavData($websiteModel, $navsortModel, $navsortInfoModel, $positionInfoModel)
    {
        $bigSorts = $navsortModel->where('parent_code', '')->get();
        $bigSorts = [
            'cartoon', 'coolsite', 'design', 'game', 'news', 'rank','readnav', 'search',
            'shop', 'study', 'tvfilm', 'pingtai', 'wenan', 
            'sucai', 'redian', 'website', 
            'common', 'operation', 'picture', 'tool'
        ];
        $bigSort = $navsortModel->where('code', 'tool')->first();
        $subSorts = $bigSort->getSubElem()->toArray();
        $subCodes = array_keys($subSorts);
        $subCodeStr = implode("','", $subCodes);
        $sql = "SELECT `w`.`name`, `w`.`url`, `w`.`id`, `n`.`name`, `n`.`code`, `n`.`id` FROM `wp_website` AS `w`, `wp_navsort` AS `n`, `wp_navsort_info` AS `ni` WHERE `w`.`id` = `ni`.`info_id` AND `ni`.`navsort_code` = `n`.`code` AND `ni`.`navsort_code` IN ('{$subCodeStr}');";
        echo $sql;
        $sorts = $navsortModel->where('parent_code', $bigSort['code'])->get();
        foreach ($sorts as $sort) {
            $infos = $navsortInfoModel->where('navsort_code', $sort['code'])->limit(500)->get();
            $sql = '';
            echo "<h2>{$sort['name']}-{$sort['code']}-{$sort['id']}</h2>";
            $websiteIds = [];
            foreach ($infos as $info) {
                $websiteIds[] = $info['info_id'];
                $website = $info->website;
                $sql = $this->formatWebsite($website, $sql, $navsortInfoModel, $positionInfoModel);
            }
            $websiteIdStr = implode(',', $websiteIds);
            echo "SELECT * FROM `wp_navsort_info` WHERE `info_id` IN ({$websiteIdStr});<br />";
        }
        exit();
    }

    protected function _dealDomain($websiteModel, $navsortInfoModel, $positionInfoModel)
    {
        //$wInfos = $websiteModel->where('extfield', '<>', '999')->where('extfield', '')->where('extfield', '<>', '200')->limit(50)->get();
        $wInfos = $websiteModel->where('extfield', '999')->get();
        $tmps = [];
        foreach ($wInfos as $wInfo) {
            $tmps[$wInfo['domain']][$wInfo['url']] = $wInfo;
        }

        foreach ($tmps as $domain => $tmp) {
            if (true) {//count($tmp) > 1) {
                echo "<h2>{$domain}==000=</h2>";
                ksort($tmp);

                $sql = "<br />SELECT * FROM `wp_website` WHERE `domain` = '{$domain};<br />";
                foreach ($tmp as $website) {
                    $sql = $this->formatWebsit($website, $sql, $navsortInfoModel, $positionInfoModel);
                }
                echo $sql;
            }
        }
        exit();

        $navsorts = $navsortModel->get();
        foreach ($navsorts as $navsort) {
            $code = $navsort['code'];
            $name = $navsort['name'];
            if (strpos($name, ' ') !== false) {
                if ($navsort['parent_code'] == 'nav') {
                    //continue;
                }
                $name = str_replace([' 更多>', ' / '], ['', '/'], $name);

                list($name, $description) = explode(' ', $name);
                echo $navsort['parent_code'] . '-----' . $name . '===' . $navsort['name'] . "<br />";

                $navsort->name = trim($name);
                $navsort->description = $navsort['name'];
                $navsort->save();
            }
        }
        exit();
    }

    protected function formatWebsite($website, $sql, $navsortInfoModel, $positionInfoModel)
    {
        $sInfos = $navsortInfoModel->where(['info_id' => $website['id']])->get();
        $rName = '';
        foreach ($sInfos as $sInfo) {
            $rName .= 'nn-' . $sInfo->navsort->name . '-' . $sInfo->navsort->id . '==' . $sInfo->navsort->code . '==';
        }
        $pInfos = $positionInfoModel->where(['info_id' => $website['id']])->get();
        foreach ($pInfos as $pInfo) {
            if ($pInfo->position_code == 'bottomrandoma') {
                $pInfo->position_code = 'bottomrandom';
            }
            $rName .= 'pp-' . $pInfo->position->name . '-' . $pInfo->position->id . '==';
        }
        //echo "<a href='{$website['url']}' target='_blank'>{$website['url']}</a>" . '    |=|=' . $website['id'] . '--' . $website->name . '==' . $rName . '<br />';
        echo "{$rName}==={$website->name}--<a href='{$website['url']}' target='_blank'>{$website['url']}</a>" . $website['id'] . '<br />';
        $sql .= "DELETE FROM `wp_website` WHERE `id` = {$website['id']};";
        $sql .= "DELETE FROM `wp_position_info` WHERE `info_id` = {$website['id']};";
        $sql .= "DELETE FROM `wp_navsort_info` WHERE `info_id` = {$website['id']};<br />";
        $website->extfield = 999;
        //$website->save();
        return $sql;
    }

    protected function _dealWebsiteIcon($websiteModel, $navsortModel, $navsortInfoModel, $positionInfoModel)
    {
        $infos = $websiteModel->where(['extfield1' => ''])->limit(500)->get();
        $sh = '';
        $pathPre = '/data/htmlwww/filesys/spider/pages';
        foreach ($infos as $info) {
            $logoPath = $info['logo_path'];
            //if (strpos($logoPath, 'http') === false || empty($logoPath)) {
            if (empty($logoPath)) {
                $info->extfield1 = 'old';
                $info->save();
                continue;
            }
            $tFile = $pathPre . $logoPath;
            if (file_exists($tFile)) {
                $info->extfield1 = 'yes';
            } else {
                $info->extfield1 = 'ooo';
            }
            $info->save();
            continue;
                
            $file = '/nav/icon/' . $info->id . substr($logoPath, strrpos($logoPath, '.'));
            $info->extfield = $file;
            $info->save();
            $file = $pathPre . $file;
            $sh .= "wget  -U \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36\" -O {$file} {$logoPath}\n";
            //echo $file . '<br />';
        }
        echo $sh;
        exit();
    }
}
