<?php

// 	$date = time();

// 	$date2 = mktime(10);

// 	// echo Date('d.m.Y H:i:s');

// 	$date1 = strtotime('2020-02-1');
// 	$date2 = strtotime('+8 days', $date1);

// 	// echo Date('d.m.Y', $date2);

// 	//необходимо написать функцию, в которую вы передаете
// 	// дату в формате '1996-04-05' и получаете словами день недели от этой даты

	
	
// 	function dayOfWeek($strDate):string
// 	{
// 		$days = [
// 			'Воскресенье',
// 			'Понедельник',
// 			'Вторник',
// 			'Среда',
// 			'Четверг',
// 			'Пятница',
// 			'Суббота'
// 		];
// 		$date = strtotime($strDate);

// 		return $days[Date('w', $date)];
// 	}

// 	echo dayOfWeek('2020-03-03'), '<br>';

// // 	Написать функцию, которая возвращает день недели, который будет завтра.

// 	function tomorrow() {
// 		$days = [
// 			'Воскресенье',
// 			'Понедельник',
// 			'Вторник',
// 			'Среда',
// 			'Четверг',
// 			'Пятница',
// 			'Суббота'
// 		];

// 		//$date1 = strtotime('now');
// 		// $date2 = strtotime('+1 day');

// 		return $days[Date('w', strtotime('+1 day'))];
// 	}

// 	echo tomorrow(), '<br>';

// // В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.
// 	function deltaTime($strDate1, $strDate2):int {
// 		$strDate1 = implode('-', array_reverse(explode('-', $strDate1)));
// 		$strDate2 = implode('-', array_reverse(explode('-', $strDate2)));
// 		$delta = abs(strtotime($strDate1) - strtotime($strDate2));

// 		return $delta/(60*60*24);
// 	}

// 	echo deltaTime('03-03-2020', '02-03-2020'), '<br>';

// 	function get_count_days($date=null):int 
// 	{
// 		$date2 = $date ?? '2020-05-01';
// 		$delta = abs(strtotime('now') - strtotime($date2));
		
// 		return $delta/(60*60*24);
// 	}

// 	echo get_count_days(), '<br>';




	// class UsersClass 
	// {
	// 	public $hi = 'Hi';
	// 	private $fio;

	// 	// function public setFio($fio) {
	// 	// 	$this->fio = $this->prepareName($fio);
	// 	// }

	// 	// function public getFio() {
	// 	// 	return $this->fio;
	// 	// }

	// 	function __construct(
	// 		$name = '')
	// 	{
	// 		$this->fio = $this->capitalize($name);
	// 	}

	// 	public function prepareName($name) 
	// 	{
	// 		return strip_tags(trim($name));
	// 	}

	// 	public function sayHelloUser($name) 
	// 	{
	// 		return $this->prepareName($name);
	// 	}

	// 	public function sayHello() 
	// 	{
	// 		return $this->hi.'!';
	// 	}

	// 	public function capitalize() {
	// 		$str_low = $this->prepareName((mb_strtolower($this->fio)));
	// 		$str_new = '';
	// 		for($i=0; $i<mb_strlen($str_low); $i++) {
	// 			$new_letter = (mb_substr($str_low, $i-1, 1) == ' ' || $i == 0) ? mb_strtoupper(mb_substr($str_low, $i, 1)) : mb_substr($str_low, $i, 1);
	// 			$str_new .= $new_letter;
	// 		}
	// 		return $str_new;
	// 	}
	// }

	// $userClass = new UsersClass('Nick niCkelsoN');
	// echo $userClass->capitalize();

	class empties {
		private $days = [
						'Воскресенье',
						'Понедельник',
						'Вторник',
						'Среда',
						'Четверг',
						'Пятница',
						'Суббота'
					];
		function get_count_days($date1, $date2):int 
		{
			$delta = abs(strtotime('now') - strtotime($date2));
			
			return $delta/(60*60*24);
		}

		public function prepareValue($value) 
		{
			return strip_tags(trim($value));
		}
	}


	class DateFunctionsClass extends empties
	{
		private $date1 = '';
		private $date2 = '';
	
		/**
		 * установка первой даты
		 */
		public function setDate1($date1)
		{
			$this->date1 = $this->prepareValue($date1);
		}
	
		/**
		 * установка второй даты
		 */
		public function setDate2($date2)
		{
			$this->date2 = $this->prepareValue($date2);
		}
	
		/**
		 * дата в формате '2020-02-02' преобразовуется в timestamp
		 * @param $date
		 * @return int
		 */
		public function getDateInTimestamp($date = ''):int
		{
	
		}
	
		/**
		 * получение разницы двух дат
		 * @param $date1
		 * @param $date2
		 * @return int
		 */
		public function getDifferentDate($date1 = '', $date2 = ''):int
		{
	
		}
	
		/**
		 * определение является ли дата рабочим днем
		 * @param $date
		 * @return bool
		 */
		public function isWorkDate($date = ''):bool
		{
	
		}
	
		/**
		 * функция возвращает словами день недели
		 * @param string $date
		 * @return string
		 */
		public function getNameDayOfWeek($date = ''): string
		{
	
		}
	
	
	}
	

?>