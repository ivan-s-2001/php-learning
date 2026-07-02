<?

$solutionDir = 'solutions/11functions';

startLesson('Основы работы с пользовательскими функциями в PHP');

text('Сейчас мы научимся создавать свои

	функции, которые затем можно будет использовать

	подобно стандартным функциям PHP.');

text('Давайте рассмотрим синтаксис для создания

	своей функции.');

text('Функция создается с помощью команды <code>function</code>.

	Далее через пробел следует <i>имя функции</i>

	и <i>круглые скобки</i>, в которых пишется

	какой-то код:');

codeBlock(<<<'PHP'
<?
	function func() {
		// какой-то код
	}
?>
PHP
);

text('Давайте посмотрим на каком-нибудь примере.');

text('Сделаем функцию с именем <code>func</code>, которая

	при своем вызове будет выводить на экран

	восклицательный знак:');

codeBlock(<<<'PHP'
<?
	function func() {
		echo '!';
	}
?>
PHP
);

text('Давайте теперь вызовем нашу функцию. Для

	этого необходимо написать ее имя и круглые скобки:');

codeBlock(<<<'PHP'
<?
	function func() {
		echo '!';
	}
	
	// Вызываем нашу функцию:
	func(); // выведет '!'
?>
PHP
);

text('Можно вызвать нашу функцию несколько раз

	- в этом случае каждый вызов функции будет

	совершать новый вывод на экран:');

codeBlock(<<<'PHP'
<?
	function func() {
		echo '!';
	}
	
	func(); // выведет '!'
	func(); // выведет '!'
	func(); // выведет '!'
?>
PHP
);

text('Функции могут быть вызваны до места своего

	определения:');

codeBlock(<<<'PHP'
<?
	func(); // выведет '!'
	
	function func() {
		echo '!';
	}
?>
PHP
);

task([
    'text' => 'Сделайте функцию, выводящую на экран ваше имя.',
    'solution' => $solutionDir . '/solution_192_1.php'
]);

task([
    'text' => 'Сделайте функцию, выводящую на экран сумму

		чисел от <code>1</code> до <code>100</code>.',
    'solution' => $solutionDir . '/solution_192_2.php'
]);

startLesson('Параметры функций в PHP');

text('При вызове функции мы пишем ее имя и пустые

	круглые скобки:');

codeBlock(<<<'PHP'
<?
	func();
?>
PHP
);

text('На самом деле скобки не обязательно должны

	быть пустыми - в них мы можем передавать

	параметры.');

text('Пусть, к примеру, мы хотим сделать функцию,

	которая параметром будет принимать число

	и выводить на экран квадрат этого числа.');

text('Как мы теперь будем вызывать нашу функцию:

	мы будем писать имя функции, круглые скобки,

	а в них - какое-то число, квадрат которого

	мы хотим получить.');

text('К примеру, вот так мы получим квадрат числа

	<code>2</code>:');

codeBlock(<<<'PHP'
<?
	func(2); // выведет 4
?>
PHP
);

text('А вот так - квадрат числа <code>3</code>:');

codeBlock(<<<'PHP'
<?
	func(3); // выведет 9
?>
PHP
);

text('Давайте теперь напишем реализацию нашей функции.');

text('Мы знаем, что функция параметром должна принимать

	число. Значит, при определении функции в

	круглых скобках мы должны написать какую-то

	переменную, в которую будет попадать переданное

	число.');

text('Название переменной может быть любым, давайте,

	например, назовем ее <code>$num</code>:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		
	}
?>
PHP
);

text('В эту переменную <code>$num</code> при вызове функции

	будет попадать указанное в круглых скобках число:');

codeBlock(<<<'PHP'
<?
	func(2); // в переменную $num попадет число 2
	func(3); // в переменную $num попадет число 3
?>
PHP
);

text('Давайте теперь сделаем так, чтобы наша функция

	выводила квадрат переданного числа. Для этого

	перемножим переменную <code>$num</code> саму на

	себя и выведем на экран:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
?>
PHP
);

text('Проверим работу функции, вызвав ее с различными

	числами:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	func(2); // выведет 4
	func(3); // выведет 9
?>
PHP
);

task([
    'text' => 'Сделайте функцию, которая параметром принимает

		число и выводит на экран куб этого числа.',
    'solution' => $solutionDir . '/solution_193_1.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром принимает

		число и проверяет, положительное это число

		или отрицательное. В первом случае пусть

		функция выводит на экран текст <code>\'+++\'</code>,

		а во втором <code>\'---\'</code>.',
    'solution' => $solutionDir . '/solution_193_2.php'
]);

startLesson('Несколько параметров функций в PHP');

text('Функция может принимать не один параметр,

	а несколько. В этом случае их нужно перечислить

	через запятую. Давайте для примера сделаем

	функцию, параметром принимающую два числа

	и выводящую на экран их сумму:');

codeBlock(<<<'PHP'
<?
	function func($num1, $num2) {
		echo $num1 + $num2;
	}
	
	func(1, 2); // выведет 3
?>
PHP
);

task([
    'text' => 'Сделайте функцию, которая параметрами принимает

		<code>3</code> числа и выводит на экран сумму этих

		чисел.',
    'solution' => $solutionDir . '/solution_194_1.php'
]);

startLesson('Параметры-переменные функций в PHP');

text('Давайте рассмотрим следующий код:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	func(2);
?>
PHP
);

text('Как вы видите, в при вызове функции в нее

	передается число <code>2</code>.');

text('Не обязательно параметром функции передавать

	именно число - можно передать и переменную,

	содержащую нужное нам число:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	$param = 2;
	func($param);
?>
PHP
);

task([
    'text' => 'Сделайте функцию <code>func</code>, которая параметром

		будет принимать <code>3</code> числа и выводить

		на экран их сумму. С помощью этой функции

		выведите на экран сумму значений следующих

		переменных:',
    'code' => <<< 'PHP'
<?
	$param1 = 1;
	$param2 = 2;
	$param3 = 3;
?>
PHP,
    'solution' => $solutionDir . '/solution_195_1.php'
]);

startLesson('Необязательные параметры функций в PHP');

text('Параметры функций можно делать

	не обязательными. Для этого

	параметрам нужно задать значения

	по умолчанию. Пусть для примера

	у нас есть следующая функция:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		echo $num ** 2;
	}
?>
PHP
);

text('Давайте сделаем так, чтобы этот параметр

	по умолчанию имел значение <code>0</code>:');

codeBlock(<<<'PHP'
<?
	function func($num = 0) {
		echo $num ** 2;
	}
?>
PHP
);

text('Проверим работу нашей функции

	с параметром:');

codeBlock(<<<'PHP'
<?
	func(2); // выведет 4
?>
PHP
);

text('Проверим работу нашей функции

	без параметра:');

codeBlock(<<<'PHP'
<?
	func(); // выведет 0
?>
PHP
);

task([
    'text' => 'Дана функция:

Эта функция вызывается следующим образом:

Расскажите, каким будет результат каждого

		из вызовов функции.',
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
    'solution' => $solutionDir . '/solution_196_1.php'
]);

task([
    'text' => 'Дана функция:

Эта функция вызывается следующим образом:

Расскажите, каким будет результат каждого

		из вызовов функции.',
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
    'solution' => $solutionDir . '/solution_196_2.php'
]);

startLesson('Инструкция return в PHP');

text('Пусть у нас есть функция, которая выводит

	на экран квадрат переданного числа:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		echo $num * $num;
	}
	
	func(3); // выведет 9
?>
PHP
);

text('Пусть мы хотим не выводить значение на экран,

	а записать в какую-нибудь переменную, вот так:');

codeBlock(<<<'PHP'
<?
	$res = func(3); // в переменной $res теперь 9
?>
PHP
);

text('Для этого в PHP существует специальная инструкция

	<code>return</code>, которая позволяет указать

	значение, которое возвращает функция. Под

	словом <i>возвращает</i> понимают то значение,

	которое запишется в переменную, если ей присвоить

	вызванную функцию.');

text('Итак, давайте перепишем нашу функцию так,

	чтобы она не выводила результат на экран,

	а возвращала его в переменную:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		return $num * $num;
	}
?>
PHP
);

text('Давайте теперь запишем результат

	работы функции в переменную:');

codeBlock(<<<'PHP'
<?
	$res = func(3);
?>
PHP
);

text('После того, как данные записаны в переменную,

	их можно, например, вывести на экран:');

codeBlock(<<<'PHP'
<?
	$res = func(3);
	echo $res; // выведет 9
?>
PHP
);

text('А можно сначала как-то изменить эти данные,

	а затем вывести их на экран:');

codeBlock(<<<'PHP'
<?
	$res = func(3);
	$res = $res + 1;
	echo $res; // выведет 10
?>
PHP
);

text('Можно сразу выполнять какие-то действия с

	результатом работы функции перед записью

	в переменную:');

codeBlock(<<<'PHP'
<?
	$res = func(3) + 1;
	echo $res; // выведет 10
?>
PHP
);

text('Можно вызвать нашу функцию несколько

	раз для разных чисел:');

codeBlock(<<<'PHP'
<?
	$res = func(2) + func(3);
	echo $res; // выведет 13
?>
PHP
);

text('Можно не записывать результат в переменную,

	а сразу вывести его на экран:');

codeBlock(<<<'PHP'
<?
	echo func(3); // выведет 9
?>
PHP
);

task([
    'text' => 'Сделайте функцию, которая параметром принимает

		число, а возвращает куб этого числа. С помощью

		этой функции найдите куб числа <code>3</code> и

		запишите его в переменную <code>$res</code>.',
    'solution' => $solutionDir . '/solution_197_1.php'
]);

task([
    'text' => 'С помощью созданной вами функции найдите

		сумму кубов числа <code>2</code> и числа <code>3</code>

		и запишите ее в переменную <code>$res</code>.',
    'solution' => $solutionDir . '/solution_197_2.php'
]);

startLesson('Последовательный вызов функций в PHP');

text('Можно результат работы одной функции

	передать параметром в другую.

	В следующем примере мы сначала найдем

	квадрат числа <code>2</code>,

	а затем квадрат результата:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		return $num * $num;
	}
	
	$res = func(func(2));
	echo $res; // выведет 16
?>
PHP
);

text('Функции, конечно же, не обязательно должны

	быть одинаковыми.');

text('Пусть, например, у нас есть функция, возвращающая

	квадрат числа, и функция, возвращающая куб числа:');

codeBlock(<<<'PHP'
<?
	function square($num) {
		return $num * $num;
	}
	
	function cube($num) {
		return $num * $num * $num;
	}
?>
PHP
);

text('Давайте с помощью этих функций возведем число

	<code>2</code> в квадрат, а затем результат этой

	операции возведем в куб:');

codeBlock(<<<'PHP'
<?
	$res = cube(square(2));
	echo $res;
?>
PHP
);

text('Пусть теперь у нас есть функция, возвращающая

	квадрат числа, и функция, находящая сумму

	двух чисел:');

codeBlock(<<<'PHP'
<?
	function square($num) {
		return $num * $num;
	}
	
	function sum($num1, $num2) {
		return $num1 + $num2;
	}
?>
PHP
);

text('Найдем с помощью этих функций сумму квадрата

	числа <code>2</code> и сумму квадрата числа <code>3</code>:');

codeBlock(<<<'PHP'
<?
	$res = sum(square(2), square(3));
	echo $res;
?>
PHP
);

task([
    'text' => 'Пусть у вас есть функция, возвращающая кубический

		корень из числа, и функция, округляющая дробь

		до трех знаков в дробной части:

С помощью этих функций найдите кубический

		корень из числа <code>2</code> и округлите его

		до трех знаков в дробной части.',
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
    'solution' => $solutionDir . '/solution_198_1.php'
]);

startLesson('Toнкое место return в PHP');

text('После того, как выполнится инструкция <code>return</code>

	- функция закончит свою работу. To есть:

	<i>после выполнения return больше никакой

	код не выполнится.</i>');

text('Смотрите пример:');

codeBlock(<<<'PHP'
<?
	function func($num) {
		return $num * $num;
		
		echo '!'; // этот код никогда не выполнится
	}
	
	$res = func(3);
?>
PHP
);

text('Это не значит, что в функции должен быть

	один <code>return</code>. Но выполнится только

	один из них.');

text('В следующем примере в зависимости от значения

	параметра выполнится либо первый, либо второй

	<code>return</code>:');

codeBlock(<<<'PHP'
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
PHP
);

task([
    'text' => 'Что выведется на экран в результате выполнения

		следующего кода:

Объясните почему.',
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
    'solution' => $solutionDir . '/solution_199_1.php'
]);

task([
    'text' => 'Что выведет каждый из <code>echo</code> в результате

		выполнения следующего кода:

Объясните почему.',
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
    'solution' => $solutionDir . '/solution_199_2.php'
]);

task([
    'text' => 'Что выведет каждый из <code>echo</code> в результате

		выполнения следующего кода:

Объясните почему.',
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
    'solution' => $solutionDir . '/solution_199_3.php'
]);

startLesson('Цикл и return в PHP');

text('Пусть у нас есть функция, возвращающая сумму

	чисел от <code>1</code> до <code>5</code>:');

codeBlock(<<<'PHP'
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
PHP
);

text('Пусть теперь мы расположим <code>return</code>

	внутри цикла, вот так:');

codeBlock(<<<'PHP'
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
PHP
);

text('В этом случае цикл прокрутится лишь одну

	итерацию и произойдет автоматический выход

	из функции (ну и заодно из цикла). А за одну

	итерацию цикла в переменной <code>$sum</code> окажется

	лишь число <code>1</code>, а не вся нужная сумма.');

task([
    'text' => 'Что выведется на экран в результате выполнения

		следующего кода:

Объясните почему.

Что хотел сделать автор данного кода? Исправьте

		ошибку автора.',
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
    'solution' => $solutionDir . '/solution_200_1.php'
]);

startLesson('Применение return в цикле в PHP');

text('To, что <code>return</code> расположен внутри цикла,

	не всегда может быть ошибкой.');

text('В следующем примере сделана функция, которая

	определяет, сколько первых элементов массива

	нужно сложить, чтобы сумма стала больше или

	равна <code>10</code>:');

codeBlock(<<<'PHP'
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
PHP
);

text('А в следующем примере сделана функция, которая

	вычисляет, сколько целых чисел, начиная с

	<code>1</code>, нужно сложить, чтобы результат

	был больше <code>100</code>:');

codeBlock(<<<'PHP'
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
PHP
);

task([
    'text' => 'Напишите функцию, которая параметром будет

		принимать число и делить его на <code>2</code>

		столько раз, пока результат не станет меньше

		<code>10</code>. Пусть функция возвращает количество

		итераций, которое потребовалось для достижения

		результата.',
    'solution' => $solutionDir . '/solution_201_1.php'
]);

startLesson('Приемы работы с return в PHP');

text('Существуют некоторые приемы работы с <code>return</code>,

	упрощающие код.');

text('Рассмотрим, к примеру, следующий код:');

codeBlock(<<<'PHP'
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
PHP
);

text('Как вы видите, в данном коде в зависимости

	от условия в переменную <code>$res</code> будет

	попадать либо одно, либо другое значение.

	А последней строкой функции содержимое этой

	переменной возвращается через <code>return</code>.');

text('Давайте перепишем этот код в более сокращенной

	форме, избавившись от ненужной здесь переменной

	<code>$res</code>:');

codeBlock(<<<'PHP'
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
PHP
);

task([
    'text' => 'Дана следующая функция:

Перепишите ее в сокращенной форме согласно

		изученной теории.',
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
    'solution' => $solutionDir . '/solution_202_1.php'
]);

startLesson('Флаги в функциях PHP');

text('В функциях можно использовать флаги

	в неявном виде с помощью инструкции

	<code>return</code>. Давайте посмотрим,

	как это делается. Пусть у нас есть

	следующая функция, проверяющая,

	что все элементы массива положительные

	числа:');

codeBlock(<<<'PHP'
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
PHP
);

text('Давайте перепишем код функции с помощью

	неявного использования флагов:');

codeBlock(<<<'PHP'
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
PHP
);

text('Как это работает: если в массиве найдется

	нужный элемент - мы выйдем из функции

	(и из цикла тоже) с помощью <code>return</code>.

	Но если в массиве не найдется нужный элемент

	- выхода из функции не произойдет и выполнение

	дойдет до команды <code>return true</code>. И

	получится, что функция вернет <code>true</code>

	в знак того, что в массиве все элементы

	положительные.');

task([
    'text' => 'Сделайте функцию, которая параметром будет

		принимать массив с числами, и проверять,

		что все элементы в этом массиве являются

		четными числами.',
    'solution' => $solutionDir . '/solution_203_1.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром будет

		принимать число и проверять, что все цифры

		это числа являются нечетными.',
    'solution' => $solutionDir . '/solution_203_2.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром будет

		принимать массив и проверять, есть ли в этом

		массиве два одинаковых элемента подряд.',
    'solution' => $solutionDir . '/solution_203_3.php'
]);

startLesson('Логические операторы без if в функциях PHP');

text('Пусть у нас есть функция с ифом. Вот она:');

codeBlock(<<<'PHP'
<?
	function func($a, $b) {
		if ($a > $b) {
			return true;
		} else {
			return false;
		}
	}
?>
PHP
);

text('Как вы уже знаете из предыдущих уроков, конструкции

	<code>if</code>, возвращающие булевы значения,

	можно переписывать в сокращенной форме.');

text('Давайте сделаем это:');

codeBlock(<<<'PHP'
<?
	function func($a, $b) {
		return $a > $b;
	}
?>
PHP
);

task([
    'text' => 'Дана следующая функция:

Перепишите ее код в сокращенной форме согласно

		изученной теории.',
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
    'solution' => $solutionDir . '/solution_204_1.php'
]);

task([
    'text' => 'Дана следующая функция:

Перепишите ее код в сокращенной форме согласно

		изученной теории.',
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
    'solution' => $solutionDir . '/solution_204_2.php'
]);

task([
    'text' => 'Дана следующая функция:

Перепишите ее код в сокращенной форме согласно

		изученной теории.',
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
    'solution' => $solutionDir . '/solution_204_3.php'
]);

task([
    'text' => 'Дана следующая функция:

Перепишите ее код в сокращенной форме согласно

		изученной теории.',
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
    'solution' => $solutionDir . '/solution_204_4.php'
]);

startLesson('Советы по созданию функций в PHP');

task([
    'text' => 'Напишите, какие недостатки у следующего

		кода, и исправьте их:',
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
    'solution' => $solutionDir . '/solution_205_1.php'
]);

task([
    'text' => 'Напишите, какие недостатки у следующего

		кода, и исправьте их:',
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
    'solution' => $solutionDir . '/solution_205_2.php'
]);

task([
    'text' => 'Напишите, какие недостатки у следующего

		кода, и исправьте их:',
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
    'solution' => $solutionDir . '/solution_205_3.php'
]);

startLesson('Поиск ошибок в коде с функциями JavaScript');

text('В следующих задачах некоторый программист написал код

	и, возможно, допустил в нем ошибки. Вы должны проверить,

	делает ли код то, что описано. Если код

	работает некорректно, вы должны исправить ошибки.');

task([
    'text' => 'Код должен найти сумму результатов

		работы двух функций:',
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
    'solution' => $solutionDir . '/solution_206_1.php'
]);

task([
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
    'solution' => $solutionDir . '/solution_206_2.php'
]);

task([
    'text' => 'Код должен найти сумму элементов массива, однако,

		ничего не выводит:',
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
    'solution' => $solutionDir . '/solution_206_3.php'
]);

task([
    'text' => 'Код должен найти сумму результатов

		работы двух функций:',
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
    'solution' => $solutionDir . '/solution_206_4.php'
]);

task([
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
    'solution' => $solutionDir . '/solution_206_5.php'
]);

task([
    'text' => 'Функция добавляет ноль к числу от <code>1</code> до <code>9</code>,

		а числа больше <code>9</code> возвращает без изменений:',
    'code' => <<< 'PHP'
<?
	function add($num) {
		if ($num <= 9) {
			return '0' + $num;
		}
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_206_6.php'
]);

task([
    'text' => 'Код должен проверить число на

		то, что оно является простым:',
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
    'solution' => $solutionDir . '/solution_206_7.php'
]);

startLesson('Практика на функции PHP');

task([
    'text' => 'Сделайте функцию, которая параметром будет

		принимать число и возвращать массив

		его делителей.',
    'solution' => $solutionDir . '/solution_207_1.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром будет

		принимать два числа и возвращать массив их

		общих делителей.',
    'solution' => $solutionDir . '/solution_207_2.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром

		будет принимать число и возвращать

		сумму его цифр.',
    'solution' => $solutionDir . '/solution_207_3.php'
]);

task([
    'text' => 'Сделайте функцию, которая вернет

		текущий день недели словом.',
    'solution' => $solutionDir . '/solution_207_4.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром

		будет получать дату, а возвращать

		день недели словом, соответствующий

		этой дате.',
    'solution' => $solutionDir . '/solution_207_5.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром

		будет принимать секунды, а возвращать

		количество суток, соответствующих

		этим секундам.',
    'solution' => $solutionDir . '/solution_207_6.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром

		будет год и проверять,

		високосный он или нет.',
    'solution' => $solutionDir . '/solution_207_7.php'
]);

task([
    'text' => 'Сделайте функцию, которая параметром

		будет принимать число и проверять,

		простое оно или нет.',
    'solution' => $solutionDir . '/solution_207_8.php'
]);

endLesson();
