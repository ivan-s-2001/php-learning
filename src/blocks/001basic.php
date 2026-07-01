<?

startLesson('Введение в язык PHP для новичков');
text(
	'Язык PHP предназначен для создания
	динамический сайтов. С его помощью,
	например, можно сделать форум, интернет-магазин,
	доску объявления и тому подобные вещи.<br />
	Технически PHP нужен для генерации HTML
	кода. Как правило тексты вашего сайта
	хранятся в базе данных. PHP взаимодействует
	с базой через язык SQL, получает тексты
	и формирует из них итоговый HTML код,
	который и отправляется в браузер
	пользователя.
	<br />
	Для изучения PHP вам нужно знать
	основы верстки, хотя бы на уровне
	<a href="https://code.mu/ru/markup/book/prime/" target="_blank">основного учебника верстки</a>.'
);

startLesson('Начало работы с PHP');
text(
	'Для запуска PHP локально на вашем компьютере необходима программа-сервер. Для windows лучший вариант - OpenServer, для linux - LAMP, для macos - MAMP.<br />
Установка такого сервера займет некоторое время. Чтобы не останавливаться в обучении, выполняйте пока PHP код в онлайн редакторе, например, в этом.'
);
startLesson('Выполнение кода PHP');
text(
	'Пусть у вас уже есть установленный PHP сервер. В нем ваши программы будут располагаться в файлах с расширением php. Эти файлы на самом деле представляют собой обычные HTML файлы, в которых мы можем писать HTML код наших страниц, вот так:'
);
codeBlock(
	<<<'PHP'
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My first program</title>
	</head>
	<body>
		my first program
	</body>
</html>
PHP
);
text('В этих файлах прямо внутри HTML кода мы можем писать PHP код. Он пишется в специальных скобках:');
codeBlock(
	<<<'PHP'
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My first program</title>
	</head>
	<body>
		<?
			echo 'my first program';
		?>
	</body>
</html>
PHP
);
text(
	'Если запустить этот файл через PHP сервер, то сервер выполнит команды PHP и результат отправит в браузер. Команда echo, которую вы там можете увидеть, просто выполняет вывод заданной строки. В результате в браузер улетит только HTML код, а вместо PHP кода будет стоять результат его выполнения.<br />
Для простоты на этапе обучения лишние теги можно не писать:'
);
codeBlock(
	<<<'PHP'
<?
	echo 'my first program';
?>
PHP
);

startLesson('Проблема с кодировками');
text(
	'Чтобы кириллический текст выводился корректно, необходимо выполнение нескольких условий. Во-первых, кодировка самого файла должна быть utf-8. Во-вторых, нужно указать кодировку в HTML коде:'
);
codeBlock(
	<<<'PHP'
<meta charset="utf-8">
<?
	echo 'моя первая программа';
?>
PHP
);
text('Иногда описанные процедуры не помогают и тогда может помочь команда <code>mb_internal_encoding</code>:');
codeBlock(
	<<<'PHP'
<meta charset="utf-8">
<?
	mb_internal_encoding('UTF-8');
	echo 'моя первая программа';
?>
PHP
);

startLesson('Вывод ошибок PHP');
// https://code.mu/ru/php/book/prime/basis/errors-output/
// ⊗ppPmBsErO

codeBlock(
	<<<'PHP'
<?
	error_reporting(E_ALL);
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	ini_set('display_errors', 'on');
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	error_reporting(0);
	ini_set('display_errors', 'off');
?>
PHP
);

startLesson('Полный код для запуска PHP');
// https://code.mu/ru/php/book/prime/basis/full-launching-code/
// ⊗ppPmBsFLC

codeBlock(
	<<<'PHP'
<meta charset="utf-8">
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	echo 'my first program';
?>
PHP
);

startLesson('Улучшенный код для запуска');
// https://code.mu/ru/php/book/prime/basis/improved-launching-code/
// ⊗ppPmBsILC

codeBlock(
	<<<'PHP'
<meta charset="utf-8">
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	include 'code.php';
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo 'test';
?>
PHP
);

startLesson('Обзор начальных PHP команд');
// https://code.mu/ru/php/book/prime/basis/overview/
// ⊗ppPmBsOv

codeBlock(
	<<<'PHP'
<?
	echo 'hello';
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo 123;
?>
PHP
);

startLesson('Комментарии в PHP');
// https://code.mu/ru/php/book/prime/basis/comments/
// ⊗ppPmBsCm

codeBlock(
	<<<'PHP'
<?
	echo 'hello'; // комментарий
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	/*
		комментарий
		комментарий
	*/
	echo 'hello';
?>
PHP
);

startLesson('Комментарии в учебнике');
// https://code.mu/ru/php/book/prime/basis/book-comments/
// ⊗ppPmBsBC

codeBlock(
	<<<'PHP'
<?
	echo 'hello'; // выведет 'hello'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo 12345; // выведет 12345
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo '12345'; // выведет '12345'
?>
PHP
);

startLesson('Функция var_dump в PHP');
// https://code.mu/ru/php/book/prime/basis/dumping/
// ⊗ppPmBsDm

codeBlock(
	<<<'PHP'
<?
	var_dump('12345'); // выведет '12345' и еще некоторую полезную инфу
?>
PHP
);

startLesson('Функции в PHP');
// https://code.mu/ru/php/book/prime/basis/functions/
// ⊗ppPmBsFc

startLesson('Переменные в PHP');
// https://code.mu/ru/php/book/prime/basis/variables/
// ⊗ppPmBsVr

startLesson('Использование переменных в PHP');
// https://code.mu/ru/php/book/prime/basis/variables-usage/
// ⊗ppPmBsVU

codeBlock(
	<<<'PHP'
<?
	$a = 3;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 3;
	echo $a; // выведет на экран число 3
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Создайте переменную <code>$num</code> и присвойте ей значение <code>123</code>. Выведите значение этой переменной на экран с помощью команды <code>echo</code>.',
	'solution' => <<<'PHP'
<?
	$num = 123;
	echo $num;
?>
PHP
	,
]);

startLesson('Изменения значений переменных в PHP');
// https://code.mu/ru/php/book/prime/basis/variables-values-changing/
// ⊗ppPmBsVVCh

codeBlock(
	<<<'PHP'
<?
	$a = 1;  // записываем в переменную значение 1
	echo $a; // выведет 1
	
	$a = 2;  // записываем теперь значение 2, затирая значение 1
	echo $a; // выведет 2
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Создайте переменную <code>$a</code>. Запишите в нее значение <code>10</code>, выведите его на экран. Затем запишите в нее значение <code>20</code>, выведите его на экран.',
	'solution' => <<<'PHP'
<?
	$a = 10;
	echo $a;
	$a = 20;
	echo $a;
?>
PHP
	,
]);

startLesson('Математические операции с числами в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-numbers/
// ⊗ppPmBsMONu

codeBlock(
	<<<'PHP'
<?
	$a = 1 + 2;
	echo $a; // выведет 3
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$b = 3 - 2;
	echo $b; // выведет 1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$c = 3 * 2;
	echo $c; // выведет 6
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$d = 4 / 2;
	echo $d; // выведет 2
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Создайте переменную <code>$a</code>. Запишите в нее сумму чисел <code>1</code>, <code>2</code> и <code>3</code>. С помощью команды <code>echo</code> выведите на экран содержимое переменной <code>$a</code>.',
	'solution' => <<<'PHP'
<?
	$a = 1 + 2 + 3;
	echo $a;
?>
PHP
	,
]);

startLesson('Математические операции с переменными в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-variables/
// ⊗ppPmBsMOV

codeBlock(
	<<<'PHP'
<?
	$a = 1;
	$b = 2;
	echo $a + $b; // выведет 3
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 1;
	$b = 2;
	$c = $a + $b; // запишем сумму в переменную $c
	echo $c;      // выведет 3
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Создайте переменную <code>$a</code> со значением <code>10</code> и переменную <code>$b</code> со значением <code>2</code>. Выведите на экран их сумму, разность, произведение и частное (результат деления).',
	'solution' => <<<'PHP'
<?
	$a = 10;
	$b = 2;
	echo $a + $b; // сумма
	echo $a - $b; // разность
	echo $a * $b; // произведение
	echo $a / $b; // частное
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Создайте переменную <code>$c</code> со значением <code>10</code> и переменную <code>$d</code> со значением <code>5</code>. Просуммируйте их, а результат присвойте переменной <code>$res</code>. Выведите на экран значение переменной <code>$res</code>.',
	'solution' => <<<'PHP'
<?
	$c = 10;
	$d = 5;
	$res = $c + $d;
	echo $res;
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Создайте переменную <code>$a</code> со значением <code>1</code>, переменную <code>$b</code> со значением <code>2</code> и переменную <code>$c</code> со значением <code>3</code>. Выведите на экран их сумму.',
	'solution' => <<<'PHP'
<?
	$a = 1;
	$b = 2;
	$c = 3;
	echo $a + $b + $c;
?>
PHP
	,
]);

task([
	'num' => 4,
	'text' => 'Создайте переменную <code>$a</code> со значением <code>10</code> и переменную <code>$b</code> со значением <code>5</code>. Отнимите от <code>$a</code> переменную <code>$b</code> и результат присвойте переменной <code>$c</code>. Затем создайте переменную <code>$d</code>, присвойте ей значение <code>7</code>. Сложите переменные <code>$c</code> и <code>$d</code>, а результат запишите в переменную <code>$res</code>. Выведите на экран значение переменной <code>$res</code>.',
	'solution' => <<<'PHP'
<?
	$a = 10;
	$b = 5;
	$c = $a - $b;
	$d = 7;
	$res = $c + $d;
	echo $res;
?>
PHP
	,
]);

startLesson('Приоритет математических операций в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-priority/
// ⊗ppPmBsMOP

codeBlock(
	<<<'PHP'
<?
	$a = 2 * 2 + 3;
	echo $a; // выведет 7 (результат 4 + 3)
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 5 + 5 * 3;
	echo $a;
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 5 + 5 * 3 + 3;
	echo $a;
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 8 / 2 + 2;
	echo $a;
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 8 + 2 / 2;
	echo $a;
?>
PHP,
]);

startLesson('Равный приоритет в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-equal/
// ⊗ppPmBsMOE

codeBlock(
	<<<'PHP'
<?
	$a = 8 / 2 * 4;
	echo $a; // выведет 16 (результат 4 * 4)
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 8 * 2 / 4;
	echo $a; // выведет 4 (результат 16 / 4)
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 16 / 2 / 2 / 2;
	echo $a; // выведет 2
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 8 / 2 * 2;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 8 / 2 * 2;
	$res = 8;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 8 * 4 / 2 / 2;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 8 * 4 / 2 / 2;
	$res = 8;
	echo ($res == $a) ? 'Верно' : 'Неверно';
	?>
PHP
	,
]);

startLesson('Группирующие скобки в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-parentheses/
// ⊗ppPmBsMOPa

codeBlock(
	<<<'PHP'
<?
	$a = 2 * (2 + 3);
	echo $a; // выведет 10 (результат 2 * 5)
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 2 * (2 + 4 * (3 + 1));
	echo $a;
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = (2 + 3) * (2 + 3);
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
$a = (2 + 3) * (2 + 3);
$res = 25;
echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = (2 + 3) * 2 + 3;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
$a = (2 + 3) * 2 + 3;
$res = 13;
echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 2 * (2 + 4 * (3 + 1));
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 2 * (2 + 4 * (3 + 1));
	$res = 34;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 2 * 8 / 4;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 2 * 8 / 4;
	$res = 4;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

startLesson('Нюансы группировки в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-nuances/
// ⊗ppPmBsMONua

codeBlock(
	<<<'PHP'
<?
	$a = (2 * 2) + 3;
	echo $a; // выведет 7 (результат 4 + 3)
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 8 / 2 * 4;
	echo $a;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = (8 / 2) * 4;
	echo $a;
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = (2 * 8) / 4;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = (2 * 8) / 4;
	$res = 4;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 2 * (8 / 4);
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 2 * (8 / 4);
	$res = 4;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

startLesson('Дроби в PHP');
// https://code.mu/ru/php/book/prime/basis/fractions/
// ⊗ppPmBsFr

codeBlock(
	<<<'PHP'
<?
	$a = 0.5;
	echo $a; // выведет 0.5
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 0.5 + 0.5;
	echo $a; // выведет 1
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Запишите в переменную <code>$a</code> число <code>1.5</code>, а в переменную <code>$b</code> - число <code>0.75</code>. Найдите сумму значений этих переменных и выведите ее на экран.',
	'solution' => <<<'PHP'
<?
	$a = 1.5;
	$b = 0.75;
	echo $a + $b;
?>
PHP
	,
]);

startLesson('Отрицательные числа в PHP');
// https://code.mu/ru/php/book/prime/basis/negative-numbers/
// ⊗ppPmBsNN

codeBlock(
	<<<'PHP'
<?
	$a = -1;
	echo $a; // выведет -1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 1;
	$b = -$a; // записали в $b содержимое $a с обратным знаком
	echo $b;  // выведет -1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 1;
	echo -$a; // выведет -1
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Создайте переменную <code>$a</code> со значением <code>-100</code>. Выведите это значение на экран.',
	'solution' => <<<'PHP'
<?
	$a = -100;
	echo $a;
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Создайте переменную <code>$a</code>, запишите в нее какое-нибудь положительное или отрицательное число. Выведите на экран это число с обратным знаком.',
	'solution' => <<<'PHP'
<?
	$a = 50;
	echo -$a;
?>
PHP
	,
]);

startLesson('Остаток от деления в PHP');
// https://code.mu/ru/php/book/prime/basis/division-remainder/
// ⊗ppPmBsDR

codeBlock(
	<<<'PHP'
<?
	echo 10 % 3; // выведет 1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo 10 % 2; // выведет 0
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 10;
	$b = 3;
	echo $a % $b; // выведет 1
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Дана переменная <code>$a</code> со значением <code>10</code> и переменная <code>$b</code> со значением <code>3</code>. Найдите остаток от деления <code>$a</code> на <code>$b</code>.',
	'solution' => <<<'PHP'
<?
	$a = 10;
	$b = 3;
	echo $a % $b;
?>
PHP
	,
]);

startLesson('Возведение в степень в PHP');
// https://code.mu/ru/php/book/prime/basis/numbers-powering/
// ⊗ppPmBsNP

codeBlock(
	<<<'PHP'
<?
	echo 10 ** 3; // выведет 1000
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 10;
	echo $a ** 3; // выведет 1000
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 10;
	$b = 3;
	echo $a ** $b; // выведет 1000
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Возведите число <code>2</code> в <code>10</code>-ю степень. Выведите результат на экран.',
	'solution' => <<<'PHP'
<?
	echo 2 ** 10;
?>
PHP
	,
]);

startLesson('Приоритет возведения в степень в PHP');
// https://code.mu/ru/php/book/prime/basis/numbers-powering-priority/
// ⊗ppPmBsNPP

codeBlock(
	<<<'PHP'
<?
	echo 2 * 2 ** 3;
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 3 * 2 ** 3;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 3 * 2 ** 3;
	$res = 24;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = (3 * 2) ** 3;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
$a = (3 * 2) ** 3;
$res = 216;
echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 3 * 2 ** (3 + 1);
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 3 * 2 ** (3 + 1);
	$res = 48;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 2 ** 3 * 3;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 2 ** 3 * 3;
	$res = 24;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = 3 * 2 ** 3 * 3;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 3 * 2 ** 3 * 3;
	$res = 216;
	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

startLesson('Строки в PHP');
// https://code.mu/ru/php/book/prime/basis/strings/
// ⊗ppPmBsSt

codeBlock(
	<<<'PHP'
<?
	$str = 'abc';
	echo $str; // выведет 'abc'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = "abc";
	echo $str; // выведет 'abc'
?>
PHP
);

startLesson('Сложение строк в PHP');
// https://code.mu/ru/php/book/prime/basis/strings-concatenation/
// ⊗ppPmBsSC

codeBlock(
	<<<'PHP'
<?
	$str = 'abc' . 'def'; // складываем две строки
	echo $str;            // выведет 'abcdef'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . $str2; // выведет 'abcdef'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . '!!!' . $str2; // выведет 'abc!!!def'
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Создайте переменную <code>$str</code> и присвойте ей строку <code>\'hello\'</code>. Выведите значение этой переменной на экран.',
	'solution' => <<<'PHP'
<?
	$str = 'hello';
	echo $str;
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Создайте переменную с текстом <code>\'abc\'</code> и переменную с текстом <code>\'def\'</code>. С помощью этих переменных и операции сложения строк выведите на экран строку <code>\'abcdef\'</code>.',
	'solution' => <<<'PHP'
<?
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . $str2;
?>
PHP
	,
]);

startLesson('Пробелы при сложении строк в PHP');
// https://code.mu/ru/php/book/prime/basis/strings-concatenation-spaces/
// ⊗ppPmBsSCS

codeBlock(
	<<<'PHP'
<?
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . ' ' . $str2; // выведет 'abc def'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'abc';
	echo $str . ' ' . 'def'; // выведет 'abc def'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'abc';
	echo $str . ' def'; // выведет 'abc def'
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Создайте переменную с текстом <code>\'hello\'</code> и переменную с текстом <code>\'world\'</code>. С помощью этих переменных и операции сложения строк выведите на экран строку <code>\'hello world\'</code>.',
	'solution' => <<<'PHP'
<?
	$str1 = 'hello';
	$str2 = 'world';
	echo $str1 . ' ' . $str2;
?>
PHP
	,
]);

startLesson('Длина строки в PHP');
// https://code.mu/ru/php/book/prime/basis/strings-length/
// ⊗ppPmBsSL

codeBlock(
	<<<'PHP'
<?
	echo strlen('abcde'); // выведет 5
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'abcde';
	echo strlen($str); // выведет 5
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo strlen('ab de'); // выведет 5
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Запишите в переменную какую-нибудь строку. Выведите на экран длину вашей строки.',
	'solution' => <<<'PHP'
<?
	$str = 'HELLO';
	echo strlen($str);
?>
PHP
	,
]);

startLesson('Проблема с кириллицей в PHP');
// https://code.mu/ru/php/book/prime/basis/cyrillic-problem/
// ⊗ppPmBsCyP

codeBlock(
	<<<'PHP'
<?
	echo strlen('абвгд'); // выведет 10, а не 5
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo mb_strlen('абвгд'); // выведет 5
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Запишите в переменную какую-нибудь кириллическую строку. Выведите на экран длину вашей строки.',
	'solution' => <<<'PHP'
<?
	$str = 'Привет';
	echo mb_strlen($str);
?>
PHP
	,
]);

startLesson('Работа с HTML тегами в PHP');
// https://code.mu/ru/php/book/prime/basis/tags/
// ⊗ppPmBsTg

codeBlock(
	<<<'PHP'
<?
	echo '<b>bold</b>';
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo '<b>';
	echo 'bold';
	echo '</b>';
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'bold';
	echo '<b>' . $str . '</b>';
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str   = 'bold';
	$open  = '<b>';
	$close = '</b>';
	
	echo $open . $str . $close;
?>
PHP
);

task([
	'num' => 1,
	'text' => 'С помощью тега <a><code>i</code></a> выведите на экран курсивный текст.',
	'solution' => <<<'PHP'
<?
	$open = '<i>';
	$close = '</i>';
	echo $open . 'курсивный текст' . $close;
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'С помощью тега <a><code>br</code></a> выведите на экран столбец чисел от <code>1</code> до <code>9</code>.',
	'solution' => <<<'PHP'
<?
	$br = '<br />';
	for ($i = 1; $i <= 9; $i++) {
		echo $i . $br;
	}
?>
PHP
	,
]);

startLesson('Атрибуты тегов в PHP');
// https://code.mu/ru/php/book/prime/basis/tags-attributes/
// ⊗ppPmBsTgA

codeBlock(
	<<<'PHP'
<?
	echo '<a href="index.php">ссылка</a>';
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$href = 'index.php';
	$text = 'ссылка';
	
	echo '<a href="' . $href . '">' . $text . '</a>';
?>
PHP
);

task([
	'num' => 1,
	'text' => 'С помощью тега <a><code>img</code></a> выведите на экран какую-нибудь картинку.',
	'solution' => <<<'PHP'
<?
	$src = 'resources/img/mem1.jpg';
	echo '<img src="' . $src . '" alt="Картинка">';
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'С помощью тега <a><code>input</code></a> выведите на экран инпут с каким-нибудь текстом.',
	'solution' => <<<'PHP'
<?
	$value = 'Введите текст';
	echo '<input type="text" value="' . $value . '">';
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'С помощью тега <a><code>textarea</code></a> выведите на экран многострочное поле ввода с каким-нибудь текстом.',
	'solution' => <<<'PHP'
<?
	$value = 'Введите текст';
	echo '<textarea>' . $value . '</textarea>';
?>
PHP
	,
]);

startLesson('Логические значения в PHP');
// https://code.mu/ru/php/book/prime/basis/boolean-values/
// ⊗ppPmBsBV

codeBlock(
	<<<'PHP'
<?
	$isAdult = true;  // уже взрослый
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$isAdult = false; // еще не взрослый
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$isAdult = true;
	var_dump($isAdult); // выведет true
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo true;  // выведет 1
	echo false; // выведет пустоту
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Присвойте переменной значение <code>true</code>. Выведите эту переменную на экран.',
	'solution' => <<<'PHP'
<?
	$test = true;
	echo $test;
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Присвойте переменной значение <code>false</code>. Выведите эту переменную на экран.',
	'solution' => <<<'PHP'
<?
	$test = false;
	echo $test;
?>
PHP
	,
]);

startLesson('Значение null в PHP');
// https://code.mu/ru/php/book/prime/basis/null/
// ⊗ppPmBsNl

codeBlock(
	<<<'PHP'
<?
	$test = null;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$test = null;
	var_dump($test); // выведет null
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$test = null;
	echo $test;      // выведет пустоту
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	var_dump($test); // выведет null
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Присвойте переменной значение <code>null</code>. Выведите эту переменную на экран.',
	'solution' => <<<'PHP'
<?
	$test = null;
	echo $test;
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Выведите на экран значение любой необъявленной переменной.',
	'solution' => <<<'PHP'
<?
	echo $testing;
?>
PHP
	,
]);

startLesson('Автоматическое преобразование типов в PHP');
// https://code.mu/ru/php/book/prime/basis/automatic-types-conversion/
// ⊗ppPmBsATC

codeBlock(
	<<<'PHP'
<?
	echo '1' + '2'; // выведет 3
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo '1' + 2;   // выведет 3
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo 1 + '2';   // выведет 3
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = '1';
	$b = '2';
	
	echo $a + $b;   // выведет 3
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$a = '1';
	$b = '2';
	
	echo $a + $b + '3';
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = '1';
	$b = '2';
	$c = $a + $b + '3';
	$res = '123';
	echo ($res == $c) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

startLesson('Автоматическое преобразование к строке в PHP');
// https://code.mu/ru/php/book/prime/basis/conversion-to-string/
// ⊗ppPmBsCTS

codeBlock(
	<<<'PHP'
<?
	$a = 1;
	$b = 2;
	
	echo $a . $b; // выведет '12'
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Даны три переменные: Сложите значения этих переменных как строки.',
	'code' => <<<'PHP'
<?
	$a = 1;
	$b = 2;
	$c = 3;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 1;
	$b = 2;
	$c = 3;
	echo $a . $b . $c;
?>
PHP
	,
]);

startLesson('Нюансы преобразования к строке в PHP');
// https://code.mu/ru/php/book/prime/basis/nuances-to-string/
// ⊗ppPmBsNTS

codeBlock(
	<<<'PHP'
<?
	echo 1 . 2; // выведет '12'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo 1.2; // выведет 1.2
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	echo 1. 2; // выдаст ошибку
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$a = 1;
	$b = 2;
	
	echo $a.$b; // выведет '12', а не ошибку
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Автор кода хотел сложить числа <code>3</code> и <code>4</code> как строки: Код, однако, работает неверно. Исправьте ошибку автора кода.',
	'code' => <<<'PHP'
<?
	echo 3.4;
?>
PHP,
	'solution' => <<<'PHP'
<?
echo 3 . 4;
?>
PHP
	,
]);

startLesson('Принудительное преобразование в целые числа на PHP');
// https://code.mu/ru/php/book/prime/basis/conversion-to-number/
// ⊗ppPmBsCTN

codeBlock(
	<<<'PHP'
<?
	$test = '1';
	var_dump($test);
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$test = (int) '1';
	var_dump($test); // выведет 1 - число
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	var_dump((int) '1');
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$test = '1';
	var_dump((int) $test);
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Преобразуйте следующую строку в число:',
	'code' => <<<'PHP'
<?
	$test = '12345';
?>
PHP,
	'solution' => <<<'PHP'
<?
	$test = '12345';
	$testInt = (int) $test;
	var_dump($testInt);
?>
PHP
	,
]);

startLesson('Принудительное преобразование в дробные числа в PHP');
// https://code.mu/ru/php/book/prime/basis/conversion-to-fraction/
// ⊗ppPmBsCTF

codeBlock(
	<<<'PHP'
<?
	$test = '1.2';
	var_dump($test);
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$test = (float) '1.2';
	var_dump($test); // выведет 1.2
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Преобразуйте следующую строку в число:',
	'code' => <<<'PHP'
<?
	$test = '12.345';
?>
PHP,
	'solution' => <<<'PHP'
<?
	$test = '12.345';
	$testFloat = (float) $test;
	var_dump($testFloat);
?>
PHP
	,
]);

startLesson('Преобразование дроби к целому числу в PHP');
// https://code.mu/ru/php/book/prime/basis/fraction-to-integer/
// ⊗ppPmBsFTI

codeBlock(
	<<<'PHP'
<?
	$test = (int) '1.2';
	var_dump($test); // выведет 1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$test = (int) 1.2;
	var_dump($test); // выведет 1
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Преобразуйте следующую строку в целое число:',
	'code' => <<<'PHP'
<?
	$test = '12.345';
?>
PHP,
	'solution' => <<<'PHP'
<?
	$test = '12.345';
	$testInt = (int) $test;
	var_dump($testInt);
?>
PHP
	,
]);

startLesson('Преобразование числа к строке в PHP');
// https://code.mu/ru/php/book/prime/basis/number-to-string/
// ⊗ppPmBsNTS

codeBlock(
	<<<'PHP'
<?
	$test = (string) 123;
	var_dump($test); // выведет '123'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$test = (string) 1.2;
	var_dump($test); // выведет '1.2'
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Преобразуйте следующее число в строку:',
	'code' => <<<'PHP'
<?
	$test = 12345;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$test = 12345;
	$testString = (string) $test;
	var_dump($testString);
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Преобразуйте следующее число в строку:',
	'code' => <<<'PHP'
<?
	$test = 12.345;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$test = 12.345;
	$testString = (string) $test;
	var_dump($testString);
?>
PHP
	,
]);

startLesson('Получение символов строки на PHP');
// https://code.mu/ru/php/book/prime/basis/string-characters/
// ⊗ppPmBsSCh

codeBlock(
	<<<'PHP'
<?
	$str = 'abcde';
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'abcde';
	
	echo $str[0]; // выведет 'a'
	echo $str[1]; // выведет 'b'
	echo $str[2]; // выведет 'c'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'abcde';
	
	echo $str[-1]; // выведет 'e'
	echo $str[-2]; // выведет 'd'
	echo $str[-5]; // выведет 'a'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'abcde';
	$str[0] = '+';
	
	echo $str; // выведет '+bcde'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = 'abcde';
	$num = 3; // номер символа в переменной
	
	echo $str[$num]; // выведет 'd'
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Дана строка: Обращаясь к отдельным символам этой строки выведите на экран символ <code>\'a\'</code>, символ <code>\'c\'</code>, символ <code>\'e\'</code>.',
	'code' => <<<'PHP'
<?
	$str = 'abcde';
?>
PHP,
	'solution' => <<<'PHP'
<?
$str = 'abcde';
echo $str[0]; // выведет 'a'
echo $str[2]; // выведет 'c'
echo $str[4]; // выведет 'e'
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Дана строка: Выведите ее последний символ.',
	'code' => <<<'PHP'
<?
	$str = 'abcde';
?>
PHP,
	'solution' => <<<'PHP'
<?
$str = 'abcde';
echo $str[-1]; // выведет 'e'
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Дана строка: Обращаясь к отдельным символам этой строки запишите в новую переменную символы этой строки в обратном порядке, то есть <code>\'edcba\'</code>.',
	'code' => <<<'PHP'
<?
	$str = 'abcde';
?>
PHP,
	'solution' => <<<'PHP'
<?
$str = 'abcde';
$strReversed = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
echo $strReversed; 
?>
PHP
	,
]);

task([
	'num' => 4,
	'text' => 'Даны переменные: Выведите на экран символ, номер которого хранится в переменной <code>$num</code>.',
	'code' => <<<'PHP'
<?
	$str = 'abcde';
	$num = 3;
?>
PHP,
	'solution' => <<<'PHP'
<?
$str = 'abcde';
$num = 3;
echo $str[$num]; // выведет 'd'
?>
PHP
	,
]);

startLesson('Цифры в строке на PHP');
// https://code.mu/ru/php/book/prime/basis/digits-strings/
// ⊗ppPmBsDS

codeBlock(
	<<<'PHP'
<?
	$str = '12345';
	
	echo $str[0]; // выведет '1'
	echo $str[1]; // выведет '2'
	echo $str[2]; // выведет '3'
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str = '12345';
	echo $str[0] + $str[1]; // выведет 3
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Дана строка <code>\'12345\'</code>. Найдите сумму цифр этой строки.',
	'solution' => <<<'PHP'
<?
	$str = '12345';
	$sum = $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
	echo $sum; // выведет 15
?>
PHP
	,
]);

startLesson('Обращение к цифрам числа на PHP');
// https://code.mu/ru/php/book/prime/basis/number-digits/
// ⊗ppPmBsND

codeBlock(
	<<<'PHP'
<?
	$num = 12345;
	echo $num[0]; // выдаст ошибку
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num = 12345;
	$str = (string) $num;
	
	echo $str[0]; // выведет '1'
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Дано число <code>12345</code>. Найдите сумму цифр этого числа.',
	'solution' => <<<'PHP'
<?
	$num = 12345;
	$str = (string) $num;
	$sum = $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
	echo $sum; // выведет 15
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Дано число <code>12345</code>. Найдите произведение цифр этого числа.',
	'solution' => <<<'PHP'
<?
	$num = 12345;
	$str = (string) $num;
	$product = $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
	echo $product; // выведет 120
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Дано число <code>12345</code>. Переставьте цифры этого числа в обратном порядке.',
	'solution' => <<<'PHP'
<?
$num = 12345;
$str = (string) $num;
$reversed = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
echo $reversed; // выведет '54321'
?>
PHP
	,
]);

startLesson('Нюансы работы с операцией присваивания в PHP');
// https://code.mu/ru/php/book/prime/basis/assignment-operations-nuances/
// ⊗ppPmBsAON

codeBlock(
	<<<'PHP'
<?
	$num = 1; // объявляем переменную $num и записываем в нее значение 1
	$num = $num + 2; // записываем в $num ее саму плюс 2
	echo $num; // выведет 3
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 1;
	$num = $num + 1;
	$num = $num + 1;
	
	echo $num;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num = 1;
$num = $num + 1; 
$num = $num + 1; 
$res = 3;
echo ($res == $num) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 1;
	$num = $num + 2;
	$num = $num + 3;
	
	echo $num;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num = 1;
$num = $num + 2;
$num = $num + 3;
$res = 6;
echo ($res == $num) ? 'Верно' : 'Неверно';
?>
PHP
	,
]);

startLesson('Сокращенные операции в PHP');
// https://code.mu/ru/php/book/prime/basis/short-operations/
// ⊗ppPmBsShO

codeBlock(
	<<<'PHP'
<?
	$num = 1;
	$num = $num + 2;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num  = 1;
	$num += 3; // эквивалентно $num = $num + 3;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num  = 2;
	$num -= 3; // эквивалентно $num = $num - 3;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num  = 2;
	$num *= 3; // эквивалентно $num = $num * 3;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num  = 2;
	$num /= 3; // эквивалентно $num = $num / 3;
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$str  = 'a';
	$str .= 'b'; // эквивалентно $str = $str . 'b';
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Упростите приведенный код через сокращенные операции:',
	'code' => <<<'PHP'
<?
	$num = 47;
	$num = $num + 7;
	$num = $num - 18;
	$num = $num * 10;
	$num = $num / 15;
	echo $num;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num = 47;
	$num += 7;
	$num -= 18;
	$num *= 10;
	$num /= 15;
	echo $num;
]);

task([
    'num' => 2,
    'text' => 'Упростите приведенный код через сокращенные операции:',
    'code' => <<< 'PHP'
<?
	$str = 'a';
	$str = $str . 'b';
	$str = $str . 'c';
	
	echo $str;
?>
PHP,
	'solution' => <<<'PHP'
<?
$str = 'a';
$str .= 'b';
$str .= 'c';

echo $str;
?>
PHP
	,
]);

startLesson('Операции инкремента и декремента в PHP');
// https://code.mu/ru/php/book/prime/basis/incrementation/
// ⊗ppPmBsIc

codeBlock(
	<<<'PHP'
<?
	$num = 0;
	$num = $num + 1; // прибавляем к переменной $num число 1
	echo $num;       // выведет 1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num = 0;
	$num += 1; // прибавляем к переменной $num число 1
	echo $num; // выведет 1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num = 0;
	$num++;    // прибавляем к переменной a число 1
	echo $num; // выведет 1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num = 0;
	$num--;    // отнимаем от переменной $num число 1
	echo $num; // выведет -1
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Переделайте этот код так, чтобы в нем были операции инкремента и декремента:',
	'code' => <<<'PHP'
<?
	$num = 10;
	$num = $num + 1;
	$num = $num + 1;
	$num = $num - 1;
	echo $num;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num = 10;
	$num++;
	$num++;
	$num--;
	echo $num;
?>
PHP
	,
]);

startLesson('Префиксный и постфиксный тип в PHP');
// https://code.mu/ru/php/book/prime/basis/prefix-postfix-type/
// ⊗ppPmBsPPT

codeBlock(
	<<<'PHP'
<?
	$num = 0;
	echo $num++; // выведет 0, тк переменная увеличится только после echo
	echo $num;   // выведет 1 - переменная поменялась
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num = 0;
	echo ++$num; // выведет 1 - переменная увеличилась сразу
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num1 = 0;
	$num2 = $num1++; // в переменную $num2 запишется 0
	echo $num2;      // выведет 0
	echo $num1;      // выведет 1 - переменная $num1 поменялась после записи в $num2
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num1 = 0;
	$num2 = ++$num1; // в переменную $num2 запишется 1
	echo $num2;      // выведет 1
?>
PHP
);

codeBlock(
	<<<'PHP'
<?
	$num = 0;
	++$num;
	$num++;
	echo $num; // выведет 2
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 3;
	echo ++$num;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num = 3;
echo ++$num; // увеличиваем переменную на 1
echo $num; // выведет 4
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 3;
	echo $num++;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num = 3;
echo $num++;
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 3;
	echo --$num;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num = 3;
echo --$num; // уменьшаем переменную на 1
echo $num; // выведет 2
?>
PHP
	,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 3;
	echo $num--;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num = 3;
echo $num--; // выведет 3, тк переменная уменьшится только после echo
echo $num; // выведет 2 - переменная поменялась
?>
PHP
	,
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num1 = 3;
	$num2 = ++$num1;
	echo $num1;
	echo $num2;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num1 = 3;
$num2 = ++$num1; // увеличиваем переменную на 1 и записываем в $num2
echo $num1; // выведет 4
echo $num2; // выведет 4
?>
PHP
	,
]);

task([
	'num' => 6,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num1 = 3;
	$num2 = $num1++;
	echo $num1;
	echo $num2;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num1 = 3;
$num2 = $num1++;
echo $num1; // выведет 4
echo $num2; // выведет 3
?>
PHP
	,
]);

task([
	'num' => 7,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num1 = 3;
	$num2 = --$num1;
	echo $num1;
	echo $num2;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num1 = 3;
$num2 = --$num1; // уменьшаем переменную на 1 и записываем в $num2
echo $num1; // выведет 2
echo $num2; // выведет 2
?>
PHP
	,
]);

task([
	'num' => 8,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num1 = 3;
	$num2 = $num1--;
	echo $num1;
	echo $num2;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num1 = 3;
$num2 = $num1--;
echo $num1; // выведет 2
echo $num2; // выведет 3
?>
PHP
	,
]);

task([
	'num' => 9,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num1 = 3;
	$num1++;
	$num2 = $num1--;
	echo $num1++;
	echo --$num2;
?>
PHP,
	'solution' => <<<'PHP'
<?
$num1 = 3;
$num1++; // $num1 = 4
$num2 = $num1--; // $num2 = 4, $num1 = 3
echo $num1++; // выведет 3, $num1 = 4
echo --$num2; // уменьшаем $num2 на 1 и выводим, выведет 3
?>
PHP
	,
]);

startLesson('Поиск ошибок в коде');
// https://code.mu/ru/php/book/prime/basis/mistakes/
// ⊗ppPmBsMst

task([
	'num' => 1,
	'text' => 'Код должен получить последний символ строки:',
	'code' => <<<'PHP'
<?
	$str = 'abc';
	echo $str[3];
?>
PHP,
	'solution' => <<<'PHP'
<?
	$str = 'abc';
	echo $str[-1]; // получаем последний символ строки
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Код должен находить сумму чисел:',
	'code' => <<<'PHP'
<?
	$num1 = 1;
	$num2 = 2;
	var_dump('result: ' + $num1 + $num2);
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num1 = 1;
	$num2 = 2;
	echo 'result: ' . ($num1 + $num2); // используем конкатенацию и скобки для правильного сложения
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Код должен вывести первую цифру числа:',
	'code' => <<<'PHP'
<?
	$num = 123;
	echo $num[0];
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num = 123;
	$str = (string) $num; // преобразуем число в строку
	echo $str[0]; // выводим первый символ строки
?>
PHP
	,
]);

task([
	'num' => 4,
	'text' => 'Код должен получить последний символ строки:',
	'code' => <<<'PHP'
<?
	$str = 'abc def';
	echo $str[5]; // ожидаем 'f'
?>
PHP,
	'solution' => <<<'PHP'
<?
	$str = 'abc def';
	echo $str[-1]; // получаем последний символ строки
?>
PHP
	,
]);

task([
	'num' => 5,
	'text' => 'Код должен найти сумму чисел:',
	'code' => <<<'PHP'
<?
	$num1 = 1;
	$num2 = 2;
	$num3 = 3;
	
	echo $num1 + $num2 + $num2; // должно вывести 6
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num1 = 1;
	$num2 = 2;
	$num3 = 3;
	
	echo $num1 + $num2 + $num3; // должно вывести 6
?>
PHP
	,
]);

task([
	'num' => 6,
	'text' => 'Код должен сложить числа как строки:',
	'code' => <<<'PHP'
<?
	echo 1. 2; // должно быть '12'
?>
PHP,
	'solution' => <<<'PHP'
<?
	echo 1 . 2; // должно быть '12'
?>
PHP
	,
]);

task([
	'num' => 7,
	'text' => 'Код должен получить количество символов в строке: Автор кода ожидал, что выведется <code>6</code>, но выводится <code>7</code>. В чем ошибка автора кода?',
	'code' => <<<'PHP'
<?
	$str = 'abc def';
	echo strlen($str); // выводит 7
?>
PHP,
	'solution' => <<<'PHP'
<?
	$str = 'abc def';
	echo strlen($str) - 1; // выводит 6
?>
PHP
	,
]);

task([
	'num' => 8,
	'text' => 'Код должен был вывести в консоль число <code>1</code>, но выводит <code>0</code>:',
	'code' => <<<'PHP'
<?
	$a = 0;
	echo $a++;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 0;
	echo ++$a; // выводит 1
?>
PHP
	,
]);

task([
	'num' => 9,
	'text' => 'Код должен найти сумму первой и второй цифры числа:',
	'code' => <<<'PHP'
<?
	$num = 123;
	echo $num[0] . $num[1];
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num = 123;
	$str = (string) $num; // преобразуем число в строку
	echo $str[0] + $str[1]; // находим сумму первой и второй цифры числа
?>
PHP
	,
]);

task([
	'num' => 10,
	'text' => 'Код должен найти длину строки:',
	'code' => <<<'PHP'
<?
	$str = 'abc';
	echo str_len($str);
?>
PHP,
	'solution' => <<<'PHP'
<?
	$str = 'abc';
	echo strlen($str); // используем правильную функцию strlen
?>
PHP
	,
]);

task([
	'num' => 11,
	'text' => 'Код должен найти количество секунд в сутках:',
	'code' => <<<'PHP'
<?
	$a = 24 / 60 / 60;
	echo $a;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 24 * 60 * 60;
	echo $a;
?>
PHP
	,
]);

task([
	'num' => 12,
	'text' => 'Код должен сложить две дроби:',
	'code' => <<<'PHP'
<?
	echo 1. 2 + 1. 3; // должно быть 2.5
?>
PHP,
	'solution' => <<<'PHP'
<?
	echo 1.2 + 1.3; // должно быть 2.5
?>
PHP
	,
]);

task([
	'num' => 13,
	'text' => 'Код должен получить последний символ строки:',
	'code' => <<<'PHP'
<?
	$str = 'abc';
	echo $str[strlen($str)];
?>
PHP,
	'solution' => <<<'PHP'
<?
	$str = 'abc';
	echo $str[-1]; // получаем последний символ строки
?>
PHP
	,
]);

task([
	'num' => 14,
	'text' => 'Код должен найти сумму всех цифр числа:',
	'code' => <<<'PHP'
<?
	$num = (str) 123;
	echo $num[1] + $num[2] + $num[3];
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num = 123;
	$str = (string) $num; // преобразуем число в строку
	echo $str[0] + $str[1] + $str[2]; // находим сумму всех цифр числа
?>
PHP
	,
]);

task([
	'num' => 15,
	'text' => 'Код должен найти сумму чисел:',
	'code' => <<<'PHP'
<?
	$a = 123;
	$b = 456;
	$s = $a . $b;
	
	echo $s;
?>
PHP,
	'solution' => <<<'PHP'
<?
	$a = 123;
	$b = 456;
	$s = $a + $b; // используем сложение вместо конкатенации
	
	echo $s; // выведет 579
	?>
PHP
	,
]);

task([
	'num' => 16,
	'text' => 'Код должен найти сумму двух дробей:',
	'code' => <<<'PHP'
<?
	$num1 = (int) '2.5';
	$num2 = (int) '3.5';
	echo $num1 + $num2; // ожидаем 6
?>
PHP,
	'solution' => <<<'PHP'
<?
	$num1 = (float) '2.5';
	$num2 = (float) '3.5';
	echo $num1 + $num2; // выведет 6
?>
PHP
	,
]);

startLesson('Практика на операции в PHP');
// https://code.mu/ru/php/book/prime/basis/practicum/operations/
// ⊗ppPmBsPrmO

codeBlock(
	<<<'PHP'
<?
	echo 60 * 60; // количество секунд в часе
?>
PHP
);

task([
	'num' => 1,
	'text' => 'Найдите количество секунд в сутках.',
	'solution' => <<<'PHP'
<?
	echo 24 * 60 * 60;
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Найдите количество секунд в <code>30</code> сутках.',
	'solution' => <<<'PHP'
<?
	echo 30 * 24 * 60 * 60;
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Найдите количество секунд в году.',
	'solution' => <<<'PHP'
<?
	echo 365 * 24 * 60 * 60;
?>
PHP
	,
]);

task([
	'num' => 4,
	'text' => 'Найдите количество минут в сутках.',
	'solution' => <<<'PHP'
<?
	echo 24 * 60;
	?>
PHP
	,
]);

task([
	'num' => 5,
	'text' => 'Найдите количество минут в году.',
	'solution' => <<<'PHP'
<?
	echo 365 * 24 * 60;
?>
PHP
	,
]);

task([
	'num' => 6,
	'text' => 'Найдите количество байт в мегабайте.',
	'solution' => <<<'PHP'
<?
	echo 1024 * 1024;
?>
PHP
	,
]);

task([
	'num' => 7,
	'text' => 'Найдите количество байт в гигабайте.',
	'solution' => <<<'PHP'
<?
	echo 1024 * 1024 * 1024;
?>
PHP
	,
]);

task([
	'num' => 8,
	'text' => 'Найдите количество байт в <code>10</code> гигабайтах.',
	'solution' => <<<'PHP'
<?
	echo 10 * 1024 * 1024 * 1024;
?>
PHP
	,
]);

task([
	'num' => 9,
	'text' => 'Найдите количество байт в терабайте.',
	'solution' => <<<'PHP'
<?
	echo 1024 * 1024 * 1024 * 1024;
?>
PHP
	,
]);

task([
	'num' => 10,
	'text' => 'Найдите количество килобайт в терабайте.',
	'solution' => <<<'PHP'
<?
	echo 1024 * 1024 * 1024;
?>
PHP
	,
]);

startLesson('Практика на формулы в PHP');
// https://code.mu/ru/php/book/prime/basis/practicum/formulas/
// ⊗ppPmBsPrmF

task([
	'num' => 1,
	'text' => 'Пусть дана переменная <code>r</code> с радиусом круга. По соответствующей формуле найдите площадь круга и запишите ее в переменную <code>s</code>. Выведите содержимое этой переменной на экран.',
	'solution' => <<<'PHP'
<?
	$r = 5;
	$s = pi() * $r * $r;
	echo $s;
?>
PHP
	,
]);

task([
	'num' => 2,
	'text' => 'Пусть дана переменная <code>a</code> со стороной квадрата. Найдите площадь квадрата и запишите ее в переменную <code>s</code>. Выведите содержимое этой переменной на экран.',
	'solution' => <<<'PHP'
<?
	$a = 5;
	$s = $a * $a;
	echo $s;
?>
PHP
	,
]);

task([
	'num' => 3,
	'text' => 'Пусть даны переменные <code>a</code> и <code>b</code> со сторонами прямоугольника. Найдите площадь прямоугольника и запишите ее в переменную <code>s</code>. Выведите содержимое этой переменной на экран.',
	'solution' => <<<'PHP'
<?
	$a = 5;
	$b = 10;
	$s = $a * $b;
	echo $s;
?>
PHP
	,
]);

task([
	'text' => 'Пусть даны переменные <code>a</code> и <code>b</code> со сторонами прямоугольника. Найдите периметр прямоугольника и запишите его в переменную <code>p</code>. Выведите содержимое этой переменной на экран.',
	'solution' => <<<'PHP'
<?
	$a = 5;
	$b = 10;
	$p = 2 * ($a + $b);
	echo $p;
?>
PHP
	,
]);

task([
	'num' => 5,
	'text' => 'Пусть дана переменная <code>tc</code> с температурой в градусах Цельсия. По соответствующей формуле выполните перевод этой температуры в градусы Фаренгейта.',
	'solution' => <<<'PHP'
<?
	$tc = 25;
	$tf = $tc * 9/5 + 32;
	echo $tf;
?>
PHP
	,
]);

task([
	'num' => 6,
	'text' => 'Пусть дана переменная <code>tf</code> с температурой в градусах Фаренгейта. По соответствующей формуле выполните перевод этой температуры в градусы Цельсия.',
	'solution' => <<<'PHP'
<?
	$tf = 77;
	$tc = ($tf - 32) * 5/9;
	echo $tc;
?>
PHP
	,
]);
