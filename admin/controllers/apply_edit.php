<?php
if(isset($_POST['inf_apply_insert'])){
    if(!empty($_POST['name_info'])){
        $sql = "INSERT INTO information VALUES (NULL,'".$_POST['name_info']."', '".$_POST['content_info']."')";
        mysqli_query($GLOBALS['link'],$sql);
        header('Location:/admin/index.php?route=information');
    }
} elseif (isset($_POST['inf_apply_update']) && !empty($_SESSION['edit_id'])){
    if(!empty($_POST['name_info'])){
        $sql = "UPDATE information SET info_name='".$_POST['name_info']."', info_description = '".$_POST['content_info']."' WHERE idinfo = '".$_SESSION['edit_id']."'";
        unset($_SESSION['edit_id']);
        mysqli_query($GLOBALS['link'],$sql);
        header('Location:/admin/index.php?route=information');
    }
}

if(isset($_POST['cat_apply_insert'])){
    if(!empty($_POST['category_name'])){

        $sql = "INSERT INTO category VALUES (NULL,'".$_POST['category_name']."', '".$_POST['category_description']."')";
        mysqli_query($GLOBALS['link'],$sql);
        header('Location:/admin/index.php?route=category');
    }
} else if(isset($_POST['cat_apply_update']) && !empty($_SESSION['cat_edit_id'])){
    if(!empty($_POST['category_name'])) {
        $sql = "UPDATE category SET category_name='" . $_POST['category_name'] . "', category_description = '" . $_POST['category_description'] . "' WHERE idcategory = '" . $_SESSION['cat_edit_id'] . "'";
        unset($_SESSION['cat_edit_id']);
        mysqli_query($GLOBALS['link'], $sql);
        header('Location:/admin/index.php?route=category');
    }
}

if(isset($_POST['art_apply_insert'])){
    if(!empty($_POST['news_name'])){
        $sql = "INSERT INTO news VALUES (NULL,'".$_POST['idcategory']."', '".$_POST['news_name']."', DEFAULT, '".$_POST['description']."', '".$_POST['short_description']."', '".$_POST['image']."')";
        mysqli_query($GLOBALS['link'],$sql);
        header('Location:/admin/index.php?route=articles');
    }
} elseif(isset($_POST['art_apply_update']) && !empty($_SESSION['art_edit_id'])){
    if(!empty($_POST['news_name'])){
        $sql = "UPDATE news SET idcategory='".$_POST['idcategory']."', news_name = '".$_POST['news_name']."', description = '".$_POST['description']."', short_description = '".$_POST['short_description']."', image = '".$_POST['image']."' WHERE idnews = '".$_SESSION['art_edit_id']."'";
        unset($_SESSION['art_edit_id']);
        mysqli_query($GLOBALS['link'],$sql);
        header('Location:/admin/index.php?route=articles');
        //header('Location:'.$_SERVER['HTTP_REFERER']);
    }
}

