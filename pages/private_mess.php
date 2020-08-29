<?php
// Личный кабинет
$page = "privat";
include "../configs/db.php";
// настройки, тут лежи проверка на куки, для вхда или выхода.
include "../configs/settings.php";
include "../parts/header.php";

if (isset($user_auth) ){
	$sql = "SELECT * FROM register WHERE id !=".$user_auth;
	
} else {
	$sql = "SELECT * FROM register";
}

$result = mysqli_query($connect, $sql);
$col_polsovateli = mysqli_num_rows($result);

?>

<div class="container">
	<div class="cont" style="padding-top: 100px;">

		<div class="cont_left">
			<ul>
				<?php
				// вывод списка пользователей
					$i = 0;
					while($i < $col_polsovateli) {
						$names = mysqli_fetch_assoc($result);
						//запрос в БД на наличие сообщений от/кому пользователя из списка пользователей
						$sql_messages = "SELECT * FROM messages WHERE ot_user_id = '" . $names["id"] . "' AND komu_user_id ='" . $user_auth . "' OR ot_user_id = '" . $user_auth . "' AND komu_user_id = '" . $names["id"] . "' ";
						$result_messages = mysqli_query( $connect, $sql_messages );
						$col_messages = mysqli_fetch_assoc ($result_messages );
						
						
						//Если есть сообщения для/от проверяемого пользователя віводим его в списке сообщений
						if ( $col_messages > 0 ) {
							?>
							<li>
								<a style="color: black;" href="private_mess.php?id=<?php echo $names["id"]; ?>"><?php echo $names["name"]; ?></a>
							</li>
						<?php
						}
						$i = $i + 1;
					}
				?>
			</ul>

		</div>
		<div class="cont_right">
			
			<?php
				include "chat.php";
			?>

		</div>

	</div>
</div>

<?php
	include "../parts/footer.php";
?>