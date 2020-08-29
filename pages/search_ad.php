<?php
$page = "search";
include "../configs/db.php";
include "../configs/settings.php";
include "../parts/header.php";

    //Перебираем пользователей
	$sql = "SELECT * FROM ads WHERE city LIKE '%" . $_GET['search'] . "%' ";
	$result = mysqli_query($connect, $sql);
	$ads = mysqli_num_rows($result);

?>
<div class="search">
	<div class="container">
		<form class="subscribe" action="search_ad.php"  method="GET">
			<input class="subscribe__input" type="text" name="search" placeholder="Населёный пункт">
			<button class="subscribe__button" type="submit">Поиск</button>
		</form>
	</div>
</div>

<div class="container">
	
			
		
<?php
if ($ads == 0) {
    echo "<h3>Совпадений не найдено</h3>";
}

while ($ads = mysqli_fetch_assoc($result) ) {
	?>
		<div class="ad">
			<img class="ad_img" src="../<?php echo $ads['photo'] ?>">
			<div class="ad_info">
				<h4>Номер объявлеия: <?php echo $ads['id']; ?></h4>

				<h4>Номер телефона: <?php echo $ads['phone_num']; ?></h4>

				<h4>Город: <?php echo $ads['city']; ?></h4>

				<h4>Адрес картиры: <?php echo $ads['adress_kv']; ?></h4>
			</div>

			<h4 class="description">Описание: <?php echo $ads['description']; ?></h4>
			
			<a class="button link search__ad_link" href="ads_page.php?id=<?php echo $ads['id']; ?>">Посмотреть</a>
		</div>


	<?php
	}
?>	

	</div>
<?php
	include "../parts/footer.php";
?>