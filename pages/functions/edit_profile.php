<?php 
include '../../configs/settings.php';
include '../../configs/db.php';

var_dump($_POST['name']);

	if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone_num']) && isset($_POST['adress_user']) && isset($_POST['denomination']) &&
		isset($_POST['church_name']) && isset($_POST['church_adress']) && isset($_POST['pastor_num']) && isset($_POST['email']) && 

	$_POST['name'] != "" && $_POST['surname'] != "" && $_POST['phone_num'] != "" && $_POST['adress_user'] != "" && $_POST['denomination'] != "" && $_POST['church_name'] != "" && 
	$_POST['church_adress'] != "" && $_POST['pastor_num'] != "" && $_POST['email'] != "") {

	
		$sql = "UPDATE register SET name = '" . $_POST['name'] . "', surname = '" . $_POST['surname'] . "', phone_num = '" . $_POST['phone_num'] . "', adress_user = '" . $_POST['adress_user'] . "', denomination = '" . $_POST['denomination'] . "', church_name = '" . $_POST['church_name'] . "', church_adress = '" . $_POST['church_adress'] . "', pastor_num = '" . $_POST['pastor_num'] . "', email = '" . $_POST['email'] . "' WHERE `register`.`id` =" . $user_auth;

		if (mysqli_query($connect, $sql)) {

			header("location: ../edit_user.php?id=".$_POST['id']);
		} else {
			echo "0";
		}
	} else {
		echo "miss";
	}
?>