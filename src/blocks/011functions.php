<?

startLesson('Основы работы с пользовательскими функциями в PHP');
// https://code.mu/ru/php/book/prime/functions/intro/
// ⊗ppPmUFInr

codeBlock(<<< 'PHP'
<?
	function func() {
		// какой-то код
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func() {
		echo '!';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func() {
		echo '!';
	}
	
	// Вызываем нашу функцию:
	func(); // выведет '!'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func() {
		echo '!';
	}
	
	func(); // выведет '!'
	func(); // выведет '!'
	func(); // выведет '!'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	func(); // выведет '!'
	
	function func() {
		echo '!';
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте функцию, выводящую на экран ваше имя.',
]);

task([
    'num' => 2,
    'text' => 'Сделайте функцию, выводящую на экран сумму чисел от <code>1</code> до <code>100</code>.',
]);

startLesson('Параметры функций в PHP');
// https://code.mu/ru/php/book/prime/functions/parameters/
// ⊗ppPmUFPr

codeBlock(<<< 'PHP'
<?
	func();
?>
PHP);

codeBlock(<<< 'PHP'
<?
	func(2); // выведет 4
?>
PHP);

codeBlock(<<< 'PHP'
<?
	func(3); // выведет 9
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num) {
		
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	func(2); // в переменную $num попадет число 2
	func(3); // в переменную $num попадет число 3
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	func(2); // выведет 4
	func(3); // выведет 9
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте функцию, которая параметром принимает число и выводит на экран куб этого числа.',
]);

task([
    'num' => 2,
    'text' => 'Сделайте функцию, которая параметром принимает число и проверяет, положительное это число или отрицательное. В первом случае пусть функция выводит на экран текст <code>\'+++\'</code>, а во втором <code>\'---\'</code>.',
]);

startLesson('Несколько параметров функций в PHP');
// https://code.mu/ru/php/book/prime/functions/several-parameters/
// ⊗ppPmUFSP

codeBlock(<<< 'PHP'
<?
	function func($num1, $num2) {
		echo $num1 + $num2;
	}
	
	func(1, 2); // выведет 3
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте функцию, которая параметрами принимает <code>3</code> числа и выводит на экран сумму этих чисел.',
]);

startLesson('Параметры-переменные функций в PHP');
// https://code.mu/ru/php/book/prime/functions/parameters-variables/
// ⊗ppPmUFPV

codeBlock(<<< 'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	func(2);
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	$param = 2;
	func($param);
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте функцию <code>func</code>, которая параметром будет принимать <code>3</code> числа и выводить на экран их сумму. С помощью этой функции выведите на экран сумму значений следующих переменных:',
    'code' => <<< 'PHP'
<?
	$param1 = 1;
	$param2 = 2;
	$param3 = 3;
?>
PHP,
]);

startLesson('Необязательные параметры функций в PHP');
// https://code.mu/ru/php/book/prime/functions/optional-parameters/
// ⊗ppPmUFOP

codeBlock(<<< 'PHP'
<?
	function func($num) {
		echo $num ** 2;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num = 0) {
		echo $num ** 2;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	func(2); // выведет 4
?>
PHP);

codeBlock(<<< 'PHP'
<?
	func(); // выведет 0
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана функция: Эта функция вызывается следующим образом: Расскажите, каким будет результат каждого из вызовов функции.',
    'code' => <<< 'PHP'
<?
	function func($num = 5) {
		echo $num * $num;
	}
?>

<?
	func(2);
	func(3);
	func();
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана функция: Эта функция вызывается следующим образом: Расскажите, каким будет результат каждого из вызовов функции.',
    'code' => <<< 'PHP'
<?
	function func($num1 = 0, $num2 = 0) {
		echo $num1 + $num2;
	}
?>

<?
	func(2, 3);
	func(3);
	func();
?>
PHP,
]);

startLesson('Инструкция return в PHP');
// https://code.mu/ru/php/book/prime/functions/return/
// ⊗ppPmUFRt

codeBlock(<<< 'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	func(3); // выведет 9
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = func(3); // в переменной $res теперь 9
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num) {
		return $num * $num;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = func(3);
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = func(3);
	echo $res; // выведет 9
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = func(3);
	$res = $res + 1;
	echo $res; // выведет 10
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = func(3) + 1;
	echo $res; // выведет 10
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = func(2) + func(3);
	echo $res; // выведет 13
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo func(3); // выведет 9
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте функцию, которая параметром принимает число, а возвращает куб этого числа. С помощью этой функции найдите куб числа <code>3</code> и запишите его в переменную <code>$res</code>.',
]);

task([
    'num' => 2,
    'text' => 'С помощью созданной вами функции найдите сумму кубов числа <code>2</code> и числа <code>3</code> и запишите ее в переменную <code>$res</code>.',
]);

startLesson('Последовательный вызов функций в PHP');
// https://code.mu/ru/php/book/prime/functions/sequential-calling/
// ⊗ppPmUFSC

codeBlock(<<< 'PHP'
<?
	function func($num) {
		return $num * $num;
	}
	
	$res = func(func(2));
	echo $res; // выведет 16
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function square($num) {
		return $num * $num;
	}
	
	function cube($num) {
		return $num * $num * $num;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = cube(square(2));
	echo $res;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function square($num) {
		return $num * $num;
	}
	
	function sum($num1, $num2) {
		return $num1 + $num2;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = sum(square(2), square(3));
	echo $res;
?>
PHP);

task([
    'num' => 1,
    'text' => 'Пусть у вас есть функция, возвращающая кубический корень из числа, и функция, округляющая дробь до трех знаков в дробной части: С помощью этих функций найдите кубический корень из числа <code>2</code> и округлите его до трех знаков в дробной части.',
    'code' => <<< 'PHP'
<?
	function root($num) {
		return pow($num, 1/3);
	}
	
	function norm($num) {
		return round($num, 3);
	}
?>
PHP,
]);

startLesson('Toнкое место return в PHP');
// https://code.mu/ru/php/book/prime/functions/return-nuance/
// ⊗ppPmUFRN

codeBlock(<<< 'PHP'
<?
	function func($num) {
		return $num * $num;
		
		echo '!'; // этот код никогда не выполнится
	}
	
	$res = func(3);
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num) {
		if ($num >= 0) {
			return '+';
		} else {
			return '-';
		}
	}
	
	echo func( 3); // выведет '+'
	echo func(-3); // выведет '-'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Что выведется на экран в результате выполнения следующего кода: Объясните почему.',
    'code' => <<< 'PHP'
<?
	function func($num) {
		return $num;
		
		$res = $num * $num;
		return $res;
	}
	
	echo func(3);
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Что выведет каждый из <code>echo</code> в результате выполнения следующего кода: Объясните почему.',
    'code' => <<< 'PHP'
<?
	function func($num) {
		if ($num <= 0) {
			return abs($num);
		} else {
			return $num * $num;
		}
	}
	
	echo func(10);
	echo func(-5);
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Что выведет каждый из <code>echo</code> в результате выполнения следующего кода: Объясните почему.',
    'code' => <<< 'PHP'
<?
	function func($num) {
		if ($num <= 0) {
			return abs($num);
		}
		
		return $num * $num;
	}
	
	echo func(10);
	echo func(-5);
?>
PHP,
]);

startLesson('Цикл и return в PHP');
// https://code.mu/ru/php/book/prime/functions/return-loop/
// ⊗ppPmUFRL

codeBlock(<<< 'PHP'
<?
	function func() {
		$sum = 0;
		
		for ($i = 1; $i <= 5; $i++) {
			$sum += $i;
		}
		
		return $sum;
	}
	
	$res = func();
	echo $res; // выведет 15
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func() {
		$sum = 0;
		
		for ($i = 1; $i <= 5; $i++) {
			$sum += $i;
			return $sum;
		}
	}
	
	$res = func();
	echo $res;
?>
PHP);

task([
    'num' => 1,
    'text' => 'Что выведется на экран в результате выполнения следующего кода: Объясните почему. Что хотел сделать автор данного кода? Исправьте ошибку автора.',
    'code' => <<< 'PHP'
<?
	function func($num) {
		$sum = 0;
		
		for ($i = 1; $i <= $num; $i++) {
			$sum += $i;
			return $sum;
		}
	}
	
	echo func(5);
?>
PHP,
]);

startLesson('Применение return в цикле в PHP');
// https://code.mu/ru/php/book/prime/functions/return-loop-applying/
// ⊗ppPmUFRLA

codeBlock(<<< 'PHP'
<?
	function func($arr) {
		$length = count($arr);
		$sum = 0;
		
		for ($i = 0; $i < $length; $i++) {
			$sum += $arr[$i];
			
			// Если сумма больше или равна 10:
			if ($sum >= 10) {
				return $i + 1; // выходим из цикла и из функции
			}
		}
	}
	
	$res = func([1, 2, 3, 4, 5]);
	echo $res;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func() {
		$sum = 0;
		$i = 1;
		
		while (true) { // бесконечный цикл
			$sum += $i;
			
			if ($sum >= 100) {
				return $i; // цикл крутится пока не выйдет тут
			}
			
			$i++;
		}
	}
	
	echo func();
?>
PHP);

task([
    'num' => 1,
    'text' => 'Напишите функцию, которая параметром будет принимать число и делить его на <code>2</code> столько раз, пока результат не станет меньше <code>10</code>. Пусть функция возвращает количество итераций, которое потребовалось для достижения результата.',
]);

startLesson('Приемы работы с return в PHP');
// https://code.mu/ru/php/book/prime/functions/return-trick/
// ⊗ppPmUFRD

codeBlock(<<< 'PHP'
<?
	function func($num) {
		if ($num >= 0) {
			$res = sqrt($num);
		} else {
			$res = 0;
		}
		
		return $res;
	}
	
	echo func(3);
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num) {
		if ($num >= 0) {
			return sqrt($num);
		} else {
			return 0;
		}
	}
	
	echo func(3);
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана следующая функция: Перепишите ее в сокращенной форме согласно изученной теории.',
    'code' => <<< 'PHP'
<?
	function func($num1, $num2) {
		if ($num1 > 0 and $num2 > 0) {
			$res = $num1 * $num2;
		} else {
			$res = $num1 - $num2;
		}
		
		return $res;
	}
	
	echo func(3, 4);
?>
PHP,
]);

startLesson('Флаги в функциях PHP');
// https://code.mu/ru/php/book/prime/functions/flags/
// ⊗ppPmUFFl

codeBlock(<<< 'PHP'
<?
	function isPositive($arr) {
		$flag = true;
		
		foreach ($arr as $elem) {
			if ($elem < 0) {
				$flag = false;
			}
		}
		
		return $flag;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function isPositive($arr) {
		foreach ($arr as $elem) {
			if ($elem < 0) {
				return false;
			}
		}
		
		return true;
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте функцию, которая параметром будет принимать массив с числами, и проверять, что все элементы в этом массиве являются четными числами.',
]);

task([
    'num' => 2,
    'text' => 'Сделайте функцию, которая параметром будет принимать число и проверять, что все цифры это числа являются нечетными.',
]);

task([
    'num' => 3,
    'text' => 'Сделайте функцию, которая параметром будет принимать массив и проверять, есть ли в этом массиве два одинаковых элемента подряд.',
]);

startLesson('Логические операторы без if в функциях PHP');
// https://code.mu/ru/php/book/prime/functions/logical-operators/
// ⊗ppPmUFLO

codeBlock(<<< 'PHP'
<?
	function func($a, $b) {
		if ($a > $b) {
			return true;
		} else {
			return false;
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($a, $b) {
		return $a > $b;
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана следующая функция: Перепишите ее код в сокращенной форме согласно изученной теории.',
    'code' => <<< 'PHP'
<?
	function func($a, $b) {
		if ($a === $b) {
			return true;
		} else {
			return false;
		}
	}
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана следующая функция: Перепишите ее код в сокращенной форме согласно изученной теории.',
    'code' => <<< 'PHP'
<?
	function func($a, $b) {
		if ($a !== $b) {
			return true;
		} else {
			return false;
		}
	}
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана следующая функция: Перепишите ее код в сокращенной форме согласно изученной теории.',
    'code' => <<< 'PHP'
<?
	function func($a, $b) {
		if ($a + $b >= 10) {
			return true;
		} else {
			return false;
		}
	}
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана следующая функция: Перепишите ее код в сокращенной форме согласно изученной теории.',
    'code' => <<< 'PHP'
<?
	function func($num) {
		if ($num >= 0) {
			return true;
		} else {
			return false;
		}
	}
?>
PHP,
]);

startLesson('Советы по созданию функций в PHP');
// https://code.mu/ru/php/book/prime/functions/advices/
// ⊗ppPmUFAdv

task([
    'num' => 1,
    'text' => 'Напишите, какие недостатки у следующего кода, и исправьте их:',
    'code' => <<< 'PHP'
<?
	function sum($arr) {
		$res = 0;
		
		foreach ($arr as $elem) {
			$res += $elem;
		}
		
		return $res / count($arr);
	}
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Напишите, какие недостатки у следующего кода, и исправьте их:',
    'code' => <<< 'PHP'
<?
	function func($arr1, $arr2) {
		$res1 = 0;
		
		foreach (arr as $elem) {
			$res1 += $elem;
		}
		
		$res2 = 0;
		
		foreach (arr as $elem) {
			$res2 += $elem;
		}
		
		return $res1 / $res2;
	}
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Напишите, какие недостатки у следующего кода, и исправьте их:',
    'code' => <<< 'PHP'
<?
	function getSum($arr) {
		$res = 0;
		
		foreach ($arr as $elem) {
			$res *= $elem;
		}
		
		return $res;
	}
?>
PHP,
]);

startLesson('Поиск ошибок в коде с функциями JavaScript');
// https://code.mu/ru/php/book/prime/functions/mistakes/
// ⊗ppPmUFMst

task([
    'num' => 1,
    'text' => 'Код должен найти сумму результатов работы двух функций:',
    'code' => <<< 'PHP'
<?
	function func1() {
		echo 3;
	}
	function func2() {
		echo 5;
	}
	
	echo func1() + func2();
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Код должен найти сумму элементов массива:',
    'code' => <<< 'PHP'
<?
	function sum($arr) {
		$res = 0;
		
		foreach ($arr as $elem) {
			$res += $elem;
			return $res;
		}
	}
	
	echo sum([1, 2, 3, 4, 5]);
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Код должен найти сумму элементов массива, однако, ничего не выводит:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	function func($arr) {
		$res = 0;
		
		foreach ($arr as $elem) {
			$res += $elem;
		}
		
		echo $res;
	}
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Код должен найти сумму результатов работы двух функций:',
    'code' => <<< 'PHP'
<?
	function func1() {
		return 3;
	}
	function func2() {
		return 5;
	}
	
	echo func1 + func2;
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Код должен найти сумму элементов массива:',
    'code' => <<< 'PHP'
<?
	$res = $sum([1, 2, 3, 4, 5]);
	echo $res;
	
	function $sum($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			$sum += $elem;
		}
	}
?>
PHP,
]);

task([
    'num' => 6,
    'text' => 'Функция добавляет ноль к числу от <code>1</code> до <code>9</code>, а числа больше <code>9</code> возвращает без изменений:',
    'code' => <<< 'PHP'
<?
	function add($num) {
		if ($num <= 9) {
			return '0' + $num;
		}
	}
?>
PHP,
]);

task([
    'num' => 7,
    'text' => 'Код должен проверить число на то, что оно является простым:',
    'code' => <<< 'PHP'
<?
	var_dump(isPrime(13)); // должен вывести true
	var_dump(isPrime(12)); // должен вывести false
	
	function isPrime($num) {
		for ($i = 2; $i < $num; $i++) {
			if ($num % $i !== 0) {
				return true;
			} else {
				return false;
			}
		}
	}
?>
PHP,
]);

startLesson('Практика на функции PHP');
// https://code.mu/ru/php/book/prime/functions/practicum/
// ⊗ppPmUFPrm

task([
    'num' => 1,
    'text' => 'Сделайте функцию, которая параметром будет принимать число и возвращать массив его делителей.',
]);

task([
    'num' => 2,
    'text' => 'Сделайте функцию, которая параметром будет принимать два числа и возвращать массив их общих делителей.',
]);

task([
    'num' => 3,
    'text' => 'Сделайте функцию, которая параметром будет принимать число и возвращать сумму его цифр.',
]);

task([
    'num' => 4,
    'text' => 'Сделайте функцию, которая вернет текущий день недели словом.',
]);

task([
    'num' => 5,
    'text' => 'Сделайте функцию, которая параметром будет получать дату, а возвращать день недели словом, соответствующий этой дате.',
]);

task([
    'num' => 6,
    'text' => 'Сделайте функцию, которая параметром будет принимать секунды, а возвращать количество суток, соответствующих этим секундам.',
]);

task([
    'num' => 7,
    'text' => 'Сделайте функцию, которая параметром будет год и проверять, високосный он или нет.',
]);

task([
    'num' => 8,
    'text' => 'Сделайте функцию, которая параметром будет принимать число и проверять, простое оно или нет.',
]);
