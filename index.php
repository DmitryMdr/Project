<?php
$page = "index";
// главная страница сайта
include "configs/db.php";
include "configs/settings.php";
include "parts/header.php";

?>

<!-- Search -->
	<div class="search">
		<div class="container">
			<form class="subscribe" action="/pages/search_ad.php"  method="GET">
				<input class="subscribe__input" type="text" name="search" placeholder="Населёный пункт">
				<button class="subscribe__button" type="submit">Поиск</button>
			</form>
		</div>
	</div>


	<!-- regional centers -->
	<section class="regional__ceters">
		<div class="container">
		
		<h2 class="centers__title">Областные центры</h2>

		<div class="regions">
				<!-- Что бы изменить название регионального центра, требуется поменять GET параметр в ссылке на название нужного города -->
					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Винница</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Одесса">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Луцк</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Киев">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Днепр</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Донецк</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Житомир</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Ужгород</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Запорожье</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Ивано</br>Франковск</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Киев</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Кропивниц-</br>кий</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Луганск</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Львов</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Николаев</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Одесса</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Полтава</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Ровно</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Сумы</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Тернополь</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Харьков</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Херсон</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Хмельницкий</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Черкассы</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Чернигов</div>
							</div>
						</div>
					</a>

					<a href="pages/search_ad.php?search=Харьков">
						<div class="regions__item">
							<div class="regions__info">
								<div class="regions__title">Черновцы</div>
							</div>
						</div>
					</a>
		</div>

		</div> <!-- /.container -->
	</section> <!-- /.regions -->
<?php 
	include "parts/footer.php";
 ?>