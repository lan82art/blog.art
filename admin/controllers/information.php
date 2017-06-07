<?php
$error = '';

    $sql = "SELECT * FROM information";

$res = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['information'] = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $GLOBALS['information'] = $result;
}

$title = 'Редактирование информационных страниц';


getView('information');