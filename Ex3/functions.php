<?
	include "config.php";

	function getReviews() {
		global $connect;
		$reviews = '';
		$sql = "select * from reviews";

		$result = mysqli_query($connect, $sql);

		while ($data = mysqli_fetch_assoc($result)) {
			$reviews .= '
				<div class="review">
					<div class="review-author">'.$data['name'].'</div>
					<div class="review-text">'.$data['review'].'</div>
				</div>
			';
		}

		return $reviews;
	}