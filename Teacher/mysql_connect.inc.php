<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/12/6
 * Time: 上午 10:16
 */
$db_server = "localhost";
$db_name = "105021011_";
$db_user = "Leisure";
$db_passwd = "Leisure@asia";
if(!@mysqli_connect($db_server,$db_user,$db_passwd))
    die("無法對資料庫連線");
mysqli_query("SET NAMES utf8");
if(!@mysqli_select_db($db_name))
    die("無法使用資料庫");
?>

