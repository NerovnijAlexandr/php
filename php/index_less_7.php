<?php
	
	$name = "count";
	$count = time();
	// echo $count;
	// $expire = strtotime('+30 days');
	// $path = '/';

	if(!isset($_COOKIE[$name])) 
	{
		setcookie($name, $count);
		
	}
	$delta = time() - $_COOKIE[$name];
	
	echo "Вас не было ".$delta." секунд";

	// $name = "name";
	// $value = "gth";

	// setcookie($name, $value);
	
?>

<!-- <form action = "index_hello.php" method="post">	
	<label>
			enter name
			<input type="text" name="value">
	</label>
	<input type="submit">
</form> -->

