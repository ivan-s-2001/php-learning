<?

startLesson('Случайное число в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/random/number/
// ⊗ppPmRdNb

task([
	'num' => 1,
	'text' => 'Выведите на экран случайное целое число от <code>1</code> до <code>100</code>.',
]);

task([
	'num' => 2,
	'text' => 'С помощью цикла заполните массив <code>10</code>-ю случайными целыми числами.',
]);

startLesson('Случайный элемент массива в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/random/array-elem/
// ⊗ppPmRdAE

task([
	'num' => 1,
	'text' => 'Дан массив: Выведите на экран случайный ключ из данного массива.',
	'code' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дан массив: Выведите на экран случайный элемент данного массива.',
	'code' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
]);

startLesson('Перемешивание массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/random/array-shuffle/
// ⊗ppPmRdAS

task([
	'num' => 1,
	'text' => 'Дан массив: Перемешайте его элементы в случайном порядке.',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Заполните массив числами от <code>1</code> до <code>25</code> с помощью <code>range</code>, а затем перемешайте его элементы в случайном порядке.',
]);

task([
	'num' => 3,
	'text' => 'Создайте массив, заполненный буквами от <code>\'a\'</code> до <code>\'z\'</code> так, чтобы буквы шли в случайном порядке и не повторялись.',
]);

startLesson('Перемешивание строк в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/random/string-shuffle/
// ⊗ppPmRdSS

task([
	'num' => 1,
	'text' => 'Дана строка. Перемешайте символы этой строки в случайном порядке.',
]);

task([
	'num' => 2,
	'text' => 'Сделайте строку длиной <code>6</code> символов, состоящую из маленьких английских букв, расположенных в случайном порядке. Буквы не должны повторяться.',
]);
