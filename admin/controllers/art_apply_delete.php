<?php
if(isset($_POST['art_apply_delete']) && !empty($_SESSION['delete_id'])){
    $sql = "DELETE from news WHERE idnews IN(".$_SESSION['delete_id'].")";
    unset($_SESSION['delete_id']);
    mysqli_query($GLOBALS['link'],$sql);
}
header('Location:/admin/index.php?route=articles');
