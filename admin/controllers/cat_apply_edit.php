<?php
if(isset($_POST['cat_apply_insert'])){
    if(!empty($_POST['category_name'])){
        $sql = "INSERT INTO category VALUES (NULL,'".$_POST['category_name']."', '".$_POST['category_description']."')";
        mysqli_query($GLOBALS['link'],$sql);
    }
}
if(isset($_POST['cat_apply_update']) && !empty($_SESSION['cat_edit_id'])){
    $sql = "UPDATE category SET category_name='".$_POST['category_name']."', category_description = '".$_POST['category_description']."' WHERE idcategory = '".$_SESSION['cat_edit_id']."'";

    unset($_SESSION['cat_edit_id']);
    mysqli_query($GLOBALS['link'],$sql);
}

header('Location:/admin/index.php?route=category');
