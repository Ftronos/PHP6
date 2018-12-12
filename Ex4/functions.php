<?
	function connection($request) {
		global $connect;

		$sql = $request;
		return mysqli_query($connect, $sql);
	}

	function goodsCompiler() {
		$goods = '';

		$result = connection("select * from goods");

		while($data = mysqli_fetch_assoc($result)) {
			$goods .=  '<div class = "good" >
										<h2><a href="good.php?id=' . $data[id] . '">' . $data[name] . '</a></h2>
		                <a href="good.php?id=' . $data[id] . '" target="_blank" class="good-image">
		                  <img src="max_photo/' . $data[photo] . '" title="' . $data[name] . '"/>
		                </a>
		                <div class="good-description">
		                	<div class="good-short-description">
		                		' . $data[info] . '
											</div>
											<div class="price">
												' . $data[price] . ' руб.
											</div>
										</div>
		            </div>';
		}

		return $goods;
	}

	function getGood($id) {
		return mysqli_fetch_assoc(connection("select * from goods where id = '" . $id . "'"));
	}

	function goodsAdminCompiler() {
		$goods = '';

		$result = connection("select * from goods");

		while($data = mysqli_fetch_assoc($result)) {
			$goods .=
				'<tr><td>' . $data[id] . '</td>
				<td><a href="edit.php?id=' . $data[id] . '">'. $data[name] .'</a></td>
				<td>' . $data[price] . '</td></tr>';
		}

		return $goods;
	}

	function getAdminGood($id) {
		return mysqli_fetch_assoc(connection("select * from goods where id = '" . $id . "'"));
	}