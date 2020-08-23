<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'vkr';
global $db;
$db = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
mysqli_select_db($db,$db_database) or die ("Нет соединения с БД".mysqli_error());
mysqli_query($db,"SET names UTF8");
?>