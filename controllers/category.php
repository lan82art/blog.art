<?php
if(!empty($_GET['id'])){
    $category_id = $_GET['id'];

    $sql = "SELECT * FROM category WHERE idcategory = '".(int)$category_id."'";
    $query = mysqli_query($link,$sql);
    $category_info = mysqli_fetch_assoc($query);
}

if(!empty($category_info['category_name'])) {
    $title = $category_info['category_name'];

    getView('category');
} else {
    getView('404');
}
