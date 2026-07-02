<?

$solutionDir = 'solutions/09random';

startLesson('Случайное число в PHP');

task([
    'text' => 'Выведите на экран случайное целое число от
		<code>1</code> до <code>100</code>.',
    'solution' => $solutionDir . '/solution_178_1.php'
]);

task([
    'text' => 'С помощью цикла заполните массив <code>10</code>-ю
		случайными целыми числами.',
    'solution' => $solutionDir . '/solution_178_2.php'
]);

startLesson('Случайный элемент массива в PHP');

task([
    'text' => 'Дан массив:

Выведите на экран случайный ключ из данного
		массива.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
    'solution' => $solutionDir . '/solution_179_1.php'
]);

task([
    'text' => 'Дан массив:

Выведите на экран случайный элемент данного
		массива.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
    'solution' => $solutionDir . '/solution_179_2.php'
]);

startLesson('Перемешивание массивов в PHP');

task([
    'text' => 'Дан массив:

Перемешайте его элементы в случайном порядке.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
    'solution' => $solutionDir . '/solution_180_1.php'
]);

task([
    'text' => 'Заполните массив числами от <code>1</code> до <code>25</code>
		с помощью <code>range</code>, а затем перемешайте
		его элементы в случайном порядке.',
    'solution' => $solutionDir . '/solution_180_2.php'
]);

task([
    'text' => 'Создайте массив, заполненный буквами от <code>\'a\'</code>
		до <code>\'z\'</code> так, чтобы буквы шли в случайном
		порядке и не повторялись.',
    'solution' => $solutionDir . '/solution_180_3.php'
]);

startLesson('Перемешивание строк в PHP');

task([
    'text' => 'Дана строка. Перемешайте символы этой строки
		в случайном порядке.',
    'solution' => $solutionDir . '/solution_181_1.php'
]);

task([
    'text' => 'Сделайте строку длиной <code>6</code> символов,
		состоящую из маленьких английских букв, расположенных
		в случайном порядке. Буквы не должны повторяться.',
    'solution' => $solutionDir . '/solution_181_2.php'
]);

endLesson();
