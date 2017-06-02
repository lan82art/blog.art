<?php
if(isset($_POST['apply_insert'])){
    if(!empty($_POST['name_info'])){
        $sql = "INSERT INTO information VALUES (NULL,'".$_POST['name_info']."', '".$_POST['content_info']."')";
        mysqli_query($GLOBALS['link'],$sql);
        }
    }
if(isset($_POST['apply_update']) && !empty($_SESSION['edit_id'])){
    $sql = "UPDATE information SET info_name='".$_POST['name_info']."', info_description = '".$_POST['content_info']."' WHERE idinfo = '".$_SESSION['edit_id']."'";
    unset($_SESSION['edit_id']);
    mysqli_query($GLOBALS['link'],$sql);
}

header('Location:/admin/index.php?route=information');
