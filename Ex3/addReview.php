<?
	include "config.php";

	$sql = "insert into reviews(name, review) values('".$_POST['name']."', '".$_POST['message']."')";

	mysqli_query($connect, $sql);