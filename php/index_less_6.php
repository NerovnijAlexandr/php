<?php
	
	$host = 'db';
    $db   = 'test_db';
    $user = 'root';
    $pass = '1234';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
	$pdo = new PDO($dsn, $user, $pass, $opt);
	
	// $res = $pdo->query('select * from users');

	// $res = $pdo->exec("insert into users 
	// 							(name, surname, gender) 
	// 					values ('Ivan', 'Ivanov', 'm')");

	$user = [
		'name' =>'Sidr', 
		'surname' => 'Sirorov', 
		'gender' => 'm'];

	$statement = $pdo->prepare("insert into users 
	 							(name, surname, gender) 
						 values (:name, :surname, :gender)");
						 
	$res = $statement->execute($user);

	// foreach($res as $row) {
	// 	echo '<pre>';
	// 	var_dump($row);
	// 	echo '</pre>';
	// 	echo $row['name'], '<br>';
	// }


	// die;
	echo '<pre>';
	var_dump($res);
	echo '</pre>';


?>