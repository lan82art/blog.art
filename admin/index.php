<?php
/*
 * одминка
 * создать или удалить категорию новости
 * новости надо создать редактировать удалить, поля смотреть в базе
 * создать или удалить инф страницу
 *
 * */
session_start();

if (!empty($_GET['route'])){
    $filename = $_SERVER['DOCUMENT_ROOT']. "/admin/controllers/".$_GET['route'].".php";
}
require_once $_SERVER['DOCUMENT_ROOT']. "/config.php";
require_once $_SERVER['DOCUMENT_ROOT']. "/admin/system/request.php";

if(((login($_POST['login'],$_POST['password'])) && (isset($_POST['enter']))) OR ($_SESSION['odm'] == 1)) {

    if ($_SERVER['REQUEST_URI'] == '/admin/') {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/controllers/home.php";
    } elseif (!empty($filename) && file_exists($filename)) {
        require_once $filename;
    } else {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/controllers/404.php";
    }
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/controllers/enter.php";
}