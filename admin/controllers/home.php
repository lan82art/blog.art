<?php
$title = 'Главная';
$sql = "SELECT * FROM news ORDER BY data DESC";
$res = mysqli_query($link,$sql);

$hello = 'Hello';

$news = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $news = $result;
}

getView('home');






