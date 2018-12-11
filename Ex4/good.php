<?
	include "config.php";
	include "functions.php";

	$data = getGood($_GET['id']);
	?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="product">
		<div class = "good" >
			<h2><a href="good.php?id=<?=$data[id]?>"><?=$data[name]?></a></h2>
			<a href="good.php?id=<?=$data[id]?>" target="_blank" class="good-image">
				<img src="max_photo/<?=$data[photo]?>" title="<?=$data[name]?>"/>
			</a>
			<div class="good-description">
				<div class="good-short-description">
					<?=$data[description]?>
				</div>
				<div class="price">
					<?=$data[price]?> руб.
				</div>
			</div>
		</div>
	</div>
</body>
</html>
