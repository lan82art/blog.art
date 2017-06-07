<?php getHeader(); ?>

<div class="container" style="padding: 70px 15px;">
    <div class="row">
        <div class="col-xs-12">
            <h2><?= $GLOBALS['title']?></h2>
            <form name="info_form" method="post" action="/admin/index.php?route=art_apply_delete">
                <table class="table table-hover">
                    <tr>
                        <td>ID</td><td>Name</td><td>Content</td>
                    </tr>
                    <?php
                    foreach ($GLOBALS['artic'] as $value){ ?>
                        <tr>
                            <td><?= $value['idnews']; ?></td><td><?= $value['news_name'] ?></td><td><?= mb_substr($value['description'],0,50,'UTF-8')."..." ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <button type="submit" class="btn btn-success" name="art_apply_delete">Удалить</button>
            </form>
        </div>
    </div>
</div>

<?php getFooter(); ?>
