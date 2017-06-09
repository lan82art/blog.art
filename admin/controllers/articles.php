<?php

$sql = "SELECT COUNT(*) AS count FROM news ";

$co = mysqli_query($GLOBALS['link'],$sql);
$res = mysqli_fetch_assoc($co);
$pagecol = ceil($res['count']/$GLOBALS['admpages']);

if (!empty($_GET['page'])){
    $page = $_GET['page'];
    $limit = ($_GET['page'] - 1) * $GLOBALS['admpages'];
}else {
    $limit = 0;
    $page = 1;
}


$sql = "SELECT n.idnews, c.category_name, n.news_name, n.data, n.short_description, n.image
        FROM news n
        INNER JOIN category c ON n.idcategory = c.idcategory
        LIMIT ".$limit.", ".$GLOBALS['admpages'];

$res = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['articles'] = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $GLOBALS['articles'] = $result;
}

$title = 'Редактирование новостей';


getView('articles');