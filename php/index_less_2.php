<?php

	// function calc(int $a, int $b):int 
	// {
	// 	return $a+$b;
	// }

	// echo calc(5, 6), '<br>', calc(5, 6), '<br>';

	// function sayHi($hi = 'Hi', $name = 'user') 
	// {
	// 	return $hi. ', ' .$name.'!';
	// }
	// echo sayHi();

	// var_dump(calc('5', '6'));


	// $num = '5';
	// var_dump( (integer)$num );


	// $test = 'TeSt';
	// $test2 = mb_substr($test, 0, 3);
	// echo mb_strtolower($test);
	// echo $test2;

	// $str = 'Смехопанорамма';
	// for($i=0;$i<mb_strlen($str); $i++) {
	// 	echo mb_substr($str, $i, 1). '<br>';
	// }

	/* 
	Дана строка, содержащая полный путь файла (например,
	D:\WebServers\home\testsite\www\myfile.txt). Напишите функцию, которая выделяет из данной строки имя файла
	*/

	// function getExt($path) 
	// {
	// 	return mb_substr($path, 0, mb_strrpos($path, '.'));
	// }

	// $str = 'D:\WebServers\home\testsite\www\myfile.txt';
	// echo getExt($str), '<br>';


	/*
 	Необходимо написать функцию, которая поднимает каждую первую букву каждого слова в заданной строке. Например,
	getFIO('иванов ИВАН')//результат: Иванов Иван
	*/

	// function getFIO($str):string 
	// {
	// 	$str_low = trim(mb_strtolower($str));
	// 	$str_new = '';
	// 	for($i=0; $i<mb_strlen($str_low); $i++) {
	// 		$new_letter = (mb_substr($str_low, $i-1, 1) == ' ' || $i == 0) ? mb_strtoupper(mb_substr($str_low, $i, 1)) : mb_substr($str_low, $i, 1);
	// 		$str_new .= $new_letter;
	// 	}
	// 	return $str_new;
	// }

	// echo getFIO('иванов ИВАН');

		// $txt = "мама <span>мыла</span> <br> <h1>раму</h1> мапа";

		// // echo str_replace('ма', 'па', $txt);
		// var_dump(htmlspecialchars( $txt));

		$name = "Виктор";

		function isEmpty($param) {
			return trim(htmlspecialchars($param)) == '';
		}

		function max10($param, $max_lenth=10) {
			return mb_strlen($param) > $max_lenth;
		}

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$ret_name = $_POST['name'];
			$ret_surname = $_POST['surname'];
			if(isEmpty($ret_name) && isEmpty($ret_surname))
			{
				echo 'Enter name and surname';
			} elseif(isEmpty($ret_name)) {
				echo 'Enter field name';
			} else {
				if(max10($ret_name)) {
					echo 'max_lenth less 10';
				}
				else {
					echo 'Form sended';
				}
			}
		}

		?>


	<form action="" method="post">

		<p>Имя: <input name="name" value='<?=$_POST['name'];?>' type="text"></p>

		<p>Фамилия: <input name="surname" value='<?=$_POST['surname'] ?? '';?>' type="text"></p>

		<p>E-mail: <input name="email" type="text"></p>

		<p>Сообщение: <br /><textarea name="message" cols="30" rows="5"></textarea></p>

		<p><input type='submit' value='Отправить'></p>

	</form>



