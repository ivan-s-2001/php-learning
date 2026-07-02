<?

$solutionDir = 'solutions/15forming';

startLesson('Вставка переменных в строки в PHP');

text('В PHP одинарные и двойные кавычки для строк

	на самом деле не совсем эквиваленты. Дело

	в том, что в строки в двойных кавычках можно

	вставлять переменные - и вместо этих переменных

	подставится их значение.');

text('Давайте попробуем на практике. Пусть у нас

	есть некоторая переменная:');

codeBlock(<<<'PHP'
<?
	$str = 'aaa';
?>
PHP
);

text('Давайте для начала выполним вставку этой

	переменной в какую-нибудь строку через операцию

	конкатенации:');

codeBlock(<<<'PHP'
<?
	$str = 'aaa';
	echo 'xxx ' . $str . ' yyy';
?>
PHP
);

text('А теперь изменим кавычки нашей строки на

	двойные и выполним в нее вставку переменной:');

codeBlock(<<<'PHP'
<?
	$str = 'aaa';
	echo "xxx $str yyy";
?>
PHP
);

task([
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$name = 'user';
	echo 'hello, ' . $name . '!';
?>
PHP,
    'solution' => $solutionDir . '/solution_271_1.php'
]);

startLesson('Вставка элементов массива в PHP');

text('Можно также выполнять вставку элементов массива:');

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	echo "xxx $arr[0] yyy";
?>
PHP
);

task([
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$arr = ['1', '2', '3'];
	echo 'aaa ' . $arr[0] . ' bbb ' . $arr[1];
?>
PHP,
    'solution' => $solutionDir . '/solution_272_1.php'
]);

startLesson('Вставка элементов ассоциативных массивов в PHP');

text('А вот вставка элементов ассоциативных массивов

	просто так работать не будет:');

codeBlock(<<<'PHP'
<?
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo "xxx $arr['a'] yyy"; // не работает
?>
PHP
);

text('Для вставки таких элементов их необходимо

	обернуть в фигурные скобки:');

codeBlock(<<<'PHP'
<?
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo "xxx {$arr['a']} yyy";
?>
PHP
);

text('Либо можно снять одинарные кавычки с ключа

	при вставке:');

codeBlock(<<<'PHP'
<?
	$arr = ['a'=>1, 'b'=2, 'c'=3];
	echo "xxx $arr[a] yyy";
?>
PHP
);

text('Иногда имеет смысл тупо записать элемент

	массива в переменную, чтобы затем без проблем

	выполнить вставку переменной в строку:');

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	$elem = $arr['a'];
	
	echo "xxx $elem yyy";
?>
PHP
);

task([
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	echo 'text ' . $arr['a'] . ' text ' . $arr['b'] . ' text';
?>
PHP,
    'solution' => $solutionDir . '/solution_273_1.php'
]);

startLesson('Цикл и вставка переменных в PHP');

text('Вставку переменных в строки также удобно

	проделывать в циклах:');

codeBlock(<<<'PHP'
<?
	for ($i = 1; $i <= 5; $i++) {
		echo "xxx $i yyy";
	}
?>
PHP
);

task([
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	for ($i = 1; $i <= 10; $i++) {
		for ($j = 1; $j <= 10; $j++) {
			echo 'nums: ' . $i . ' ' . $j . '<br>';
		}
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_274_1.php'
]);

startLesson('Вставка элементов массивов в цикле в PHP');

text('Можно также вставлять элементы при переборе

	массивов циклом:');

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo "xxx $elem yyy";
	}
?>
PHP
);

task([
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];

	foreach ($arr as $key => $elem) {
		echo 'pair: ' . $elem . ' ' . $key . '<br>';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_275_1.php'
]);

startLesson('Вставка элементов многомерных массивов в цикле в PHP');

text('Давайте посмотрим, как выполняются вставки

	при переборе многомерных массивов. Пусть,

	к примеру, у нас есть вот такой массив:');

codeBlock(<<<'PHP'
<?
	$users = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
?>
PHP
);

text('Давайте переберем его циклом и сформируем

	строки из его элементов:');

codeBlock(<<<'PHP'
<?
	foreach ($users as $user) {
		echo $user['name'] . ': ' . $user['age'] . '<br>';
	}
?>
PHP
);

text('Упростим наш код, используя вставки переменных:');

codeBlock(<<<'PHP'
<?
	foreach ($users as $user) {
		echo "{$user['name']}: {$user['age']}<br>";
	}
?>
PHP
);

text('Упростим еще больше, убрав кавычки с ключей:');

codeBlock(<<<'PHP'
<?
	foreach ($users as $user) {
		echo "$user[name]: $user[age]<br>";
	}
?>
PHP
);

task([
    'text' => 'Дан следующий массив:

Выведите с помощью этого массива столбец

		продуктов в каком-нибудь придуманном вами формате.',
    'code' => <<< 'PHP'
<?
	$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];
?>
PHP,
    'solution' => $solutionDir . '/solution_276_1.php'
]);

startLesson('Генерация тегов в PHP');

text('Давайте теперь научимся формировать теги

	с использованием переменных. Пусть, к примеру,

	у нас есть следующая переменная:');

codeBlock(<<<'PHP'
<?
	$text = 'aaa';
?>
PHP
);

text('Выведем текст этой переменной в абзаце:');

codeBlock(<<<'PHP'
<?
	$text = 'aaa';
	echo '<p>' . $text . '</p>';
?>
PHP
);

text('Упростим код, используя вставку переменной:');

codeBlock(<<<'PHP'
<?
	$text = 'aaa';
	echo "<p>$text</p>";
?>
PHP
);

task([
    'text' => 'Даны три переменные:

Выведите каждую из этих переменных в отдельном

		абзаце.',
    'code' => <<< 'PHP'
<?
	$text1 = 'aaa';
	$text2 = 'bbb';
	$text3 = 'ccc';
?>
PHP,
    'solution' => $solutionDir . '/solution_277_1.php'
]);

startLesson('Генерация тегов с атрибутами в PHP');

text('Давайте теперь научимся формировать теги

	с атрибутами. Пусть для примера мы хотим

	сделать ссылку. При этом текст и адрес ссылки

	будут хранится в соответствующих переменных:');

codeBlock(<<<'PHP'
<?
	$text = 'link';
	$href = 'index.html';
?>
PHP
);

text('Давайте сформируем наш тег путем конкатенации

	переменных:');

codeBlock(<<<'PHP'
<?
	echo '<a href="' . $href . '">' . $text . '</a>';
?>
PHP
);

text('Давайте теперь сформируем наш тег путем вставки

	переменных. В этом случае, однако, нас ждет

	проблема. Дело в том, что для вставки переменных

	мы должны сделать кавычки строки двойными.

	Но кавычки от атрибутов тегов тоже двойные

	и нас ждет конфликт:');

codeBlock(<<<'PHP'
<?
	echo "<a href="$href">$text</a>"; // не будет работать
?>
PHP
);

text('Самый простой вариант решения проблемы -

	это заменить кавычки атрибута с двойных на

	одинарные:');

codeBlock(<<<'PHP'
<?
	echo "<a href='$href'>$text</a>";
?>
PHP
);

text('Это, однако, не очень красиво - ведь кавычки

	атрибутов принято делать двойными. Поэтому

	исправим проблему, заэкранировав кавычки

	атрибутов обратными слешами:');

codeBlock(<<<'PHP'
<?
	echo "<a href=\"$href\">$text</a>";
?>
PHP
);

task([
    'text' => 'Даны три переменные:

Сформируйте с помощью этих переменных три

		тега <code>img</code>.',
    'code' => <<< 'PHP'
<?
	$src1 = '1.png';
	$src2 = '2.png';
	$src3 = '3.png';
?>
PHP,
    'solution' => $solutionDir . '/solution_278_1.php'
]);

startLesson('Цикл и генерация тегов в PHP');

text('Давайте теперь научимся формировать теги

	в цикле. К примеру, давайте сделаем пять

	абзацев, заполнив их числами по возрастанию:');

codeBlock(<<<'PHP'
<?
	for ($i = 1; $i <= 5; $i++) {
		echo '<p>' . $i . '</p>';
	}
?>
PHP
);

text('Перепишем наш код с использованием вставки

	переменных:');

codeBlock(<<<'PHP'
<?
	for ($i = 1; $i <= 5; $i++) {
		echo "<p>$i</p>";
	}
?>
PHP
);

task([
    'text' => 'С помощью цикла сформируйте следующий HTML код:',
    'code' => <<<'PHP'
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul>
PHP,
    'solution' => $solutionDir . '/solution_279_1.php'
]);

startLesson('Цикл и генерация тегов из массивов в PHP');

text('Давайте теперь сформируем теги, взяв их тексты

	из массива:');

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo '<p>' . $elem . '</p>';
	}
?>
PHP
);

text('Перепишем наш код через вставку переменных:');

codeBlock(<<<'PHP'
<?
	foreach ($arr as $elem) {
		echo "<p>$elem</p>";
	}
?>
PHP
);

task([
    'text' => 'Дан массив:

Сформируйте с его помощью следующий HTML код:',
    'code' => <<< 'PHP'
<?
	$arr = ['text1', 'text2', 'text3'];
?>

<select>
	<option>text1</option>
	<option>text2</option>
	<option>text3</option>
</select>
PHP,
    'solution' => $solutionDir . '/solution_280_1.php'
]);

startLesson('Цикл и генерация тегов и атрибутов в PHP');

text('Давайте теперь научимся формировать в цикле
	теги не только с текстом, но и с атрибутами.
	Пусть, к примеру, у нас есть следующий массив
	с адресами и текстами ссылок:');

codeBlock(<<<'PHP'
<?
	$arr = [
		['href'=>'1.html', 'text'=>'link1'],
		['href'=>'2.html', 'text'=>'link2'],
		['href'=>'3.html', 'text'=>'link3'],
	];
?>
PHP
);

text('Давайте с помощью этого массива сформируем ссылки:');

codeBlock(<<<'PHP'
<?
	foreach ($arr as $elem) {
		echo '<a href="' . $elem['href'] . '">' . $elem['text'] . '</a><br>';
	}
?>
PHP
);

text('Можно переписать этот код с использованием
	вставок переменных:');

codeBlock(<<<'PHP'
<?
	foreach ($arr as $elem) {
		echo "<a href=\"{$elem['href']}\">{$elem['text']}</a><br>";
	}
?>
PHP
);

task([
    'text' => 'Дан следующий массив:

Сформируйте с его помощью следующий HTML код:',
    'code' => <<< 'PHP'
<?
	$arr = [
		['href'=>'page1.html', 'text'=>'text1'],
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];
?>

<ul>
	<li><a href="page1.html">text1</a></li>
	<li><a href="page2.html">text2</a></li>
	<li><a href="page3.html">text3</a></li>
</ul>
PHP,
    'solution' => $solutionDir . '/solution_281_1.php'
]);

task([
    'text' => 'Дан следующий массив:

Сформируйте с его помощью следующий HTML код:',
    'code' => <<< 'PHP'
<?
	$arr = [
		['value' => '1', 'text' => 'text1'],
		['value' => '2', 'text' => 'text2'],
		['value' => '3', 'text' => 'text3'],
	];
?>

<select>
	<option value="1">text1</option>
	<option value="2">text2</option>
	<option value="3">text3</option>
</select>
PHP,
    'solution' => $solutionDir . '/solution_281_2.php'
]);

startLesson('Цикл и генерация HTML таблиц на PHP');

text('Давайте теперь научимся формировать таблицы.

	Пусть у нас дан следующий массив, содержащий

	тексты ячеек таблицы:');

codeBlock(<<<'PHP'
<?
	$arr = [
		['name' => 'user1', 'age' => 30, 'salary' => 500],
		['name' => 'user2', 'age' => 31, 'salary' => 600],
		['name' => 'user3', 'age' => 32, 'salary' => 700],
	];
?>
PHP
);

text('Давайте с помощью цикла сформируем из этого

	массива следующий код:');

codeBlock(<<<'PHP'
<table>
	<tr>
		<td>user1</td>
		<td>30</td>
		<td>500</td>
	</tr>
	<tr>
		<td>user2</td>
		<td>31</td>
		<td>600</td>
	</tr>
	<tr>
		<td>user3</td>
		<td>32</td>
		<td>700</td>
	</tr>
</table>
PHP
);

startLesson('Генерация HTML таблицы с помощью одного цикла в PHP');

text('Сформируем таблицу с помощью одного цикла,

	вручную записав в теги <code>td</code> элементы

	подмассива:');

codeBlock(<<<'PHP'
<?
	echo '<table>';
	foreach ($arr as $user) {
		echo '<tr>';
		
		echo "<td>{$user['name']}</td>";
		echo "<td>{$user['age']}</td>";
		echo "<td>{$user['salary']}</td>";
		
		echo '</tr>';
	}
	echo '</table>';
?>
PHP
);

text('Такой способ даст нам более полный контроль,

	как над порядком ячеек, так и над возможностью

	в каждую ячейку добавить какие-то дополнительные

	данные, например, вот так:');

codeBlock(<<<'PHP'
<?
	echo '<table>';
	foreach ($arr as $user) {
		echo '<tr>';
		
		echo "<td>{$user['name']}</td>";
		echo "<td>{$user['age']} years</td>";
		echo "<td>{$user['salary']} dollars</td>";
		
		echo '</tr>';
	}
	echo '</table>';
?>
PHP
);

startLesson('Генерация HTML таблицы с помощью двух вложенных циклов в PHP');

text('Давайте сформируем нашу таблицу с помощью

	двух вложенных циклов:');

codeBlock(<<<'PHP'
<?
	echo '<table>';
	foreach ($arr as $row) {
		echo '<tr>';
		foreach ($row as $cell) {
			echo "<td>$cell</td>";
		}
		echo '</tr>';
	}
	echo '</table>';
?>
PHP
);

text('Такой способ удобен тем, что не нужно прописывать

	каждую ячейку таблицы отдельно. Однако, недостатком

	такого подхода становится потеря контроля.');

text('Впрочем, контроль можно вернуть с помощью

	условий, вот так:');

codeBlock(<<<'PHP'
<?
	echo '<table>';
	foreach ($arr as $row) {
		echo '<tr>';
		foreach ($row as $key => $cell) {
			if ($key === 'salary') {
				echo "<td>$cell dollars</td>";
			} else {
				echo "<td>$cell</td>";
			}
		}
		echo '</tr>';
	}
	echo '</table>';
?>
PHP
);

text('Можно упросить наш код следующим образом:');

codeBlock(<<<'PHP'
<?
	echo '<table>';
	foreach ($arr as $row) {
		echo '<tr>';
		foreach ($row as $key => $cell) {
			if ($key === 'salary') {
				$cell .= ' dollars';
			}
			
			echo "<td>$cell</td>";
		}
		echo '</tr>';
	}
	echo '</table>';
?>
PHP
);

task([
    'text' => 'Дан следующий массив:

Сформируйте с его помощью HTML таблицу.',
    'code' => <<< 'PHP'
<?
	$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];
?>
PHP,
    'solution' => $solutionDir . '/solution_284_1.php'
]);

startLesson('Вставка PHP кода в HTML');

text('Пусть у нас есть некоторый HTML код:');

codeBlock(<<<'PHP'
<p>text</p>
PHP
);

text('Мы можем внутри этого кода делать вставки

	PHP кода:');

codeBlock(<<<'PHP'
<p><? 'любой код' ?></p>
PHP
);

text('Давайте, например, выведем какой-нибудь

	текст:');

codeBlock(<<<'PHP'
<p><? echo 'text'; ?></p>
PHP
);

text('А теперь результат работы функции:');

codeBlock(<<<'PHP'
<p><? echo sqrt(4); ?></p>
PHP
);

task([
    'text' => 'Дан абзац:

Выведите в него текущую дату в

		формате <span>год-месяц-день</span>.',
    'code' => <<<'PHP'
<p></p>
PHP,
    'solution' => $solutionDir . '/solution_285_1.php'
]);

startLesson('Короткая команда echo в PHP');

text('Существует специальная короткая форма

	команды <code>echo</code>. Давайте посмотрим

	как она выглядит. Пусть у нас есть

	вывод данных в верстку:');

codeBlock(<<<'PHP'
<p><? echo 'text'; ?></p>
PHP
);

text('Можно сократить вывод, используя специальный

	короткий тег PHP:');

codeBlock(<<<'PHP'
<p><?= 'text' ?></p>
PHP
);

task([
    'text' => 'Упростите следующий код:',
    'code' => <<<'PHP'
<p><? echo date('w'); ?></p>
PHP,
    'solution' => $solutionDir . '/solution_286_1.php'
]);

startLesson('Вставка PHP переменной в HTML код');

text('Пусть теперь у нас есть некоторый абзац,

	выше которого определена переменная PHP:');

codeBlock(<<<'PHP'
<?
	$str = 'text';
?>
<p>text</p>
PHP
);

text('Мы можем выполнить вставку нашей переменной

	вовнутрь абзаца:');

codeBlock(<<<'PHP'
<?
	$str = 'text';
?>
<p><? echo $str; ?></p>
PHP
);

text('А можем упросить вставку переменной, используя

	короткий PHP тег:');

codeBlock(<<<'PHP'
<?
	$str = 'text';
?>
<p><?= $str ?></p>
PHP
);

task([
    'text' => 'Даны три переменные:

Также даны три абзаца:

Выполните вставку текста переменных в соответствующие

		абзацы.',
    'code' => <<< 'PHP'
<?
	$str1 = 'text1';
	$str2 = 'text2';
	$str3 = 'text3';
?>

<p></p>
<p></p>
<p></p>
PHP,
    'solution' => $solutionDir . '/solution_287_1.php'
]);

startLesson('Вставка элементов массива в HTML код');

text('Можно также вставлять элементы массива.

	Давайте посмотрим, как это делается.

	Пусть у нас дан следующий массив:');

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP
);

text('Вставим каждый его элемент в отдельный абзац:');

codeBlock(<<<'PHP'
<p><?= $arr[0] ?></p>
<p><?= $arr[1] ?></p>
<p><?= $arr[2] ?></p>
<p><?= $arr[3] ?></p>
<p><?= $arr[4] ?></p>
PHP
);

task([
    'text' => 'Дан массив:

Также даны три абзаца:

Выполните вставку элементов массива в

		соответствующие абзацы.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>

<p></p>
<p></p>
<p></p>
PHP,
    'solution' => $solutionDir . '/solution_288_1.php'
]);

startLesson('Условия и разрыв PHP кода');

text('Пусть у нас есть некоторая переменная:');

codeBlock(<<<'PHP'
<?
	$test = true;
?>
PHP
);

text('Давайте выведем какой-нибудь кусочек HTML

	кода, если наша переменная равна <code>true</code>:');

codeBlock(<<<'PHP'
<?
	if ($test) {
		echo '<p>text</p>';
	}
?>
PHP
);

text('Можем переделать этот код на следующий, с

	разрывом PHP скобок:');

codeBlock(<<<'PHP'
<? if ($test) { ?>
	<p>text</p>
<? } ?>
PHP
);

text('Такое можно упростить еще больше, если воспользоваться

	альтернативным синтаксисом <code>if</code>:');

codeBlock(<<<'PHP'
<? if ($test): ?>
	<p>text</p>
<? endif; ?>
PHP
);

task([
    'text' => 'Дана переменная:

Дан код:

Выведите приведенный HTML код, если переменная

		<code>show</code> равна <code>true</code>.',
    'code' => <<< 'PHP'
<?
	$show = true;
?>

<div>
	<p>text1</p>
	<p>text2</p>
	<p>text3</p>
</div>
PHP,
    'solution' => $solutionDir . '/solution_289_1.php'
]);

startLesson('Блок else в условиях для разрыва PHP кода');

text('Пусть теперь у нас также есть и блок <code>else</code>:');

codeBlock(<<<'PHP'
<? if ($test) { ?>
	<p>+++</p>
<? } else { ?>
	<p>---</p>
<? } ?>
PHP
);

text('Можем и его переписать через альтернативный

	синтаксис:');

codeBlock(<<<'PHP'
<? if ($test): ?>
	<p>+++</p>
<? else: ?>
	<p>---</p>
<? endif; ?>
PHP
);

task([
    'text' => 'Дана переменная:

Дан код:

Выведите первый див, если переменная <code>show</code>

		равна <code>true</code>, и второй див, если переменная

		равна <code>false</code>.',
    'code' => <<< 'PHP'
<?
	$show = true;
?>

<div>
	<p>text+</p>
	<p>text+</p>
	<p>text+</p>
</div>
<div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
PHP,
    'solution' => $solutionDir . '/solution_290_1.php'
]);

startLesson('Блок elseif в условиях для разрыва PHP кода');

text('Можно также сделать несколько условий с помощью

	<code>elseif</code>:');

codeBlock(<<<'PHP'
<? if ($test === 1) { ?>
	<p>1</p>
<? } elseif ($test === 2) { ?>
	<p>2</p>
<? } else { ?>
	<p>?</p>
<? } ?>
PHP
);

text('Перепишем через альтернативный синтаксис:');

codeBlock(<<<'PHP'
<? if ($test === 1): ?>
	<p>1</p>
<? elseif ($test === 2): ?>
	<p>2</p>
<? else: ?>
	<p>?</p>
<? endif; ?>
PHP
);

task([
    'text' => 'Даны дивы:

Сделайте условие, которое будет показывать

		один из дивов.',
    'code' => <<<'PHP'
<div>
	<p>text1</p>
	<p>text1</p>
	<p>text1</p>
</div>
<div>
	<p>text2</p>
	<p>text2</p>
	<p>text2</p>
</div>
<div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
PHP,
    'solution' => $solutionDir . '/solution_291_1.php'
]);

startLesson('Циклы и разрыв PHP кода');

text('Давайте сформируем в цикле несколько абзацев:');

codeBlock(<<<'PHP'
<?
	for ($i = 1; $i <= 9; $i++) {
		echo '<p>' . $i . '</p>';
	}
?>
PHP
);

text('Можно переписать код с разрывом PHP:');

codeBlock(<<<'PHP'
<? for ($i = 1; $i <= 9; $i++) { ?>
	<p><?= $i ?></p>
<? } ?>
PHP
);

text('Для простоты можно воспользоваться альтернативным

	синтаксисом:');

codeBlock(<<<'PHP'
<? for ($i = 1; $i <= 9; $i++): ?>
	<p><?= $i ?></p>
<? endfor; ?>
PHP
);

task([
    'text' => 'Сформируйте с помощью цикла следующий HTML код:',
    'code' => <<<'PHP'
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul>
PHP,
    'solution' => $solutionDir . '/solution_292_1.php'
]);

startLesson('Циклы и вставка элементов массива в разрыв PHP кода');

text('Пусть у нас дан массив:');

codeBlock(<<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP
);

text('Давайте выведем каждый элемент этого массива

	в своем абзаце:');

codeBlock(<<<'PHP'
<?
	foreach ($arr as $elem) {
		echo '<p>' . $elem . '</p>';
	}
?>
PHP
);

text('Можно переписать код с разрывом PHP:');

codeBlock(<<<'PHP'
<? foreach ($arr as $elem) { ?>
	<p><?= $elem ?></p>
<? } ?>
PHP
);

text('Для простоты можно воспользоваться альтернативным

	синтаксисом:');

codeBlock(<<<'PHP'
<? foreach ($arr as $elem): ?>
	<p><?= $elem ?></p>
<? endforeach; ?>
PHP
);

task([
    'text' => 'Дан массив:

С помощью этого массива и цикла сформируйте

		следующий HTML код:',
    'code' => <<< 'PHP'
<?
	$arr = ['user1', 'user2', 'user3'];
?>

<div>
	<h2>user1</h2>
	<p>text</p>
</div>
<div>
	<h2>user2</h2>
	<p>text</p>
</div>
<div>
	<h2>user3</h2>
	<p>text</p>
</div>
PHP,
    'solution' => $solutionDir . '/solution_293_1.php'
]);

task([
    'text' => 'Дан массив:

С помощью этого массива и цикла сформируйте

		следующий HTML код:',
    'code' => <<< 'PHP'
<?
	$arr = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
?>

<div>
	<p>name: user1</p>
	<p>age: 30</p>
</div>
<div>
	<p>name: user2</p>
	<p>age: 31</p>
</div>
<div>
	<p>name: user3</p>
	<p>age: 32</p>
</div>
PHP,
    'solution' => $solutionDir . '/solution_293_2.php'
]);

endLesson();
