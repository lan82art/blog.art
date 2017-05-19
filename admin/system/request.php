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
function getHome(){
    return require_once $_SERVER['DOCUMENT_ROOT']."/admin/controllers/home.php";
}
function getLink($route, $id){
    return '/index.php?route=' . $route. '&id='. $id;
}

function login($login,$password){

    if(!empty($login) && !empty($password)){

        $sql = "SELECT * FROM odmin WHERE `name` = '".$login."' AND `pass` = '".sha1($password)."'";

        if($res = mysqli_query($GLOBALS['link'],$sql)){
            //$odm = mysqli_fetch_assoc($res);

            $_SESSION['odm'] = 1;

            $sql = "INSERT INTO odmin SET keyword = '".$_COOKIE['PHPSESSID']."' WHERE name = '".$login."' AND pass = '".sha1($password)."'";
            mysqli_query($GLOBALS['link'], $sql);
            return true;
        } else {
            return false;
        }
    }
}