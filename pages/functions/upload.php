<?php
include '../../configs/settings.php';
include '../../configs/db.php';

				if (isset($_POST['city']) && isset($_POST['adress_kv']) && isset($_POST['description']) && isset($_POST['infrast']) && isset($_POST['attractions']) && isset($_POST['terms']) && isset($_POST['status']) && 
					$_POST['city'] !="" && $_POST['adress_kv'] !="" && $_POST['description'] != "" && $_POST['infrast'] != "" && $_POST['attractions'] != "" && $_POST['terms'] != "" && $_POST['status'] != "" 
					) {

					$sql = "SELECT * FROM register WHERE id=" . $user_auth;

					$result = mysqli_query($connect, $sql);
			    	$row = mysqli_fetch_assoc($result);

			    	var_dump($row['name']);

						if (isset($_FILES) && $_FILES['uploadfile']['error'] == 0){
							// путь к папке сфайлами(на две директории выше этого скрипта)
							$path = 'files/';
							// Получаем расширение загруженного файла
							$extension = strtolower(substr(strrchr($_FILES['uploadfile']['name'], '.'), 1));
							// Рандомное имя фалйла из 13 символов(Нет проверки на уникальность, так что в теории, файлы могут повторятся(Хотелка: Сделать проверку на уникальность названя файлов в папке, если будет время))
							$filename = uniqid();
							// Собираем адрес файла назначения для отправки в бд
							$todb = $path  . $filename . '.' . $extension;
							// И адресс для згрузки
							$target = '../../' . $path  . $filename . '.' . $extension;
							
							if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target) ) {
							    echo "Файл корректен и был успешно загружен.";
							} else {
							    echo "Возможная атака с помощью файловой загрузки!";
							}
							if (isset($_POST['edit'])){

								 $sql = "UPDATE ads SET 
								     city = '" . $_POST["city"] . "', adress_kv = '" . $_POST["adress_kv"] . "', description = '" . $_POST["description"] . "', infrast = '" . $_POST["infrast"] . "', attractions = '" . $_POST["attractions"] . "', terms = '" . $_POST["terms"] . "', status = '" . $_POST["status"] . "', photo = '" . $todb . "' WHERE ads.id = '" . $_POST["id"] . "'";

							} else {
								$sql = "INSERT INTO ads (user_id, user_name, phone_num, city, adress_kv, description, infrast, attractions, terms, status, photo) VALUES ('". $row['id'] . "', '". $row['name'] . "', '". $row['phone_num'] . "', '". $_POST['city'] . "', '". $_POST['adress_kv'] . "', '". $_POST['description'] . "', '". $_POST['infrast'] . "', '". $_POST['attractions'] . "', '". $_POST['terms'] . "', '". $_POST['status'] . "', '". $todb . "')";

							}
							
							if ( mysqli_query($connect, $sql) ) {
								echo " запись в бд";
								// закоментаровать header, что бы посмотреть инфо по файлу
								header("location: ../privateoffice.php");
							} else {
								echo " НЕзапись в бд";
							}
						} else {
							echo "файла нет";
						}
						
						// Выводим информацию о загруженном файле:
						echo "<h3>Информация о загруженном на сервер файле: </h3>";
						echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
						echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
						echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
						echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
					} else {
						// если проверка не прошла
					}
			?>