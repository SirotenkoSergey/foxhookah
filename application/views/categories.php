<div class="container">
    <div class="row categories-wrapper">
        <?php foreach($categories as $category){ ?>
            <div class="categories-item col-md-6">
                <a href="/ProductGroup/select_category/catId=<?= $category['id'] ?>">
                    <h3><?= $category['cat_name']?></h3>
                    <img src="<?= $category['img_sourse'] ?>">
                </a>
            </div>
        <?php } ?>
    </div>
</div>