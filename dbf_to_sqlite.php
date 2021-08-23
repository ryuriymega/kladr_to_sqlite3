<?php
/*
create table kladr(deleted varchar(10), name varchar(500), socr varchar(20), code  varchar(20), index1 varchar(100), gninmb varchar(100), uno varchar(100), ocatd  varchar(100), status varchar(100));

insert into kladr values('deleted', 'name', 'socr', 'code', 'index1', 'gninmb', 'uno', 'ocatd', 'status').....

(
    [deleted] =>
    [name] => Тюра-Там
    [socr] => п
    [code] => 9900000000200
    [index] => 468320
    [gninmb] => 9901
    [uno] =>
    [ocatd] => 55000000000
    [status] => 0
)
*/

$db = new SQLite3('ex1');

require_once('src/Table.php');
require_once('src/Records.php');
$table = new \Inok\Dbf\Table('KLADR.DBF');

print_r($table->getColumns());

$data=$table->getData();
$records = new \Inok\Dbf\Records($data, 'utf8', $table->getHeaders(), $table->getColumns());

$s1=$records->nextRecord();
$query="insert into kladr values('".$s1['deleted']."', '".$s1['name']."', '".$s1['socr']."', '".$s1['code']."', '".$s1['index']."', '".$s1['gninmb']."', '".$s1['uno']."', '".$s1['ocatd']."', '".$s1['status']."')";
$db->exec($query);
//exit;
while($s1){
        print_r($s1);
		$s1=$records->nextRecord();
}


?>
