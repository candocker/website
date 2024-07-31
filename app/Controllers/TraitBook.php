<?php

namespace ModuleWebsite\Controllers;

trait TraitBook
{
    protected function getBookInfos($sort, $bookCode = null, $withTdk = false)
    {
        $bookListFile = $this->getBasePath() . $sort . 'list/index.php';
        $bookDatas = require($bookListFile);
        if (!empty($bookCode)) {
            foreach ($bookDatas['chapters'] as $chapter) {
                if (isset($chapter['books'][$bookCode])) {
                    return $chapter['books'][$bookCode];
                }
            }
        }

        if ($withTdk) {
            $bookDatas['tdkData'] = $this->formatTdk($bookDatas);
            return $bookDatas;
        }
        return $bookDatas;
    }

    protected function formatTdk($datas)
    {
        $tdkData = [
            'title' => $datas['name'] ?? '经典古籍',
            'keywords' => $datas['kewowrd'] ?? '',
            'description' => $datas['brief'] ?? '',
        ];
        return $tdkData;
    }
}
