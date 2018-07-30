<div class="container">
    <h3 class="block-title">ГДЕ <span class="red">КУПИТЬ</span>?</h3>
    <div>
        <p>Мы постоянно расширяем географию присутствия и подключаем новые регионы. Найти нашу продукцию Вы можете в магазинах и заведениях наших партнеров. Для удобства поиска, воспользуйтесь картой или найдите выберите Ваш город из списка.</p>
    </div>
    <div class="select-city-form">
        <form>
            <layout>
                <span>Выберите город: </span>
                <select name="city" id="city">
                    <option value="1">Ростов-на-Дону</option>
                    <option value="2">Астрахань</option>
                </select>
            </layout>
        </form>
    </div>
    <div class="stores-list-wrapper">
        <?php foreach($stores as $store){?>
            <div class="stores-item">
            <div class="row">
                <div class="col-md-3"><p>г. <?= $store->city ?>:</p></div>
                <div class="col-md-5"><p><?= $store->address ?><br /><?= $store->phone_number ?></p></div>
                <div class="col-md-4"><p><?= $store->working_hours ?></p></div>
            </div>       
        </div>
        <?php } ?>
    </div>
    
</div>
<div class="container-fluid map-wrapper">
    <div id="map"></div>
</div>