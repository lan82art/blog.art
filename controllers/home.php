<?php
$title = 'Главная';

if(!empty($_GET['categoryid']) && is_numeric($_GET['categoryid'])){
    $sql = "SELECT * FROM news WHERE idcategory = '".$_GET['categoryid']."' ORDER BY data DESC";
} else {
    $sql = "SELECT * FROM news ORDER BY data DESC";
}

$res = mysqli_query($link, $sql);
$news = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $news = $result;
}

getView('home');






