<?php
define('HOST','192.168.100.100');
define('USER','root');
define('PASS','KcR33sQjTAwagKh');
define('DATABASE','news_blog');

$link = mysqli_connect(HOST,USER,PASS,DATABASE) or die('Error connection');

mysqli_query($link,"SET NAMES 'utf8'");