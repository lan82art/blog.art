<?php getHeader(); ?>
<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-2">
            <?php
                getSideBar();
            ?>
        </div>
        <div class="col-xs-10">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php
                    if($GLOBALS['pagecol'] > 1) {
                        for ($i = 1; $i <= $GLOBALS['pagecol']; $i++) {
                            if ($i == $GLOBALS['page']) {
                                echo '<li class="active"><a href="/index.php?route=home&categoryid=' . $GLOBALS['categoryid'] . '&page=' . $i . '">' . $i . '</a></li>';
                            } else {
                                echo '<li><a href="/index.php?route=home&categoryid=' . $GLOBALS['categoryid'] . '&page=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </nav>
            <?php
            foreach ($GLOBALS['news'] as $value){?>
            <div style="padding: 10px; background: #efefef; margin: 0 0 10px 0;">
                <div>Категория: <?= $value['category_name']?></div>
                <div style="float: left;">
                    <?php echo $value['news_name'];?>
                </div>
                <div style="float: right;">
                    <?php echo $value['data'];?>
                </div>
                <div style="clear:both"></div>

                <div style="float: left">
                    <img src="views/<?php echo $value['image']; ?>" height="200" width="150"/>
                </div>
                <div style="float: left; margin:0 0 10px 10px;">
                    <?php echo $value['short_description']; ?>
                </div>

                <div style="clear:both"></div>

            </div>
            <?php }
            ?>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php
                    if($GLOBALS['pagecol'] > 1) {
                        for ($i = 1; $i <= $GLOBALS['pagecol']; $i++) {
                            if ($i == $GLOBALS['page']) {
                                echo '<li class="active"><a href="/index.php?route=home&categoryid=' . $GLOBALS['categoryid'] . '&page=' . $i . '">' . $i . '</a></li>';
                            } else {
                                echo '<li><a href="/index.php?route=home&categoryid=' . $GLOBALS['categoryid'] . '&page=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php getFooter(); ?>
