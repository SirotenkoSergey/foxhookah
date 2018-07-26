<div class="container">
    <h3 class="block-title">ОТЗЫВЫ О <span class="red">НАС</span></h3>
    <div class="reviews">
        <div class="row">
            <p>Наша цель - давать потребителю только самый качественный продукт, по приемлемой цене Мы постоянно
             работаем над улучшением качества как самого продукта, так и работы по сопровождению заказа. 
             Для нас важно мнение каждого клиента, поэтому мы всегда открыты к диалогу и будем признательны за Ваш отзыв!</p>
            <p>С уважением, команда FOX hookah!..</p>
        </div>
        <?php foreach($reviews as $review) { ?>
            <div class="review-item row">
                <div class="col-md-2">
                    <?php if($review -> img != null) {?>
                        <img src="<?= $review -> img ?>" class="img-responsive review-img"/>
                    <?php }else{ ?>
                        <img src="/assets/img/default/no_avatar.jpg" class="img-responsive review-img"/>
                    <?php } ?>
                </div>
                <div class="col-md-10">
                    <h4><?= $review -> user_firstname ?> <?= $review -> user_secondname ?> (<?= $review -> email ?>)</h4>
                    <p><?= $review -> content ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
	<div class="revirew-form-wrapper">
        <form method="post">
            <div class="form-group row">
                <label for="user_firstname" class="col-sm-2 col-form-label">Имя:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="user_firstname" id="user_firstname" required />
                </div>
            </div>
            <div class="form-group row">
                <label for="user_secondname" class="col-sm-2 col-form-label">Фамилия:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="user_secondname" id="user_secondname" required />
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="email" id="email" required />
                </div>
            </div>
            <div class="form-group row">
                <label for="content" class="col-sm-2 col-form-label">Отзыв:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="content" id="content" required>
                    </textarea>
                </div>
            </div>
            <input type="hidden" id="raiting" name="raiting" value="5"/>
            <div class="submit-form-wrapper">
                <button class="btn btn-default" type="submit">ОСТАВИТЬ ОТЗЫВ</button>
            </div>
        </form>
	</div>
</div>