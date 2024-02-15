<?php
$db_user = 'root';
$dp_password = 'root'
$dp_name = 'apiexample'

$db = new PDO('mysql: host=127.0.0.1;dbname='.$dp_name.';charset=utf8',$db_user,$dp_password);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

define('APP_NAME','api example');

