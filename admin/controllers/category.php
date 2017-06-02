<?php
$error = '';
//if(!empty($_GET['id']) && is_numeric($_GET['id'])){
$sql = "SELECT * FROM category";
//} else {
//    $error = 'Нет такой страницы';
//}

$res = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['category'] = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $GLOBALS['category'] = $result;
}

$title = 'Редактирование категорий';

getView('category');