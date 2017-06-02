<?php
$title = 'Главная';

if(!empty($_GET['categoryid']) && is_numeric($_GET['categoryid'])){
    $sql = "SELECT n.idnews, n.news_name, c.category_name, n.data, n.description, n.short_description, n.image 
            FROM news n
            INNER JOIN category c ON n.idcategory = c.idcategory
            WHERE n.idcategory = '".$_GET['categoryid']."'
            ORDER BY n.data DESC";
} else {
    $sql = "SELECT n.idnews, n.news_name, c.category_name, n.data, n.description, n.short_description, n.image 
            FROM news n
            INNER JOIN category c ON n.idcategory = c.idcategory
            ORDER BY n.data DESC";
}

$res = mysqli_query($GLOBALS['link'], $sql);
$news = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $news = $result;
}

getView('home');






