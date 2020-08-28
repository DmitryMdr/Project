<?php
// Страница для добавления объявлений.
$page = "newad";
include "../configs/db.php";
include "../configs/settings.php";

	include "../parts/header.php";
	?>
	<div class="container">
		<div class="regauth">
			<form action="functions/upload.php" method="post" enctype="multipart/form-data">
				<p>
				<input type="text" name="city" placeholder="Город" autocomplete="off">
				<p>
				<input type="text" name="adress_kv" placeholder="Адрес квартиры" autocomplete="off">
				<p>
				<input type="text" name="description" placeholder="Описание" autocomplete="off">
				<p>
				<input type="text" name="infrast" placeholder="Инфраструктура" autocomplete="off">
				<p>
				<input type="text" name="attractions" placeholder="Достопримечательности" autocomplete="off">
				<p>
				<input type="text" name="terms" placeholder="Сроки" autocomplete="off">
				<p>
				<input type="text" name="status" placeholder="Статус" autocomplete="off">
				<p>
				<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
				<p>
				<input type="file" name="uploadfile"/>
				<p>
				<button type="submit">Загрузить</button>
			</form>
			
		</div>
	</div>
<?php
	include "../parts/footer.php";
?>
