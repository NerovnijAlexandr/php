<?
// echo 'Hello <h1>WORLD</h1>';
// // die;

// # print 'Hello <h1>WORLD</h1>';
// echo 2020;

// $name = 'Виктор';
// $name_company = 'IT2.0';

// $surname = 'Иванов';
// $name = 'Василий';
// $prefix = 'sub-';

// echo 'hi, ', $surname, $name;

// print "hi, $surname $name";

// echo "<h2>привет {$prefix}kk</h2>";

// define('ADMIN_NAME', 'test');
// echo ADMIN_NAME, '<br>';

// echo __LINE__, '<br>';
// echo __LINE__, '<br>';

// echo __LINE__, '<br>';


// $a = 18;
// $b = '18';


// var_dump($a);

// $arr = ['asd', 2];

// echo $arr[1], '<br>';

// $ass = [
// 	'surname' => 'asd',
// 	'name' => 'zxc'
// ];

// echo $ass['name'], '<br>';

// $a = $b = -22;

// echo abs($a), '<br>';

// $nums = [5, 10, -88, 108, 50];

// echo min($nums), ' ', max($nums), '<br>';

// echo round(3.415323432423, 5), '<br>';

// echo fmod(4, 1.2), '<br>';

// echo mt_rand(4, 10);

// $a = $b = $c = $d = 3;

// $name = 'name';

// $name .= ' surname';

// echo $name . ' surname';

// echo '<br>';

// $age = 15;
// if($age > 15) {
// 	echo 'true';
// }elseif($age < 15) {
// 	echo 'null';
// } else {
// 	echo 'false';
// }

// // $user = isset($name) ? $name : 'user';

// $user = isset($name) ? : 'user';

// $user = $name ?? $surname ?? 'user';

// echo($user);


// // 1)
// // $city = '';
// // if(isset($town)){
// //   $city = $town;
// // }else{
// //   $city = 'kram';
// // }


// // 2)
// // $value = 'no-name';
// // if(isset($name)){
// //   $value = $name;
// // }


// // 3)
// // if(!empty($name)){
// //   $user = $name;
// // }else{
// //   $user = 'user3';
// // }


// // 1) 
// echo $city = $town ?? 'kram';
// // 2) 
// echo $value = $name ?? 'no-name';
// // 3) 
// echo $user = !empty($name) ? $name : 'user3';


// // loops

// echo 'loops';

// $i = 3;
// while($i<10) {
// 	echo $i++.'<br>';
// }

// for($i = 3; $i < 10; $i++) {
// 	echo $i.'<br>';
// }

// echo '<br>';
// for($i = 11; $i <= 25; $i++) {
// 	if(!($i % 2)) echo $i.'<br>'; 
// }



// $users = [
//   'surname' => 'Иванов',
//   'name' => 'Василий',
//   'age' => 18
// ];

// $fruits = ['apple', 'kiwi', 'orange'];

// echo '<br>';
// foreach ($fruits as $key => $fruit) {
// 	echo "$key: $fruit <br>";
// }

// echo '<br>';
// foreach ($users as $key => $user) {
// 	echo "$key: $user <br>";
// }




//
echo '<br>';
define('PI', 3.14);
echo PI;

$int = 1;
$str = (string)$int;
echo $str;

echo "Число пи (". PI .") - это константа";


echo '<br>';
$count = 0;
for($i = 10; $i <= 55; $i++) {
	if(!($i % 3)) $count++; 
}

echo $count;

die;
phpinfo();

