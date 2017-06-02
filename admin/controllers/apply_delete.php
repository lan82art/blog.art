<?php
if(isset($_POST['apply_delete']) && !empty($_SESSION['delete_id'])){
    $sql = "DELETE from information WHERE idinfo = '".$_SESSION['delete_id']."'";
    unset($_SESSION['delete_id']);
    mysqli_query($GLOBALS['link'],$sql);
}
header('Location:/admin/index.php?route=information');
