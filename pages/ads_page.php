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
			<form   method="POST">
				<textarea name="send_mes" style="width: 100%; height: 150px; resize: none;"></textarea>
				<button type="submit" style="width: 100%; height: 50px;">Отправить</button>
			</form>
		</p>
	
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



		<?php
		
			if (isset($_POST['send_mes']) && $_POST['send_mes'] !="") {
				$sql = "INSERT INTO `messages` (`komu_user_id`, `ot_user_id`, `text`) VALUES 
				('" . $item['user_id'] . "', '" . $user_auth . "', '" . $_POST['send_mes'] . "')";

				if ( mysqli_query($connect, $sql) ) {
					header("location: ads_page.php?id=".$_GET['id']);
				} else {
					echo "Что то не так";
				}

				} else {

				}
				
			
		
		?>

	<?php

?>
   		</div>
	</div>
<?php
	include "../parts/footer.php";
?>

