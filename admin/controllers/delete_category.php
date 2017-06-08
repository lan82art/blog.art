<?php

$cat_error_del=0;
if ($_GET['action'] == 'group_delete' && !empty($_POST['group_del'])){

    $ids = '';

    foreach ($_POST['group_del'] as $val){
        $ids .= $val.',';
    }
    $ids =  substr($ids,0,-1);
    $_SESSION['delete_id'] = $ids;


    $sql = "SELECT idnews FROM news WHERE idcategory IN(".$ids.")";
    //var_dump($sql);

    $res = mysqli_query($GLOBALS['link'],$sql);

    while ($result[] = mysqli_fetch_assoc($res)){
        $count = $result;
    }
    unset($result);

    if(count($count) > 0){
        $title = 'За категорией закреплены статьи';
        $cat_error_del = 1;
    } else {
        $title = 'Вы действительно хотите удалить эту запись';
    }

    $sql = "SELECT * FROM category WHERE idcategory IN(".$ids.")";

    $res = mysqli_query($GLOBALS['link'],$sql);

    while ($result[] = mysqli_fetch_assoc($res)){
        $GLOBALS['category'] = $result;
    }
    getView('delete_category');
} else  $title = 'Вы ничего не выбрали';
getView('nothing_delete');
