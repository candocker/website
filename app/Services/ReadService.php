<?php

declare(strict_types = 1);

namespace ModuleWebsite\Services;

class ReadService extends AbstractService
{
    public function getSeriesDatas($bigsort, $sort)
    {
        $method = "_{$bigsort}SeriesDatas";
        return $this->$method($sort);
    }

    protected function comparison()
    {
        $headers = ['年份', '鲁国', '孔子'];
        $startYear = -1000;
        $endYear = -400;
        $step = 10;
        $infos = [];

        for ($i = $startYear; $i <= $endYear; $i++) {
            $j = 0;
            //$infos[] = [$i, 'l', 'k'];
        }
        return ['headers' => $headers, 'infos' => $infos];
    }

    public function _translationSeriesDatas($sort)
    {
        $seriesInfo = $this->getModelObj('culture-series')->where(['code' => $sort])->first();
        $datas = $this->getResourceObj($seriesInfo, 'frontInfo', 'culture-series');
        //$volumes = $seriesInfo->volumes;
        //$infos = $this->getCollectionObj($volumes, 'frontInfo', 'culture-seriesVolume');
        //print_r($this->resource->formatResultDatas($datas));exit();
        $tdkData = [
            'title' => $datas['name'],
            'keywords' => $datas['name'],
            'description' => $datas['brief'],
        ];
        return ['infos' => $datas, 'view' => 'series', 'tdkData' => $tdkData];
    }

    public function _classicalSeriesDatas($sort)
    {
        if ($sort == 'luxun') {
            $pointCodes = ['luxunsingle', 'luxunquanji1938', 'luxunquanji1958', 'luxunyiwenji1958', 'luxunquanji1981', 'luxunguji1999', 'luxunquanji2005', 'luxunmanuscript', 'luxunmanuall', 'luxunyanjiu'];
            $infos = $this->getRepositoryObj('culture-series')->getSeriesDatas($pointCodes);
            $datas['name'] = '鲁迅作品';
            $datas['brief'] = '鲁迅全集';
        } elseif ($sort == 'goodwork') {
            $pointCodes = ['goodworks'];
            $infos = $this->getRepositoryObj('culture-series')->getSeriesDatas($pointCodes);
            $datas['name'] = '名家名作';
            $datas['brief'] = '名家名作';
        } else {
            $pointCodes = ['classical'];
            $infos = $this->getRepositoryObj('culture-series')->getSeriesDatas($pointCodes);
            $datas['name'] = '经典古籍';
            $datas['brief'] = '经典古籍';
        }
        $datas['series'] = $infos;
        $tdkData = [
            'title' => $datas['name'],
            'keywords' => $datas['name'],
            'description' => $datas['brief'],
        ];
        return ['infos' => $datas, 'view' => 'classical', 'tdkData' => $tdkData];
        //print_r($this->resource->formatResultDatas($datas));exit();
    }
}
