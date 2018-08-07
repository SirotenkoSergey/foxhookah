<div class="container">
	<h3 class="block-title">ПОЧЕМУ <span class="red">МЫ</span>?</h3>
	<div class="icon-wrapper">
		<div class="icon-item">
			<img src="/assets/img/icon.svg" />
			<p>Собственное <br />производство</p>
		</div>
		<div class="icon-item">
			<img src="/assets/img/icon.svg" />
			<p>Качество <br />продукции</p>
		</div>
		<div class="icon-item">
			<img src="/assets/img/icon.svg" />
			<p>Доступная <br />цена</p>
		</div>
		<div class="icon-item">
			<img src="/assets/img/icon.svg" />
			<p>Стильный <br />дизайн</p>
		</div>
		<div class="icon-item">
			<img src="/assets/img/icon.svg" />
			<p>Отзывы к <br />сотрудничеству</p>
		</div>
		<div class="icon-item">
			<img src="/assets/img/icon.svg" />
			<p>Лояльны к <br />клиенту</p>
		</div>
	</div>
</div>
<div class="container">
	<h3 class="block-title">НАШИ <span class="red">КЛИЕНТЫ</span></h3>
	<div class="clients-wrapper">
		<div class="clients-item">	
			<div></div>
			<button class="btn btn-default">ЗАКАЗАТЬ</button>
		</div>
		<div class="clients-item">	
			<div></div>
			<button class="btn btn-default">ЗАКАЗАТЬ</button>
		</div>
		<div class="clients-item">
			<div></div>	
			<button class="btn btn-default">ЗАКАЗАТЬ</button>
		</div>
	</div>
</div>
<div class="container">
	<div class="p-list-wrapper row">
		<?php foreach($products as $product) { ?>
		<div class="p-list-item col-md-6">
			<a href="/index.php/welcome/product_details?id=<?= $product['id'] ?>">
				<img src="<?= $product['img_sourse'] ?>" class="p-image" />
				<div class="p-description">
					<h3><?= $product['name'] ?></h3>
					<p>Подробнее ⇒</p>
				</div>
			</a>
		</div>
		<?php } ?>
	</div>
</div>