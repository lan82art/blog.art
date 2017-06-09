<!DOCTYPE html>
<html>
<head>
    <title><?php  echo $GLOBALS['title']; ?></title>
    <meta charset="UTF-8">
    <meta name = "robots" content="index,follow" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../vendor/ckeditor/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->
    <link rel="stylesheet" type="text/css" href="/views/style/style.css" />
</head>
<body>
<div class="wrap">
    <nav id="w4" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
        <div class="container"><div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w4-collapse" aria-expanded="true"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand" href="/admin/index.php"></a></div>
            <div id="w4-collapse" class="navbar-collapse collapse in" aria-expanded="true">
                <ul id="w5" class="navbar-nav nav">
                    <li><a href="/admin">Главная</a></li>
                    <li><a href="/admin/index.php?route=articles">Cтатьи</a></li>
                    <li><a href="/admin/index.php?route=category">Категории</a></li>
                    <li><a href="/admin/index.php?route=information">Страницы</a></li>
                </ul>
                <ul id="w6" class="navbar-nav nav navbar-right">
                    <li><a href="/admin/index.php?route=logout">Выход</a></li>
                </ul>
            </div>
        </div>
    </nav>