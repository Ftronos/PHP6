<?
	include "../config.php";

	$path = "../max_photo/";

	move_uploaded_file($_FILES["photo"]["tmp_name"], $path . $_FILES["photo"]["name"]);

	$sql = "insert into goods(name, photo, info, description, price) values ('".$_POST['name']."', '".$_FILES["photo"]["name"]."', '".$_POST['short_desc']."', '".$_POST['desc']."', '".$_POST['price']."')";

	mysqli_query($connect, $sql);