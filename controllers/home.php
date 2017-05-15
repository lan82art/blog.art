<?php
$title = 'Главная';
$sql = "SELECT * FROM news";
$res = mysqli_query($link,$sql);

$news = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $news = $result;
}
getView('home');






