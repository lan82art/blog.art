<?php getHeader(); ?>

<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-12">
            <h2><?= $GLOBALS['title']?></h2>
            <form action="/admin/index.php?route=apply_edit&act=inform" method="post">
                <div class="form-group">
                    <label for="name">Название страинцы</label>
                    <input type="text" class="form-control" id="name_info" placeholder="Название страницы" name="name_info" value="<?php if(!empty($GLOBALS['inform'][0]['info_name'])) echo $GLOBALS['inform'][0]['info_name'] ?>">
                </div>
                <div class="form-group">
                    <label for="content">Содержимое страинцы</label>
                    <textarea class="form-control" rows="15" id="content" placeholder="Контент" name="content_info"><?php if(!empty($GLOBALS['inform'][0]['info_description'])) echo $GLOBALS['inform'][0]['info_description'] ?></textarea>
                </div>
                <?php if($_GET['action'] == 'create') { ?>
                <button type="submit" class="btn btn-success" name="inf_apply_insert">Создать</button>
                <?php } elseif ($_GET['action'] == 'edit') { ?>
                <button type="submit" class="btn btn-warning" name="inf_apply_update">Обновить</button>
                <?php } ?>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('content');
</script>


<?php getFooter(); ?>
