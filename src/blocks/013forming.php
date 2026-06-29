<?

startLesson('Вставка переменных в строки в PHP');
// https://code.mu/ru/php/book/prime/forming/variables-string-insertion/
// ⊗ppPmSFVSI

codeBlock(<<< 'PHP'
<?
	$str = 'aaa';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'aaa';
	echo 'xxx ' . $str . ' yyy';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'aaa';
	echo "xxx $str yyy";
?>
PHP);

task([
    'num' => 1,
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$name = 'user';
	echo 'hello, ' . $name . '!';
?>
PHP,
]);

startLesson('Вставка элементов массива в PHP');
// https://code.mu/ru/php/book/prime/forming/array-elements-insertion/
// ⊗ppPmSFAEI

codeBlock(<<< 'PHP'
<?
	$arr = ['a', 'b', 'c'];
	echo "xxx $arr[0] yyy";
?>
PHP);

task([
    'num' => 1,
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$arr = ['1', '2', '3'];
	echo 'aaa ' . $arr[0] . ' bbb ' . $arr[1];
?>
PHP,
]);

startLesson('Вставка элементов ассоциативных массивов в PHP');
// https://code.mu/ru/php/book/prime/forming/associative-array-elements-insertion/
// ⊗ppPmSFAArEI

codeBlock(<<< 'PHP'
<?
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo "xxx $arr['a'] yyy"; // не работает
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo "xxx {$arr['a']} yyy";
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = ['a'=>1, 'b'=2, 'c'=3];
	echo "xxx $arr[a] yyy";
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$arr = ['a', 'b', 'c'];
	$elem = $arr['a'];
	
	echo "xxx $elem yyy";
?>
PHP);

task([
    'num' => 1,
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	echo 'text ' . $arr['a'] . ' text ' . $arr['b'] . ' text';
?>
PHP,
]);

startLesson('Цикл и вставка переменных в PHP');
// https://code.mu/ru/php/book/prime/forming/loop-variables-insertion/
// ⊗ppPmSFLVI

codeBlock(<<< 'PHP'
<?
	for ($i = 1; $i <= 5; $i++) {
		echo "xxx $i yyy";
	}
?>
PHP);

task([
    'num' => 1,
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
]);

startLesson('Вставка элементов массивов в цикле в PHP');
// https://code.mu/ru/php/book/prime/forming/loop-arrays-insertion/
// ⊗ppPmSFLArI

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo "xxx $elem yyy";
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];

	foreach ($arr as $key => $elem) {
		echo 'pair: ' . $elem . ' ' . $key . '<br>';
	}
?>
PHP,
]);

startLesson('Вставка элементов многомерных массивов в цикле в PHP');
// https://code.mu/ru/php/book/prime/forming/loop-multidimensional-arrays-insertion/
// ⊗ppPmSFLMArI

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($users as $user) {
		echo $user['name'] . ': ' . $user['age'] . '<br>';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($users as $user) {
		echo "{$user['name']}: {$user['age']}<br>";
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($users as $user) {
		echo "$user[name]: $user[age]<br>";
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан следующий массив: Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.',
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
]);

startLesson('Генерация тегов в PHP');
// https://code.mu/ru/php/book/prime/forming/tags/
// ⊗ppPmSFTg

codeBlock(<<< 'PHP'
<?
	$text = 'aaa';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$text = 'aaa';
	echo '<p>' . $text . '</p>';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	$text = 'aaa';
	echo "<p>$text</p>";
?>
PHP);

task([
    'num' => 1,
    'text' => 'Даны три переменные: Выведите каждую из этих переменных в отдельном абзаце.',
    'code' => <<< 'PHP'
<?
	$text1 = 'aaa';
	$text2 = 'bbb';
	$text3 = 'ccc';
?>
PHP,
]);

startLesson('Генерация тегов с атрибутами в PHP');
// https://code.mu/ru/php/book/prime/forming/tags-attributes/
// ⊗ppPmSFTA

codeBlock(<<< 'PHP'
<?
	$text = 'link';
	$href = 'index.html';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo '<a href="' . $href . '">' . $text . '</a>';
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo "<a href="$href">$text</a>"; // не будет работать
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo "<a href='$href'>$text</a>";
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo "<a href=\"$href\">$text</a>";
?>
PHP);

task([
    'num' => 1,
    'text' => 'Даны три переменные: Сформируйте с помощью этих переменных три тега <code>img</code>.',
    'code' => <<< 'PHP'
<?
	$src1 = '1.png';
	$src2 = '2.png';
	$src3 = '3.png';
?>
PHP,
]);

startLesson('Цикл и генерация тегов в PHP');
// https://code.mu/ru/php/book/prime/forming/loop-tags/
// ⊗ppPmSFLTG

codeBlock(<<< 'PHP'
<?
	for ($i = 1; $i <= 5; $i++) {
		echo '<p>' . $i . '</p>';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	for ($i = 1; $i <= 5; $i++) {
		echo "<p>$i</p>";
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью цикла сформируйте следующий HTML код:',
    'code' => <<< 'PHP'
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul>
PHP,
]);

startLesson('Цикл и генерация тегов из массивов в PHP');
// https://code.mu/ru/php/book/prime/forming/loop-tags-array/
// ⊗ppPmSFLTAr

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo '<p>' . $elem . '</p>';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		echo "<p>$elem</p>";
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: Сформируйте с его помощью следующий HTML код:',
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
]);

startLesson('Цикл и генерация тегов и атрибутов в PHP');
// https://code.mu/ru/php/book/prime/forming/loop-tags-attributes/
// ⊗ppPmSFLTAt

codeBlock(<<< 'PHP'
<?
	$arr = [
		['href'=>'1.html', 'text'=>'link1'],
		['href'=>'2.html', 'text'=>'link2'],
		['href'=>'3.html', 'text'=>'link3'],
	];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		echo '<a href="' . $elem['href'] . '">' . $elem['text'] . '</a><br>';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		echo "<a href=\"{$elem['href']}\">{$elem['text']}</a><br>";
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан следующий массив: Сформируйте с его помощью следующий HTML код:',
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
]);

task([
    'num' => 2,
    'text' => 'Дан следующий массив: Сформируйте с его помощью следующий HTML код:',
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
]);

startLesson('Цикл и генерация HTML таблиц на PHP');
// https://code.mu/ru/php/book/prime/forming/loop-table/
// ⊗ppPmSFLT

codeBlock(<<< 'PHP'
<?
	$arr = [
		['name' => 'user1', 'age' => 30, 'salary' => 500],
		['name' => 'user2', 'age' => 31, 'salary' => 600],
		['name' => 'user3', 'age' => 32, 'salary' => 700],
	];
?>
PHP);

codeBlock(<<< 'PHP'
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
PHP);

startLesson('Генерация HTML таблицы с помощью одного цикла в PHP');
// https://code.mu/ru/php/book/prime/forming/single-loop-table/
// ⊗ppPmSFSLT

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
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
PHP);

startLesson('Генерация HTML таблицы с помощью двух вложенных циклов в PHP');
// https://code.mu/ru/php/book/prime/forming/nested-loops-table/
// ⊗ppPmSFNLT

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'Дан следующий массив: Сформируйте с его помощью HTML таблицу.',
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
]);

startLesson('Вставка PHP кода в HTML');
// https://code.mu/ru/php/book/prime/forming/php-output/
// ⊗ppPmSFPO

codeBlock(<<< 'PHP'
<p>text</p>
PHP);

codeBlock(<<< 'PHP'
<p><? 'любой код' ?></p>
PHP);

codeBlock(<<< 'PHP'
<p><? echo 'text'; ?></p>
PHP);

codeBlock(<<< 'PHP'
<p><? echo sqrt(4); ?></p>
PHP);

task([
    'num' => 1,
    'text' => 'Дан абзац: Выведите в него текущую дату в формате <span>год-месяц-день</span>.',
    'code' => <<< 'PHP'
<p></p>
PHP,
]);

startLesson('Короткая команда echo в PHP');
// https://code.mu/ru/php/book/prime/forming/short-echo-tag/
// ⊗ppPmSFShET

codeBlock(<<< 'PHP'
<p><? echo 'text'; ?></p>
PHP);

codeBlock(<<< 'PHP'
<p><?= 'text' ?></p>
PHP);

task([
    'num' => 1,
    'text' => 'Упростите следующий код:',
    'code' => <<< 'PHP'
<p><? echo date('w'); ?></p>
PHP,
]);

startLesson('Вставка PHP переменной в HTML код');
// https://code.mu/ru/php/book/prime/forming/variable-output/
// ⊗ppPmSFVO

codeBlock(<<< 'PHP'
<?
	$str = 'text';
?>
<p>text</p>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'text';
?>
<p><? echo $str; ?></p>
PHP);

codeBlock(<<< 'PHP'
<?
	$str = 'text';
?>
<p><?= $str ?></p>
PHP);

task([
    'num' => 1,
    'text' => 'Даны три переменные: Также даны три абзаца: Выполните вставку текста переменных в соответствующие абзацы.',
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
]);

startLesson('Вставка элементов массива в HTML код');
// https://code.mu/ru/php/book/prime/forming/array-element-output/
// ⊗ppPmSFAEO

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP);

codeBlock(<<< 'PHP'
<p><?= $arr[0] ?></p>
<p><?= $arr[1] ?></p>
<p><?= $arr[2] ?></p>
<p><?= $arr[3] ?></p>
<p><?= $arr[4] ?></p>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: Также даны три абзаца: Выполните вставку элементов массива в соответствующие абзацы.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>

<p></p>
<p></p>
<p></p>
PHP,
]);

startLesson('Условия и разрыв PHP кода');
// https://code.mu/ru/php/book/prime/forming/if-breaking/
// ⊗ppPmSFIB

codeBlock(<<< 'PHP'
<?
	$test = true;
?>
PHP);

codeBlock(<<< 'PHP'
<?
	if ($test) {
		echo '<p>text</p>';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<? if ($test) { ?>
	<p>text</p>
<? } ?>
PHP);

codeBlock(<<< 'PHP'
<? if ($test): ?>
	<p>text</p>
<? endif; ?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана переменная: Дан код: Выведите приведенный HTML код, если переменная <code>show</code> равна <code>true</code>.',
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
]);

startLesson('Блок else в условиях для разрыва PHP кода');
// https://code.mu/ru/php/book/prime/forming/else-breaking/
// ⊗ppPmSFEB

codeBlock(<<< 'PHP'
<? if ($test) { ?>
	<p>+++</p>
<? } else { ?>
	<p>---</p>
<? } ?>
PHP);

codeBlock(<<< 'PHP'
<? if ($test): ?>
	<p>+++</p>
<? else: ?>
	<p>---</p>
<? endif; ?>
PHP);

task([
    'num' => 1,
    'text' => 'Дана переменная: Дан код: Выведите первый див, если переменная <code>show</code> равна <code>true</code>, и второй див, если переменная равна <code>false</code>.',
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
]);

startLesson('Блок elseif в условиях для разрыва PHP кода');
// https://code.mu/ru/php/book/prime/forming/elseif-breaking/
// ⊗ppPmSFEIB

codeBlock(<<< 'PHP'
<? if ($test === 1) { ?>
	<p>1</p>
<? } elseif ($test === 2) { ?>
	<p>2</p>
<? } else { ?>
	<p>?</p>
<? } ?>
PHP);

codeBlock(<<< 'PHP'
<? if ($test === 1): ?>
	<p>1</p>
<? elseif ($test === 2): ?>
	<p>2</p>
<? else: ?>
	<p>?</p>
<? endif; ?>
PHP);

task([
    'num' => 1,
    'text' => 'Даны дивы: Сделайте условие, которое будет показывать один из дивов.',
    'code' => <<< 'PHP'
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
]);

startLesson('Циклы и разрыв PHP кода');
// https://code.mu/ru/php/book/prime/forming/loops-breaking/
// ⊗ppPmSFLB

codeBlock(<<< 'PHP'
<?
	for ($i = 1; $i <= 9; $i++) {
		echo '<p>' . $i . '</p>';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<? for ($i = 1; $i <= 9; $i++) { ?>
	<p><?= $i ?></p>
<? } ?>
PHP);

codeBlock(<<< 'PHP'
<? for ($i = 1; $i <= 9; $i++): ?>
	<p><?= $i ?></p>
<? endfor; ?>
PHP);

task([
    'num' => 1,
    'text' => 'Сформируйте с помощью цикла следующий HTML код:',
    'code' => <<< 'PHP'
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul>
PHP,
]);

startLesson('Циклы и вставка элементов массива в разрыв PHP кода');
// https://code.mu/ru/php/book/prime/forming/loops-array-breaking/
// ⊗ppPmSFLAB

codeBlock(<<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	foreach ($arr as $elem) {
		echo '<p>' . $elem . '</p>';
	}
?>
PHP);

codeBlock(<<< 'PHP'
<? foreach ($arr as $elem) { ?>
	<p><?= $elem ?></p>
<? } ?>
PHP);

codeBlock(<<< 'PHP'
<? foreach ($arr as $elem): ?>
	<p><?= $elem ?></p>
<? endforeach; ?>
PHP);

task([
    'num' => 1,
    'text' => 'Дан массив: С помощью этого массива и цикла сформируйте следующий HTML код:',
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
]);

task([
    'num' => 2,
    'text' => 'Дан массив: С помощью этого массива и цикла сформируйте следующий HTML код:',
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
]);
