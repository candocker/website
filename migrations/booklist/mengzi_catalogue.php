<?php
$cResult = [];
$command = '';
foreach ([1 => 7, 2 => 16, 3 => 9, 4 => 14, 5 => 5, 6 => 10, 7 => 28, 8 => 33, 9 => 9, 10 => 9, 11 => 20, 12 => 16, 13 => 46, 14 => 38] as $key => $value) {
    for ($v = 1; $v <= $value; $v++) {
        $cResult["{$key}_{$v}"] = ['code' => '', 'name' => $v, 'nameFull' => '第' . $v . '节', 'brief' => '', 'keyword' => ''];
        /*if ($key > 1) {
            $command .= "cp bak.php {$key}_{$v}.php\n";
        }*/
    }
}
//echo $command;exit();
return $cResult;
