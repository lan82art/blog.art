<?php
$sql = "SELECT * FROM information";

$res = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['inform'] = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $GLOBALS['inform'] = $result;
}

getView('header');