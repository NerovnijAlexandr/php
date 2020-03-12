<?php

	$filename = "book.csv";

	mkdir('dir', 777);

	// copy($filename, 'pdo/'.$filename);

	// $f = fopen($filename, 'r');

	// while($data = fgetcsv($f, 1000, ';'))
	// {
	// 	var_dump($data);
	// }


	// $lines = file($filename);

	// foreach($lines as $line) {
	// 	echo $line.'</br>';
	// }

	// var_dump($lines);

	// $info = stat($filename);

	// echo '<pre>';
	// var_dump($info[7]);
	// echo '</pre>';

	// echo file_get_contents($filename);

	// $fp = fopen($filename, "r");

	// $i = 1;
	// while(!feof($fp)) {
	// 	$line = (int)fgets($fp, 999);
	// 	echo $line.'<br>';
	// 	if($line == 88) {
	// 		echo 'line '.$i;
	// 		break;
	// 	}
	// 	$i++;
	// }

	if($fp) {
		fclose($fp);
	}

	// if($fp) {
	// 	fwrite($fp, 'Краматорск\nСлавянск\nДонецк');
	// }

	// // $data = fread($fp, filesize($filename));



	// var_dump($data);

	
?>

