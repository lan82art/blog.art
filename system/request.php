<?php
function getView($name){
    return require_once $_SERVER['DOCUMENT_ROOT']."/views/".$name.".php";
}
function getHeader($name){
    return require_once $_SERVER['DOCUMENT_ROOT']."/controllers/footer.php";
}
function getFooter($name){
    return require_once $_SERVER['DOCUMENT_ROOT']."/controllers/header.php";
}
function getLink($route, $id){
    return '/index.php?route=' . $route. '&id='. $id;
}