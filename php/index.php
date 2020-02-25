<?
echo 'Hello <h1>WORLD</h1>';
// die;

# print 'Hello <h1>WORLD</h1>';
echo 2020;

$name = 'Виктор';
$name_company = 'IT2.0';

$surname = 'Иванов';
$name = 'Василий';
$prefix = 'sub-';

echo 'hi, ', $surname, $name;

print "hi, $surname $name";

echo "<h2>привет {$prefix}kk</h2>";

define('ADMIN_NAME', 'test');
echo ADMIN_NAME, '<br>';

echo __LINE__, '<br>';
echo __LINE__, '<br>';

echo __LINE__, '<br>';


$a = 18;
$b = '18';


var_dump($a);

$arr = ['asd', 2];

echo $arr[1], '<br>';

$ass = [
	'surname' => 'asd',
	'name' => 'zxc'
];

echo $ass['name'], '<br>';

$a = $b = -22;

echo abs($a), '<br>';

$nums = [5, 10, -88, 108, 50];

echo min($nums), ' ', max($nums), '<br>';

echo round(3.415323432423, 5), '<br>';

echo fmod(4, 1.2), '<br>';

echo mt_rand(4, 10);

// phpinfo();

