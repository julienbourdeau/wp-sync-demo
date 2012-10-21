<?php
include 'config.php';

$path = __DIR__ . SEP .".." . SEP . ".." . SEP . "wp-config.php";
include $path;

function your_prefix_backup_tables($host, $user, $pass)
{
  $link = mysql_connect($host,$user,$pass);
  mysql_select_db($name,$link);

  //load file
  $database_file = __DIR__ . SEP . 'database.sql';
  $sql = file_get_contents($database_file);

  $result = mysql_query($sql);

}


your_prefix_backup_tables(DB_HOST, DB_USER, DB_PASSWORD);