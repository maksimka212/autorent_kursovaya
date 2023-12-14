<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box">
					<div class="header">
						<h2>Наш автопарк</h2>
					</div>
<div class="cards">
	<?php
		$cards = $connection->prepare('SELECT * FROM autopark');
		$cards->execute();
		$cards = $cards->fetchAll(PDO::FETCH_ASSOC);

		for ($i=0; $i < count($cards); $i++) { 
			echo '
			<div class="card">
			<span class="class_auto">'. $cards[$i]['id_class'] .'</span>
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
				<div class="card__label">'. $cards[$i]['produced'] .'</div>
				</div>
				<!-- Нижняя часть -->
				<div class="card__bottom">
				<!-- Цены на товар (с учетом скидки и без)-->
				<div class="card__prices">
					<div class="card__price card__price--common">&ensp;'. $cards[$i]['cena'] .'</div>
				</div>
				<!-- Ссылка-название товара -->
				<span class="card__title">Характеристики</span>
				 	'. $cards[$i]['id_brend'] .'
					'. $cards[$i]['id_model'] .'<br>
					'. $cards[$i]['id_fuel'] .'<br>
					'. $cards[$i]['id_trans'] .'<br>
					'. $cards[$i]['id_kuzov'] .'<br>
					'. $cards[$i]['engine'] .'<br>
					'. $cards[$i]['id_color'] .'<br>
					<br>
				</a>
				<!-- Кнопка добавить в корзину -->
				<form action="
				';
				if (!isset($_SESSION['id_user'])) echo 'login';
				else echo 'rent';
				echo '
				.php">
				<button type="submit" id="open-modal-btn" class="card__add" >Арендовать</button>
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
			</div>
</section>