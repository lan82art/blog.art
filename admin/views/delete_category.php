<?php getHeader(); ?>

    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-12">
                <h2><?= $GLOBALS['title']?></h2>
                <form name="info_form" method="post" action="/admin/index.php?route=apply_delete&act=category">
                    <table class="table table-hover">
                        <tr>
                            <td>ID</td><td>Name</td><td>Description</td>
                        </tr>
                        <?php
                        foreach ($GLOBALS['category'] as $value){ ?>
                            <tr>
                                <td><?= $value['idcategory']; ?></td><td><?= $value['category_name'] ?></td><td><?= mb_substr($value['category_description'],0,50,'UTF-8')."..." ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php if($GLOBALS['cat_error_del'] == 1){?>
                        <a href="<?=$_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-success">Вернуться</button></a>
                    <?php } else {?>
                        <button type="submit" class="btn btn-success" name="cat_apply_delete">Удалить</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>

<?php getFooter(); ?>