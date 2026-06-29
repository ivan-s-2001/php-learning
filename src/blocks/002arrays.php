<?

startLesson('Массивы в PHP');
// https://code.mu/ru/php/book/prime/arrays/intro/
// ⊗ppPmArInr

codeBlock(<<<'PHP'
<?
	$arr = []; // создаем массив $arr
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 'a', 'b', null, true, false];
?>
PHP);

startLesson('Как посмотреть содержимое массива в PHP');
// https://code.mu/ru/php/book/prime/arrays/dumping/
// ⊗ppPmArDm

codeBlock(<<<'PHP'
<?
	$a = [1, 2, 3];
	echo $a; // выведет 'Array'
?>
PHP);

codeBlock(<<<'PHP'
<?
	$a = [1, 2, 3];
	var_dump($a);
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан массив: Выведите этот массив на экран с помощью команды <code>echo</code> и с помощью функции <code>var_dump</code>.',
	'code' => <<<'PHP'
<?
	$a = ['a', 'b', 'c'];
?>
PHP,
'solution' => <<<'PHP'
<?
	$a = ['a', 'b', 'c'];
	echo $a; // выведет 'Array'
	var_dump($a);
?>
PHP,
]);

startLesson('Отдельный элемент массива в PHP');
// https://code.mu/ru/php/book/prime/arrays/element/
// ⊗ppPmArEl

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
	
	echo $arr[0]; // выведет 'a'
	echo $arr[1]; // выведет 'b'
	echo $arr[2]; // выведет 'c'
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан массив: Выведите на экран каждый элемент этого массива.',
	'code' => <<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	echo $arr[0]; // выведет 'a'
	echo $arr[1]; // выведет 'b'
	echo $arr[2]; // выведет 'c'
?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Дан массив: Выведите с помощью этого массива следующую строку:',
	'code' => <<<'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>

'a+b+c+d'
PHP,
'solution' => <<<'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo $arr[0] . '+' . $arr[1] . '+' . $arr[2] . '+' . $arr[3];
	?>
PHP
]);

task([
	'num' => 3,
	'text' => 'Дан массив: Выведите на экран сумму элементов массива.',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4];
?>
PHP
]);

task([
	'num' => 4,
	'text' => 'Дан массив: Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной <code>$res</code>. Выведите на экран значение этой переменной.',
	'code' => <<<'PHP'
<?
	$arr = [2, 5, 3, 9];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [2, 5, 3, 9];
	$res = $arr[0] * $arr[1] + $arr[2] * $arr[3];
	echo $res; // выведет 37
?>
PHP
]);

startLesson('Ассоциативные массивы в PHP');
// https://code.mu/ru/php/book/prime/arrays/associative/
// ⊗ppPmArAs

codeBlock(<<<'PHP'
<?
	$arr = [2025, 12, 31];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [
		'year' => 2025,
		'month' => 12, 
		'day' => 31
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	echo $arr['year'];  // выведет 2025
	echo $arr['month']; // выведет 12
	echo $arr['day'];   // выведет 31
?>
PHP);

task([
	'num' => 1,
	'text' => 'Создайте массив <code>$user</code> с ключами <code>\'name\'</code>, <code>\'surname\'</code>, <code>\'patronymic\'</code> и какими-то произвольными значениями. Выведите на экран фамилию, имя и отчество через пробел.',
	'solution' => <<<'PHP'
<?
	$user = [
		'name' => 'Иван',
		'surname' => 'Иванов',
		'patronymic' => 'Иванович'
	];
	echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];
?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Создайте массив с ключами от <code>1</code> до <code>7</code>, в качестве значений содержащий имена дней недели. Выведите на экран все его элементы.',
	'solution' => <<<'PHP'
<?
	$days = [
		1 => 'Понедельник',
		2 => 'Вторник',
		3 => 'Среда',
		4 => 'Четверг',
		5 => 'Пятница',
		6 => 'Суббота',
		7 => 'Воскресенье'
	];
	foreach ($days as $day) {
		echo $day . '<br>';
	}
?>
PHP
]);

startLesson('Хитрость с ключами в PHP');
// https://code.mu/ru/php/book/prime/arrays/keys-trick/
// ⊗ppPmArKT

codeBlock(<<<'PHP'
<?
	$arr = [1 => 'a', 'b', 'c', 'd'];
	
	echo $arr[1]; // выведет 'a'
	echo $arr[2]; // выведет 'b'
	echo $arr[3]; // выведет 'c'
?>
PHP);

task([
	'num' => 1,
	'text' => 'Составьте массив с названиями месяцев. Пусть в нем январь имеет ключ <code>1</code>.',
	'solution' => <<<'PHP'
<?
	$months = [
		1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
	];
	echo $months;
?>
PHP
]);

startLesson('Порядок элементов в массивах в PHP');
// https://code.mu/ru/php/book/prime/arrays/elements-order/
// ⊗ppPmArEO

codeBlock(<<<'PHP'
<?
	$arr = [1 => 'value1', 2 => 'value2', 3 => 'value3'];
	
	echo $arr[1]; // выведет 'value1'
	echo $arr[2]; // выведет 'value2'
	echo $arr[3]; // выведет 'value3'
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [3 => 'value3', 1 => 'value1', 2 => 'value2'];
	
	echo $arr[1]; // выведет 'value1'
	echo $arr[2]; // выведет 'value2'
	echo $arr[3]; // выведет 'value3'
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [7 => 'value1', 50 => 'value2', 23 => 'value3'];
?>
PHP);

task([
	'num' => 1,
	'text' => 'Проверьте описанное на каком-нибудь из ваших ассоциативных массивов.',
	'solution' => <<<'PHP'
<?
	$arr = [7 => 'value1', 50 => 'value2', 23 => 'value3'];
	
	echo $arr[7];  // выведет 'value1'
	echo $arr[50]; // выведет 'value2'
	echo $arr[23]; // выведет 'value3'
?>
PHP
]);

startLesson('Длина массива в PHP');
// https://code.mu/ru/php/book/prime/arrays/length/
// ⊗ppPmArLn

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3];
	echo count($arr); // выведет 3
?>
PHP);

task([
	'num' => 1,
	'text' => 'Пусть дан такой массив: Выведите на экран количество элементов в этом массиве.',
	'code' => <<<'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo count($arr);
?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Пусть дан такой массив: Выведите на экран количество элементов в этом массиве.',
	'code' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
	echo count($arr);
?>
PHP
]);

startLesson('Изменение элементов массива в PHP');
// https://code.mu/ru/php/book/prime/arrays/elements-changing/
// ⊗ppPmArECh

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	
	$arr[0] = '!';
	var_dump($arr); // выведет ['!', 'b', 'c']
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Измените значение каждого из элементов этого массива.',
	'code' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
	'solution' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	
	$arr['a'] = '!';
	$arr['b'] = '?';
	$arr['c'] = '/';
	
	var_dump($arr);
?>
PHP
]);

startLesson('Перезапись элементов массива в PHP');
// https://code.mu/ru/php/book/prime/arrays/elements-rewriting/
// ⊗ppPmArERe

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	
	$arr[0] = $arr[0] . '!';
	$arr[1] = $arr[1] . '!';
	$arr[2] = $arr[2] . '!';
	
	var_dump($arr); // выведет ['a!', 'b!', 'c!']
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	
	$arr[0] .= '!';
	$arr[1] .= '!';
	$arr[2] .= '!';
	
	var_dump($arr); // выведет ['a!', 'b!', 'c!']
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Прибавьте к каждому элементу массива число <code>3</code>. Выведите на экран измененный массив.',
	'code' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	
	$arr['a'] += 3;
	$arr['b'] += 3;
	$arr['c'] += 3;
	
	var_dump($arr);
?>
PHP
]);

startLesson('Инкрементация элементов массива в PHP');
// https://code.mu/ru/php/book/prime/arrays/elements-incrementation/
// ⊗ppPmArEI

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3, 4];
	
	$arr[0]++;
	++$arr[1];
	$arr[2]--;
	--$arr[3];
	
	var_dump($arr); // выведет [2, 3, 2, 3]
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий код: Не запуская код, расскажите, каким будет результат функции <code>var_dump</code>.',
	'code' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	
	$arr['a']++;
	$arr['a']++;
	$arr['b']--;
	$arr['c']--;
	$arr['c']--;
	
	var_dump($arr);
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	
	$arr['a']++;
	$arr['a']++;
	$arr['b']--;
	$arr['c']--;
	$arr['c']--;
	$a = 2;
	$b = 1;
	$c = 1;
	echo (($arr['a'] == $a) && ($arr['b'] == $b) && ($arr['c'] == $c)) ? 'Верно' : 'Неверно'; // true
?>
PHP
]);

startLesson('Заполнение массивов в PHP');
// https://code.mu/ru/php/book/prime/arrays/filling/
// ⊗ppPmArFl

codeBlock(<<<'PHP'
<?
	$arr = [];     // создаем пустой массив
	
	$arr[] = 'a';  // элемент добавится в ключ 0
	$arr[] = 'b';  // элемент добавится в ключ 1
	$arr[] = 'c';  // элемент добавится в ключ 2
	
	var_dump($arr); // выведет ['a', 'b', 'c']
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c']; // объявляем массив с элементами
	
	$arr[] = 'd'; // элемент добавится в ключ 3
	$arr[] = 'e'; // элемент добавится в ключ 4
	
	var_dump($arr); // выведет ['a', 'b', 'c', 'd', 'e']
?>
PHP);

task([
	'num' => 1,
	'text' => 'Пусть дан пустой массив: Описанным способом заполните этот массив элементами со значениями <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code> и <code>5</code>.',
	'code' => <<<'PHP'
<?
	$arr = [];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [];
	
	$arr[] = 1;
	$arr[] = 2;
	$arr[] = 3;
	$arr[] = 4;
	$arr[] = 5;
	
	var_dump($arr); // выведет [1, 2, 3, 4, 5]
?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Пусть дан такой массив: Добавьте ему в конец элементы <code>4</code> и <code>5</code>.',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [1, 2, 3];
	
	$arr[] = 4;
	$arr[] = 5;
	
	var_dump($arr); // выведет [1, 2, 3, 4, 5]
	?>
PHP
]);

startLesson('Явное указание ключей в PHP');
// https://code.mu/ru/php/book/prime/arrays/explicit-assign-keys/
// ⊗ppPmArEAK

codeBlock(<<<'PHP'
<?
	$arr = []; // создаем пустой массив
	
	$arr[0] = 'a'; // в ключ 0 добавим элемент 'a'
	$arr[1] = 'b'; // в ключ 1 добавим элемент 'b'
	$arr[2] = 'c'; // в ключ 2 добавим элемент 'c'
	
	var_dump($arr); // выведет ['a', 'b', 'c']
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [];
	
	$arr['a'] = 1;
	$arr['b'] = 2;
	$arr['c'] = 3;
	
	var_dump($arr); // выведет ['a' => 1, 'b' => 2, 'c' => 3]
?>
PHP);

task([
	'num' => 1,
	'text' => 'Пусть дан пустой массив: Описанным способом в ключ <code>\'year\'</code> запишите текущий год, в ключ <code>\'month\'</code> - текущий месяц, а в ключ <code>\'day\'</code> - текущий день.',
	'code' => <<<'PHP'
<?
	$arr = [];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [];
	
	$arr['year'] = date('Y');
	$arr['month'] = date('m');
	$arr['day'] = date('d');
	
	var_dump($arr); // выведет ['year' => 2024, 'month' => 06, 'day' => 15]
?>
PHP
]);

startLesson('Ключи из переменных в PHP');
// https://code.mu/ru/php/book/prime/arrays/vars-keys/
// ⊗ppPmArVK

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	echo $arr[0]; // выведет 'a'
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	$key = 0; // запишем ключ в переменную
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	$key = 0; // запишем ключ в переменную
	
	echo $arr[$key]; // выведет 'a'
?>
PHP);

task([
	'num' => 1,
	'text' => 'Даны следующий переменные: Найдите сумму элементов, ключи которых хранятся в переменных.',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	$key1 = 1;
	$key2 = 2;
?>
PHP,
'solution' => <<<'PHP'
<?
$arr = [1, 2, 3, 4, 5];
$key1 = 1;
$key2 = 2;

$sum = $arr[$key1] + $arr[$key2];
echo $sum; // выведет 5
?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Даны следующий переменные: Выведите на экран элемент массива, ключ которого хранится в переменной <code>$key</code>.',
	'code' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$key = 'b';
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$key = 'b';
	
	echo $arr[$key]; // выведет 2
	?>
PHP
]);

startLesson('Поиск ошибок в коде с массивами PHP');
// https://code.mu/ru/php/book/prime/arrays/mistakes/
// ⊗ppPmArMst

task([
	'num' => 1,
	'text' => 'Код должен вывести длину массива:',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo strlen($arr);
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo count($arr);
	?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Код должен вывести последний элемент массива:',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo $arr[count($arr)];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo $arr[count($arr) - 1];
	?>
PHP
]);

task([
	'num' => 3,
	'text' => 'Код должен найти сумму элементов массива:',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo $arr[1] + $arr[2] + $arr[3] + $arr[4] + $arr[5];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4];
	?>
PHP
]);

task([
	'num' => 4,
	'text' => 'Код должен вывести длину массива:',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo count([$arr]);
?>
PHP,
'solution' => <<<'PHP'
<?
$arr = [1, 2, 3, 4, 5];
echo count($arr);
?>	
PHP
]);

task([
	'num' => 5,
	'text' => 'Код должен найти сумму элементов массива:',
	'code' => <<<'PHP'
<?
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	echo $arr[a] + $arr[b] + $arr[c];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	echo $arr['a'] + $arr['b'] + $arr['c'];
	?>
PHP
]);

task([
	'num' => 6,
	'text' => 'Код должен вывести элемент массива по ключу, заданному в переменной:',
	'code' => <<<'PHP'
<?
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	$k = 'a';
	echo $arr['$k'];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	$k = 'a';
	echo $arr[$k];
?>
PHP
]);

task([
	'num' => 7,
	'text' => 'Код должен вывести длину массива:',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	echo count($arr);
?>
PHP,
'solution' => <<< 'PHP'
<?
$arr = [1, 2, 3, 4, 5];
echo count($arr);
?>
PHP
]);

task([
	'num' => 8,
	'text' => 'Код должен вывести элемент массива по ключу, заданному в переменной:',
	'code' => <<<'PHP'
<?
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	$a = 1;
	echo $arr[$a];
?>
PHP,
'solution' => <<<'PHP'
<?
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	$a = 'a';
	echo $arr[$a];
	?>
PHP
]);
