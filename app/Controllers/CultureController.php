<?php 
namespace ModuleWebsite\Controllers;

use Swoolecan\Foundation\Helpers\CommonTool;

class CultureController extends AbstractController
{
    public function view($code = '')
    {
        $datas = [];
        $view = 'elem-' . str_replace('_', '/', $code);
        return $this->customView($view);
    }

    public function home($sort = 'pingtai')
    {
        $datas = [];
        return $this->customView('home', ['datas' => $datas]);
    }

    public function tool($sort = 'pingtai')
    {
        $sortModel = $this->getModelObj('bench-toolsort');
        $sorts = $sortModel->orderBy('orderlist', 'desc')->get()->toArray();
        $sorts = CommonTool::createTree($sorts, '');

		$sortData = $sortModel->where('code', $sort)->first();
        if (empty($sortData)) {
            $pCode = '';
            $subInfos = $sorts['yunying']['subInfos'];
        } else {
            $pCode = $sortData['parent_code'] == '' ? $sort : $sortData['parent_code'];
            $subInfos = $sorts[$pCode]['subInfos'];
        }

        $subInfos = $this->getToolDatas($subInfos);
        $datas = [
            'sort' => $sort,
            'pCode' => $pCode,
		    'sortCodes' => empty($sortCodes) ? null : $sortCodes,
            'sortData' => $sortData,
            'subInfos' => $subInfos,
            'sorts' => $this->isMobile(true) ? array_chunk($sorts, ceil(count($sorts) / 2), true) : [$sorts],
            'tdkDatas' => ['title' => '', 'description' => '', 'keyword' => ''],
        ];

		//$dataTdk = ['{{TAGSTR}}' => $sortData['name']];
		//$this->pagesysInfo['tdkData'] = ['{{TAGSTR}}' => isset($sortData['name']) ? $sortData['name'] : 'Web线上资源'];

		//return $this->render('index', $datas);
        return $this->customView('toolbar/index', ['datas' => $datas]);

        $key = 'toolbar-datas';
        $redis = $this->getServiceObj('redis');
        $datas = $redis->get($key, true);
        if (empty($datas)) {
            $datas = $this->getToolDatas();
            $redis->set($key, $datas);
        }
        //print_r($datas);exit();
        return $this->customView('toolbar/index', ['datas' => $datas]);
    }

    public function category($sort = '')
    {
        $datas = $this->getRepositoryObj('culture-scholarism')->getCategoryDatas($sort);
        return $this->customView('category', $datas);
        $datas = $this->getModelObj('culture-scholarism')->get();
        $oldDatas = $this->getModelObj('culture-headnote')->get();
        $oldDatas = $oldDatas->keyBy('name');
        foreach ($datas as $data) {
            $ext = '';
            if (isset($oldDatas[$data['name']])) {
                $old = $oldDatas[$data['name']];
                if ($old['volume'] != $data['volume']) {

                    echo "nnn-{$data['name']}-{$data['sort']}-{$data['volume']}-{$data['author']}-{$data['translator']}-{$data['nationality']}<br />";
                    echo "ooo-{$old['name']}-{$old['sort']}-{$old['volume']}-{$old['author']}-{$old['translator']}-{$old['nationality']}<br />";
                }
                $ext .= $data['author'] != $old['author'] ? $old['author'] . '===' : '';
                $ext .= $data['nationality'] != $old['nationality'] ? $old['nationality'] . '===' : '';
                $data->extfield = $ext;
                $data->translator = $old->translator;
                $data->save();
                $old->extfield = 'dealed';
                $old->save();
            }
        }
        exit();
    }

    public function bookDetail()
    {
        $datas = [];
        return $this->customView('book-detail', ['datas' => $datas]);
    }

    public function bookHome()
    {
        $datas = [];
        return $this->customView('book-home', ['datas' => $datas]);
    }

    public function bookList()
    {
        $datas = [];
        return $this->customView('book-list', ['datas' => $datas]);
    }

    public function channel()
    {
        $datas = [];
        return $this->customView('channel', ['datas' => $datas]);
    }

    public function collection()
    {
        $datas = [];
        return $this->customView('collection', ['datas' => $datas]);
    }

    public function figure()
    {
        $datas = [];
        return $this->customView('figure', ['datas' => $datas]);
    }

    public function shelf()
    {
        $datas = [];
        return $this->customView('shelf', ['datas' => $datas]);
    }

    public function store()
    {
        $datas = [];
        return $this->customView('store', ['datas' => $datas]);
    }

    protected function getToolDatabaks()
    {
        $sortModel = $this->getModelObj('bench-toolsort');
        $toolModel = $this->getModelObj('bench-toolbar');
        $firstSorts = $sortModel->where('parent_code', '')->get();
        $datas = [];
        foreach ($firstSorts as $fSort) {
            $fCode = $fSort['code'];
            $datas[$fCode] = $fSort->toArray();
            $subInfos = [];
            $subDatas = $sortModel->where('parent_code', $fCode)->get();
            foreach ($subDatas as $subData) {
                $sCode = $subData['code'];
                $subInfos[$sCode] = $subData->toArray();
                $tools = $toolModel->where(['sort' => $sCode])->get();
                $toolDatas = [];
                foreach ($tools as $tool) {
                    $toolDatas[$tool['code']] = $tool->toArray();
                }
                $subInfos[$sCode]['tools'] = $toolDatas;
            }
            $datas[$fCode]['subInfos'] = $subInfos;
        }

        return $datas;
    }

    /*protected function getToolDatas($subInfos)
    {
        $toolModel = $this->getModelObj('bench-toolbar');
        foreach ($subInfos as $sCode => & $sInfo) {
            $tools = $toolModel->where(['sort' => $sCode])->orderBy('orderlist', 'desc')->get();
            $toolDatas = [];
            foreach ($tools as $tool) {
                $toolDatas[$tool['code']] = $tool->toArray();
            }
            $sInfo['tools'] = $toolDatas;
        }
        return $subInfos;
    }*/

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
