<?php
// Личный кабинет
$page = "privat";
include "../configs/db.php";
// настройки, тут лежи проверка на куки, для вхда или выхода.
include "../configs/settings.php";
include "../parts/header.php";

?>
<?php
	$sql2 = "SELECT * FROM register WHERE id =" . $user_auth;
	$result2 = mysqli_query($connect, $sql2);
	$item2 = mysqli_fetch_assoc($result2);

	// var_dump($item2['id']);				
?>

<div class="container">
	<div class="cont">
		<div class="left_coll">
			<p>
				<h4 class="left__coll_title">Профиль пользователя</h4>
					

		
				<img class="cont__img" src="../<?php echo $row['photo'] ?>">
	
					

					<h4>Имя: <?php echo $item2['name']; ?></h4>
				<p>
					<h4>Фамилия: <?php echo $item2['surname']; ?></h4>
				<p>
					<h4>Номер телефона: <?php echo $item2['phone_num']; ?></h4>
				<p>
					<h4>Адрес: <?php echo $item2['adress_user']; ?></h4>
				<p>
					<h4>Конфессия: <?php echo $item2['denomination']; ?></h4>
				<p>
					<h4>Название церкви: <?php echo $item2['church_name']; ?></h4>
				<p>
					<h4>Адрес церкви: <?php echo $item2['church_adress']; ?></h4>
				<p>
					<h4>Номер пастора: <?php echo $item2['pastor_num']; ?></h4>
				<p>
					<h4>Адрес электронной почты: <?php echo $item2['email']; ?></h4>
				<p>
					<a href="private_mess.php?id=<?php echo $item2['id']; ?>" style="color: black;">Личные сообщения</a>
				<a href="edit_user.php?id=<?php echo $item2['id'] ?>" style="color: black;">Редактировать профиль</a>
		</div>

			
				
		<div class="right_coll">
		<?php
		// тестовый вывод изображений
		$sql = "SELECT * FROM ads WHERE user_id =" . $user_auth;
		$result = mysqli_query($connect, $sql);
		// цикл для вывода
		while ($row = mysqli_fetch_assoc($result)) {
			// объявление 

			?>

			<p>
				<h4>Номер объявлеия: <?php echo $row['id']; ?></h4>
			<p>
				<h4>Номер телефона: <?php echo $row['phone_num']; ?></h4>
			<p>
				<h4>Город: <?php echo $row['city']; ?></h4>
			<p>
				<h4>Адрес картиры: <?php echo $row['adress_kv']; ?></h4>
			<p>
				<img src="../<?php echo $row['photo'] ?>" style="width: 480px;">
			</p>
			
			<a href="edit_ad.php?id=<?php echo $row['id'] ?>" style="color: black;">Редактировать объявление</a>
			<h2>/***************************************************/</h2>
			<?php
		}

		?>

		</div> 
		
	</div>
</div>


<?php
	include "../parts/footer.php";
?>