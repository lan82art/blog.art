<?php

if ($_GET['action'] == 'group_delete' && !empty($_POST['group_del'])){

    $title = 'Вы действительно хотите удалить эту запись';

    $ids = '';

    foreach ($_POST['group_del'] as $val){
        $ids .= $val.',';
    }
    $ids =  substr($ids,0,-1);
    $_SESSION['delete_id'] = $ids;

    $sql = "SELECT * FROM information WHERE idinfo IN(".$_SESSION['delete_id'].")";
    $res = mysqli_query($GLOBALS['link'],$sql);

    while ($result[] = mysqli_fetch_assoc($res)){
        $GLOBALS['inform'] = $result;
    }
    getView('delete_inform');
}
