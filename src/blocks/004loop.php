<?

startLesson('Введение в циклы в PHP');
// https://code.mu/ru/php/book/prime/loops/intro/
// ⊗ppPmLpInr

startLesson('Цикл foreach в PHP');
// https://code.mu/ru/php/book/prime/loops/foreach/
// ⊗ppPmLpFe

codeBlock(<<< 'PHP'
<?
	foreach ($arrayName as $elementName) {
		/*
			Код, который находится между фигурными
			скобками будет повторяться столько раз,
			сколько элементов у массива.
		*/
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo $elem;
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив с числами: Переберите этот массив циклом и выведите на экран квадраты этих чисел.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив с числами: С помощью цикла <code>foreach</code> и тега <a><code>br</code></a> выведите на экран столбец элементов этого массива.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дан массив с числами: С помощью цикла <code>foreach</code> и тега <a><code>br</code></a> выведите на экран столбец элементов этого массива так, чтобы каждый элемент массива стоял в своем теге <a><code>b</code></a>.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

startLesson('Ключи в цикле foreach в PHP');
// https://code.mu/ru/php/book/prime/loops/foreach-keys/
// ⊗ppPmLpFeK

codeBlock(<<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	
	foreach ($arr as $key => $elem) {
		echo $key . '-' . $elem;
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: С помощью цикла <code>foreach</code> выведите на экран имена юзеров и соответствующие им возраста.',
    'code' => <<< 'PHP'
<?
	$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
?>
PHP,
]);

startLesson('Цикл while в PHP');
// https://code.mu/ru/php/book/prime/loops/while/
// ⊗ppPmLpWl

codeBlock(<<< 'PHP'
<?
	while (statement) {
		/*
			выполняем этот код циклически
			в начале каждого цикла проверяем выражение в круглых скобках
		*/
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$i = 1;
	
	while ($i <= 5) {
		echo $i;
		$i++;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$i = 10;
	
	while ($i > 0) {
		echo $i;
		$i--;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$num = 500;
	
	while ($num > 10) {
		$num = $num / 2;
	}
	
	echo $num; // результат
?>
PHP);

task([
    'num' => 1,
    'text' => 'Выведите на экран числа от <code>1</code> до <code>100</code>.',
]);

task([
    'num' => 2,
    'text' => 'Выведите на экран числа <code>11</code> до <code>33</code>.',
]);

task([
    'num' => 3,
    'text' => 'Выведите на экран числа от <code>100</code> до <code>1</code>.',
]);

task([
    'num' => 4,
    'text' => 'Дано число <code>num</code> с неким начальным значением. Умножайте его на <code>3</code> столько раз, пока результат умножения не станет больше <code>1000</code>. Какое число получится? Посчитайте количество итераций, необходимых для этого.',
]);

startLesson('Цикл for в PHP');
// https://code.mu/ru/php/book/prime/loops/for/
// ⊗ppPmLpFrI

codeBlock(<<< 'PHP'
<?
	for ( начальные команды; условие окончания; команды после прохода ) {
		тело цикла
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	for ($i = 1; $i <= 9; $i++) {
		echo $i;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	for ($i = 1; $i <= 9; $i += 2) {
		echo $i;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	for ($i = 10; $i > 0; $i--) {
		echo $i;
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью цикла <code>for</code> выведите на экран числа от <code>1</code> до <code>100</code>.',
]);

task([
    'num' => 2,
    'text' => 'С помощью цикла <code>for</code> выведите на экран числа от <code>11</code> до <code>33</code>.',
]);

task([
    'num' => 3,
    'text' => 'С помощью цикла <code>for</code> выведите на экран четные числа в промежутке от <code>0</code> до <code>100</code>.',
]);

task([
    'num' => 4,
    'text' => 'С помощью цикла <code>for</code> выведите на экран нечетные числа в промежутке от <code>1</code> до <code>99</code>.',
]);

task([
    'num' => 5,
    'text' => 'С помощью цикла <code>for</code> выведите на экран числа от <code>100</code> до <code>0</code>.',
]);

startLesson('Условия в циклах в PHP');
// https://code.mu/ru/php/book/prime/loops/conditions/
// ⊗ppPmLpFI

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		echo $elem;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		if ($elem % 2 == 0) {
			echo $elem;
		}
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: С помощью цикла <code>foreach</code> и оператора <code>if</code> выведите в консоль нечетные элементы массива.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: С помощью цикла <code>foreach</code> и оператора <code>if</code> выведите в консоль те элементы массива, которые больше <code>3</code>, но меньше <code>10</code>.',
    'code' => <<< 'PHP'
<?
	$arr = [2, 5, 9, 15, 1, 4];
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов массива.',
]);

task([
    'num' => 4,
    'text' => 'Дан массив: Выведите на экран только те числа из массива, которые начинаются на цифру <code>1</code>, <code>2</code> или <code>5</code>.',
    'code' => <<< 'PHP'
<?
	$arr = [10, 20, 30, 50, 235, 3000];
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Составьте массив дней недели. С помощью цикла <code>foreach</code> выведите все дни недели, а выходные дни выведите жирным.',
]);

task([
    'num' => 6,
    'text' => 'Составьте массив дней недели. С помощью цикла <code>foreach</code> выведите все дни недели, а текущий день выведите <i>курсивом</i>. Номер текущего дня должен храниться в переменной <code>$day</code>.',
]);

startLesson('Накопление чисел в циклах PHP');
// https://code.mu/ru/php/book/prime/loops/numbers-accumulation/
// ⊗ppPmLpNA

codeBlock(<<< 'PHP'
<?
	$res = 0;
	
	for ($i = 1; $i <= 100; $i++) {
		$res = $res + $i;
	}
	
	echo $res; // искомая сумма
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$res = 0;
	
	for ($i = 1; $i <= 100; $i++) {
		$res += $i;
	}
	
	echo $res;
?>
PHP);

task([
    'num' => 1,
    'text' => 'Найдите сумму четных чисел от <code>2</code> до <code>100</code>.',
]);

task([
    'num' => 2,
    'text' => 'Найдите сумму нечетных чисел от <code>1</code> до <code>99</code>.',
]);

task([
    'num' => 3,
    'text' => 'Найдите произведение целых чисел от <code>1</code> до <code>20</code>.',
]);

startLesson('Накопление элементов массивов в циклах PHP');
// https://code.mu/ru/php/book/prime/loops/array-elements-accumulation/
// ⊗ppPmLpAEA

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$res = 0;
	
	foreach ($arr as $elem) {
		$res += $elem;
	}
	
	echo $res;
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: Найдите сумму элементов этого массива.',
    'code' => <<< 'PHP'
<?
	$arr = [2, 5, 9, 3, 1, 4];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Найдите сумму элементов элементов, являющихся четными числами.',
    'code' => <<< 'PHP'
<?
	$arr = [2, 5, 9, 3, 1, 4];
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дан массив: Найдите сумму квадратов элементов этого массива.',
    'code' => <<< 'PHP'
<?
	$arr = [2, 5, 9, 3, 1, 4];
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дан массив: Найдите произведение элементов этого массива.',
    'code' => <<< 'PHP'
<?
	$arr = [2, 5, 9, 3, 1, 4];
?>
PHP,
]);

startLesson('Формирование строк через циклы в PHP');
// https://code.mu/ru/php/book/prime/loops/string-forming/
// ⊗ppPmLpSF

codeBlock(<<< 'PHP'
<?
	$str = '';
	
	for ($i = 0; $i < 10; $i++) {
		$str .= 'x';
	}
	
	echo $str;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = '';
	
	for ($i = 1; $i <= 5; $i++) {
		$str = $str . $i;
	}
	
	echo $str; // выведет '12345'
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью цикла сформируйте строку, заполненную <code>5</code>-тью дефисами.',
]);

task([
    'num' => 2,
    'text' => 'С помощью цикла сформируйте строку <code>\'123456789\'</code>.',
]);

task([
    'num' => 3,
    'text' => 'С помощью цикла сформируйте строку <code>\'987654321\'</code>.',
]);

task([
    'num' => 4,
    'text' => 'С помощью цикла сформируйте строку <code>\'-1-2-3-4-5-6-7-8-9-\'</code>.',
]);

startLesson('Необязательность скобок в циклах в PHP');
// https://code.mu/ru/php/book/prime/loops/braces-optionality/
// ⊗ppPmLpBO

codeBlock(<<< 'PHP'
<?
	for ($i = 0; $i <= 9; $i++) {
		echo $i; // выведет числа от 0 до 9
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	for ($i = 0; $i <= 9; $i++)
		echo $i; // выведет числа от 0 до 9
?>
PHP);

task([
    'num' => 1,
    'text' => 'Перепишите следующий код без фигурных скобок:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo $elem;
	}
?>
PHP,
]);

startLesson('Проблема фигурных скобок в циклах в PHP');
// https://code.mu/ru/php/book/prime/loops/braces-optionality-problem/
// ⊗ppPmLpBOP

codeBlock(<<< 'PHP'
<?
	for ($i = 0; $i <= 9; $i++)
		echo $i; // выведет числа от 0 до 9
?>
PHP);

codeBlock(<<< 'PHP'
<?
	for ($i = 0; $i <= 9; $i++);
		echo $i; // выдаст 10
?>
PHP);

task([
    'num' => 1,
    'text' => 'Расскажите, каким будет результат выполнения следующего кода:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem);
		echo $elem;
?>
PHP,
]);

startLesson('Инструкция break в PHP');
// https://code.mu/ru/php/book/prime/loops/break/
// ⊗ppPmLpBr

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo $elem;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem == 3) {
			echo '+++';
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem == 3) {
			echo '+++';
			break; // выйдем из цикла
		}
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив с числами. Запустите цикл, который будет по очереди выводить элементы этого массива в консоль до тех пор, пока не встретится элемент со значением <code>0</code>. После этого цикл должен завершить свою работу.',
]);

task([
    'num' => 2,
    'text' => 'Дан массив с числами. Найдите сумму элементов, расположенных от начала массива до первого отрицательного числа.',
]);

task([
    'num' => 3,
    'text' => 'Дан массив с числами. Найдите позицию первого числа <code>3</code> в этом массиве (считаем, что это число обязательно есть в массиве).',
]);

task([
    'num' => 4,
    'text' => 'Определите, сколько целых чисел, начиная с числа <code>1</code>, нужно сложить, чтобы сумма получилась больше <code>100</code>.',
]);

startLesson('Инструкция continue в PHP');
// https://code.mu/ru/php/book/prime/loops/continue/
// ⊗ppPmLpCn

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	
	foreach ($arr as $elem) {
		if ($elem % 2 === 0) {
			$res = $elem * $elem;
			echo $res;
		} elseif ($elem % 3 === 0) {
			$res = $elem * $elem * $elem;
			echo $res;
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	
	foreach ($arr as $elem) {
		if ($elem % 2 === 0) {
			$res = $elem * $elem;
		} elseif ($elem % 3 === 0) {
			$res = $elem * $elem * $elem;
		}
		
		echo $res; // вынесли вывод за условие
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	
	foreach ($arr as $elem) {
		if ($elem % 2 === 0) {
			$res = $elem * $elem;
		} elseif ($elem % 3 === 0) {
			$res = $elem * $elem * $elem;
		} else {
			continue; // перейдем на новую итерацию цикла
		}
		
		echo $res; // выполнится, если делится на 2 или 3
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Напишите цикл, который выводет только чётные числа от <code>1</code> до <code>100</code>, пропуская нечётные с помощью <code>continue</code>.',
]);

startLesson('Работа с флагами в PHP');
// https://code.mu/ru/php/book/prime/loops/flags/
// ⊗ppPmLpFl

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			echo '+++';
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 3, 5];
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			echo '+++'; // выведет несколько раз
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 3, 5];
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			echo '+++';
			break;  // завершим цикл
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			echo '+++'; // выведет на элементе 3
		} else {
			echo '---'; // выведет на элементах 1, 2, 4, 5
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
$arr = [1, 2, 3, 4, 5];
$flag = false; // считаем, что элемента 3 нету в массиве
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$flag = false; // считаем, что элемента 3 нет в массиве
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			$flag = true; // элемент есть - переопределим переменную $flag
			break; // выйдем из цикла
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$flag = false;
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			$flag = true;
			break;
		}
	}
	
	// тут переменная $flag равна или true, или false
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$flag = false;
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			$flag = true;
			break;
		}
	}
	
	if ($flag === true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: Проверьте, что в этом массиве есть элемент <code>\'c\'</code>. Если есть - выведите <code>\'+++\'</code>, а если нет - выведите <code>\'---\'</code>.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Напишите код, который будет проверять число на то, простое оно или нет. Простое число делится только на единицу и на само себя, и не делится на другие числа.',
]);

startLesson('Вложенные циклы в PHP');
// https://code.mu/ru/php/book/prime/loops/nested/
// ⊗ppPmLpNsd

codeBlock(<<< 'PHP'
<?
	for ($i = 1; $i <= 9; $i++) {
		for ($j = 1; $j <= 3; $j++) {
			echo $i;
		}
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью двух вложенных циклов выведите на экран следующую строку: <div data-w="cont/repr"> 111222333444555666777888999 </div>',
]);

task([
    'num' => 2,
    'text' => 'С помощью двух вложенных циклов выведите на экран следующую строку: <div data-w="cont/repr"> 11 12 13 21 22 23 31 32 33 </div>',
]);

startLesson('Цикл for для массивов в PHP');
// https://code.mu/ru/php/book/prime/loops/array-loop-for/
// ⊗ppPmLpALF

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i];
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: С помощью цикла <code>for</code> выведите все эти элементы на экран.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: С помощью цикла <code>for</code> выведите на экран все элементы этого массива, кроме последнего.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дан массив: С помощью цикла <code>for</code> выведите на экран первую половину элементов этого массива.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
?>
PHP,
]);

startLesson('Заполнение массивов в PHP');
// https://code.mu/ru/php/book/prime/loops/array-loop-filling/
// ⊗ppPmLpALF

codeBlock(<<< 'PHP'
<?
	$arr = [];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [];
	
	$arr[] = 1;
	$arr[] = 2;
	$arr[] = 3;
	$arr[] = 4;
	$arr[] = 5;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [];
	
	for ($i = 1; $i <= 5; $i++) {
		$arr[] = $i;
	}
	
	var_dump($arr);
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью цикла заполните массив числами от <code>1</code> до <code>100</code>.',
]);

task([
    'num' => 2,
    'text' => 'С помощью цикла заполните массив нечетными числами в промежутке от <code>1</code> до <code>99</code>.',
]);

startLesson('Изменение массива в цикле PHP');
// https://code.mu/ru/php/book/prime/loops/array-loop-changing/
// ⊗ppPmLpALC

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	$arr[0] = $arr[0] * 2;
	$arr[1] = $arr[1] * 2;
	$arr[2] = $arr[2] * 2;
	$arr[3] = $arr[3] * 2;
	$arr[4] = $arr[4] * 2;
	
	var_dump($arr); // выведет [2, 4, 6, 8, 10]
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] = $arr[$i] * 2;
	}
	
	var_dump($arr); // выведет [2, 4, 6, 8, 10]
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив с числами. Переберите этот массив циклом и возведите каждый элемент этого массива в квадрат.',
]);

startLesson('Советы по написанию кода циклов в PHP');
// https://code.mu/ru/php/book/prime/loops/coding/
// ⊗ppPmLpCdg

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		echo $elem;
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		if ($elem % 3 === 0) {
			echo $elem; // выведет 3, 6, 9
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$sum = 0;
	
	foreach ($arr as $elem) {
		if ($elem % 3 === 0) {
			$sum += $elem;
		}
	}
	
	var_dump($sum);
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: Возьмите из этого массива те элементы, у которых первая цифра <code>1</code> или <code>2</code>, и найдите их сумму.',
    'code' => <<< 'PHP'
<?
	$arr = [10, 20, 30, 40, 21, 32, 51];
?>
PHP,
]);

startLesson('Поиск ошибок в коде с циклами PHP');
// https://code.mu/ru/php/book/prime/loops/mistakes/
// ⊗ppPmLpMst

task([
    'num' => 1,
    'text' => 'Код должен вывести числа от <code>0</code> до <code>10</code>:',
    'code' => <<< 'PHP'
<?
	for ($i = 0; $i > 10; $i++) {
		echo $i;
	}
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Код должен вывести числа от <code>10</code> до <code>0</code>:',
    'code' => <<< 'PHP'
<?
	for ($i = 10; $i > 0; $i++) {
		echo $i;
	}
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Код должен вывести числа от <code>10</code> до <code>0</code>:',
    'code' => <<< 'PHP'
<?
	for ($i = 10; $i == 0; $i--) {
		echo $i;
	}
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Код должен вывести числа от <code>0</code> до <code>10</code>:',
    'code' => <<< 'PHP'
<?
	$i = 0;
	
	while ($i >= 10) {
		echo $i;
		$i++;
	}
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Код должен найти сумму целых чисел от <code>1</code> до <code>10</code>:',
    'code' => <<< 'PHP'
<?
	$res;
	
	for ($i = 1; $i <= 10; $i++) {
		res += $i;
	}
	
	echo $res;
?>
PHP,
]);

task([
    'num' => 6,
    'text' => 'Код должен найти произведение целых чисел от <code>1</code> до <code>10</code>:',
    'code' => <<< 'PHP'
<?
	$res = 0;
	
	for ($i = 1; $i <= 10; $i++) {
		$res *= $i;
	}
	
	echo $res;
?>
PHP,
]);

task([
    'num' => 7,
    'text' => 'Код должен возвести в квадрат каждый элемент массива:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		$elem = $elem ** 2;
	}
	
	var_dump($arr);
?>
PHP,
]);

task([
    'num' => 8,
    'text' => 'Код должен заполнить массив числами от <code>1</code> до <code>5</code>:',
    'code' => <<< 'PHP'
<?
	$arr = 0;
	
	for ($i = 1; $i <= 5; $i++) {
		$arr[] = $i;
	}
	
	var_dump($arr);
?>
PHP,
]);

task([
    'num' => 9,
    'text' => 'Код должен проверить, есть ли в массиве число <code>3</code> или нет:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$res = '';
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			$res = '+++';
		} else {
			$res = '---';
		}
	}
	
	echo $res;
?>
PHP,
]);

task([
    'num' => 10,
    'text' => 'Код должен вывсти числа от <code>10</code> до <code>1</code>:',
    'code' => <<< 'PHP'
<?
	$i = 10;
	
	while ($i == 10) {
		echo $i;
		$i--;
	}
?>
PHP,
]);

task([
    'num' => 11,
    'text' => 'Код должен проверить, есть ли в массиве число <code>3</code> или нет:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$res = false;
	
	foreach ($arr as $elem) {
		if ($elem === 3) {
			$res = true;
			break;
		}
	}
	
	var_dump($res);
?>
PHP,
]);

task([
    'num' => 12,
    'text' => 'Код должен вывсти числа от <code>10</code> до <code>1</code>:',
    'code' => <<< 'PHP'
<?
	$i = 10;
	
	while ($i <= 0) {
		echo $i;
		$i--;
	}
?>
PHP,
]);

task([
    'num' => 13,
    'text' => 'Код должен вывести только четные элементы из массива:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem % 2 = 0) {
			echo $elem;
		}
	}
?>
PHP,
]);

task([
    'num' => 14,
    'text' => 'Код должен вывсти числа от <code>10</code> до <code>1</code>:',
    'code' => <<< 'PHP'
<?
	$i = 10;
	
	while ($i >= 1) {
		echo $i;
	}
?>
PHP,
]);

task([
    'num' => 15,
    'text' => 'Код должен вывсти числа от <code>10</code> до <code>1</code>:',
    'code' => <<< 'PHP'
<?
	$i = 10;
	
	while ($i >= 1) {
		echo $i;
		$i++;
	}
?>
PHP,
]);

startLesson('Отработка циклов PHP');
// https://code.mu/ru/php/book/prime/loops/practicum/
// ⊗ppPmLpPrm

task([
    'num' => 1,
    'text' => 'Выведите с помощью цикла столбец чисел от <code>1</code> до <code>100</code>.',
]);

task([
    'num' => 2,
    'text' => 'Выведите с помощью цикла столбец чисел от <code>100</code> до <code>1</code>.',
]);

task([
    'num' => 3,
    'text' => 'Выведите с помощью цикла столбец четных чисел от <code>1</code> до <code>100</code>.',
]);

task([
    'num' => 4,
    'text' => 'Заполните массив <code>10</code>-ю иксами с помощью цикла.',
]);

task([
    'num' => 5,
    'text' => 'Заполните массив числами от <code>1</code> до <code>10</code> с помощью цикла.',
]);

task([
    'num' => 6,
    'text' => 'Дан массив с числами. С помощью цикла выведите только те элементы массива, которые больше нуля и меньше <code>10</code>-ти.',
]);

task([
    'num' => 7,
    'text' => 'Дан массив с числами. С помощью цикла проверьте, что в нем есть элемент со значением <code>5</code>.',
]);

task([
    'num' => 8,
    'text' => 'Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.',
]);

task([
    'num' => 9,
    'text' => 'Дан массив с числами. С помощью цикла найдите сумму квадратов элементов этого массива.',
]);

task([
    'num' => 10,
    'text' => 'Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов, делить на количество).',
]);

task([
    'num' => 11,
    'text' => 'Напишите скрипт, который будет находить факториал числа. Факториал - это произведение всех целых чисел, меньше данного, и его самого.',
]);

task([
    'num' => 12,
    'text' => 'Дан следующий массив с работниками и их зарплатами: Увеличьте зарплату каждого работника на <code>10%</code>.',
    'code' => <<< 'PHP'
<?
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
?>
PHP,
]);

task([
    'num' => 13,
    'text' => 'Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только тем работникам, у которых она меньше или равна <code>400</code>.',
]);

task([
    'num' => 14,
    'text' => 'Дан следующий массив: Найдите сумму ключей этого массива и поделите ее на сумму значений.',
    'code' => <<< 'PHP'
<?
	$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
?>
PHP,
]);

task([
    'num' => 15,
    'text' => 'Дан следующий массив: Запишите ключи этого массива в один массив, а значения - в другой.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
?>
PHP,
]);

task([
    'num' => 16,
    'text' => 'Дан следующий массив: Запишите в новый массив элементы, значение которых начинается с цифры <code>1</code> или цифры <code>2</code>. To есть у вас в результате получится вот такой массив:',
    'code' => <<< 'PHP'
<?
	$arr = [
		1 => 125,
		2 => 225,
		3 => 128,
		4 => 356,
		5 => 145,
		6 => 281,
		7 => 452,
	];
?>

<?
	[
		125,
		225,
		128,
		145,
		281,
	];
?>
PHP,
]);
