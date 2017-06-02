<?php


if($_GET['action'] == 'delete' && !empty($_GET['id'])){
    $title = 'Вы действительно хотите удалить эту запись';

    $sql = "SELECT * FROM information WHERE idinfo = '".$_GET['id']."'";
    $res = mysqli_query($GLOBALS['link'],$sql);
    $_SESSION['delete_id'] = $_GET['id'];

    while ($result[] = mysqli_fetch_assoc($res)){
        $GLOBALS['inform'] = $result;
    }

    getView('delete_inform');

}