<div class="container product-detail-content">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= $product_detail->img_sourse ?>" alt="<?= $product_detail->name ?>" class="img-responsive">
        </div>
        <div class="col-md-6">
            <h1><?= $product_detail->name ?></h1>
            <hr />
            <p><?= $product_detail->characteristics ?></p>
            <hr />
            <p><?= $product_detail->description ?></p>
            <br />
            <button class="btn btn-default send-order">Купить</button>
        </div>
    </div>
</div>