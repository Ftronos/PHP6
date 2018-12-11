<?
	include "../config.php";
	include "../functions.php";

	?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="container">
	<table class="admin-goods-list">
		<tr>
			<td>ID</td>
			<td>Название</td>
			<td>Цена</td>
		</tr>
		<?=goodsAdminCompiler()?>
	</table>

	<form id="create" method="post" action="newGood.php" enctype="multipart/form-data">
		<label for="name">Название</label>
		<input type="text" id="name" name="name">
		<label for="photo">Фотография</label>
		<input type="file" id="photo" name="photo">
		<label for="short_desc">Краткое описание</label>
		<textarea name="short_desc" cols="30" rows="10" id="short_desc"></textarea>
		<label for="desc">Полное описание</label>
		<textarea name="desc" cols="30" rows="10" id="desc"></textarea>
		<label for="price">Цена</label>
		<input type="text" id="price" name="price">
		<input type="submit" value="Добавить" class="send">
	</form>
</div>

</body>
</html>
