<?php
$title = 'Главная';

if(!empty($_GET['categoryid']) && is_numeric($_GET['categoryid'])) {
    $categoryid = $_GET['categoryid'];
    $sql = "SELECT COUNT(*) AS count FROM news WHERE idcategory =" . $categoryid;
} else {
    $sql = "SELECT COUNT(*) AS count FROM news ";
}

$co = mysqli_query($GLOBALS['link'],$sql);
$res = mysqli_fetch_assoc($co);
$pagecol = ceil($res['count']/$GLOBALS['pages']);

    if (!empty($_GET['page'])){
        $page = $_GET['page'];
        $limit = ($_GET['page'] - 1) * $GLOBALS['pages'];
    }else {
        $limit = 0;
        $page = 1;
}

if(isset($categoryid)){
    $sql = "SELECT n.idnews, n.news_name, c.category_name, n.data, n.description, n.short_description, n.image 
            FROM news n
            INNER JOIN category c ON n.idcategory = c.idcategory
            WHERE n.idcategory = '".$categoryid."'
            ORDER BY n.data DESC
            LIMIT ".$limit.", ".$GLOBALS['pages'];
    //var_dump($sql);die;
} else {
    $sql = "SELECT n.idnews, n.news_name, c.category_name, n.data, n.description, n.short_description, n.image 
            FROM news n
            INNER JOIN category c ON n.idcategory = c.idcategory
            ORDER BY n.data DESC
            LIMIT ".$limit.", ".$GLOBALS['pages'];
    //var_dump($sql);die;
}

$res = mysqli_query($GLOBALS['link'], $sql);
$news = array();

while ($result[] = mysqli_fetch_assoc($res)){
    $news = $result;

}

getView('home');






