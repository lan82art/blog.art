<?php

$sql = "SELECT * FROM category";

$cat = mysqli_query($GLOBALS['link'], $sql);
$GLOBALS['sidebar_category'] = array();

while ($category[] = mysqli_fetch_assoc($cat)){
    $GLOBALS['sidebar_category'] = $category;
}

getView('sidebar');
