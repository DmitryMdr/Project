<?php
$page = "ads";
    include "../configs/db.php";
    include "../configs/settings.php";
    include "../parts/header.php";
?>
	<div class="container">
		<div class="cont" style="padding-top: 80px;">
<?php
	// подключение функии вывода объявлений
	include "functions/get_ads.php";
	
	?>
		<a href="user_public.php?id=<?php echo $item['user_id'] ?>" style="color: black;">Просмотреть профиль пользователя</a>
		<p>
		<a href="messages.php?id=<?php echo $item['user_id']; ?>&ida=<?php echo $item['id']; ?>" style="color: black;">Написать пользователю</a>
		<p>
			<h4>Номер объявлеия: <?php echo $item['id']; ?></h4>
		<p>
			<h4>Номер телефона: <?php echo $item['phone_num']; ?></h4>
		<p>
			<h4>Город: <?php echo $item['city']; ?></h4>
		<p>
			<h4>Адрес картиры: <?php echo $item['adress_kv']; ?></h4>
		<p>
			<h4>Описание: <?php echo $item['description']; ?></h4>
		<p>
			<h4>Инфраструктура: <?php echo $item['infrast']; ?></h4>
		<p>
			<h4>Достопримечательности: <?php echo $item['attractions']; ?></h4>
		<p>
			<h4>Сроки: <?php echo $item['terms']; ?></h4>
		<p>
			<h4>Статус: <?php echo $item['status']; ?></h4>
		<p>
			<img src="../<?php echo $item['photo'] ?>" style="width: 480px;">
		</p>
	<?php

?>
   		</div>
	</div>
<?php
	include "../parts/footer.php";
?>

