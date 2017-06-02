<?php getHeader();?>

<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <?php if ($GLOBALS['error'] != ''){?>
                <h2><?php echo $GLOBALS['error']; ?></h2>
            <?php
            } else {?>
                <div><?= $GLOBALS['information'][0]['info_description']; ?></div>
            <?php } ?>
        </div>
        <div class="col-xs-2"></div>
    </div>
</div>
<?php getFooter(); ?>
