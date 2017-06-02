<?php
$error = '';
//if(!empty($_GET['id']) && is_numeric($_GET['id'])){
    $sql = "SELECT * FROM information";
//} else {
//    $error = 'Нет такой страницы';
//}

$res = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['information'] = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $GLOBALS['information'] = $result;
}

$title = 'Редактирование информационных страниц';


getView('information');