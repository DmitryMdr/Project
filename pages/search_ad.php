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
	<div class="cont" style="padding-top: 20px;">
			
		
<?php
if ($ads == 0) {
    echo "<h3>Совпадений не найдено</h3>";
}

while ($ads = mysqli_fetch_assoc($result) ) {
	?>
		<a href="ads_page.php?id=<?php echo $ads['id']; ?>" style="color: black;">Перейти на страницу объявления</a>
		<p>
			<h4>Номер объявлеия: <?php echo $ads['id']; ?></h4>
		<p>
			<h4>Номер телефона: <?php echo $ads['phone_num']; ?></h4>
		<p>
			<h4>Город: <?php echo $ads['city']; ?></h4>
		<p>
			<h4>Адрес картиры: <?php echo $ads['adress_kv']; ?></h4>
		<p>
			<img src="../<?php echo $ads['photo'] ?>" style="width: 480px;">
		</p>
	<?php
	}
?>	
	</div>
	</div>
<?php
	include "../parts/footer.php";
?>