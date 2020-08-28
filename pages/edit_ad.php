<?php
$page = "edit_ad";
include "../configs/db.php";
include "../configs/settings.php";
include "../parts/header.php";
if (isset($_GET['id'])) {
	

$sql = "SELECT * FROM ads WHERE id LIKE '" . $_GET["id"] . "'";
$result = mysqli_query($connect, $sql);
$item = mysqli_fetch_assoc($result);

?>

		<div class="container">
			<div class="" style="position: relative; padding-top: 80px;">
				<h4 >Edit Product</h4>
				
			</div>
			<form action="functions/upload.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit" value="">
				<div >
					<div >
						<div >
							<input name = "id" type="hidden" value = "<?php echo $item["id"]; ?>" >
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<input name = "user_id" type="hidden" value = "<?php echo $item["user_id"]; ?>" >
						</div>
					</div>
				</div>
				<div >
					<div >
						<div>
							<label>Name</label>
							<input name = "user_name" type="text" value = "<?php echo $item["user_name"]; ?>">
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Номер телефона</label>
							<input name = "phone_num" type="text" value = "<?php echo $item["phone_num"]; ?>"></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Город</label>
							<input name = "city" type="text" value = "<?php echo $item["city"]; ?>"></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Адрес</label>
							<input name = "adress_kv" type="text" value = "<?php echo $item["adress_kv"]; ?>"></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Описание</label>
							<input name = "description" type="text" value = "<?php echo $item["description"]; ?>"></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Инфраструктура</label>
							<input name = "infrast" type="text" value = "<?php echo $item["infrast"]; ?>"></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Атракционы</label>
							<input name = "attractions" type="text" value = "<?php echo $item["attractions"]; ?>"></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Terms</label>
							<input name = "terms" type="text" value = "<?php echo $item["terms"]; ?>"></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>Статус</label>
							<input name = "status" type="text" value = "<?php echo $item["status"]; ?>" ></input>
						</div>
					</div>
				</div>
				<div >
					<div >
						<div >
							<label>фото</label>
							<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
							<p>
							<input type="file" name="uploadfile"/>
						</div>
					</div>
				</div>
				<button name = "submit" type="submit" value = "1">Редактировать</button>
				<div class="clearfix"></div>
			</form>
			<a href="functions/delete_ad.php?id=<?php echo $item["id"]; ?>" style="color: black;">Удалить объявлеие</a>
        </div>
	</div> <!-- /.wrapper -->
	
<?php
}
	include "../parts/footer.php";
?>