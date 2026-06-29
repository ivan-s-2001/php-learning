<?

startLesson('Работа с timestamp в PHP');
// https://code.mu/ru/php/book/prime/time/timestamp/
// ⊗ppPmTmTs

task([
	'num' => 1,
	'text' => 'Выведите текущее время в формате <code>timestamp</code>.',
]);

task([
	'num' => 2,
	'text' => 'Выведите <code>1</code> марта <code>2025</code> года в формате <code>timestamp</code>.',
]);

task([
	'num' => 3,
	'text' => 'Выведите <code>31</code> декабря текущего года в формате <code>timestamp</code>. Скрипт должен работать независимо от года, в котором он запущен.',
]);

task([
	'num' => 4,
	'text' => 'Найдите количество секунд, прошедших с <code>13:12:59</code> <code>15</code>-го марта <code>2000</code> года до настоящего момента времени.',
]);

task([
	'num' => 5,
	'text' => 'Найдите количество целых часов, прошедших с <code>7:23:48</code> текущего дня до настоящего момента времени.',
]);

startLesson('Форматирование даты и времени в PHP');
// https://code.mu/ru/php/book/prime/time/formatting/
// ⊗ppPmTmFm

task([
	'num' => 1,
	'text' => 'Выведите на экран текущий год, месяц, день, час, минуту, секунду.',
]);

task([
	'num' => 2,
	'text' => 'Выведите текущую дату-время в формате <span>2025-12-31</span>.',
]);

task([
	'num' => 3,
	'text' => 'Выведите текущую дату-время в формате <span>31.12.2025</span>.',
]);

task([
	'num' => 4,
	'text' => 'Выведите текущую дату-время в формате <span>31.12.2025 12:59:59</span>.',
]);

task([
	'num' => 5,
	'text' => 'Выведите <code>12</code> февраля <code>2025</code> года в формате <span>12.02.2025</span>.',
]);

task([
	'num' => 6,
	'text' => 'Создайте массив дней недели. С помощью этого массива и функции <code>date</code> выведите на экран название текущего дня недели.',
]);

task([
	'num' => 7,
	'text' => 'Создайте массив месяцев. С помощью этого массива и функции <code>date</code> выведите на экран название текущего месяца.',
]);

task([
	'num' => 8,
	'text' => 'Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.',
]);

startLesson('Разбор дат в свободном формате в PHP');
// https://code.mu/ru/php/book/prime/time/parsing/
// ⊗ppPmTmPs

task([
	'num' => 1,
	'text' => 'Дана дата в формате <span>2025-12-31</span>. С помощью функции <code>strtotime</code> и функции <code>date</code> преобразуйте ее в формат <span>31-12-2025</span>.',
]);

task([
	'num' => 2,
	'text' => 'Получите дату следующего понедельника в формате <span>месяц.день.год</span>.',
]);

task([
	'num' => 3,
	'text' => 'Получите дату первого числа следующего месяца в формате <span>месяц.день.год</span>.',
]);

task([
	'num' => 4,
	'text' => 'Дана дата <code>\'2023-12-25\'</code>. Узнайте, какой день недели был в эту дату.',
]);

startLesson('Проверка корректности даты в PHP');
// https://code.mu/ru/php/book/prime/time/correctness/
// ⊗ppPmTmCr

task([
	'num' => 1,
	'text' => 'Дана дата: Проверьте, корректна ли эта дата.',
	'code' => <<<'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дана дата: Проверьте, корректна ли эта дата.',
	'code' => <<<'PHP'
<?
	$date = '2025-02-29';
?>
PHP,
]);

startLesson('Часовой пояс в PHP');
// https://code.mu/ru/php/book/prime/time/timezone/
// ⊗ppPmTmTz

task([
	'num' => 1,
	'text' => 'Выведите текущее время в формате <span>12:59:59</span>. Совпадает ли это время с вашим текущим временем?',
]);

task([
	'num' => 2,
	'text' => 'Выведите текущий часовой пояс, установленный на вашем сервере.',
]);

task([
	'num' => 3,
	'text' => 'Поменяйте часовой пояс для вашего скрипта. Выведите текущее время. Убедитесь, что оно соответствует заданному часовому поясу.',
]);

startLesson('Изменение дат в PHP');
// https://code.mu/ru/php/book/prime/time/modifying/
// ⊗ppPmTmMd

task([
	'num' => 1,
	'text' => 'Дана дата: Прибавьте к этой дате <code>2</code> дня.',
	'code' => <<<'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дана дата: Прибавьте к этой дате <code>1</code> месяц и <code>3</code> дня.',
	'code' => <<<'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Дана дата: Прибавьте к этой дате <code>1</code> год.',
	'code' => <<<'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Дана дата: Отнимите от этой даты <code>3</code> дня.',
	'code' => <<<'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
]);

task([
	'num' => 5,
	'text' => 'Дана дата: Отнимите от этой даты <code>1</code> месяц и <code>3</code> дня.',
	'code' => <<<'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
]);

startLesson('Сравнение строк с датами на PHP');
// https://code.mu/ru/php/book/prime/time/string-comparison/
// ⊗ppPmTmSC

codeBlock(<<<'PHP'
<?
	$date1 = '2020-12-01';
	$date2 = '2019-12-01';
?>
PHP);

codeBlock(<<<'PHP'
<?
	var_dump($date1 > $date2);
?>
PHP);

codeBlock(<<<'PHP'
<?
	$date1 = '2020.12.01';
	$date2 = '2019.12.01';
?>
PHP);

codeBlock(<<<'PHP'
<?
	$date1 = '20201201';
	$date2 = '20191201';
?>
PHP);

task([
	'num' => 1,
	'text' => 'Напишите код, который сравнит две приведенные ниже даты и выведет сообщение о том, какая из них больше:',
	'code' => <<<'PHP'
$date1 = '2020-11-30';
$date2 = '2020-12-01';
PHP,
]);

startLesson('Сравнение даты без года в PHP');
// https://code.mu/ru/php/book/prime/time/comparison-without-year/
// ⊗ppPmTmCWY

codeBlock(<<<'PHP'
<?
	$date1 = '12-01';
	$date2 = '11-01';
	
	var_dump($date1 > $date2);
?>
PHP);

task([
	'num' => 1,
	'text' => 'Напишите код, который сравнит две приведенные ниже даты и выведет сообщение о том, какая из них больше:',
	'code' => <<<'PHP'
<?
	$date1 = '09-21';
	$date2 = '09-23';
?>
PHP,
]);

startLesson('Попадание даты в промежуток в PHP');
// https://code.mu/ru/php/book/prime/time/interval-hitting/
// ⊗ppPmTmIH

codeBlock(<<<'PHP'
<?
	$date = '08-20';
	
	if ($date >= '01-01' && $date <= '03-08') {
		echo '1';
	}
	
	if ($date >= '03-09' && $date <= '06-17') {
		echo '2';
	}
	
	if ($date >= '06-18' && $date <= '12-31') {
		echo '3';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дана дата, содержащая месяц и день. Определите знак Зодиака, на которую приходится эта дата.',
]);

startLesson('Сравнение timestamp с моментами на PHP');
// https://code.mu/ru/php/book/prime/time/timestamp-comparison/
// ⊗ppPmTmTC

codeBlock(<<<'PHP'
<?
	$date1 = ['2020', '12', '01'];
	$date2 = ['2019', '12', '31'];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$time1 = mktime(0, 0, 0, $date1[1], $date1[0], $date1[2]);
	$time2 = mktime(0, 0, 0, $date2[1], $date2[0], $date2[2]);
?>
PHP);

codeBlock(<<<'PHP'
<?
	var_dump($time1 > $time2);
?>
PHP);

task([
	'num' => 1,
	'text' => 'Сравните две даты, предварительно преобразовав их в timestamp:',
	'code' => <<<'PHP'
$date1 = '2020-11-30';
$date2 = '2020-12-01';
PHP,
]);
