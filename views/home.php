<?php getHeader(); ?>
<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <?php
            foreach ($GLOBALS['news'] as $value){
                ?>
            <div>
                <?php echo $value['news_name']; ?>
            </div>
            <div class="jumbotron">
            </div>
            <?php }
            ?>
        </div>
        <div class="col-xs-2"></div>
    </div>
</div>
<?php getFooter(); ?>
