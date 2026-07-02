<?

$solutionDir = 'solutions/12scope';

startLesson('Ссылки в PHP');

text('В PHP можно присвоить значение

	одной переменной в другую:');

codeBlock(<<<'PHP'
<?
	$num1 = 1;
	$num2 = $num1; // присваиваем
	
	echo $num1; // 1
	echo $num2; // 1
?>
PHP
);

text('При таком присваивании в новую

	переменную записываеся копия значения

	первой переменной. Это значит,

	что переменные никак не связаны

	друг с другом и их можно независимо

	изменять. Смотрите на примере кода:');

codeBlock(<<<'PHP'
<?
	$num1 = 1;
	$num2 = $num1;
	$num2 = 2;
	
	echo $num1; // 1 - не изменилось
?>
PHP
);

text('Можно, однако, сделать так, чтобы

	копировалось не значение переменной,

	а <dfn>ссылка</dfn> на него. В этом случае

	при измении значения одной переменной,

	будет изменяться и значение другой.');

text('Для того, чтобы передать значение

	по ссылке, нужно перед именем переменной

	поставить амперсанд:');

codeBlock(<<<'PHP'
<?
	$num1 = 1;
	$num2 = &$num1; // передаем по ссылке
?>
PHP
);

text('Теперь изменение первой переменной

	приведет и к изменению второй:');

codeBlock(<<<'PHP'
<?
	$num1 = 1;
	$num2 = &$num1;
	$num2 = 2;
	
	echo $num1; // 2 - изменилось
?>
PHP
);

text('Аналогично, если мы поменяем

	первую переменную, то изменится

	и вторая:');

codeBlock(<<<'PHP'
<?
	$num1 = 1;
	$num2 = &$num1;
	$num1 = 2;
	
	echo $num2; // 2
?>
PHP
);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = $num1;
	$num2 = 2;
	
	echo $num1;
	echo $num2;
?>
PHP,
    'solution' => $solutionDir . '/solution_208_1.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = &$num1;
	$num2++;
	
	echo $num1;
	echo $num2;
?>
PHP,
    'solution' => $solutionDir . '/solution_208_2.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = $num1;
	
	$num1++;
	$num2++;
	
	echo $num1;
	echo $num2;
?>
PHP,
    'solution' => $solutionDir . '/solution_208_3.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = &$num1;
	
	$num1++;
	$num2++;
	
	echo $num1;
	echo $num2;
?>
PHP,
    'solution' => $solutionDir . '/solution_208_4.php'
]);

startLesson('Ссылки-массивы в PHP');

text('В PHP, в отличие от других языков

	программирования, массивы также

	копируются, а не передаются

	по ссылке.');

text('Давайте убедимся в этом:');

codeBlock(<<<'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = $arr1;
	$arr2[0] = '!';
	
	var_dump($arr1); // не изменится
?>
PHP
);

text('Заставим теперь массив передаваться

	по ссылке:');

codeBlock(<<<'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = &$arr1;
	$arr2[0] = '!';
	
	var_dump($arr1); // изменится
?>
PHP
);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	
	$arr2 = $arr1;
	$arr2[0] = '!';
	
	echo $arr1[0];
	echo $arr2[0];
?>
PHP,
    'solution' => $solutionDir . '/solution_209_1.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	
	$arr2 = &$arr1;
	$arr1[0]++;
	
	echo $arr1[0];
	echo $arr2[0];
?>
PHP,
    'solution' => $solutionDir . '/solution_209_2.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	
	$arr2 = &$arr1;
	
	$arr1[0]++;
	$arr2[0]++;
	
	echo $arr1[0];
	echo $arr2[0];
?>
PHP,
    'solution' => $solutionDir . '/solution_209_3.php'
]);

startLesson('Ссылки в foreach в PHP');

text('При работе с циклом <code>foreach</code>

	изменение переменной для элементов

	не приводит к изменениям самого массива:');

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		$elem++;
	}
	
	var_dump($arr); // не изменится
?>
PHP
);

text('Однако, нужного эффекта можно добиться,

	если объявить переменную для элементов

	ссылкой. В этом случае изменения

	этой переменной будут приводить

	к изменениям в массиве:');

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as &$elem) {
		$elem++;
	}
	
	var_dump($arr); // изменится
?>
PHP
);

task([
    'text' => 'Исправьте следующий код так,

		чтобы он заработал согласно

		задуманному:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];

	foreach ($arr as &$elem) {
		$elem = sqrt($elem);
	}
	
	var_dump($arr); 
?>
PHP,
    'solution' => $solutionDir . '/solution_210_1.php'
]);

task([
    'text' => 'Исправьте следующий код так,

		чтобы он заработал согласно

		задуманному:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];

	foreach ($arr as &$elem) {
		$elem ** 2;
	}
	
	var_dump($arr); 
?>
PHP,
    'solution' => $solutionDir . '/solution_210_2.php'
]);

startLesson('Внутренние переменные функций в PHP');

text('Переменные, объявленные внутри функции,

	не видны снаружи. Давайте посмотрим

	на примере. Пусть у нас есть

	следующая переменная:');

codeBlock(<<<'PHP'
<?
	function func()
	{
		$num = 1;
	}
?>
PHP
);

text('Давайте попытаемся вывести

	переменную <code>$num</code> снаружи

	функции:');

codeBlock(<<<'PHP'
<?
	function func()
	{
		$num = 1;
	}
	
	func();
	echo $num; // ошибка
?>
PHP
);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	function func()
	{
		$aaa = '!!!';
	}
	
	func();
	echo $aaa;
?>
PHP,
    'solution' => $solutionDir . '/solution_211_1.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	function func($aaa)
	{
		$aaa = 222;
	}
	
	func(111);
	echo $aaa;
?>
PHP,
    'solution' => $solutionDir . '/solution_211_2.php'
]);

startLesson('Внешние переменные функций в PHP');

text('Переменные, объявленные снаружи функции,

	не видны внутри. Давайте посмотрим

	на примере. Пусть у нас есть

	следующая переменная:');

codeBlock(<<<'PHP'
<?
	$num = 1;
?>
PHP
);

text('Попытаемся вывести эту

	переменную внутри функции:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	function func()
	{
		echo $num;
	}
	
	func(); // ошибка
?>
PHP
);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$aaa = 111;
	
	function func()
	{
		echo $aaa;
	}
	
	func();
?>
PHP,
    'solution' => $solutionDir . '/solution_212_1.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = 2;
	
	function func()
	{
		return $num1 + $num2;
	}
	
	echo func();
?>
PHP,
    'solution' => $solutionDir . '/solution_212_2.php'
]);

startLesson('Одноименные переменные функций в PHP');

text('Изменения внутренних переменных

	функции не затрагивают внешние

	переменные с тем же именем:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	function func()
	{
		$num = 2;
	}
	
	func();
	echo $num; // 1
?>
PHP
);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$aaa = 111;
	
	function func()
	{
		$aaa = 222;
	}
	
	func();
	echo $aaa;
?>
PHP,
    'solution' => $solutionDir . '/solution_213_1.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$aaa = 111;
	
	function func()
	{
		$aaa++;
	}
	
	func();
	echo $aaa;
?>
PHP,
    'solution' => $solutionDir . '/solution_213_2.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$aaa = 111;
	
	function func()
	{
		$aaa = 222;
		return $aaa;
	}
	
	echo func();
?>
PHP,
    'solution' => $solutionDir . '/solution_213_3.php'
]);

startLesson('Глобальные переменные в PHP');

text('Как вы уже знаете, внешние

	переменные недоступны внутри

	функции:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	function func()
	{
		$num = 2;
	}
	
	func();
	echo $num; // 1
?>
PHP
);

text('Однако, их можно сделать доступными.

	Для этого внутри функции переменную

	нужно объявить глобальной с помощью

	команды <code>global</code>. После этого

	PHP поймет, что мы обращаемся именно

	к внешней переменной:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	function func()
	{
		global $num; // объявляем глобальной
		$num = 2;
	}
	
	func();
	echo $num; // 2
?>
PHP
);

task([
    'text' => 'Исправьте код так, чтобы он заработал

		согласно задуманному:',
    'code' => <<< 'PHP'
<?
	$num = 1;
	
	function func()
	{
		$num++;
	}
	
	func();
	echo $num; // должно вывести 2
?>
PHP,
    'solution' => $solutionDir . '/solution_214_1.php'
]);

task([
    'text' => 'Исправьте код так, чтобы он заработал

		согласно задуманному:',
    'code' => <<< 'PHP'
<?
	$num = 1;
	
	function func()
	{
		$num++;
		return $num;
	}
	
	echo func(); // должно вывести 2
?>
PHP,
    'solution' => $solutionDir . '/solution_214_2.php'
]);

task([
    'text' => 'Исправьте код так, чтобы он заработал

		согласно задуманному:',
    'code' => <<< 'PHP'
<?
	$num = 1;
	
	function func()
	{
		return $num;
	}
	
	echo func(); // должно вывести 1
?>
PHP,
    'solution' => $solutionDir . '/solution_214_3.php'
]);

startLesson('Изменение параметров функции в PHP');

text('Изменение переменных, переданных

	параметрами в функцию, не приведут

	к изменению этих переменных снаружи:');

codeBlock(<<<'PHP'
<?
	function func($bbb)
	{
		$bbb = 2;
	}
	
	$aaa = 1;
	func($aaa);
	echo $aaa; // 1
?>
PHP
);

text('Это конечно же работает, даже если

	внешнения и внутренняя переменная

	имеют одно имя:');

codeBlock(<<<'PHP'
<?
	function func($num)
	{
		$num = 2;
	}
	
	$num = 1;
	func($num);
	echo $num; // 1
?>
PHP
);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$aaa = 'a';
	
	function func($bbb)
	{
		$bbb = 'b';
	}
	
	func($aaa);
	echo $aaa;
?>
PHP,
    'solution' => $solutionDir . '/solution_215_1.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$aaa = 'a';
	
	function func($bbb)
	{
		$bbb = 'b';
	}
	
	func($aaa);
	echo $bbb;
?>
PHP,
    'solution' => $solutionDir . '/solution_215_2.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$str = 'a';
	
	function func($str)
	{
		$str = 'b';
	}
	
	func($str);
	echo $str;
?>
PHP,
    'solution' => $solutionDir . '/solution_215_3.php'
]);

task([
    'text' => 'Расскажите, каким будет

		результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	function func($arr)
	{
		$arr[0] = '!';
	}
	
	func($arr);
	var_dump($arr);
?>
PHP,
    'solution' => $solutionDir . '/solution_215_4.php'
]);

startLesson('Параметры-ссылки в PHP');

text('Можно сделать так, чтобы изменение

	параметра функции приводило к изменению

	параметра снаружи функции.

	Для этого параметр функции

	следует объявить ссылкой:');

codeBlock(<<<'PHP'
<?
	function func(&$num)
	{
		$num = 2;
	}
	
	$num = 1;
	func($num);
	echo $num; // 2
?>
PHP
);

task([
    'text' => 'Исправьте следующий код так,

		чтобы массив изменялся внутри функции:',
    'code' => <<< 'PHP'
<?
	$num = 1;
	
	function func($num)
	{
		$num++;
	}
	
	func($num);
	echo $num; // должно вывести 2
?>
PHP,
    'solution' => $solutionDir . '/solution_216_1.php'
]);

task([
    'text' => 'Исправьте следующий код так,

		чтобы массив изменялся внутри функции:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	function func($arr)
	{
		$arr[0] = '!';
	}
	
	func($arr);
	var_dump($arr);
?>
PHP,
    'solution' => $solutionDir . '/solution_216_2.php'
]);

endLesson();
