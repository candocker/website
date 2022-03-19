<?php
namespace ModuleWebsite\Controllers;

use Illuminate\Support\Facades\DB;

class TestController extends AbstractController
{
    public function test1()
    {
        $results = DB::table('TABLES')->where('TABLE_SCHEMA', 'edu-m')->get();
        $sql = ''; 

        $sqlBase = "/usr/local/mysql/bin/mysqldump --skip-opt -hsh-cdb-3mffa9sd.sql.tencentcdb.com -uBtest -P63316 -p'7CrughrSsMf9A%dfR43' --default-character-set=utf8mb4 --set-gtid-purged=off edu-m {{TABLE}} > /data/htmlwww/filesys/jdata/edu/logs/{{TABLE}}.sql";
        //$sqlBase = "/usr/local/mysql/bin/mysqldump -hsh-cdb-kg6rp4w2.sql.tencentcdb.com -uBtest -P61181 -p'qwer!@#$' --default-character-set=utf8mb4 udata {{TABLE}} > /data/htmlwww/filesys/rdata/{{TABLE}}.sql";
        $i = 1;
        foreach ($results as $data) {
            if ($i > 4) {
                //continue;
            }   
            $sql .= str_replace('{{TABLE}}', $data->TABLE_NAME, $sqlBase) . "\n";
            $i++;
            //print_R($data);exit();
        }   
        file_put_contents('/data/htmlwww/filesys/jdata/edu/sql.sql', $sql);//, FILE_APPEND);
        echo $sql;exit();
        return true;//false;
    }   
    public function _testOrder()
    {   
        $results = \DB::table('TABLES')->where('TABLE_SCHEMA', 'erp_data')->get();
        $sql = ''; 
        //$sqlBase = "/usr/local/mysql/bin/mysqldump -hsh-cdb-7uld4tnm.sql.tencentcdb.com -uEdata -P61182 -p'Lpsy88334558s' --default-character-set=utf8mb4 --set-gtid-purged=off erp_data {{TABLE}} > /data/htmlwww/filesys/jdata/erpdata/{{TABLE}}.sql";
        $sqlBase = "/usr/local/mysql/bin/mysqldump -h172.17.16.34 -uAdata -p'NoCfsxkGz2amyi3W' --default-character-set=utf8mb4 --set-gtid-purged=off erp_data {{TABLE}} > /data/wwwroot/default/lp0820/tmp/{{TABLE}}.sql";
        $i = 1;
        foreach ($results as $data) {
            $sql .= str_replace('{{TABLE}}', $data->TABLE_NAME, $sqlBase) . "\n";
            $i++;
            //print_R($data);exit();
        }   
        //file_put_contents('/data/htmlwww/filesys/jdata/erpdata/sql.sql', $sql);//, FILE_APPEND);
        echo $sql;exit();
        return true;//false;
    }
    /*{   
        $results = \DB::table('TABLES')->where('TABLE_SCHEMA', 'edu-m')->get();
        $sql = ''; 
        $sqlBase = "/usr/local/mysql/bin/mysqldump --skip-opt -hsh-cdb-3mffa9sd.sql.tencentcdb.com -uBtest -P63316 -p'7CrughrSsMf9A%dfR43' --default-character-set=utf8mb4 --set-gtid-purged=off edu-m {{TABLE}} > /backup/sql/edu/logs/{{TABLE}}.sql";
        $i = 1;
        foreach ($results as $data) {
            if ($i > 4) { 
                //continue;
            }   
            $sql .= str_replace('{{TABLE}}', $data->TABLE_NAME, $sqlBase) . "\n";
            $i++;
            //print_R($data);exit();
        }   
        //file_put_contents('/data/htmlwww/filesys/jdata/edu/sql.sql', $sql);//, FILE_APPEND);
        echo $sql;exit();
        return true;//false;
    }*/

    public function test()
    {   
        $results = DB::table('TABLES')->where('TABLE_SCHEMA', 'erp_data')->get();
        $sql = ''; 
        $sqlBase = "/usr/local/mysql/bin/mysqldump -hsh-cdb-7uld4tnm.sql.tencentcdb.com -uEdata -P61182 -p'Lpsy88334558s' --default-character-set=utf8mb4 --set-gtid-purged=off erp_data {{TABLE}} > /data/htmlwww/filesys/jdata/erpdata/{{TABLE}}.sql";
        $i = 1;
        foreach ($results as $data) {
            if ($i > 1) {
                //continue;
            }   
            $sql .= str_replace('{{TABLE}}', $data->TABLE_NAME, $sqlBase) . "\n";
            $i++;
            //print_R($data);exit();
        }   
        file_put_contents('/data/htmlwww/filesys/jdata/erpdata/sql.sql', $sql);//, FILE_APPEND);
        echo $sql;exit();
        return true;//false;
    }   

    protected function getEnvValue($key)
    {
        return env($key);
    }

    public function tmp()
    {
        $text = file('/data/log/dealdata/tmp/admin.json');
        $data = json_decode($text[0], true);
        return $this->successCustom($data);
        echo $text[0];exit();
        $request = $this->request;
        $inTest = config('app.inTest');
        if (empty($inTest)) {
            return $this->error(400, '非法请求');
        }
        $method = ucfirst($request->input('method', ''));
        $method = "_test{$method}";
        $this->$method($request);
    }

    public function option()
    {
        return $this->testTmp('option');
    }

    public function articleContext()
    {
        return $this->testTmp('acontext');
    }

    public function statistic()
    {
        return $this->testTmp('statistic');
    }

    public function archive()
    {
        return $this->testTmp('archive');
    }

    public function category()
    {
        return $this->testTmp('category');
    }

    public function comment()
    {
        return $this->testTmp('comment');
    }

    public function disqus()
    {
        return $this->testTmp('disqus');
    }

    public function tag()
    {
        return $this->testTmp('tag');
    }

    public function article()
    {
        $text = file('/data/log/dealdata/tmp/article.json');
        $model = $this->getModelObj('culture-cultureArticle');
        $info = $model->find(2);
        $data = json_decode($text[0], true);
        $data['result']['title'] = $info['title'];
        //$data['result']['content'] = file_get_contents('/tmp/content.txt');//$info['content'];
        $data['result']['content'] = $info['content'];
        return $this->successCustom($data);
        echo json_encode($data);exit();

        //print_r($data);exit();
    }

    public function ahot()
    {
        return $this->testTmp('ahot');
    }

    public function userinfo()
    {
        return $this->testTmp('userinfo');
    }

    public function acalendar()
    {
        return $this->testTmp('acalendar');
    }

    public function announce()
    {
        return $this->testTmp('announce');
    }

    public function articleList()
    {
        return $this->testTmp('articleList');
    }

    public function admin()
    {
        return $this->testTmp('admin');
    }

    protected function testTmp($code)
    {
        $text = file('/data/log/dealdata/tmp/' . $code . '.json');
        $data = json_decode($text[0], true);
        return $this->successCustom($data);
        echo $text[0];exit();
    }

    public function _test()
    {
        //exit();
    }
}
