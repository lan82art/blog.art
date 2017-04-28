<?php
/*
 * {
  "name": "vendor_name/package_name",
  "description": "description_text",
  "minimum-stability": "stable",
  "license": "proprietary",
  "authors": [
    {
      "name": "author's name",
      "email": "email@example.com"
    }
  ],
  "require": {
    "twbs/bootstrap": "3.3.x-dev",
    "components/jquery": "3.2.1"
  }
}

 *
 *
 * одминка
 * создать или удалить категорию новости
 * новости надо создать редактировать удалить, поля смотреть в базе
 * создать или удалить инф страницу
 *
 * */
session_start();
//var_dump($_SERVER);
if (!empty($_GET['route'])){
    $filename = $_SERVER['DOCUMENT_ROOT']. "/controllers/".$_GET['route'].".php";
}
require_once $_SERVER['DOCUMENT_ROOT']. "/config.php";
require_once $_SERVER['DOCUMENT_ROOT']. "/system/request.php";

if($_SERVER['REQUEST_URI'] == '/'){
    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/home.php";
} elseif (!empty($filename) && file_exists($filename)){
    require_once $filename;
} else {
    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/404.php";
}
