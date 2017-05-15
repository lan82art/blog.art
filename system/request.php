<?php
function getView($name){
    return require_once $_SERVER['DOCUMENT_ROOT']."/views/".$name.".php";
}
function getHeader(){
    return require_once $_SERVER['DOCUMENT_ROOT']."/controllers/header.php";
}
function getFooter(){
    return require_once $_SERVER['DOCUMENT_ROOT']."/controllers/footer.php";
}
function getLink($route, $id){
    return '/index.php?route=' . $route. '&id='. $id;
}