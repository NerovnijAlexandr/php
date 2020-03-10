<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// if(!isset($_COOKIE[$key]))
		// {
			$birth = $_POST['birth'] ?? '';
			$birth = Date('m.d', strtotime($birth));
			$key = 'birth';
			echo $birth;
			// setcookie($key, $birth);
		// }
		// $today = 
		
	} else {
		echo "<form method='post'>
				<label for='birth'>Дата рождения:</label>
				<input type='date' name='birth' id='birth'>
				<input type='submit' value='OK'>		
			</form>";
	}

?>


