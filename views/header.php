<!DOCTYPE html>
<html lang="ru_RU">
<head>
    <title><?php  echo $GLOBALS['title']; ?></title>
    <meta charset="UTF-8">
    <meta name = "robots" content="index,follow" />
    <script src="../vendor/components/jquery/jquery.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->
    <link rel="stylesheet" type="text/css" href="/views/style/style.css" />
</head>
<body>
<div class="wrap">
<div class="container">
    <nav id="w4" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container"><div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w4-collapse" aria-expanded="true"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand" href="/admin/index.php"></a></div>
            <div id="w4-collapse" class="navbar-collapse collapse in" aria-expanded="true">
                <ul class="nav navbar-nav">
                    <li><a href="/">Главная<span class="sr-only">(current)</span></a></li>
                    <?php foreach ($GLOBALS['inform'] as $value) {?>
                    <li><a href="/index.php?route=information&id=<?php echo $value['idinfo']?>"><?php echo $value['info_name']?></a></li>
                    <?php } ?>
                </ul>
                <ul id="w5" class="nav navbar-nav navbar-right">
                    <?php if($_SESSION['auth']){?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Редактировать профиль</a></li>
                                <li><a href="#">Выход</a></li>
                            </ul>
                        </li>
                    <?php } else {?>
                        <!--<li><a href="#">Войти</a></li>-->
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>