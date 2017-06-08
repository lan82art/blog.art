<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DATABASE','news_blog');

$pages = 5;
$admpages = 10;

$link = mysqli_connect(HOST,USER,PASS,DATABASE) or die('Error connection');

mysqli_query($link,"SET NAMES 'utf8'");
