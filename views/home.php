<?php getHeader(); ?>
<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-2" style="background: blanchedalmond;">
            sidebar
        </div>
        <div class="col-xs-10">
            <?php
            echo $hello;
            foreach ($GLOBALS['news'] as $value){?>
                <div style="float: left;">
                    <?php echo $value['news_name'];?>
                </div>
                <div style="float: right;">
                    <?php echo $value['data'];?>
                </div>
                <div style="clear:both"></div>
            <div style="padding: 20px; background: #efefef;">
                <div style="float: left">
                    <img src=" <?php echo $value['image']; ?>" height="200" width="150"/>
                </div>
                <div style="float: left; margin:0 0 10px 10px;">
                    <?php echo $value['short_description']; ?>
                </div>
                <div style="clear:both"></div>
            </div>
            <?php }
            ?>
        </div>
    </div>
</div>
<?php getFooter(); ?>
