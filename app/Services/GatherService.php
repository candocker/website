<?php

declare(strict_types = 1);

namespace ModuleWebsite\Services;

class GatherService extends AbstractService
{
    use SeriesTrait;

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
}
