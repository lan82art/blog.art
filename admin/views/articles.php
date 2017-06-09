<?php getHeader(); ?>
    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-12">
                <h2><?= $GLOBALS['title']?></h2>
                <form name="article_form" method="post" action="/admin/index.php?route=delete_article&action=group_delete">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php
                            if($GLOBALS['pagecol'] > 1) {
                                for ($i = 1; $i <= $GLOBALS['pagecol']; $i++) {
                                    if ($i == $GLOBALS['page']) {
                                        echo '<li class="active"><a href="/admin/index.php?route=articles&page=' . $i . '">' . $i . '</a></li>';
                                    } else {
                                        echo '<li><a href="/admin/index.php?route=articles&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                <table class="table table-hover">
                    <tr>
                        <td>ID</td><td>Delete</td><td>Category</td><td>Name</td><td>Data</td><td>Description</td><td>Image</td><td>Action</td>
                    </tr>
                    <?php
                    foreach ($GLOBALS['articles'] as $value){ ?>
                        <tr>
                            <td><?= $value['idnews']; ?></td><td><input type="checkbox" name="group_del[]" value="<?= $value['idnews']; ?>"/></td><td><?= $value['category_name'] ?></td><td><?= $value['news_name'] ?></td><td><?= $value['data'] ?></td><td><?= $value['short_description'] ?></td><td><?= $value['image'] ?></td>
                                <td><a href="/admin/index.php?route=edit_article&id=<?= $value['idnews'] ?>&action=edit"><button type="button" class="btn btn-warning">Редактировать</button></a></td>
                        </tr>
                    <?php } ?>
                </table>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php
                            if($GLOBALS['pagecol'] > 1) {
                                for ($i = 1; $i <= $GLOBALS['pagecol']; $i++) {
                                    if ($i == $GLOBALS['page']) {
                                        echo '<li class="active"><a href="/admin/index.php?route=articles&page=' . $i . '">' . $i . '</a></li>';
                                    } else {
                                        echo '<li><a href="/admin/index.php?route=articles&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                    <p><a href="/admin/index.php?route=edit_article&action=create"><button type="button" class="btn btn-success">Создать новость</button></a></p>
                    <p><input type="submit" class="btn btn-danger" value="Удалить выбранные"/></p>
                </form>
            </div>
        </div>
    </div>
<?php getFooter();?>