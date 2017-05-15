<!DOCTYPE html>
<html>
<head>
    <title><?php  echo $GLOBALS['title']; ?></title>
    <meta charset="UTF-8">
    <meta name = "robots" content="index,follow" />
    <title>HomeWork 4</title>
    <script src="../vendor/components/jquery/jquery.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->
    <link rel="stylesheet" type="text/css" href="/views/style/style.css" />
</head>
<body>
<div class="wrap">
<div class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Главная<span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Редактировать профиль</a></li>
                                <li><a href="#">Выход</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Войти</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>