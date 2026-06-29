<?

startLesson('Степень и корень в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/math/powering/
// ⊗ppPmMFPw

task([
	'num' => 1,
	'text' => 'Возведите <code>2</code> в <code>10</code> степень.',
]);

task([
	'num' => 2,
	'text' => 'Найдите квадратный корень из <code>245</code>.',
]);

task([
	'num' => 3,
	'text' => 'Дан массив: Найдите корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом <code>foreach</code>.',
	'code' => <<<'PHP'
<?
	$arr = [4, 2, 5, 19, 13, 0, 10];
?>
PHP,
]);

startLesson('Функции округления в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/math/rounding/
// ⊗ppPmMFRd

task([
	'num' => 1,
	'text' => 'Найдите квадратный корень из <code>379</code>. Результат округлите до целых, до десятых, до сотых.',
]);

task([
	'num' => 2,
	'text' => 'Найдите квадратный корень из <code>587</code>. Округлите результат в большую и меньшую сторону, запишите результаты округления в ассоциативный массив с ключами <code>\'floor\'</code> и <code>\'ceil\'</code>.',
]);

startLesson('Экстремальные числа в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/math/extremum/
// ⊗ppPmMFEx

task([
	'num' => 1,
	'text' => 'Дан массив: Найдите минимальное и максимальное число.',
	'code' => <<<'PHP'
<?
	$arr = [4, -2, 5, 19, -130, 0, 10];
?>
PHP,
]);

startLesson('Модули в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/math/abs/
// ⊗ppPmMFAb

task([
	'num' => 1,
	'text' => 'Даны переменные <code>$a</code> и <code>$b</code>. Найдите модуль разности <code>$a</code> и <code>$b</code>. Проверьте работу скрипта самостоятельно для различных <code>$a</code> и <code>$b</code>.',
]);

startLesson('Математические операции над массивами в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/math/arrays/
// ⊗ppPmMFAr

task([
	'num' => 1,
	'text' => 'Дан массив: Найдите сумму элементов данного массива.',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дан массив: Найдите произведение (умножение) элементов данного массива.',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Дан массив: С помощью функций <a><code>array_sum</code></a> и <a><code>count</code></a> найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);
