<div class="container">
    <div class="row">
        <div class="col-xs-2">
            <div class="list-group">
                <?php foreach ($GLOBALS['sidebar_category'] as $value){
                    if($value['idcategory'] == $GLOBALS['categoryid']){ ?>
                        <a href="/index.php?route=home&categoryid=<?php echo $value['idcategory']?>" class="list-group-item active"><?= $value['category_name']?></a>
                    <?php } else {?>
                        <a href="/index.php?route=home&categoryid=<?php echo $value['idcategory']?>" class="list-group-item"><?= $value['category_name']?></a>
                <?php }
                }?>
            </div>
        </div>
    </div>
</div>
