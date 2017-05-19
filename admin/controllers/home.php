<?php

$title = 'Одминко';

if(!empty($_SESSION['odm'])){
    $sql = "SELECT * FROM odmin WHERE keyword = '".$_SESSION['odm']."'";
    if($res = mysqli_query($GLOBALS['link'],$sql)){
        $odm = mysqli_fetch_assoc($res);
        getView('home');
    } else {
        getView('enter');
    }

} else {
    getView('enter');
}










