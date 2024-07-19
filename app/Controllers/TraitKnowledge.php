<?php

namespace ModuleWebsite\Controllers;

use Illuminate\Support\Str;
use Swoolecan\Foundation\Helpers\CommonTool;

trait TraitKnowledge
{
    public function hotCourseList()
    {
        //$this->createCourses();exit();
        $courseDatas = $this->_getCourseDatas(8, true);

        return $this->success($courseDatas);
    }

    public function courseList()
    {
        //$this->createCourses();exit();
        $courseDatas = $this->_getCourseDatas();

        return $this->success($courseDatas);
    }

    public function _getCourseDatas($limit = 20, $withTeacher = false)
    {
        $query = $this->getModelObj('infocms-course');
        $query = $this->formatParams($query, $this->request->all());
        $infos = $query->limit($limit)->get();
        $cData = require(base_path() . '/vendor/candocker/website/resources/knowledge/courseData.php');
        $courseDatas = [];
        //print_r($cData);
        foreach ($infos as $info) {
            $data = $this->formatCourseData('course', $info, $cData);
            if ($withTeacher) {
                $data['tinfo'] = $this->formatCourseData('teacher', $info, $cData);
            }
            $courseDatas[] = $data;
        }
        return $courseDatas;
    }

    public function formatParams($query, $params)
    {
        $categoryCode = $params['category_code'] ?? '';
        if (!empty($categoryCode)) {
            $cDatas = $this->getModelObj('infocms-category')->where(['code' => $categoryCode])->orWhere(['parent_code' => $categoryCode])->pluck('code');
            $query = $query->whereIn('category_code', $cDatas);
        }
        return $query;
    }

    public function courseDetail()
    {
        $id = $this->request->input('id');
        $userId = $this->request->input('uid');

        $result = [];
        $info = $this->getModelObj('infocms-course')->where(['id' => $id])->first();
        if (empty($info)) {
            $this->resource->throwException(400, '参数有误');
        }
        $cData = require(base_path() . '/vendor/candocker/website/resources/knowledge/courseData.php');
        //print_r($cData);
        $result = [
            'menuinfo' => $this->formatCourseData('course', $info, $cData),
            'lessonInfos' => $this->formatCourseData('lesson', $info, $cData),
            'teacherInfo' => $this->formatCourseData('teacher', $info, $cData),
            'commentInfos' => $this->formatCourseData('comment', $info, $cData),
            'fileInfos' => $this->formatCourseData('file', $info, $cData),
            'homeworkInfos' => $this->formatCourseData('dianping', $info, $cData),
            'is_dingyue' => rand(0, 1),
        ];

        /*$file = base_path() . '/vendor/candocker/website/resources/thirddata/knowledge/course-detail.json';
        $text = file_get_contents($file);
        $datas = json_decode(trim($text), true);
        $result = $datas[$id] ?? $datas[3];*/
        //print_r($result);

        return $this->success($result);
    }

    public function knowledgeData($module, $action)
    {
        return $this->getContentData('knowledge', $module, $action);
    }

    public function globalSetting()
    {
        return $this->getContentData('knowledge', 'global', 'setting');
    }

    public function seckillData()
    {
        return $this->getContentData('knowledge', 'seckill', 'data');
    }

    public function homeDataMobile()
    {
        $result = $this->getContentData('knowledge', 'home-data', 'mobile', 'array');
        $result['data']['classify'] = $this->_classifyDatas('');
        $courseDatas = $this->_getCourseDatas();
        $result['data']['courses'] = $courseDatas;

        return $this->successCustom($result);
    }

    public function classifyDatas()
    {
        $parentCode = $this->request->input('parent_code', '');
        $result = $this->_classifyDatas($parentCode);
        return $this->success($result);
    }

    public function _classifyDatas($parentCode = null)
    {
        $results = [];
        $infos = $this->getModelObj('infocms-category')->where(['parent_code' => $parentCode])->orderBy('orderlist', 'desc')->get();
        foreach ($infos as $info) {
            //print_r($info->toArray());exit();
            $results[] = [
                'name' => $info->name,
                'code' => $info->code,
            ];
        }
        return $results;
    }

    /*public function _classifyDatas($pid = null)
    {
        $datas = [
            ['id' => '177', 'title' => '儒家', 'pid' => '0', 'sort' => '1'],
            ['id' => '180','title' => '鲁迅','pid' => '0','sort' => '3'],
            ['id' => '190','title' => '历史','pid' => '0','sort' => '4'],
            ['id' => '194','title' => '外国历史','pid' => '0','sort' => '8'],
            ['id' => '195','title' => '外国哲学','pid' => '0','sort' => '8'],
            ['id' => '185','title' => '儒学','pid' => '177','sort' => '1'],
            ['id' => '184','title' => '孔子传','pid' => '177','sort' => '1'],
            ['id' => '178','title' => '儒学简介','pid' => '177','sort' => '0'],
            ['id' => '182','title' => '论语人物','pid' => '177','sort' => '1'],
            ['id' => '183','title' => '儒学思想','pid' => '177','sort' => '1'],
            ['id' => '186','title' => '鲁迅研究','pid' => '180','sort' => '0'],
            ['id' => '200','title' => '鲁迅画册','pid' => '180','sort' => '5'],
            ['id' => '187','title' => '鲁迅作品','pid' => '180','sort' => '1'],
            ['id' => '188','title' => '鲁迅和他的时代','pid' => '180','sort' => '2'],
            ['id' => '198','title' => '鲁迅作品版本','pid' => '180','sort' => '4'],
            ['id' => '203','title' => '史记','pid' => '190','sort' => '1'],
            ['id' => '204','title' => '资治通鉴','pid' => '190','sort' => '2'],
            ['id' => '205','title' => '历代帝王','pid' => '190','sort' => '3'],
            ['id' => '206','title' => '上下五千年年','pid' => '190','sort' => '4'],
            ['id' => '207','title' => '消失的帝国','pid' => '194','sort' => '5'],
            ['id' => '208','title' => '中东的战乱','pid' => '194','sort' => '1'],
            ['id' => '209','title' => '汉译学术名著','pid' => '195','sort' => '2'],
            ['id' => '210','title' => '宗教','pid' => '195','sort' => '2'],
        ];
        $result = [];
        foreach ($datas as $data) {
            if (!is_null($pid) && $data['pid'] != $pid) {
                continue;
            }
            $data['acid'] = 1;
            $data['status'] = 1;
            $data['css'] = 0;
            $data['name'] = '';
            $data['create_time'] = time();
            $data['update_time'] = time();
            $result[] = $data;
        }
        return $result;
    }*/

    public function createCourses()
    {
        /*$courses = $this->getModelObj('infocms-course')->get();
        $str = '';
        foreach ($courses as $course) {
            $courseId = $course['id'];
            $courseSql = "UPDATE `wp_course` SET `name` = '', `title` = '', `cover_url` = '', `description` = '' WHERE `wp_course`.`id` = {$courseId}; // {$course['name']}\n";
            $str .= $courseSql;
            $sections = $this->getModelObj('infocms-section')->where(['course_id' => $courseId])->get();
            foreach ($sections as $section) {
                $sectionId = $section['id'];
                $sectionSql = "UPDATE `wp_section` SET `name` = '', `description` = '' WHERE `wp_section`.`id` = {$sectionId}; // {$section['name']}\n";
                $str .= $sectionSql;
                $lessons = $this->getModelObj('infocms-lesson')->where(['section_id' => $sectionId])->get();
                foreach ($lessons as $lesson) {
                    $lessonSql = "UPDATE `wp_lesson` SET `name` = '' WHERE `wp_lesson`.`id` = {$lesson['id']}; // {$lesson['name']}\n";
                    $str .= $lessonSql;
                }
                $str .= "\n\n";
            }
            $str .= "\n\n";
        }
        echo $str;exit();*/
        $sqlPre = "INSERT INTO `wp_course` (`category_code`, `name`, `title`, `cover_url`, `description`, `created_at`, `updated_at`) VALUES \n";
        $lsqlPre = "INSERT INTO `wp_lesson` (`course_id`, `name`, `orderlist`, `created_at`, `updated_at`) VALUES \n";
        $fInfos = $this->getModelObj('infocms-category')->where(['parent_code' => ''])->orderBy('orderlist', 'desc')->get();
        $sql = '';
        foreach ($fInfos as $fInfo) {
            $infos = $this->getModelObj('infocms-category')->where(['parent_code' => $fInfo['code']])->orderBy('orderlist', 'desc')->get();
            foreach ($infos as $info) {
                $sql .= "-- {$fInfo['name']}-{$info['name']}\n";
                $sql .= "{$sqlPre} ('{$info['code']}', '', '', '', '', NOW(), NOW());\n";
                $sql .= "{$lsqlPre} ('', '', '1', NOW(), NOW());\n";
                //echo $sql;exit();
            }
        }
        echo $sql;
        exit();
        /*$fInfos = $this->getModelObj('infocms-category')->where(['parent_code' => ''])->orderBy('orderlist', 'desc')->get();
        foreach ($fInfos as $fInfo) {
            $infos = $this->getModelObj('infocms-category')->where(['parent_code' => $fInfo['code']])->orderBy('orderlist', 'desc')->get();
            foreach ($infos as $info) {
                $cNum = rand(3, 5);
                echo $cNum;
                for ($i = 1; $i <= $cNum; $i++) {
                    $title = $i . '_' . $fInfo['name'] . '-' . $info['name'];
                    $data = [
                        'category_code' => $info['code'],
                        'name' => $title,
                        'title' => $title,
                    ];
                    //print_r($data);
                    $course = $this->getModelObj('infocms-course')->create($data);
                    $course->createSectionLessons();
                }
            }
        }
        print_r($datas);*/
    }

    public function formatCourseData($type, $info, $courseData)
    {
        if ($type == 'course') {
            $data = $courseData['course'];
            $data['new_yxqdata'] = $courseData['new_yxqdata'];
    
            $data['id'] = $info['id'];
            $data['menuname'] = $info['name'];
            $data['jianjie'] = $info['title'];
            $data['lessonNum'] = $info['lesson_num'];
            $data['categoryName'] = '鲁迅作品';
            //$data['menuname'] = $info['id'] . '-' . $info['title'];
            $data['thumb'] = $info['cover_url'] ?: 'http://upfile.canliang.wang/course/cover/common.jpg';
            return $data;
        }
        if ($type == 'lesson') {
            $lInfos = $this->getModelObj('infocms-lesson')->where(['course_id' => $info['id']])->get();
            $results = [];
            foreach ($lInfos as $lInfo) {
                $lData = $courseData['lesson'];
                $lData['id'] = $lInfo['id'];
                $lData['coursename'] = $lInfo['name'];
                $results[] = $lData;
            }
            return $results;
        }
        if ($type == 'teacher') {
            //$lInfos = $this->getModelObj('infocms-teacher')->where(['course_id' => $info['id']])->get();
            $tData = $courseData['teacher'];
            return $tData;
        }
        if ($type == 'file') {
            $cInfos = [];//$this->getModelObj('infocms-comment')->where(['course_id' => $info['id']])->get();
            $results = [];
            $randNum = rand(5, 10);
            //foreach ($lInfos as $lInfo) {
            for ($i = 1; $i <= $randNum; $i++) {
                $fData = $courseData['file'];
                $results[] = $fData;
            }
            return $results;
        }
        if ($type == 'comment') {
            $cInfos = [];//$this->getModelObj('infocms-comment')->where(['course_id' => $info['id']])->get();
            $results = [];
            $randNum = rand(5, 10);
            //foreach ($lInfos as $lInfo) {
            for ($i = 1; $i <= $randNum; $i++) {
                $cData = $courseData['comment'];
                $results[] = $cData;
            }
            return $results;
        }
        if ($type == 'dianping') {
            $dInfos = [];//$this->getModelObj('infocms-comment')->where(['course_id' => $info['id']])->get();
            $results = [];
            $randNum = rand(5, 10);
            //foreach ($lInfos as $lInfo) {
            for ($i = 1; $i <= $randNum; $i++) {
                $dData = $courseData['dianping'];
                $results[] = $dData;
            }
            return $results;
        }
    }

    public function createCourseData()
    {
        $courseElems = [];

        $detailFile = base_path() . '/vendor/candocker/website/resources/thirddata/knowledge/course-detail.json';
        $detailText = file_get_contents($detailFile);
        $detailDatas = json_decode(trim($detailText), true);
        $detailData = $detailDatas[3];
        $courseElems['new_yxqdata'] = $detailData['menuinfo']['new_yxqdata'];
        $courseElems['lesson'] = $detailData['courses'][0];
        $courseElems['teacher'] = $detailData['teacher'];
        $courseElems['comment'] = $detailData['comment'][0];
        $courseElems['file'] = $detailData['files'][0];
        $courseElems['dianping'] = $detailData['dianpings'][0];

        $thumbs = [];
        $descs = [];
        $id = $this->request->input('id');
        $userId = $this->request->input('uid');
        $file = base_path() . '/vendor/candocker/website/resources/thirddata/knowledge/course-all.json';
        $text = file_get_contents($file);
        $datas = json_decode(trim($text), true);
        foreach ($datas['data'] as $data) {
            $descs[] = $data['introduce'];
            $thumbs[] = $data['thumb'];
            //print_r($data);exit();
        }
        $courseElems['course'] = $data;
        $courseElems['thumbs'] = $thumbs;
        $courseElems['descs'] = $descs;
        var_export($courseElems);
        exit();
    }

}
