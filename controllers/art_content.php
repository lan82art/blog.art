<?php

if(!empty($_GET['id']) && is_numeric($_GET['id'])){
    $sql = "SELECT * FROM news WHERE idnews = '".$_GET['id']."'";
} else {
    $error = 'Нет такой страницы';
}

$res = mysqli_query($GLOBALS['link'], $sql);
$art_content = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $art_content = $result;
}
getView('art_content');
