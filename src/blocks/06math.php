<?

$solutionDir = 'solutions/06math';

startLesson('Степень и корень в PHP');

task([
    'text' => 'Возведите <code>2</code> в <code>10</code> степень.',
    'solution' => $solutionDir . '/solution_143_1.php'
]);

task([
    'text' => 'Найдите квадратный корень из <code>245</code>.',
    'solution' => $solutionDir . '/solution_143_2.php'
]);

task([
    'text' => 'Дан массив:

Найдите корень из суммы квадратов его элементов.
		Для решения воспользуйтесь циклом <code>foreach</code>.',
    'code' => <<< 'PHP'
<?
	$arr = [4, 2, 5, 19, 13, 0, 10];
?>
PHP,
    'solution' => $solutionDir . '/solution_143_3.php'
]);

startLesson('Функции округления в PHP');

task([
    'text' => 'Найдите квадратный корень из <code>379</code>.
		Результат округлите до целых, до десятых,
		до сотых.',
    'solution' => $solutionDir . '/solution_144_1.php'
]);

task([
    'text' => 'Найдите квадратный корень из <code>587</code>.
		Округлите результат в большую и меньшую сторону,
		запишите результаты округления в ассоциативный
		массив с ключами <code>\'floor\'</code> и <code>\'ceil\'</code>.',
    'solution' => $solutionDir . '/solution_144_2.php'
]);

startLesson('Экстремальные числа в PHP');

task([
    'text' => 'Дан массив:

Найдите минимальное и максимальное число.',
    'code' => <<< 'PHP'
<?
	$arr = [4, -2, 5, 19, -130, 0, 10];
?>
PHP,
    'solution' => $solutionDir . '/solution_145_1.php'
]);

startLesson('Модули в PHP');

task([
    'text' => 'Даны переменные <code>$a</code> и <code>$b</code>.
		Найдите модуль разности <code>$a</code> и <code>$b</code>.
		Проверьте работу скрипта самостоятельно для
		различных <code>$a</code> и <code>$b</code>.',
    'solution' => $solutionDir . '/solution_146_1.php'
]);

startLesson('Математические операции над массивами в PHP');

task([
    'text' => 'Дан массив:

Найдите сумму элементов данного массива.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
    'solution' => $solutionDir . '/solution_147_1.php'
]);

task([
    'text' => 'Дан массив:

Найдите произведение (умножение) элементов

		данного массива.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
    'solution' => $solutionDir . '/solution_147_2.php'
]);

task([
    'text' => 'Дан массив:

С помощью функций <code>array_sum</code>

		и <code>count</code>

		найдите среднее арифметическое элементов

		(сумма элементов делить на их количество)

		данного массива.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
    'solution' => $solutionDir . '/solution_147_3.php'
]);

endLesson();
