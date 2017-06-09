<?php
$sql = "SELECT COUNT(*) AS count FROM information ";

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

    $sql = "SELECT * FROM information LIMIT ".$limit.", ".$GLOBALS['admpages'];

$res = mysqli_query($GLOBALS['link'], $sql);

$information = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $information = $result;
}

$title = 'Редактирование информационных страниц';


getView('information');