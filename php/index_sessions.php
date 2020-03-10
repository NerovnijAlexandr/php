<?php
	
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{

	} else {
		echo "<form method='post'>
		<input type='text' name='value'>
		<input type='submit'>"
	}
	
?>

<!-- <form action = "index_hello.php" method="post">	
	<label>
			enter name
			<input type="text" name="value">
	</label>
	<input type="submit">
</form> -->
