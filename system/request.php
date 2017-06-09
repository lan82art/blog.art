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
function getSideBar(){
    return require_once $_SERVER['DOCUMENT_ROOT']."/controllers/sidebar.php";
}
function countPages($sql)
{
    $co = mysqli_query($GLOBALS['link'], $sql);
    $res = mysqli_fetch_assoc($co);
    $pagecol = ceil($res['count'] / $GLOBALS['pages']);

    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
        $limit = ($_GET['page'] - 1) * $GLOBALS['pages'];
    } else {
        $limit = 0;
        $page = 1;
    }
}

function getLink($route, $id){
    return '/index.php?route=' . $route. '&id='. $id;
}