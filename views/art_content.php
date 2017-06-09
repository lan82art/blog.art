<?php getHeader();?>

    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-8">
                <?php if ($GLOBALS['error'] != ''){?>
                    <h2><?php echo $GLOBALS['error']; ?></h2>
                    <?php
                } else {?>
                    <div><h3><?= $GLOBALS['art_content'][0]['news_name']; ?></h3></div>
                    <div><?= $GLOBALS['art_content'][0]['description']; ?></div>
                <?php } ?>
                <div><a href="<?=$_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-success">Назад</button></a></div>
            </div>

            <div class="col-xs-2"></div>
        </div>
    </div>
<?php getFooter(); ?>