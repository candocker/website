<?php

declare(strict_types = 1);

namespace ModuleWebsite\Services;

trait SeriesTrait
{
    public function _translationSeriesDatas($sort)
    {
        $seriesInfo = $this->getModelObj('culture-series')->where(['code' => $sort])->first();
        $datas = $this->getResourceObj($seriesInfo, 'frontInfo', 'culture-series');
        //$volumes = $seriesInfo->volumes;
        //$infos = $this->getCollectionObj($volumes, 'frontInfo', 'culture-seriesVolume');
        //print_r($this->resource->formatResultDatas($datas));exit();
        return ['infos' => $datas, 'view' => 'series'];
    }

    public function _classicalSeriesDatas($sort)
    {
        if ($sort == 'luxun') {
            $pointCodes = ['luxunsingle', 'luxunquanji1938', 'luxunquanji2005', 'luxunquanji1958', 'luxunquanji1981', 'luxunguji1999', 'luxunquanji2005', 'luxunmanuscript', 'luxunmanuall', 'luxunyanjiu'];
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
        return ['infos' => $datas, 'view' => 'classical'];
        //print_r($this->resource->formatResultDatas($datas));exit();
    }
}
