<?

startLesson('Введение в язык PHP для новичков');
// https://code.mu/ru/php/book/prime/basis/intro/
// ⊗ppPmBsInr

startLesson('Начало работы с PHP');
// https://code.mu/ru/php/book/prime/basis/start/
// ⊗ppPmBsSt

startLesson('Выполнение кода PHP');
// https://code.mu/ru/php/book/prime/basis/run/
// ⊗ppPmBsRn

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
<?
	echo 'my first program';
?>
PHP);

startLesson('Проблема с кодировками');
// https://code.mu/ru/php/book/prime/basis/encoding-problem/
// ⊗ppPmBsEP

codeBlock(<<< 'PHP'
<meta charset="utf-8">
<?
	echo 'моя первая программа';
?>
PHP);

codeBlock(<<< 'PHP'
<meta charset="utf-8">
<?
	mb_internal_encoding('UTF-8');
	echo 'моя первая программа';
?>
PHP);

startLesson('Вывод ошибок PHP');
// https://code.mu/ru/php/book/prime/basis/errors-output/
// ⊗ppPmBsErO

codeBlock(<<< 'PHP'
<?
	error_reporting(E_ALL);
?>
PHP);

codeBlock(<<< 'PHP'
<?
	ini_set('display_errors', 'on');
?>
PHP);

codeBlock(<<< 'PHP'
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
?>
PHP);

codeBlock(<<< 'PHP'
<?
	error_reporting(0);
	ini_set('display_errors', 'off');
?>
PHP);

startLesson('Полный код для запуска PHP');
// https://code.mu/ru/php/book/prime/basis/full-launching-code/
// ⊗ppPmBsFLC

codeBlock(<<< 'PHP'
<meta charset="utf-8">
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	echo 'my first program';
?>
PHP);

startLesson('Улучшенный код для запуска');
// https://code.mu/ru/php/book/prime/basis/improved-launching-code/
// ⊗ppPmBsILC

codeBlock(<<< 'PHP'
<meta charset="utf-8">
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	include 'code.php';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo 'test';
?>
PHP);

startLesson('Обзор начальных PHP команд');
// https://code.mu/ru/php/book/prime/basis/overview/
// ⊗ppPmBsOv

codeBlock(<<< 'PHP'
<?
	echo 'hello';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo 123;
?>
PHP);

startLesson('Комментарии в PHP');
// https://code.mu/ru/php/book/prime/basis/comments/
// ⊗ppPmBsCm

codeBlock(<<< 'PHP'
<?
	echo 'hello'; // комментарий
?>
PHP);

codeBlock(<<< 'PHP'
<?
	/*
		комментарий
		комментарий
	*/
	echo 'hello';
?>
PHP);

startLesson('Комментарии в учебнике');
// https://code.mu/ru/php/book/prime/basis/book-comments/
// ⊗ppPmBsBC

codeBlock(<<< 'PHP'
<?
	echo 'hello'; // выведет 'hello'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo 12345; // выведет 12345
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo '12345'; // выведет '12345'
?>
PHP);

startLesson('Функция var_dump в PHP');
// https://code.mu/ru/php/book/prime/basis/dumping/
// ⊗ppPmBsDm

codeBlock(<<< 'PHP'
<?
	var_dump('12345'); // выведет '12345' и еще некоторую полезную инфу
?>
PHP);

startLesson('Функции в PHP');
// https://code.mu/ru/php/book/prime/basis/functions/
// ⊗ppPmBsFc

startLesson('Переменные в PHP');
// https://code.mu/ru/php/book/prime/basis/variables/
// ⊗ppPmBsVr

startLesson('Использование переменных в PHP');
// https://code.mu/ru/php/book/prime/basis/variables-usage/
// ⊗ppPmBsVU

codeBlock(<<< 'PHP'
<?
	$a = 3;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 3;
	echo $a; // выведет на экран число 3
?>
PHP);

task([
    'num' => 1,
    'text' => 'Создайте переменную <code>$num</code> и присвойте ей значение <code>123</code>. Выведите значение этой переменной на экран с помощью команды <code>echo</code>.',
]);

startLesson('Изменения значений переменных в PHP');
// https://code.mu/ru/php/book/prime/basis/variables-values-changing/
// ⊗ppPmBsVVCh

codeBlock(<<< 'PHP'
<?
	$a = 1;  // записываем в переменную значение 1
	echo $a; // выведет 1
	
	$a = 2;  // записываем теперь значение 2, затирая значение 1
	echo $a; // выведет 2
?>
PHP);

task([
    'num' => 1,
    'text' => 'Создайте переменную <code>$a</code>. Запишите в нее значение <code>10</code>, выведите его на экран. Затем запишите в нее значение <code>20</code>, выведите его на экран.',
]);

startLesson('Математические операции с числами в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-numbers/
// ⊗ppPmBsMONu

codeBlock(<<< 'PHP'
<?
	$a = 1 + 2;
	echo $a; // выведет 3
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$b = 3 - 2;
	echo $b; // выведет 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$c = 3 * 2;
	echo $c; // выведет 6
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$d = 4 / 2;
	echo $d; // выведет 2
?>
PHP);

task([
    'num' => 1,
    'text' => 'Создайте переменную <code>$a</code>. Запишите в нее сумму чисел <code>1</code>, <code>2</code> и <code>3</code>. С помощью команды <code>echo</code> выведите на экран содержимое переменной <code>$a</code>.',
]);

startLesson('Математические операции с переменными в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-variables/
// ⊗ppPmBsMOV

codeBlock(<<< 'PHP'
<?
	$a = 1;
	$b = 2;
	echo $a + $b; // выведет 3
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 1;
	$b = 2;
	$c = $a + $b; // запишем сумму в переменную $c
	echo $c;      // выведет 3
?>
PHP);

task([
    'num' => 1,
    'text' => 'Создайте переменную <code>$a</code> со значением <code>10</code> и переменную <code>$b</code> со значением <code>2</code>. Выведите на экран их сумму, разность, произведение и частное (результат деления).',
]);

task([
    'num' => 2,
    'text' => 'Создайте переменную <code>$c</code> со значением <code>10</code> и переменную <code>$d</code> со значением <code>5</code>. Просуммируйте их, а результат присвойте переменной <code>$res</code>. Выведите на экран значение переменной <code>$res</code>.',
]);

task([
    'num' => 3,
    'text' => 'Создайте переменную <code>$a</code> со значением <code>1</code>, переменную <code>$b</code> со значением <code>2</code> и переменную <code>$c</code> со значением <code>3</code>. Выведите на экран их сумму.',
]);

task([
    'num' => 4,
    'text' => 'Создайте переменную <code>$a</code> со значением <code>10</code> и переменную <code>$b</code> со значением <code>5</code>. Отнимите от <code>$a</code> переменную <code>$b</code> и результат присвойте переменной <code>$c</code>. Затем создайте переменную <code>$d</code>, присвойте ей значение <code>7</code>. Сложите переменные <code>$c</code> и <code>$d</code>, а результат запишите в переменную <code>$res</code>. Выведите на экран значение переменной <code>$res</code>.',
]);

startLesson('Приоритет математических операций в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-priority/
// ⊗ppPmBsMOP

codeBlock(<<< 'PHP'
<?
	$a = 2 * 2 + 3;
	echo $a; // выведет 7 (результат 4 + 3)
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 5 + 5 * 3;
	echo $a;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 5 + 5 * 3 + 3;
	echo $a;
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 8 / 2 + 2;
	echo $a;
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 8 + 2 / 2;
	echo $a;
?>
PHP,
]);

startLesson('Равный приоритет в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-equal/
// ⊗ppPmBsMOE

codeBlock(<<< 'PHP'
<?
	$a = 8 / 2 * 4;
	echo $a; // выведет 16 (результат 4 * 4)
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 8 * 2 / 4;
	echo $a; // выведет 4 (результат 16 / 4)
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 16 / 2 / 2 / 2;
	echo $a; // выведет 2
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 8 / 2 * 2;
	echo $a;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 8 * 4 / 2 / 2;
	echo $a;
?>
PHP,
]);

startLesson('Группирующие скобки в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-parentheses/
// ⊗ppPmBsMOPa

codeBlock(<<< 'PHP'
<?
	$a = 2 * (2 + 3);
	echo $a; // выведет 10 (результат 2 * 5)
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 2 * (2 + 4 * (3 + 1));
	echo $a;
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = (2 + 3) * (2 + 3);
	echo $a;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = (2 + 3) * 2 + 3;
	echo $a;
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 2 * (2 + 4 * (3 + 1));
	echo $a;
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 2 * 8 / 4;
	echo $a;
?>
PHP,
]);

startLesson('Нюансы группировки в PHP');
// https://code.mu/ru/php/book/prime/basis/math-operations-nuances/
// ⊗ppPmBsMONua

codeBlock(<<< 'PHP'
<?
	$a = (2 * 2) + 3;
	echo $a; // выведет 7 (результат 4 + 3)
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 8 / 2 * 4;
	echo $a;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = (8 / 2) * 4;
	echo $a;
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = (2 * 8) / 4;
	echo $a;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 2 * (8 / 4);
	echo $a;
?>
PHP,
]);

startLesson('Дроби в PHP');
// https://code.mu/ru/php/book/prime/basis/fractions/
// ⊗ppPmBsFr

codeBlock(<<< 'PHP'
<?
	$a = 0.5;
	echo $a; // выведет 0.5
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 0.5 + 0.5;
	echo $a; // выведет 1
?>
PHP);

task([
    'num' => 1,
    'text' => 'Запишите в переменную <code>$a</code> число <code>1.5</code>, а в переменную <code>$b</code> - число <code>0.75</code>. Найдите сумму значений этих переменных и выведите ее на экран.',
]);

startLesson('Отрицательные числа в PHP');
// https://code.mu/ru/php/book/prime/basis/negative-numbers/
// ⊗ppPmBsNN

codeBlock(<<< 'PHP'
<?
	$a = -1;
	echo $a; // выведет -1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 1;
	$b = -$a; // записали в $b содержимое $a с обратным знаком
	echo $b;  // выведет -1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 1;
	echo -$a; // выведет -1
?>
PHP);

task([
    'num' => 1,
    'text' => 'Создайте переменную <code>$a</code> со значением <code>-100</code>. Выведите это значение на экран.',
]);

task([
    'num' => 2,
    'text' => 'Создайте переменную <code>$a</code>, запишите в нее какое-нибудь положительное или отрицательное число. Выведите на экран это число с обратным знаком.',
]);

startLesson('Остаток от деления в PHP');
// https://code.mu/ru/php/book/prime/basis/division-remainder/
// ⊗ppPmBsDR

codeBlock(<<< 'PHP'
<?
	echo 10 % 3; // выведет 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo 10 % 2; // выведет 0
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 10;
	$b = 3;
	echo $a % $b; // выведет 1
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана переменная <code>$a</code> со значением <code>10</code> и переменная <code>$b</code> со значением <code>3</code>. Найдите остаток от деления <code>$a</code> на <code>$b</code>.',
]);

startLesson('Возведение в степень в PHP');
// https://code.mu/ru/php/book/prime/basis/numbers-powering/
// ⊗ppPmBsNP

codeBlock(<<< 'PHP'
<?
	echo 10 ** 3; // выведет 1000
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 10;
	echo $a ** 3; // выведет 1000
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 10;
	$b = 3;
	echo $a ** $b; // выведет 1000
?>
PHP);

task([
    'num' => 1,
    'text' => 'Возведите число <code>2</code> в <code>10</code>-ю степень. Выведите результат на экран.',
]);

startLesson('Приоритет возведения в степень в PHP');
// https://code.mu/ru/php/book/prime/basis/numbers-powering-priority/
// ⊗ppPmBsNPP

codeBlock(<<< 'PHP'
<?
	echo 2 * 2 ** 3;
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 3 * 2 ** 3;
	echo $a;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = (3 * 2) ** 3;
	echo $a;
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 3 * 2 ** (3 + 1);
	echo $a;
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 2 ** 3 * 3;
	echo $a;
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = 3 * 2 ** 3 * 3;
	echo $a;
?>
PHP,
]);

startLesson('Строки в PHP');
// https://code.mu/ru/php/book/prime/basis/strings/
// ⊗ppPmBsSt

codeBlock(<<< 'PHP'
<?
	$str = 'abc';
	echo $str; // выведет 'abc'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = "abc";
	echo $str; // выведет 'abc'
?>
PHP);

startLesson('Сложение строк в PHP');
// https://code.mu/ru/php/book/prime/basis/strings-concatenation/
// ⊗ppPmBsSC

codeBlock(<<< 'PHP'
<?
	$str = 'abc' . 'def'; // складываем две строки
	echo $str;            // выведет 'abcdef'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . $str2; // выведет 'abcdef'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . '!!!' . $str2; // выведет 'abc!!!def'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Создайте переменную <code>$str</code> и присвойте ей строку <code>\'hello\'</code>. Выведите значение этой переменной на экран.',
]);

task([
    'num' => 2,
    'text' => 'Создайте переменную с текстом <code>\'abc\'</code> и переменную с текстом <code>\'def\'</code>. С помощью этих переменных и операции сложения строк выведите на экран строку <code>\'abcdef\'</code>.',
]);

startLesson('Пробелы при сложении строк в PHP');
// https://code.mu/ru/php/book/prime/basis/strings-concatenation-spaces/
// ⊗ppPmBsSCS

codeBlock(<<< 'PHP'
<?
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . ' ' . $str2; // выведет 'abc def'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'abc';
	echo $str . ' ' . 'def'; // выведет 'abc def'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'abc';
	echo $str . ' def'; // выведет 'abc def'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Создайте переменную с текстом <code>\'hello\'</code> и переменную с текстом <code>\'world\'</code>. С помощью этих переменных и операции сложения строк выведите на экран строку <code>\'hello world\'</code>.',
]);

startLesson('Длина строки в PHP');
// https://code.mu/ru/php/book/prime/basis/strings-length/
// ⊗ppPmBsSL

codeBlock(<<< 'PHP'
<?
	echo strlen('abcde'); // выведет 5
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'abcde';
	echo strlen($str); // выведет 5
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo strlen('ab de'); // выведет 5
?>
PHP);

task([
    'num' => 1,
    'text' => 'Запишите в переменную какую-нибудь строку. Выведите на экран длину вашей строки.',
]);

startLesson('Проблема с кириллицей в PHP');
// https://code.mu/ru/php/book/prime/basis/cyrillic-problem/
// ⊗ppPmBsCyP

codeBlock(<<< 'PHP'
<?
	echo strlen('абвгд'); // выведет 10, а не 5
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo mb_strlen('абвгд'); // выведет 5
?>
PHP);

task([
    'num' => 1,
    'text' => 'Запишите в переменную какую-нибудь кириллическую строку. Выведите на экран длину вашей строки.',
]);

startLesson('Работа с HTML тегами в PHP');
// https://code.mu/ru/php/book/prime/basis/tags/
// ⊗ppPmBsTg

codeBlock(<<< 'PHP'
<?
	echo '<b>bold</b>';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo '<b>';
	echo 'bold';
	echo '</b>';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'bold';
	echo '<b>' . $str . '</b>';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str   = 'bold';
	$open  = '<b>';
	$close = '</b>';
	
	echo $open . $str . $close;
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью тега <a><code>i</code></a> выведите на экран курсивный текст.',
]);

task([
    'num' => 2,
    'text' => 'С помощью тега <a><code>br</code></a> выведите на экран столбец чисел от <code>1</code> до <code>9</code>.',
]);

startLesson('Атрибуты тегов в PHP');
// https://code.mu/ru/php/book/prime/basis/tags-attributes/
// ⊗ppPmBsTgA

codeBlock(<<< 'PHP'
<?
	echo '<a href="index.php">ссылка</a>';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$href = 'index.php';
	$text = 'ссылка';
	
	echo '<a href="' . $href . '">' . $text . '</a>';
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью тега <a><code>img</code></a> выведите на экран какую-нибудь картинку.',
]);

task([
    'num' => 2,
    'text' => 'С помощью тега <a><code>input</code></a> выведите на экран инпут с каким-нибудь текстом.',
]);

task([
    'num' => 3,
    'text' => 'С помощью тега <a><code>textarea</code></a> выведите на экран многострочное поле ввода с каким-нибудь текстом.',
]);

startLesson('Логические значения в PHP');
// https://code.mu/ru/php/book/prime/basis/boolean-values/
// ⊗ppPmBsBV

codeBlock(<<< 'PHP'
<?
	$isAdult = true;  // уже взрослый
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$isAdult = false; // еще не взрослый
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$isAdult = true;
	var_dump($isAdult); // выведет true
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo true;  // выведет 1
	echo false; // выведет пустоту
?>
PHP);

task([
    'num' => 1,
    'text' => 'Присвойте переменной значение <code>true</code>. Выведите эту переменную на экран.',
]);

task([
    'num' => 2,
    'text' => 'Присвойте переменной значение <code>false</code>. Выведите эту переменную на экран.',
]);

startLesson('Значение null в PHP');
// https://code.mu/ru/php/book/prime/basis/null/
// ⊗ppPmBsNl

codeBlock(<<< 'PHP'
<?
	$test = null;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$test = null;
	var_dump($test); // выведет null
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$test = null;
	echo $test;      // выведет пустоту
?>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($test); // выведет null
?>
PHP);

task([
    'num' => 1,
    'text' => 'Присвойте переменной значение <code>null</code>. Выведите эту переменную на экран.',
]);

task([
    'num' => 2,
    'text' => 'Выведите на экран значение любой необъявленной переменной.',
]);

startLesson('Автоматическое преобразование типов в PHP');
// https://code.mu/ru/php/book/prime/basis/automatic-types-conversion/
// ⊗ppPmBsATC

codeBlock(<<< 'PHP'
<?
	echo '1' + '2'; // выведет 3
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo '1' + 2;   // выведет 3
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo 1 + '2';   // выведет 3
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = '1';
	$b = '2';
	
	echo $a + $b;   // выведет 3
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$a = '1';
	$b = '2';
	
	echo $a + $b + '3';
?>
PHP,
]);

startLesson('Автоматическое преобразование к строке в PHP');
// https://code.mu/ru/php/book/prime/basis/conversion-to-string/
// ⊗ppPmBsCTS

codeBlock(<<< 'PHP'
<?
	$a = 1;
	$b = 2;
	
	echo $a . $b; // выведет '12'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Даны три переменные: Сложите значения этих переменных как строки.',
    'code' => <<< 'PHP'
<?
	$a = 1;
	$b = 2;
	$c = 3;
?>
PHP,
]);

startLesson('Нюансы преобразования к строке в PHP');
// https://code.mu/ru/php/book/prime/basis/nuances-to-string/
// ⊗ppPmBsNTS

codeBlock(<<< 'PHP'
<?
	echo 1 . 2; // выведет '12'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo 1.2; // выведет 1.2
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo 1. 2; // выдаст ошибку
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$a = 1;
	$b = 2;
	
	echo $a.$b; // выведет '12', а не ошибку
?>
PHP);

task([
    'num' => 1,
    'text' => 'Автор кода хотел сложить числа <code>3</code> и <code>4</code> как строки: Код, однако, работает неверно. Исправьте ошибку автора кода.',
    'code' => <<< 'PHP'
<?
	echo 3.4;
?>
PHP,
]);

startLesson('Принудительное преобразование в целые числа на PHP');
// https://code.mu/ru/php/book/prime/basis/conversion-to-number/
// ⊗ppPmBsCTN

codeBlock(<<< 'PHP'
<?
	$test = '1';
	var_dump($test);
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$test = (int) '1';
	var_dump($test); // выведет 1 - число
?>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump((int) '1');
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$test = '1';
	var_dump((int) $test);
?>
PHP);

task([
    'num' => 1,
    'text' => 'Преобразуйте следующую строку в число:',
    'code' => <<< 'PHP'
<?
	$test = '12345';
?>
PHP,
]);

startLesson('Принудительное преобразование в дробные числа в PHP');
// https://code.mu/ru/php/book/prime/basis/conversion-to-fraction/
// ⊗ppPmBsCTF

codeBlock(<<< 'PHP'
<?
	$test = '1.2';
	var_dump($test);
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$test = (float) '1.2';
	var_dump($test); // выведет 1.2
?>
PHP);

task([
    'num' => 1,
    'text' => 'Преобразуйте следующую строку в число:',
    'code' => <<< 'PHP'
<?
	$test = '12.345';
?>
PHP,
]);

startLesson('Преобразование дроби к целому числу в PHP');
// https://code.mu/ru/php/book/prime/basis/fraction-to-integer/
// ⊗ppPmBsFTI

codeBlock(<<< 'PHP'
<?
	$test = (int) '1.2';
	var_dump($test); // выведет 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$test = (int) 1.2;
	var_dump($test); // выведет 1
?>
PHP);

task([
    'num' => 1,
    'text' => 'Преобразуйте следующую строку в целое число:',
    'code' => <<< 'PHP'
<?
	$test = '12.345';
?>
PHP,
]);

startLesson('Преобразование числа к строке в PHP');
// https://code.mu/ru/php/book/prime/basis/number-to-string/
// ⊗ppPmBsNTS

codeBlock(<<< 'PHP'
<?
	$test = (string) 123;
	var_dump($test); // выведет '123'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$test = (string) 1.2;
	var_dump($test); // выведет '1.2'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Преобразуйте следующее число в строку:',
    'code' => <<< 'PHP'
<?
	$test = 12345;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Преобразуйте следующее число в строку:',
    'code' => <<< 'PHP'
<?
	$test = 12.345;
?>
PHP,
]);

startLesson('Получение символов строки на PHP');
// https://code.mu/ru/php/book/prime/basis/string-characters/
// ⊗ppPmBsSCh

codeBlock(<<< 'PHP'
<?
	$str = 'abcde';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'abcde';
	
	echo $str[0]; // выведет 'a'
	echo $str[1]; // выведет 'b'
	echo $str[2]; // выведет 'c'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'abcde';
	
	echo $str[-1]; // выведет 'e'
	echo $str[-2]; // выведет 'd'
	echo $str[-5]; // выведет 'a'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'abcde';
	$str[0] = '+';
	
	echo $str; // выведет '+bcde'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'abcde';
	$num = 3; // номер символа в переменной
	
	echo $str[$num]; // выведет 'd'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана строка: Обращаясь к отдельным символам этой строки выведите на экран символ <code>\'a\'</code>, символ <code>\'c\'</code>, символ <code>\'e\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abcde';
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: Выведите ее последний символ.',
    'code' => <<< 'PHP'
<?
	$str = 'abcde';
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Обращаясь к отдельным символам этой строки запишите в новую переменную символы этой строки в обратном порядке, то есть <code>\'edcba\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abcde';
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Даны переменные: Выведите на экран символ, номер которого хранится в переменной <code>$num</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abcde';
	$num = 3;
?>
PHP,
]);

startLesson('Цифры в строке на PHP');
// https://code.mu/ru/php/book/prime/basis/digits-strings/
// ⊗ppPmBsDS

codeBlock(<<< 'PHP'
<?
	$str = '12345';
	
	echo $str[0]; // выведет '1'
	echo $str[1]; // выведет '2'
	echo $str[2]; // выведет '3'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = '12345';
	echo $str[0] + $str[1]; // выведет 3
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана строка <code>\'12345\'</code>. Найдите сумму цифр этой строки.',
]);

startLesson('Обращение к цифрам числа на PHP');
// https://code.mu/ru/php/book/prime/basis/number-digits/
// ⊗ppPmBsND

codeBlock(<<< 'PHP'
<?
	$num = 12345;
	echo $num[0]; // выдаст ошибку
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 12345;
	$str = (string) $num;
	
	echo $str[0]; // выведет '1'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дано число <code>12345</code>. Найдите сумму цифр этого числа.',
]);

task([
    'num' => 2,
    'text' => 'Дано число <code>12345</code>. Найдите произведение цифр этого числа.',
]);

task([
    'num' => 3,
    'text' => 'Дано число <code>12345</code>. Переставьте цифры этого числа в обратном порядке.',
]);

startLesson('Нюансы работы с операцией присваивания в PHP');
// https://code.mu/ru/php/book/prime/basis/assignment-operations-nuances/
// ⊗ppPmBsAON

codeBlock(<<< 'PHP'
<?
	$num = 1; // объявляем переменную $num и записываем в нее значение 1
	$num = $num + 2; // записываем в $num ее саму плюс 2
	echo $num; // выведет 3
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num = 1;
	$num = $num + 1;
	$num = $num + 1;
	
	echo $num;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num = 1;
	$num = $num + 2;
	$num = $num + 3;
	
	echo $num;
?>
PHP,
]);

startLesson('Сокращенные операции в PHP');
// https://code.mu/ru/php/book/prime/basis/short-operations/
// ⊗ppPmBsShO

codeBlock(<<< 'PHP'
<?
	$num = 1;
	$num = $num + 2;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num  = 1;
	$num += 3; // эквивалентно $num = $num + 3;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num  = 2;
	$num -= 3; // эквивалентно $num = $num - 3;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num  = 2;
	$num *= 3; // эквивалентно $num = $num * 3;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num  = 2;
	$num /= 3; // эквивалентно $num = $num / 3;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str  = 'a';
	$str .= 'b'; // эквивалентно $str = $str . 'b';
?>
PHP);

task([
    'num' => 1,
    'text' => 'Упростите приведенный код через сокращенные операции:',
    'code' => <<< 'PHP'
<?
	$num = 47;
	$num = $num + 7;
	$num = $num - 18;
	$num = $num * 10;
	$num = $num / 15;
	echo $num;
?>
PHP,
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
]);

startLesson('Операции инкремента и декремента в PHP');
// https://code.mu/ru/php/book/prime/basis/incrementation/
// ⊗ppPmBsIc

codeBlock(<<< 'PHP'
<?
	$num = 0;
	$num = $num + 1; // прибавляем к переменной $num число 1
	echo $num;       // выведет 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 0;
	$num += 1; // прибавляем к переменной $num число 1
	echo $num; // выведет 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 0;
	$num++;    // прибавляем к переменной a число 1
	echo $num; // выведет 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 0;
	$num--;    // отнимаем от переменной $num число 1
	echo $num; // выведет -1
?>
PHP);

task([
    'num' => 1,
    'text' => 'Переделайте этот код так, чтобы в нем были операции инкремента и декремента:',
    'code' => <<< 'PHP'
<?
	$num = 10;
	$num = $num + 1;
	$num = $num + 1;
	$num = $num - 1;
	echo $num;
?>
PHP,
]);

startLesson('Префиксный и постфиксный тип в PHP');
// https://code.mu/ru/php/book/prime/basis/prefix-postfix-type/
// ⊗ppPmBsPPT

codeBlock(<<< 'PHP'
<?
	$num = 0;
	echo $num++; // выведет 0, тк переменная увеличится только после echo
	echo $num;   // выведет 1 - переменная поменялась
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 0;
	echo ++$num; // выведет 1 - переменная увеличилась сразу
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num1 = 0;
	$num2 = $num1++; // в переменную $num2 запишется 0
	echo $num2;      // выведет 0
	echo $num1;      // выведет 1 - переменная $num1 поменялась после записи в $num2
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num1 = 0;
	$num2 = ++$num1; // в переменную $num2 запишется 1
	echo $num2;      // выведет 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 0;
	++$num;
	$num++;
	echo $num; // выведет 2
?>
PHP);

task([
    'num' => 1,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num = 3;
	echo ++$num;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num = 3;
	echo $num++;
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num = 3;
	echo --$num;
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num = 3;
	echo $num--;
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 3;
	$num2 = ++$num1;
	echo $num1;
	echo $num2;
?>
PHP,
]);

task([
    'num' => 6,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 3;
	$num2 = $num1++;
	echo $num1;
	echo $num2;
?>
PHP,
]);

task([
    'num' => 7,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 3;
	$num2 = --$num1;
	echo $num1;
	echo $num2;
?>
PHP,
]);

task([
    'num' => 8,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 3;
	$num2 = $num1--;
	echo $num1;
	echo $num2;
?>
PHP,
]);

task([
    'num' => 9,
    'text' => 'Не запуская код, определите, что выведется на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 3;
	$num1++;
	$num2 = $num1--;
	echo $num1++;
	echo --$num2;
?>
PHP,
]);

startLesson('Поиск ошибок в коде');
// https://code.mu/ru/php/book/prime/basis/mistakes/
// ⊗ppPmBsMst

task([
    'num' => 1,
    'text' => 'Код должен получить последний символ строки:',
    'code' => <<< 'PHP'
<?
	$str = 'abc';
	echo $str[3];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Код должен находить сумму чисел:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = 2;
	var_dump('result: ' + $num1 + $num2);
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Код должен вывести первую цифру числа:',
    'code' => <<< 'PHP'
<?
	$num = 123;
	echo $num[0];
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Код должен получить последний символ строки:',
    'code' => <<< 'PHP'
<?
	$str = 'abc def';
	echo $str[5]; // ожидаем 'f'
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Код должен найти сумму чисел:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = 2;
	$num3 = 3;
	
	echo $num1 + $num2 + $num2; // должно вывести 6
?>
PHP,
]);

task([
    'num' => 6,
    'text' => 'Код должен сложить числа как строки:',
    'code' => <<< 'PHP'
<?
	echo 1. 2; // должно быть '12'
?>
PHP,
]);

task([
    'num' => 7,
    'text' => 'Код должен получить количество символов в строке: Автор кода ожидал, что выведется <code>6</code>, но выводится <code>7</code>. В чем ошибка автора кода?',
    'code' => <<< 'PHP'
<?
	$str = 'abc def';
	echo strlen($str); // выводит 7
?>
PHP,
]);

task([
    'num' => 8,
    'text' => 'Код должен был вывести в консоль число <code>1</code>, но выводит <code>0</code>:',
    'code' => <<< 'PHP'
<?
	$a = 0;
	echo $a++;
?>
PHP,
]);

task([
    'num' => 9,
    'text' => 'Код должен найти сумму первой и второй цифры числа:',
    'code' => <<< 'PHP'
<?
	$num = 123;
	echo $num[0] . $num[1];
?>
PHP,
]);

task([
    'num' => 10,
    'text' => 'Код должен найти длину строки:',
    'code' => <<< 'PHP'
<?
	$str = 'abc';
	echo str_len($str);
?>
PHP,
]);

task([
    'num' => 11,
    'text' => 'Код должен найти количество секунд в сутках:',
    'code' => <<< 'PHP'
<?
	$a = 24 / 60 / 60;
	echo $a;
?>
PHP,
]);

task([
    'num' => 12,
    'text' => 'Код должен сложить две дроби:',
    'code' => <<< 'PHP'
<?
	echo 1. 2 + 1. 3; // должно быть 2.5
?>
PHP,
]);

task([
    'num' => 13,
    'text' => 'Код должен получить последний символ строки:',
    'code' => <<< 'PHP'
<?
	$str = 'abc';
	echo $str[strlen($str)];
?>
PHP,
]);

task([
    'num' => 14,
    'text' => 'Код должен найти сумму всех цифр числа:',
    'code' => <<< 'PHP'
<?
	$num = (str) 123;
	echo $num[1] + $num[2] + $num[3];
?>
PHP,
]);

task([
    'num' => 15,
    'text' => 'Код должен найти сумму чисел:',
    'code' => <<< 'PHP'
<?
	$a = 123;
	$b = 456;
	$s = $a . $b;
	
	echo $s;
?>
PHP,
]);

task([
    'num' => 16,
    'text' => 'Код должен найти сумму двух дробей:',
    'code' => <<< 'PHP'
<?
	$num1 = (int) '2.5';
	$num2 = (int) '3.5';
	echo $num1 + $num2; // ожидаем 6
?>
PHP,
]);

startLesson('Практика на операции в PHP');
// https://code.mu/ru/php/book/prime/basis/practicum/operations/
// ⊗ppPmBsPrmO

codeBlock(<<< 'PHP'
<?
	echo 60 * 60; // количество секунд в часе
?>
PHP);

task([
    'num' => 1,
    'text' => 'Найдите количество секунд в сутках.',
]);

task([
    'num' => 2,
    'text' => 'Найдите количество секунд в <code>30</code> сутках.',
]);

task([
    'num' => 3,
    'text' => 'Найдите количество секунд в году.',
]);

task([
    'num' => 4,
    'text' => 'Найдите количество минут в сутках.',
]);

task([
    'num' => 5,
    'text' => 'Найдите количество минут в году.',
]);

task([
    'num' => 6,
    'text' => 'Найдите количество байт в мегабайте.',
]);

task([
    'num' => 7,
    'text' => 'Найдите количество байт в гигабайте.',
]);

task([
    'num' => 8,
    'text' => 'Найдите количество байт в <code>10</code> гигабайтах.',
]);

task([
    'num' => 9,
    'text' => 'Найдите количество байт в терабайте.',
]);

task([
    'num' => 10,
    'text' => 'Найдите количество килобайт в терабайте.',
]);

startLesson('Практика на формулы в PHP');
// https://code.mu/ru/php/book/prime/basis/practicum/formulas/
// ⊗ppPmBsPrmF

task([
    'num' => 1,
    'text' => 'Пусть дана переменная <code>r</code> с радиусом круга. По соответствующей формуле найдите площадь круга и запишите ее в переменную <code>s</code>. Выведите содержимое этой переменной на экран.',
]);

task([
    'num' => 2,
    'text' => 'Пусть дана переменная <code>a</code> со стороной квадрата. Найдите площадь квадрата и запишите ее в переменную <code>s</code>. Выведите содержимое этой переменной на экран.',
]);

task([
    'num' => 3,
    'text' => 'Пусть даны переменные <code>a</code> и <code>b</code> со сторонами прямоугольника. Найдите площадь прямоугольника и запишите ее в переменную <code>s</code>. Выведите содержимое этой переменной на экран.',
]);

task([
    'num' => 4,
    'text' => 'Пусть даны переменные <code>a</code> и <code>b</code> со сторонами прямоугольника. Найдите периметр прямоугольника и запишите его в переменную <code>p</code>. Выведите содержимое этой переменной на экран.',
]);

task([
    'num' => 5,
    'text' => 'Пусть дана переменная <code>tc</code> с температурой в градусах Цельсия. По соответствующей формуле выполните перевод этой температуры в градусы Фаренгейта.',
]);

task([
    'num' => 6,
    'text' => 'Пусть дана переменная <code>tf</code> с температурой в градусах Фаренгейта. По соответствующей формуле выполните перевод этой температуры в градусы Цельсия.',
]);
