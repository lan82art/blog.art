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
    return 'admin/index.php?route=' . $route. '&id='. $id;
}
function login($login,$password){

//unset ($_SESSION['odm']);
    if(!empty($login) && !empty($password) && isset($_POST['enter'])){

        unset ($_SESSION['odm']);

        $sql = "SELECT * FROM odmin WHERE `name` = '".$login."' AND `pass` = '".sha1($password)."'";
        $res = mysqli_query($GLOBALS['link'],$sql);
        while($result[] = mysqli_fetch_assoc($res)){
            $odmin = $result;
        }
        if(!empty($odmin)){
            //$odm = mysqli_fetch_assoc($res);
            $_SESSION['odm'] = 1;

            $sql = "UPDATE odmin SET keyword = '".$_COOKIE['PHPSESSID']."' WHERE name = '".$login."' AND pass = '".sha1($password)."'";
            mysqli_query($GLOBALS['link'], $sql);
            return true;
        } else {
            return false;
        }
    } else {return false;}
}