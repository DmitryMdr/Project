<?php
// Личный кабинет
$page = "privat";
include "../configs/db.php";
// настройки, тут лежи проверка на куки, для вхда или выхода.
include "../configs/settings.php";
include "../parts/header.php";

// второй варинт сообщений
if (isset($_GET['id'])) {
?>

<div class="container">
	<div class="cont" style="padding-top: 100px;">

		<form  action="messages.php?id=<?php echo $_GET['id'];?>&ida=<?php echo $_GET['ida'];?>" method="POST">
			<textarea name="send_mes" style="width: 100%; height: 150px; resize: none;"></textarea>
			<button type="submit" style="width: 100%; height: 50px;">Отправить</button>
		</form>

		<?php
		
			if (isset($_POST['send_mes']) && $_POST['send_mes'] !="") {
				$sql = "INSERT INTO `messages` (`komu_user_id`, `ot_user_id`, `text`) VALUES 
				('" . $_GET['id'] . "', '" . $user_auth . "', '" . $_POST['send_mes'] . "')";

				if ( mysqli_query($connect, $sql) ) {
					header("location: ads_page.php?id=".$_GET['ida']);
				} else {
					echo "Что то не так";
				}
			}
		
			
		?>
	</div>
</div>

<?php
}
	include "../parts/footer.php";
?>