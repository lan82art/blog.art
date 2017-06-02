<?php
$error = '';
if(!empty($_GET['id']) && is_numeric($_GET['id'])){
    $sql = "SELECT * FROM information WHERE idinfo = '".$_GET['id']."'";
} else {
   $error = 'Нет такой страницы';
}

$res = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['information'] = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $GLOBALS['information'] = $result;
}

$title = $GLOBALS['information'][0]['info_name'];

getView('information');
