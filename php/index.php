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

	function getExt($path) 
	{
		return mb_substr($path, 0, mb_strrpos($path, '.'));
	}

	$str = 'D:\WebServers\home\testsite\www\myfile.txt';
	echo getExt($str), '<br>';


	/*
 	Необходимо написать функцию, которая поднимает каждую первую букву каждого слова в заданной строке. Например,
	getFIO('иванов ИВАН')//результат: Иванов Иван
	*/

	function getFIO($str):string 
	{
		$str_low = trim(mb_strtolower($str));
		$str_new = '';
		for($i=0; $i<mb_strlen($str_low); $i++) {
			$new_letter = (mb_substr($str_low, $i-1, 1) == ' ' || $i == 0) ? mb_strtoupper(mb_substr($str_low, $i, 1)) : mb_substr($str_low, $i, 1);
			$str_new .= $new_letter;
		}
		return $str_new;
	}

	echo getFIO('иванов ИВАН');

?>

