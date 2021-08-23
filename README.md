# kladr_to_sqlite3
simple script for converting KLADR.DBF to SQLite3

used public libs from the https://github.com/nchizhov/inok-dbf
and connect required libs like this:
require_once('src/Table.php');
require_once('src/Records.php');

then you'll need to create a table in the SQLite3 database:
create table kladr(deleted varchar(10), name varchar(500), socr varchar(20), code  varchar(20), index1 varchar(100), gninmb varchar(100), uno varchar(100), ocatd  varchar(100), status varchar(100));

just download the latest official KLADR from the official russian gov. site: https://www.gnivc.ru/technical_support/classifiers_reference/kladr/
unzip and and copy KLADR.DBF into the current scripts directory, then use it, like this: 
$table = new \Inok\Dbf\Table('KLADR.DBF');


