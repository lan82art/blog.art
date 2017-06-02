<?php getHeader(); ?>
    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-12">
                <h2><?= $GLOBALS['title']?></h2>
                <table class="table table-hover">
                    <tr>
                        <td>ID</td><td>Category</td><td>Name</td><td>Data</td><td>Description</td><td>Image</td><td>Action</td>
                    </tr>
                    <?php
                    foreach ($GLOBALS['articles'] as $value){ ?>
                        <tr>
                            <td><?= $value['idnews']; ?></td><td><?= $value['category_name'] ?></td><td><?= $value['news_name'] ?></td><td><?= $value['data'] ?></td><td><?= $value['short_description'] ?></td><td><?= $value['image'] ?></td>
                                <td><a href=""><button type="button" class="btn btn-warning">Редактировать</button></a>&nbsp;<a href=""><button type="button" class="btn btn-danger">Удалить</button></a></td>
                        </tr>
                    <?php } ?>
                </table>
                <a href=""><button type="button" class="btn btn-success">Создать новость</button></a>
            </div>
        </div>
    </div>
<?php getFooter();?>