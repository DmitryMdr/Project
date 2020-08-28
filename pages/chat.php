<?php
// Функциональная страница чата
// Основная страница private_mess.php
	if (isset($_POST['message']) && $_POST['message'] !="") {
		$sql = "INSERT INTO `messages` (`komu_user_id`, `ot_user_id`, `text`) VALUES 
		('" . $_GET['id'] . "', '" . $user_auth . "', '" . $_POST['message'] . "')";

		if ( mysqli_query($connect, $sql) ) {
			
		} else {
			echo "Что то не так";
		}
	}
?>
<!-- тут какие то стили и все такое, надо удалить, главное сохранить структуру. -->
<div id="block" style="height: 100%">
	<div style="height: 85%; overflow: scroll;" >
		<ul>

      <?php
        if(isset($_GET["id"])){
          
          // подклчение к таблице сообщений
          $sql_2 = "SELECT * FROM messages " . 
          " WHERE (komu_user_id = " . $_GET["id"] . " AND ot_user_id = '" . $user_auth . "')" . " OR (komu_user_id = '" . $user_auth . "' AND ot_user_id = " . $_GET["id"] . ")" ;
	          // выполнить запрос бд
	          $result_2 = mysqli_query($connect, $sql_2);
	          // получить кол результатов vcx 
	          $col_mess = mysqli_num_rows($result_2);

	          $i = 0;
	          // выбор пользователя с id $_GET["user"]
	          $sqln = "SELECT name FROM register WHERE id =" . $_GET["id"];
	          $resultn = mysqli_query($connect, $sqln);
	          $usrnm = mysqli_fetch_assoc($resultn);
	          // вывод имени пользователя, с оторым сейчас открыт чат 
	          ?>
	            <div id="name-user">
	            <h1><?php echo "<h3>" . $usrnm["name"] .  "</h3>" ?></h1>
	            </div>
	          <?php
	          	// вывод сообщений
	            while ($i < $col_mess ) {
	              $messag = mysqli_fetch_assoc($result_2);
	                ?>
	                <li>
		                <?php
		                	// Вывод имени пользователя
							$sql = "SELECT * FROM register WHERE id ="   .  $messag["ot_user_id"];
							// Выполнение запроса
							$username = mysqli_query($connect, $sql);
							// запись в переменную массива с именами
							$username = mysqli_fetch_assoc($username);

		                ?>
		                <!-- фото пользоваеля -->
		                <div class="avatar">
		                  <img src="../<?php echo $username['photo']; ?>">
		                </div>
		                <!-- имя пользователя -->
		                <h2> <?php echo $username["name"] ?>  </h2>
		                <!-- текст сообщения -->
		                <p> <?php echo $messag["text"] ?>  </p>
		                <!-- время -->
		                <div class="time"><?php echo $messag["time"] ?> </div>
		                </a>
	                </li>

	                <?php
	              $i = $i + 1;
            }
        }
      ?>
    </ul>


	</div>
	<!-- форма отпраки собщения -->
	<form method="POST">
		<textarea style="height: 15%; width: 80%; resize: none;" name="message"></textarea>
		<button type="submit" style="width: 15%;">Отправить</button>
	</form>
</div>