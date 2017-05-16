<?php
function getView($name){
    return require_once $_SERVER['DOCUMENT_ROOT']."/admin/views/".$name.".php";
}
function getHeader(){
    return require_once $_SERVER['DOCUMENT_ROOT']."/admin/controllers/header.php";
}
function getFooter(){
    return require_once $_SERVER['DOCUMENT_ROOT']."/admin/controllers/footer.php";
}
function getLink($route, $id){
    return '/index.php?route=' . $route. '&id='. $id;
}