<?php
$page = "user_public";
// главная страница сайта
include "../configs/db.php";
include "../configs/settings.php";
include "../parts/header.php";

?>
<div class="container">
	<div class="cont" style="padding-top: 80px;">
		<?php 
			include "functions/get_user_public.php";
		?>
		<p>
			<h4>Имя: <?php echo $item['name']; ?></h4>
		<p>
			<h4>Фамилия: <?php echo $item['surname']; ?></h4>
		<p>
			<h4>Номер телефона: <?php echo $item['phone_num']; ?></h4>
		<p>
			<h4>Адрес: <?php echo $item['adress_user']; ?></h4>
		<p>
			<h4>Конфессия: <?php echo $item['denomination']; ?></h4>
		<p>
			<h4>Название церкви: <?php echo $item['church_name']; ?></h4>
		<p>
			<h4>Адрес церкви: <?php echo $item['church_adress']; ?></h4>
		<p>
			<h4>Номер пастора: <?php echo $item['pastor_num']; ?></h4>
		<p>
			<h4>Адрес электронной почты: <?php echo $item['email']; ?></h4>
		<p>
			<img src="../<?php echo $item['photo'] ?>" style="width: 480px;">
		</p>

	</div>
</div>
<?php 
	include "../parts/footer.php";
 ?>



