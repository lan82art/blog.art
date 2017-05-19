<!DOCTYPE html>
<html>
<head>
    <title><?php  echo $GLOBALS['title']; ?></title>
    <meta charset="UTF-8">
    <meta name = "robots" content="index,follow" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->
    <link rel="stylesheet" type="text/css" href="/views/style/style.css" />
</head>
<body>
<div class="wrap">
    <nav id="w4" class="navbar-inverse navbar-fixed-top navbar" role="navigation"></nav>
<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8 text-center" style="vertical-align: middle;">
            <div class="jumbotron">
                <div class="col-xs-12">
                    <h2>Вход в администативную часть</h2>
                </div>
                <div class="col-xs-12">&nbsp;</div>
                <form method="post" action="/admin/index.php">
                    <p><input type="text" name="login" placeholder="Login"/></p>
                    <p><input type="password" name="password" placeholder="Password"/></p>
                    <input class="btn btn-primary" type="submit" value="Enter" style="width: 270px;">
                </form>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
</div>
<?php getFooter(); ?>
