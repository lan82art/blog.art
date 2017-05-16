<?php
/*
 * одминка
 * создать или удалить категорию новости
 * новости надо создать редактировать удалить, поля смотреть в базе
 * создать или удалить инф страницу
 *
 * */
session_start();
//var_dump($_SERVER);
if (!empty($_GET['route'])){
    $filename = $_SERVER['DOCUMENT_ROOT']. "/admin/controllers/".$_GET['route'].".php";
}
require_once $_SERVER['DOCUMENT_ROOT']. "/config.php";
require_once $_SERVER['DOCUMENT_ROOT']. "/admin/system/request.php";

if($_SERVER['REQUEST_URI'] == '/admin/'){
    require_once $_SERVER['DOCUMENT_ROOT']. "/admin/controllers/home.php";
} elseif (!empty($filename) && file_exists($filename)){
    require_once $filename;
} else {
    require_once $_SERVER['DOCUMENT_ROOT']. "/admin/controllers/404.php";
}
