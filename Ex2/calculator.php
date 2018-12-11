<?
	$arguments = $_POST['argument'];
	$operator = $_POST['operator'];

	switch ($operator) {
		case "+":
			echo $arguments[0] + $arguments[1];
			break;
		case "-":
			echo $arguments[0] - $arguments[1];
			break;
		case "*":
			echo $arguments[0] * $arguments[1];
			break;
		case "/":
			if ($arguments[1] == "0") {
				echo "infinity";
			} else {
				echo $arguments[0] / $arguments[1];
			}
			break;
	}