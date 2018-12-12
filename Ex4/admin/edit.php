<?
    include "../config.php";
	include "../functions.php";

	$data = getAdminGood($_GET['id']);

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
    <form action="update.php" method="post" id="create">
        <input type="hidden" name="id" value="<?=$data[id]?>">
        <label for="name">Название</label>
        <input type="text" id="name" name="name" value="<?=$data[name]?>">
        <label for="photo">Фотография</label>
        <input type="file" id="photo" name="photo">
        <label for="short_desc">Краткое описание</label>
        <textarea name="short_desc" cols="30" rows="10" id="short_desc"><?=$data[info]?></textarea>
        <label for="desc">Полное описание</label>
        <textarea name="desc" cols="30" rows="10" id="desc"><?=$data[description]?></textarea>
        <label for="price">Цена</label>
        <input type="text" id="price" name="price" value="<?=$data[price]?>">
        <input type="submit" value="Добавить" class="send">
    </form>
</div>

</body>
</html>
