<?php
    if ($_GET['action'] == 'create'){
        $title = 'Создание категории';

    } elseif ($_GET['action'] == 'edit' && !empty($_GET['id'])){
        $title = 'Редактирование категории';
        $sql = "SELECT * FROM category WHERE idcategory = '".$_GET['id']."'";
        $res = mysqli_query($GLOBALS['link'],$sql);
        $_SESSION['cat_edit_id'] = $_GET['id'];

        while ($result[] = mysqli_fetch_assoc($res)){
            $GLOBALS['category'] = $result;
        }
    }
getView('edit_category');
