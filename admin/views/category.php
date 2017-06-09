<?php getHeader(); ?>
<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-12">
            <h2><?= $GLOBALS['title']?></h2>
            <form name="category_form" method="post" action="/admin/index.php?route=delete_category&action=group_delete">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php
                        if($GLOBALS['pagecol'] > 1) {
                            for ($i = 1; $i <= $GLOBALS['pagecol']; $i++) {
                                if ($i == $GLOBALS['page']) {
                                    echo '<li class="active"><a href="/admin/index.php?route=category&page=' . $i . '">' . $i . '</a></li>';
                                } else {
                                    echo '<li><a href="/admin/index.php?route=category&page=' . $i . '">' . $i . '</a></li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </nav>
            <table class="table table-hover">
                <tr>
                    <td>ID</td><td>Delete</td><td>CategoryName</td><td>Description</td><td>Action</td>
                </tr>
                <?php
                foreach ($GLOBALS['category'] as $value){ ?>
                    <tr>
                        <td><?= $value['idcategory']; ?></td><td><input type="checkbox" name="group_del[]" value="<?= $value['idcategory']; ?>"/></td><td><?= $value['category_name'] ?></td><td><?= $value['category_description'] ?></td><td>
                            <a href="/admin/index.php?route=edit_category&id=<?= $value['idcategory'] ?>&action=edit"><button type="button" class="btn btn-warning">Редактировать</button></a></td>
                    </tr>
                <?php } ?>
            </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php
                        if($GLOBALS['pagecol'] > 1) {
                            for ($i = 1; $i <= $GLOBALS['pagecol']; $i++) {
                                if ($i == $GLOBALS['page']) {
                                    echo '<li class="active"><a href="/admin/index.php?route=category&page=' . $i . '">' . $i . '</a></li>';
                                } else {
                                    echo '<li><a href="/admin/index.php?route=category&page=' . $i . '">' . $i . '</a></li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </nav>
                <p><a href="/admin/index.php?route=edit_category&action=create""><button type="button" class="btn btn-success">Создать категорию</button></a></p>
                <p><input type="submit" class="btn btn-danger" value="Удалить выбранные"/></p>
            </form>
        </div>
    </div>
</div>
<?php getFooter();?>
