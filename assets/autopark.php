<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box">
					<div class="header">
						<h2>Наш автопарк</h2>
					</div>
<div class="cards">
	<?php
	/*запрос релизован на то, чтобы брать занчения из связанных таблиц, выводится не id других таблиц, а значения*/ 
		$cards = $connection->prepare('SELECT autopark.*, all_class.class, brends.brend, models.model, fuels.fuel, transmissions.transmission, kuzovs.kuzov, colors.color
		FROM autopark 
		LEFT JOIN all_class ON autopark.id_class = all_class.id_class 
		LEFT JOIN brends ON autopark.id_brend = brends.id_brend 
		LEFT JOIN models ON autopark.id_model = models.id_models 
		LEFT JOIN fuels ON autopark.id_fuel = fuels.id_fuel 
		LEFT JOIN transmissions ON autopark.id_trans = transmissions.id_trans
		LEFT JOIN kuzovs ON autopark.id_kuzov = kuzovs.id_kuzov 
		LEFT JOIN colors ON autopark.id_color = colors.id_color');
		$cards->execute();
		$cards = $cards->fetchAll(PDO::FETCH_ASSOC);
		for ($i=0; $i < count($cards); $i++) { 
			echo '
			<div class="card">
			<span class="class_auto">'. $cards[$i]['class'] .'</span>
				<!-- Верхняя часть -->
				<div class="card__top">
				<!-- Изображение-ссылка товара -->
				<a href="#" class="card__image">
					<img
					src="'. $cards[$i]['image'] .'"
					alt="Марка, модель"
					/>
				</a>
				<!-- Скидка на товар -->
				</div>
				<!-- Нижняя часть -->
				<div class="card__bottom">
				<!-- Цены на товар (с учетом скидки и без)-->
				<div class="card__prices">
					<div class="card__price card__price--common">&ensp;'. $cards[$i]['cena'] .'</div>
				</div>
				<!-- Ссылка-название товара -->
				<span class="card__title">Характеристики</span>
				 <span name="get-model">Модель: '. $cards[$i]['brend'] .' '. $cards[$i]['model'] .'</span>				
				 <span name="get-fuel">Топливо: '. $cards[$i]['fuel'] .'</span>
				 <span name="get-trans">КПП: '. $cards[$i]['transmission'] .'</span>
				 <span name="get-kuzov">Кузов: '. $cards[$i]['kuzov'] .'</span>
				 <span name="get-engine">Мощность: '. $cards[$i]['engine'] .' л.с</span>
				 <span name="get-color">Цвет: '. $cards[$i]['color'] .'</span>
					<br>
				</a>
				<!-- Кнопка добавить в корзину -->
				<form method="post" action="
				';
				if (!isset($_SESSION['id_user'])) echo 'login';
				else echo 'rent.php?id='. $cards[$i]['id_auto'] .'?brend='. $cards[$i]['brend'] .'?model='. $cards[$i]['model'] .'?cena='. $cards[$i]['cena'] .'">;
				<button type="submit" id="openModal" class="card__add" name="id='. $cards[$i]['id_auto'] .'?brend='. $cards[$i]['brend'] .'?model='. $cards[$i]['model'] .'?cena='. $cards[$i]['cena'] .'">Арендовать</button>
				</form>
				</div>
				</div>
			';
		}
		if (isset($_SESSION['alogin'])) {
			echo '<a href="addautolist.php"><div class="card">
			<div id="open-modal-btn" class="addAutoPlus">+</div>
			</div></a>
			';
		}
	?>

				</div>
			</div>
</section>