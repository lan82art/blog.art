<?php getHeader(); ?>
    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-12">
                <h2><?= $GLOBALS['title']?></h2>
                <table class="table table-hover">
                    <tr>
                        <td>ID</td><td>Name</td><td>Content</td><td>Action</td>
                    </tr>
                        <?php
                        foreach ($GLOBALS['information'] as $value){ ?>
                    <tr>
                        <td><?= $value['idinfo']; ?></td><td><?= $value['info_name'] ?></td><td><?= mb_substr($value['info_description'],0,50,'UTF-8')."..." ?></td><td>
                            <a href="/admin/index.php?route=edit_inform&id=<?= $value['idinfo'] ?>&action=edit"><button type="button" class="btn btn-warning">Редактировать</button></a>&nbsp;<a href="/admin/index.php?route=delete_inform&id=<?= $value['idinfo'] ?>&action=delete"><button type="button" class="btn btn-danger">Удалить</button></a></td>
                    </tr>
                       <?php } ?>
                </table>
                <a href="/admin/index.php?route=edit_inform&action=create"><button type="button" class="btn btn-success">Создать страницу</button></a>
            </div>
        </div>
    </div>
<?php getFooter();?>