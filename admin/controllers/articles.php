<?php
$error = '';

$sql = "SELECT n.idnews, c.category_name, n.news_name, n.data, n.short_description, n.image
        FROM news n
        INNER JOIN category c ON n.idcategory = c.idcategory";


$res = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['articles'] = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $GLOBALS['articles'] = $result;
}

$title = 'Редактирование новостей';


getView('articles');