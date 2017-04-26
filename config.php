<?php
define('HOST','localhost');
define('USER','root');
define('PASS','Creation');
define('DATABASE','news_blog');

$link = mysqli_connect(HOST,USER,PASS,DATABASE) or die('Error connection');

mysqli_query($link,"SET NAMES 'utf8'");