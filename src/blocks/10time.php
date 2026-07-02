<?

$solutionDir = 'solutions/10time';

startLesson('Работа с timestamp в PHP');

task([
    'text' => 'Выведите текущее время в формате <code>timestamp</code>.',
    'solution' => $solutionDir . '/solution_182_1.php'
]);

task([
    'text' => 'Выведите <code>1</code> марта <code>2025</code> года

		в формате <code>timestamp</code>.',
    'solution' => $solutionDir . '/solution_182_2.php'
]);

task([
    'text' => 'Выведите <code>31</code> декабря текущего года

		в формате <code>timestamp</code>. Скрипт должен

		работать независимо от года, в котором он запущен.',
    'solution' => $solutionDir . '/solution_182_3.php'
]);

task([
    'text' => 'Найдите количество секунд, прошедших с <code>13:12:59</code>
<code>15</code>-го марта <code>2000</code> года до настоящего

		момента времени.',
    'solution' => $solutionDir . '/solution_182_4.php'
]);

task([
    'text' => 'Найдите количество целых часов, прошедших

		с <code>7:23:48</code> текущего дня до настоящего

		момента времени.',
    'solution' => $solutionDir . '/solution_182_5.php'
]);

startLesson('Форматирование даты и времени в PHP');

task([
    'text' => 'Выведите на экран текущий год, месяц, день,

		час, минуту, секунду.',
    'solution' => $solutionDir . '/solution_183_1.php'
]);

task([
    'text' => 'Выведите текущую дату-время

		в формате <span>2025-12-31</span>.',
    'solution' => $solutionDir . '/solution_183_2.php'
]);

task([
    'text' => 'Выведите текущую дату-время

		в формате <span>31.12.2025</span>.',
    'solution' => $solutionDir . '/solution_183_3.php'
]);

task([
    'text' => 'Выведите текущую дату-время

		в формате <span>31.12.2025 12:59:59</span>.',
    'solution' => $solutionDir . '/solution_183_4.php'
]);

task([
    'text' => 'Выведите <code>12</code> февраля <code>2025</code> года

		в формате <span>12.02.2025</span>.',
    'solution' => $solutionDir . '/solution_183_5.php'
]);

task([
    'text' => 'Создайте массив дней недели. С помощью этого

		массива и функции <code>date</code> выведите на

		экран название текущего дня недели.',
    'solution' => $solutionDir . '/solution_183_6.php'
]);

task([
    'text' => 'Создайте массив месяцев. С помощью этого

		массива и функции <code>date</code> выведите на

		экран название текущего месяца.',
    'solution' => $solutionDir . '/solution_183_7.php'
]);

task([
    'text' => 'Найдите количество дней в текущем месяце.

		Скрипт должен работать независимо от месяца,

		в котором он запущен.',
    'solution' => $solutionDir . '/solution_183_8.php'
]);

startLesson('Разбор дат в свободном формате в PHP');

task([
    'text' => 'Дана дата в формате <span>2025-12-31</span>. С

		помощью функции <code>strtotime</code> и функции

		<code>date</code> преобразуйте ее в формат <span>31-12-2025</span>.',
    'solution' => $solutionDir . '/solution_184_1.php'
]);

task([
    'text' => 'Получите дату следующего понедельника

		в формате <span>месяц.день.год</span>.',
    'solution' => $solutionDir . '/solution_184_2.php'
]);

task([
    'text' => 'Получите дату первого числа следующего месяца

		в формате <span>месяц.день.год</span>.',
    'solution' => $solutionDir . '/solution_184_3.php'
]);

task([
    'text' => 'Дана дата <code>\'2023-12-25\'</code>.

		Узнайте, какой день недели был в эту дату.',
    'solution' => $solutionDir . '/solution_184_4.php'
]);

startLesson('Проверка корректности даты в PHP');

task([
    'text' => 'Дана дата:

Проверьте, корректна ли эта дата.',
    'code' => <<< 'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
    'solution' => $solutionDir . '/solution_185_1.php'
]);

task([
    'text' => 'Дана дата:

Проверьте, корректна ли эта дата.',
    'code' => <<< 'PHP'
<?
	$date = '2025-02-29';
?>
PHP,
    'solution' => $solutionDir . '/solution_185_2.php'
]);

startLesson('Часовой пояс в PHP');

task([
    'text' => 'Выведите текущее время в формате <span>12:59:59</span>.

		Совпадает ли это время с вашим текущим

		временем?',
    'solution' => $solutionDir . '/solution_186_1.php'
]);

task([
    'text' => 'Выведите текущий часовой пояс,

		установленный на вашем сервере.',
    'solution' => $solutionDir . '/solution_186_2.php'
]);

task([
    'text' => 'Поменяйте часовой пояс для

		вашего скрипта. Выведите текущее время.

		Убедитесь, что оно соответствует

		заданному часовому поясу.',
    'solution' => $solutionDir . '/solution_186_3.php'
]);

startLesson('Изменение дат в PHP');

task([
    'text' => 'Дана дата:

Прибавьте к этой дате

		<code>2</code> дня.',
    'code' => <<< 'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
    'solution' => $solutionDir . '/solution_187_1.php'
]);

task([
    'text' => 'Дана дата:

Прибавьте к этой дате

		<code>1</code> месяц и <code>3</code> дня.',
    'code' => <<< 'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
    'solution' => $solutionDir . '/solution_187_2.php'
]);

task([
    'text' => 'Дана дата:

Прибавьте к этой дате <code>1</code> год.',
    'code' => <<< 'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
    'solution' => $solutionDir . '/solution_187_3.php'
]);

task([
    'text' => 'Дана дата:

Отнимите от этой даты <code>3</code> дня.',
    'code' => <<< 'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
    'solution' => $solutionDir . '/solution_187_4.php'
]);

task([
    'text' => 'Дана дата:

Отнимите от этой даты <code>1</code> месяц и <code>3</code> дня.',
    'code' => <<< 'PHP'
<?
	$date = '2025-12-31';
?>
PHP,
    'solution' => $solutionDir . '/solution_187_5.php'
]);

startLesson('Сравнение строк с датами на PHP');

text('Пусть у нас есть две даты в следующем текстовом

	формате:');

codeBlock(<<<'PHP'
<?
	$date1 = '2020-12-01';
	$date2 = '2019-12-01';
?>
PHP
);

text('В таком случае можно выполнить сравнение

	этих дат и узнать, какая из этих дат больше:');

codeBlock(<<<'PHP'
<?
	var_dump($date1 > $date2);
?>
PHP
);

text('Каким образом происходит сравнение этих дат?

	Дело в том, что наши даты представляют собой

	строки и PHP сравнивает их как строки.

	To есть он сначала сравнивает первые символы

	двух дат: если они одинаковы, то PHP

	сравнивает вторые символы, и так далее, пока

	не найдет отличия. Благодаря тому, что в

	нашем формате даты сначала расположен год,

	потом месяц, а потом день, и возможно такое

	сравнение.');

text('Важно также, чтобы даты были в одном формате.

	В нашем случае разделителями частей дат являются

	дефисы. Это, конечно же, не обязательно.

	Например, можно поставить точки:');

codeBlock(<<<'PHP'
<?
	$date1 = '2020.12.01';
	$date2 = '2019.12.01';
?>
PHP
);

text('Или вообще убрать разделители:');

codeBlock(<<<'PHP'
<?
	$date1 = '20201201';
	$date2 = '20191201';
?>
PHP
);

text('Главное, чтобы сравнение было корректным,

	размещение должно быть следующим: сначала

	год, потом месяц, потом день.');

task([
    'text' => 'Напишите код, который сравнит две приведенные

		ниже даты и выведет сообщение о том, какая

		из них больше:',
    'code' => <<<'PHP'
$date1 = '2020-11-30';
$date2 = '2020-12-01';
PHP,
    'solution' => $solutionDir . '/solution_188_1.php'
]);

startLesson('Сравнение даты без года в PHP');

text('Необязательно сравнивать года. Дата может

	состоять просто из месяца и дня:');

codeBlock(<<<'PHP'
<?
	$date1 = '12-01';
	$date2 = '11-01';
	
	var_dump($date1 > $date2);
?>
PHP
);

task([
    'text' => 'Напишите код, который сравнит две приведенные

		ниже даты и выведет сообщение о том, какая

		из них больше:',
    'code' => <<< 'PHP'
<?
	$date1 = '09-21';
	$date2 = '09-23';
?>
PHP,
    'solution' => $solutionDir . '/solution_189_1.php'
]);

startLesson('Попадание даты в промежуток в PHP');

text('Пусть есть три промежутка: с <code>1</code> января

	по <code>8</code> марта, с <code>9</code> марта по <code>17</code>

	июня, с <code>18</code> июня по <code>31</code> декабря.

	Пусть у нас также есть какая-то дата, содержащая

	месяц и день. Давайте определим, в какой

	промежуток попадает эта дата:');

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
PHP
);

task([
    'text' => 'Дана дата, содержащая месяц и день. Определите

		знак Зодиака, на которую приходится эта дата.',
    'solution' => $solutionDir . '/solution_190_1.php'
]);

startLesson('Сравнение timestamp с моментами на PHP');

text('Можно сравнивать даты, предварительно

	преобразовав их в формат timestamp.

	Давайте посмотрим на примере.

	Пусть у нас есть две даты в следующем

	формате:');

codeBlock(<<<'PHP'
<?
	$date1 = ['2020', '12', '01'];
	$date2 = ['2019', '12', '31'];
?>
PHP
);

text('Преобразуем даты в формат timestamp:');

codeBlock(<<<'PHP'
<?
	$time1 = mktime(0, 0, 0, $date1[1], $date1[0], $date1[2]);
	$time2 = mktime(0, 0, 0, $date2[1], $date2[0], $date2[2]);
?>
PHP
);

text('Сравним эти даты:');

codeBlock(<<<'PHP'
<?
	var_dump($time1 > $time2);
?>
PHP
);

task([
    'text' => 'Сравните две даты, предварительно

		преобразовав их в timestamp:',
    'code' => <<<'PHP'
$date1 = '2020-11-30';
$date2 = '2020-12-01';
PHP,
    'solution' => $solutionDir . '/solution_191_1.php'
]);

endLesson();
