<?php
if(isset($_POST['art_apply_insert'])){
    if(!empty($_POST['news_name'])){
        $sql = "INSERT INTO news VALUES (NULL,'".$_POST['idcategory']."', '".$_POST['news_name']."', DEFAULT, '".$_POST['description']."', '".$_POST['short_description']."', '".$_POST['image']."')";
        //var_dump($sql); exit;
        mysqli_query($GLOBALS['link'],$sql);
    }
}
if(isset($_POST['art_apply_update']) && !empty($_SESSION['edit_id'])){
    if(!empty($_POST['news_name'])){
    $sql = "UPDATE news SET idcategory='".$_POST['idcategory']."', news_name = '".$_POST['news_name']."', description = '".$_POST['description']."', short_description = '".$_POST['short_description']."', image = '".$_POST['image']."' WHERE idnews = '".$_SESSION['art_edit_id']."'";

    unset($_SESSION['art_edit_id']);
    mysqli_query($GLOBALS['link'],$sql);
    }
}

header('Location:/admin/index.php?route=articles');
