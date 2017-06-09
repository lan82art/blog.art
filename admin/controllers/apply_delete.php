<?php
if(isset($_POST['apply_delete']) && !empty($_SESSION['delete_id']) && $_GET['act'] == 'information'){
    $sql = "DELETE from information WHERE idinfo IN(".$_SESSION['delete_id'].")";
    unset($_SESSION['delete_id']);
    mysqli_query($GLOBALS['link'],$sql);
    header('Location:/admin/index.php?route=information');
}

if(isset($_POST['art_apply_delete']) && !empty($_SESSION['delete_id']) && $_GET['act'] == 'article'){
    $sql = "DELETE from news WHERE idnews IN(".$_SESSION['delete_id'].")";
    unset($_SESSION['delete_id']);
    mysqli_query($GLOBALS['link'],$sql);
    header('Location:/admin/index.php?route=articles');
}

if(isset($_POST['cat_apply_delete']) && !empty($_SESSION['delete_id']) && $_GET['act'] == 'category'){
    $sql = "DELETE from category WHERE idcategory IN(".$_SESSION['delete_id'].")";
    unset($_SESSION['delete_id']);
    mysqli_query($GLOBALS['link'],$sql);
    header('Location:/admin/index.php?route=category');
}

