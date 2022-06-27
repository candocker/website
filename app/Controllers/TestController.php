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

	/*public function test()
	{
		$str = '';
		$domains = [
			'culture' => 'http://culture.91zuiai.com', 
			'pet' => 'http://pet.91zuiai.com', 
            'subject' => 'http://subject-test.91zuiai.com',
            'brand' => 'http://brand-test.91zuiai.com',
			'guide' => 'http://guide.91zuiai.com',
            'human' => 'http://human-test.91zuiai.com',
		];

		$routes = [
			'culture' => ['/', '/listinfo', '/show-1'],
			'pet' => ['/', '/info-show-1', '/info-list', '/info-home', '/pet-home', '/pet-list', '/pet-show-1', '/special-list', '/special-show-1'],
			'subject' => ['/', '/human', '/info', '/knowledge', '/league', '/product', '/shop', '/store'],
			'brand' => ['/', '/detail', '/product', '/shop', '/store'],
			'guide' => ['/', '/show-human-1', '/show-info-1', '/show-knowledge-1', '/show-league-1', '/show-shop-1', '/show-store-1', '/vote'],
			'human' => ['/', '/404', '/about', '/blog', '/contact', '/elements', '/gallery', '/home_alternative', '/page_alternative', '/portfolio', '/portfolio_item', '/portfolio_item_2', '/register', '/services', '/single_post', '/resume'],
		];

		foreach (['culture', 'pet', 'subject', 'brand', 'guide', 'human'] as $elem) {
			$domain = $domains[$elem];
			foreach ($routes[$elem] as $route) {
				$url = $domain . $route;
				$str .= "<a href='{$url}' target='_blank'>{$url}</a><br />";
			}
		}
        //echo "<img src='http://api.91zuiai.com/captcha' />";
		echo $str;
    }*/

    public function _test()
    {
        //exit();
    }
}
