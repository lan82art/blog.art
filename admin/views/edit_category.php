<?php getHeader(); ?>

    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-12">
                <h2><?= $GLOBALS['title']?></h2>
                <form action="/admin/index.php?route=cat_apply_edit" method="post">
                    <div class="form-group">
                        <label for="category_name">Название категории</label>
                        <input type="text" class="form-control" id="category_name" placeholder="Название категории" name="category_name" value="<?php if(!empty($GLOBALS['category'][0]['category_name'])) echo $GLOBALS['category'][0]['category_name'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="category_description">Описание категории</label>
                        <textarea class="form-control" rows="15" id="category_description" placeholder="Описание категории" name="category_description"><?php if(!empty($GLOBALS['category'][0]['category_description'])) echo $GLOBALS['category'][0]['category_description'] ?></textarea>
                    </div>
                    <?php if($_GET['action'] == 'create') { ?>
                        <button type="submit" class="btn btn-success" name="cat_apply_insert">Создать</button>
                    <?php } elseif ($_GET['action'] == 'edit') { ?>
                        <button type="submit" class="btn btn-warning" name="cat_apply_update">Обновить</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>


<?php getFooter(); ?>