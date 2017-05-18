<?php
require_once '../../config.php';
require_once '../../admin/system/request.php';

if(!empty($_POST['login']) && !empty($_POST['login'])){
    $sql = "SELECT * FROM odmin WHERE name = '".$_POST['login']."' AND pass = '".sha1($_POST['password'])."'";

    if($res = mysqli_query($GLOBALS['link'],$sql)){
        $odm = mysqli_fetch_assoc($res);

        $_SESSION['odm'] = $odm['pass'];
        getHome();
    } else {
        getView('enter');
    }
}

//header('Location:admin/index.php');