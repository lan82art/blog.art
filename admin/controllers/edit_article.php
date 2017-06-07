<?php
    if ($_GET['action'] == 'create'){
        $title = 'Создание страницы';

    } elseif ($_GET['action'] == 'edit' && !empty($_GET['id'])){
        $title = 'Редактирование страницы';
        $sql = "SELECT * FROM information WHERE idinfo = '".$_GET['id']."'";
        $res = mysqli_query($GLOBALS['link'],$sql);
        $_SESSION['edit_id'] = $_GET['id'];

        while ($result[] = mysqli_fetch_assoc($res)){
            $GLOBALS['inform'] = $result;
        }
    }
getView('edit_inform');
