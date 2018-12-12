<?
	include "../config.php";
	include "../functions.php";

	if (connection("update goods set name='".$_POST['name']."', info='".$_POST['short_desc']."', description='".$_POST['desc']."', price='".$_POST['price']."' where id='".$_POST['id']."'")) {
		echo "Товар обновлен";
	} else {
		echo "Произошла ошибка";
	}