<?php getHeader(); ?>

    <div class="container" style="padding: 70px 15px;">
        <div class="row">
            <div class="col-xs-12">
                <h2><?= $GLOBALS['title']?></h2>
                <form action="/admin/index.php?route=apply_edit&act=article" method="post">
                    <div class="form-group">
                        <label for="news_name">Название статьи</label>
                        <input type="text" class="form-control" id="news_name" placeholder="Название статьи" name="news_name" value="<?php if(!empty($GLOBALS['article'][0]['news_name'])) echo $GLOBALS['article'][0]['news_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="idcategory">Категория</label>
                        <select class="form-control" name="idcategory" id="idcategory">

                            <?php foreach ($GLOBALS['select'] as $val){
                                if($GLOBALS['article'][0]['idcategory'] == $val['idcategory']){ ?>
                            <option selected value="<?= $val['idcategory']?>"><?= $val['category_name'] ?></option>
                            <?php } else {?>
                                <option value="<?= $val['idcategory']?>"><?= $val['category_name'] ?></option>
                            <?php } } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="news_image">Изображение</label>
                        <input type="text" class="form-control" id="image" placeholder="Изображение" name="image" value="<?php if(!empty($GLOBALS['article'][0]['image'])) echo $GLOBALS['article'][0]['image'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="short_desription">Краткое содержимое новости</label>
                        <textarea class="form-control" rows="15" id="short_desription" placeholder="Краткое содержание" name="short_description"><?php if(!empty($GLOBALS['article'][0]['short_description'])) echo $GLOBALS['article'][0]['short_description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="desription">Содержимое новости</label>
                        <textarea class="form-control" rows="15" id="desription" placeholder="Контент" name="description"><?php if(!empty($GLOBALS['article'][0]['description'])) echo $GLOBALS['article'][0]['description'] ?></textarea>
                    </div>
                    <?php if($_GET['action'] == 'create') { ?>
                        <button type="submit" class="btn btn-success" name="art_apply_insert">Создать</button>
                    <?php } elseif ($_GET['action'] == 'edit') { ?>
                        <button type="submit" class="btn btn-warning" name="art_apply_update">Обновить</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('short_description');
        CKEDITOR.replace('description');
    </script>


<?php getFooter(); ?>