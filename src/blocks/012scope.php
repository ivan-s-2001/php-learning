<?

startLesson('Ссылки в PHP');
// https://code.mu/ru/php/book/prime/scope/references-primitive/
// ⊗ppPmScRP

codeBlock(<<< 'PHP'
<?
	$num1 = 1;
	$num2 = $num1; // присваиваем
	
	echo $num1; // 1
	echo $num2; // 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num1 = 1;
	$num2 = $num1;
	$num2 = 2;
	
	echo $num1; // 1 - не изменилось
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num1 = 1;
	$num2 = &$num1; // передаем по ссылке
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num1 = 1;
	$num2 = &$num1;
	$num2 = 2;
	
	echo $num1; // 2 - изменилось
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num1 = 1;
	$num2 = &$num1;
	$num1 = 2;
	
	echo $num2; // 2
?>
PHP);

task([
    'num' => 1,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = $num1;
	$num2 = 2;
	
	echo $num1;
	echo $num2;
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$num1 = 1;
	$num2 = &$num1;
	$num2++;
	
	echo $num1;
	echo $num2;
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 4,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

startLesson('Ссылки-массивы в PHP');
// https://code.mu/ru/php/book/prime/scope/references-arrays/
// ⊗ppPmScRA

codeBlock(<<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = $arr1;
	$arr2[0] = '!';
	
	var_dump($arr1); // не изменится
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = &$arr1;
	$arr2[0] = '!';
	
	var_dump($arr1); // изменится
?>
PHP);

task([
    'num' => 1,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	
	$arr2 = $arr1;
	$arr2[0] = '!';
	
	echo $arr1[0];
	echo $arr2[0];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	
	$arr2 = &$arr1;
	$arr1[0]++;
	
	echo $arr1[0];
	echo $arr2[0];
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

startLesson('Ссылки в foreach в PHP');
// https://code.mu/ru/php/book/prime/scope/references-foreach/
// ⊗ppPmScRF

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		$elem++;
	}
	
	var_dump($arr); // не изменится
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as &$elem) {
		$elem++;
	}
	
	var_dump($arr); // изменится
?>
PHP);

task([
    'num' => 1,
    'text' => 'Исправьте следующий код так, чтобы он заработал согласно задуманному:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];

	foreach ($arr as &$elem) {
		$elem = sqrt($elem);
	}
	
	var_dump($arr); 
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Исправьте следующий код так, чтобы он заработал согласно задуманному:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];

	foreach ($arr as &$elem) {
		$elem ** 2;
	}
	
	var_dump($arr); 
?>
PHP,
]);

startLesson('Внутренние переменные функций в PHP');
// https://code.mu/ru/php/book/prime/scope/inner-variables/
// ⊗ppPmScIV

codeBlock(<<< 'PHP'
<?
	function func()
	{
		$num = 1;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func()
	{
		$num = 1;
	}
	
	func();
	echo $num; // ошибка
?>
PHP);

task([
    'num' => 1,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 2,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

startLesson('Внешние переменные функций в PHP');
// https://code.mu/ru/php/book/prime/scope/outer-variables/
// ⊗ppPmScOV

codeBlock(<<< 'PHP'
<?
	$num = 1;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 1;
	
	function func()
	{
		echo $num;
	}
	
	func(); // ошибка
?>
PHP);

task([
    'num' => 1,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 2,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

startLesson('Одноименные переменные функций в PHP');
// https://code.mu/ru/php/book/prime/scope/same-variables/
// ⊗ppPmScSV

codeBlock(<<< 'PHP'
<?
	$num = 1;
	
	function func()
	{
		$num = 2;
	}
	
	func();
	echo $num; // 1
?>
PHP);

task([
    'num' => 1,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 2,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 3,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

startLesson('Глобальные переменные в PHP');
// https://code.mu/ru/php/book/prime/scope/global-variables/
// ⊗ppPmScGV

codeBlock(<<< 'PHP'
<?
	$num = 1;
	
	function func()
	{
		$num = 2;
	}
	
	func();
	echo $num; // 1
?>
PHP);

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'Исправьте код так, чтобы он заработал согласно задуманному:',
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
]);

task([
    'num' => 2,
    'text' => 'Исправьте код так, чтобы он заработал согласно задуманному:',
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
]);

task([
    'num' => 3,
    'text' => 'Исправьте код так, чтобы он заработал согласно задуманному:',
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
]);

startLesson('Изменение параметров функции в PHP');
// https://code.mu/ru/php/book/prime/scope/parameters-changing/
// ⊗ppPmScPC

codeBlock(<<< 'PHP'
<?
	function func($bbb)
	{
		$bbb = 2;
	}
	
	$aaa = 1;
	func($aaa);
	echo $aaa; // 1
?>
PHP);

codeBlock(<<< 'PHP'
<?
	function func($num)
	{
		$num = 2;
	}
	
	$num = 1;
	func($num);
	echo $num; // 1
?>
PHP);

task([
    'num' => 1,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 2,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 3,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

task([
    'num' => 4,
    'text' => 'Расскажите, каким будет результат выполнения кода:',
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
]);

startLesson('Параметры-ссылки в PHP');
// https://code.mu/ru/php/book/prime/scope/parameters-references/
// ⊗ppPmScPR

codeBlock(<<< 'PHP'
<?
	function func(&$num)
	{
		$num = 2;
	}
	
	$num = 1;
	func($num);
	echo $num; // 2
?>
PHP);

task([
    'num' => 1,
    'text' => 'Исправьте следующий код так, чтобы массив изменялся внутри функции:',
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
]);

task([
    'num' => 2,
    'text' => 'Исправьте следующий код так, чтобы массив изменялся внутри функции:',
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
]);
