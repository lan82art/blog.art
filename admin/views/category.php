<?php getHeader(); ?>
<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-12">
            <h2><?= $GLOBALS['title']?></h2>
            <table class="table table-hover">
                <tr>
                    <td>ID</td><td>CategoryName</td><td>Description</td><td>Action</td>
                </tr>
                <?php
                foreach ($GLOBALS['category'] as $value){ ?>
                    <tr>
                        <td><?= $value['idcategory']; ?></td><td><?= $value['category_name'] ?></td><td><?= $value['category_description'] ?></td><td>
                            <a href=""><button type="button" class="btn btn-warning">Редактировать</button></a>&nbsp;<a href=""><button type="button" class="btn btn-danger">Удалить</button></a></td>
                    </tr>
                <?php } ?>
            </table>
            <a href=""><button type="button" class="btn btn-success">Создать страницу</button></a>
        </div>
    </div>
</div>
<?php getFooter();?>
