<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <ul>
            <?php foreach ($GLOBALS['sidebar_category'] as $value){?>
                <li><a href="index.php?route=home&categoryid=<?php echo $value['idcategory']?>"><?php echo $value['category_name']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
