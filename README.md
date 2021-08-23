# kladr_to_sqlite3
simple script for converting KLADR.DBF to SQLite3

used public libs from the https://github.com/nchizhov/inok-dbf

first of all need to create a table in the SQLite3 database:
create table kladr(deleted varchar(10), name varchar(500), socr varchar(20), code  varchar(20), index1 varchar(100), gninmb varchar(100), uno varchar(100), ocatd  varchar(100), status varchar(100));



