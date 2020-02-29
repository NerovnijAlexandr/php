<?php

	$str = '1234567890';
	$sum = 0;
	for($i=0; $i<strlen($str); $i++) {
		$sum += substr($str, $i, 1);
	}
	echo $sum, '<br>';

	$arr = [
		'a' => 'apple',
		'b' => 'banana',
		'c' => 'cherry'
	];

	// $arr_new = array_combine(array_reverse(array_keys($arr)), array_values($arr));
	$keys = array_keys($arr);
	for($i=0; $i<count($keys); $i++) {
		$key = $keys[$i];
		$arr_new[$key] = $arr[$keys[count($keys)-1 - $i]];
	}

	// var_dump($arr_new);
	

	$arr1 = [1,2,3];
	$arr2 = ['a', 'b', 'c'];
	$arr3 = [];
	for($i=0; $i<count($arr1); $i++) {
		$arr3[] = $arr1[$i];
		$arr3[] = $arr2[$i];
	}
	var_dump($arr3);

	// echo str_split($str);
	var_dump(array_sum(str_split($str)));

	$arr_new = array_combine(array_reverse(array_keys($arr)), array_values($arr));
	var_dump($arr_new);
?>