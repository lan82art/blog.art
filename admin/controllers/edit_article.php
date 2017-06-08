<?php
    $GLOBALS['select'] = NULL;
    if ($_GET['action'] == 'create'){
        $title = 'Создание новости';

    } elseif ($_GET['action'] == 'edit' && !empty($_GET['id'])){
        $title = 'Редактирование новости';
        $sql = "SELECT * FROM news WHERE idnews = '".$_GET['id']."'";
        $res = mysqli_query($GLOBALS['link'],$sql);
        $_SESSION['art_edit_id'] = $_GET['id'];

        while ($result[] = mysqli_fetch_assoc($res)){
            $article = $result;
        }
    }

    $sql = "SELECT idcategory, category_name FROM category";
    $res = mysqli_query($GLOBALS['link'],$sql);
    while ($result[] = mysqli_fetch_assoc($res)){
        $select = $result;
}

getView('edit_article');
