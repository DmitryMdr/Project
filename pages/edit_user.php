<?php
// Личный кабинет
$page = "privat";
include "../configs/db.php";
// настройки, тут лежи проверка на куки, для вхда или выхода.
include "../configs/settings.php";
include "../parts/header.php";
?>

<div class="container">
	<div class="cont" style="padding-top: 100px;">
		<?php

			if (isset($_GET['id'])) {
		
			
				$sql = "SELECT * FROM register WHERE id =" . $_GET["id"];
				$result = mysqli_query($connect, $sql);
				$item = mysqli_fetch_assoc($result);
				
			}

		?>
		<div class="left_coll" >
			<form action="functions/edit_profile.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
				<p>
				<input type="text" name="name" placeholder="Имя" autocomplete="off" value="<?php echo $item['name']; ?>">
				</p>
				<p>
				<input type="text" name="surname" placeholder="Фамилия" autocomplete="off" value="<?php echo $item['surname']; ?>">
				</p>
				<p>
				<input type="text" name="phone_num" placeholder="Номер телефона" autocomplete="off" value="<?php echo $item['phone_num']; ?>">
				</p>
				<p>
				<input type="text" name="adress_user" placeholder="Адресс проживания" autocomplete="off" value="<?php echo $item['adress_user']; ?>">
				</p>
				<p>
				<input type="text" name="denomination" placeholder="Конфессия" autocomplete="off" value="<?php echo $item['denomination']; ?>">
				</p>
				<p>
				<input type="text" name="church_name" placeholder="Название церкви" autocomplete="off" value="<?php echo $item['church_name']; ?>">
				</p>
				<p>
				<input type="text" name="church_adress" placeholder="Адресс церкви" autocomplete="off" value="<?php echo $item['church_adress']; ?>">
				</p>
				<p>
				<input type="text" name="pastor_num" placeholder="Номер пастора" autocomplete="off" value="<?php echo $item['pastor_num']; ?>">
				</p>
				<p>
				<input type="email" name="email" placeholder="е-маил"  value="<?php echo $item['email']; ?>">
				</p>
				
				<button type="submit">Редактировать профиль</button>

			</form>
		</div>

		<div class="right_coll" >
			<p>
			<h4>Добавить или изменить фото к профилю</h4>
			<p>
				<img src="../<?php echo $item['photo'] ?>" style="width: 480px;">
			</p>

			<form action="functions/upload_user_photo.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
				<p>
				<input type="file" name="uploadfile"/>
				<button type="submit">Применить</button>

			</form>
		

		</div>
	</div>
</div>

<?php
	include "../parts/footer.php";
?>