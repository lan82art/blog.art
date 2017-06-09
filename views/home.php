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
            <div class="news_container">
                <div class="news_header">
                    <div class="category_title">Категория: <?= $value['category_name']?></div>
                    <div class="date"><?php echo $value['data'];?></div>
                    <div class="clear"></div>
                </div>
                <div>
                    <a href="/index.php?route=art_content&id=<?= $value['idnews'] ?>"><h3><?= $value['news_name'];?></h3></a>
                </div>
                <div class="img_left">
                    <img src="views/<?php echo $value['image']; ?>" height="200" width="150"/>
                </div>
                <div class="short_content_left">
                    <?php echo $value['short_description']; ?>
                </div>
                <div class="clear"></div>

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
