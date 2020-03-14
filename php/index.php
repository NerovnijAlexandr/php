<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo '<pre>';
		var_dump($_FILES);
		echo '</pre>';

		$errors = [];
		$limit = 500000;
		$image = $_FILES['image'];
		if($image['size'] > $limit) {
			$errors[] = "Превышен размер файла";
		}

		if($image['type'] !== 'image/png') {
			$errors[] = "Неверный формат фала";
		}

		if(count($errors)) {
			die;
		}


		if(isset($image)) {
			if(0 === $image['error']) {
				move_uploaded_file(
					$image['tmp_name'],
					__DIR__."/images/{$image['name']}"
				);
			}
		}
	}
	
	
?>

<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<!-- <input type="file" name="images[]" multiple> -->
	<button type="submit">Upload</button>
</form>
