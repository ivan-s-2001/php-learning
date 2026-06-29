<?

startLesson('Многомерные массивы в PHP');
// https://code.mu/ru/php/book/prime/multi/intro/
// ⊗ppPmMdInr

codeBlock(<<<'PHP'
<?
	$arr = [['a', 'b', 'c'], ['d', 'e', 'f'], ['g', 'h', 'i']];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
	];
	
	echo $arr[0][1]; // выведет 'b'
	echo $arr[1][2]; // выведет 'f'
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Выведите с его помощью элементы с текстом <code>\'l\'</code>, <code>\'e\'</code>, <code>\'g\'</code> и <code>\'a\'</code>.',
	'code' => <<<'PHP'
<?
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дан следующий массив: Найдите сумму всех его элементов.',
	'code' => <<<'PHP'
<?
	$arr = [[1, 2], [3, 4], [5, 6]];
?>
PHP,
]);

startLesson('Трехмерный массив в PHP');
// https://code.mu/ru/php/book/prime/multi/three-dimensional/
// ⊗ppPmMdTD

codeBlock(<<<'PHP'
<?
	$arr = [
		[
			['a', 'b'],
			['c', 'd'],
		],
		[
			['e', 'f'],
			['g', 'h'],
		],
		[
			['i', 'j'],
			['k', 'l'],
		],
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	echo $arr[0][0][0]; // выведет 'a'
	echo $arr[2][1][0]; // выведет 'k'
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Найдите сумму всех элементов приведенного массива.',
	'code' => <<<'PHP'
<?
	$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
?>
PHP,
]);

startLesson('Ассоциативные массивы в PHP');
// https://code.mu/ru/php/book/prime/multi/associative/
// ⊗ppPmMdAs

codeBlock(<<<'PHP'
<?
	$arr = [
		'user1' => [
			'name' => 'name1',
			'age'  => 31,
		],
		'user2' => [
			'name' => 'name2',
			'age'  => 32,
		],
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	echo $arr['user2']['name']; // выведет 'name2'
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Выведите с помощью этого массива имя первого мальчика и имя второй девочки.',
	'code' => <<<'PHP'
<?
	$arr = [
		'boys'  => [1 => 'John', 2 => 'Jack', 3 => 'Ryan'],
		'girls' => [1 => 'Emma', 2 => 'Lily', 3 => 'Anna'],
	];
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дан следующий массив: Выведите с помощью этого массива сумму зарплат первого и третьего юзера.',
	'code' => <<<'PHP'
<?
	$arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
?>
PHP,
]);

startLesson('Произвольные массивы в PHP');
// https://code.mu/ru/php/book/prime/multi/arbitrary/
// ⊗ppPmMdAr

codeBlock(<<<'PHP'
<?
	$arr = [['a', 'b', [1, 2, 3], [4, 5]], ['d', ['e', 'f']]];
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [
		[
			'a', 'b', [1, 2, 3], [4, 5],
		],
		[
			'd', ['e', 'f'],
		],
	];
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Найдите сумму всех элементов приведенного массива. Обращайтесь к каждому элементу по отдельности, без цикла.',
	'code' => <<<'PHP'
<?
	$arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];
?>
PHP,
]);

startLesson('Перебор многомерных массивов в PHP');
// https://code.mu/ru/php/book/prime/multi/iteration/
// ⊗ppPmMdIt

codeBlock(<<<'PHP'
<?
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	foreach ($arr as $sub) {
		foreach ($sub as $elem) {
			echo $elem;
		}
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: С помощью двух вложенных циклов найдите сумму элементов этого массива.',
	'code' => <<<'PHP'
<?
	$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
?>
PHP,
]);

startLesson('Перебор трехмерного массива в PHP');
// https://code.mu/ru/php/book/prime/multi/three-dimensional-iteration/
// ⊗ppPmMdTDI

codeBlock(<<<'PHP'
<?
	$arr = [
		[
			['a', 'b'],
			['c', 'd'],
		],
		[
			['e', 'f'],
			['g', 'h'],
		],
		[
			['i', 'j'],
			['k', 'l'],
		],
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	foreach ($arr as $sub) {
		foreach ($sub as $subsub) {
			foreach ($subsub as $elem) {
				echo $elem;
			}
		}
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: С помощью трех вложенных циклов найдите сумму элементов этого массива.',
	'code' => <<<'PHP'
<?
	$arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];
?>
PHP,
]);

startLesson('Работа с ключами в многомерных массивах в PHP');
// https://code.mu/ru/php/book/prime/multi/iteration-keys/
// ⊗ppPmMdIK

codeBlock(<<<'PHP'
<?
	$arr = [
		'user1' => [
			'name' => 'name1',
			'age'  => 31,
		],
		'user2' => [
			'name' => 'name2',
			'age'  => 32,
		],
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	foreach ($arr as $key1 => $sub) {
		foreach ($sub as $key2 => $elem) {
			echo $key1 . ' ' . $key2 . ' ' . $elem . '<br>';
		}
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Выведите элементы этого массива в формате <i>ключ-значение</i>.',
	'code' => <<<'PHP'
<?
	$arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дан следующий массив: С помощью двух вложенных циклов выведите элементы этого массива в формате <i>имя группы - имя юзера</i>.',
	'code' => <<<'PHP'
<?
	$arr = [
		'group1'  => ['user11', 'user12', 'user13', 'user43'],
		'group2'  => ['user21', 'user22', 'user23'],
		'group3'  => ['user31', 'user32', 'user33'],
		'group4'  => ['user41', 'user42', 'user43'],
		'group5'  => ['user51', 'user52'],
	];
?>
PHP,
]);

startLesson('Заполнение многомерных массивов PHP');
// https://code.mu/ru/php/book/prime/multi/filling/
// ⊗ppPmMdFl

codeBlock(<<<'PHP'
<?
	[[1, 2, 3], [1, 2, 3], [1, 2, 3]]
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $j + 1; // заполняем подмассив числами
		}
	}
	
	var_dump($arr);
?>
PHP);

task([
	'num' => 1,
	'text' => 'Сформируйте с помощью двух вложенных циклов следующий массив:',
	'code' => <<<'PHP'
[[1, 2, 3, 4, 5], [1, 2, 3, 4, 5], [1, 2, 3, 4, 5]]
PHP,
]);

task([
	'num' => 2,
	'text' => 'Сформируйте с помощью двух вложенных циклов следующий массив:',
	'code' => <<<'PHP'
[['x', 'x', 'x', 'x'], ['x', 'x', 'x', 'x'], ['x', 'x', 'x', 'x']]
PHP,
]);

task([
	'num' => 3,
	'text' => 'Сформируйте с помощью трех вложенных циклов следующий массив:',
	'code' => <<<'PHP'
[
	[
		[1, 2, 3, 4, 5],
		[1, 2, 3, 4, 5],
	],
	[
		[1, 2, 3, 4, 5],
		[1, 2, 3, 4, 5],
	],
	[
		[1, 2, 3, 4, 5],
		[1, 2, 3, 4, 5],
	],
]
PHP,
]);

startLesson('Заполнение многомерных массивов числами по порядку в PHP');
// https://code.mu/ru/php/book/prime/multi/numbers-filling/
// ⊗ppPmMdNF

codeBlock(<<<'PHP'
<?
	[[1, 2, 3], [4, 5, 6], [7, 8, 9]]
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [];
	$k = 1; // счетчик
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $k; // записываем счетчик
			$k++; // увеличиваем счетчик
		}
	}
	
	var_dump($arr);
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [];
	
	for ($i = 0, $k = 1; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++, $k++) {
			$arr[$i][$j] = $k;
		}
	}
	
	var_dump($arr);
?>
PHP);

codeBlock(<<<'PHP'
<?
	$arr = [];
	
	for ($i = 0, $k = 1; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $k++;
		}
	}
	
	var_dump($arr);
?>
PHP);

task([
	'num' => 1,
	'text' => 'Сформируйте с помощью двух вложенных циклов следующий массив:',
	'code' => <<<'PHP'
<?
	[[1, 2], [3, 4], [5, 6], [7, 8]]
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Сформируйте с помощью двух вложенных циклов следующий массив:',
	'code' => <<<'PHP'
<?
	[[2, 4, 6], [8, 10, 12], [14, 16, 18], [20, 22, 24]]
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Сформируйте с помощью трех вложенных циклов следующий трехмерный массив:',
	'code' => <<<'PHP'
<?
	[[[1, 2], [3, 4]], [[5, 6], [7, 8]]]
?>
PHP,
]);

startLesson('Массив ассоциативных массивов в PHP');
// https://code.mu/ru/php/book/prime/multi/array-of-associative/
// ⊗ppPmMdAOA

codeBlock(<<<'PHP'
<?
	$users = [
		[
			'name'   => 'user1',
			'age'    => 31,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 32,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 33,
			'salary' => 3000,
		],
	];
?>
PHP);

codeBlock(<<<'PHP'
<?
	foreach ($users as $user) {
		echo $user['name'] . ': ' . $user['salary'] . '$, ' . $user['age'] . '<br>';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий массив: Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.',
	'code' => <<<'PHP'
<?
	$products = [
		[
			'name'   => 'prod1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'prod2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'prod3',
			'price'  => 300,
			'amount' => 7,
		],
	];
?>
PHP,
]);

startLesson('Конвертация многомерных массивов в PHP');
// https://code.mu/ru/php/book/prime/multi/conversion/
// ⊗ppPmMdCn

codeBlock(<<<'PHP'
<?
	$users = [
		[
			'id' => 11,
			'name' => 'name11',
			'surname' => 'surname11',
		],
		[
			'id' => 14,
			'name' => 'name14',
			'surname' => 'surname14',
		],
		[
			'id' => 17,
			'name' => 'name17',
			'surname' => 'surname17',
		],
	];
?>
PHP);

codeBlock(<<<'PHP'
[
	11 => [
		'id' => 11,
		'name' => 'name11',
		'surname' => 'surname11',
	],
	14 => [
		'id' => 14,
		'name' => 'name14',
		'surname' => 'surname14',
	],
	17 => [
		'id' => 17,
		'name' => 'name17',
		'surname' => 'surname17',
	],
]
PHP);

codeBlock(<<<'PHP'
<?
	$res = [];
	
	foreach ($users as $user) {
		$res[$user['id']] = $user;
	}
	
	var_dump($res);
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан список городов и их стран, хранящийся в следующей структуре: Напишите код, которой переделает структуру данных вот в такую:',
	'code' => <<<'PHP'
[
	[
		'country' => 'country1',
		'city' =>    'city1',
	],
	[
		'country' => 'country2',
		'city' =>    'city2',
	],
	[
		'country' => 'country1',
		'city' =>    'city3',
	],
	[
		'country' => 'country1',
		'city' =>    'city4',
	],
	[
		'country' => 'country3',
		'city' =>    'city5',
	],
	[
		'country' => 'country2',
		'city' =>    'city6',
	],
	[
		'country' => 'country3',
		'city' =>    'city7',
	],
]

[
	'country1'=> [
		'city1', 'city3', 'city4',
	],
	'country2'=> [
		'city2', 'city6'
	],
	'country3'=> [
		'city7', 'city5'
	],
]
PHP,
]);

task([
	'num' => 2,
	'text' => 'Дан список событий за определенные даты, хранящийся в следующей структуре: Напишите код, которой переделает структуру данных вот в такую:',
	'code' => <<<'PHP'
[
	[
		'date'  => '2019-12-29',
		'event' => 'name1'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name2'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name3'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name4'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name5'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name6'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name7'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name8'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name9'
	],
]

[
	'2019-12-29'=> ['name1', 'name3', 'name5', 'name7'],
	'2019-12-30'=> ['name4', 'name8', 'name9'],
	'2019-12-31'=> ['name2', 'name6'],
]
PHP,
]);

task([
	'num' => 3,
	'text' => 'Дан список событий за определенные даты, хранящийся в следующей структуре: Напишите код, которой переделает структуру данных вот в такую:',
	'code' => <<<'PHP'
[
	'2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
	'2019-12-30'=> ['name5', 'name6', 'name7'],
	'2019-12-31'=> ['name8', 'name9'],
]

[
	[
		'date'  => '2019-12-29',
		'event' => 'name1'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name2'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name3'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name4'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name5'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name6'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name7'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name8'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name9'
	],
]
PHP,
]);
