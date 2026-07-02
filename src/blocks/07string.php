<?

$solutionDir = 'solutions/07string';

startLesson('Длина строки в PHP');

task([
    'text' => 'Дана строка:

Найдите количество символов в этой строке.',
    'code' => <<< 'PHP'
<?
	$str = 'abcde';
?>
PHP,
    'solution' => $solutionDir . '/solution_148_1.php'
]);

task([
    'text' => 'Дана строка:

Найдите количество символов в этой строке.',
    'code' => <<< 'PHP'
<?
	$str = 'привет';
?>
PHP,
    'solution' => $solutionDir . '/solution_148_2.php'
]);

task([
    'text' => 'Дана переменная <code>$password</code>, в которой

		хранится пароль пользователя. Если количество

		символов пароля больше <code>5</code>-ти и меньше

		<code>10</code>-ти, то выведите пользователю сообщение

		о том, что пароль подходит, иначе сообщение

		о том, что нужно придумать другой пароль.',
    'solution' => $solutionDir . '/solution_148_3.php'
]);

startLesson('Регистр символов в PHP');

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'php';
?>

'PHP'
PHP,
    'solution' => $solutionDir . '/solution_149_1.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'PHP';
?>

'php'
PHP,
    'solution' => $solutionDir . '/solution_149_2.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'london';
?>

'London'
PHP,
    'solution' => $solutionDir . '/solution_149_3.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'London';
?>

'london'
PHP,
    'solution' => $solutionDir . '/solution_149_4.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'london is the capital of great britain';
?>

'London Is The Capital Of Great Britain'
PHP,
    'solution' => $solutionDir . '/solution_149_5.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'LONDON';
?>

'London'
PHP,
    'solution' => $solutionDir . '/solution_149_6.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'привет';
?>

'ПРИВЕТ'
PHP,
    'solution' => $solutionDir . '/solution_149_7.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ПРИВЕТ';
?>

'привет'
PHP,
    'solution' => $solutionDir . '/solution_149_8.php'
]);

startLesson('Вырезание строк в в PHP');

task([
    'text' => 'Дана строка:

Вырежьте из нашей строки и выведите на экран:',
    'code' => <<< 'PHP'
<?
	$str = 'html css php';
?>

'html'
'css'
'php'
PHP,
    'solution' => $solutionDir . '/solution_150_1.php'
]);

task([
    'text' => 'Дана строка:

Выведите последние <code>3</code> символа:',
    'code' => <<< 'PHP'
<?
	$str = 'abcdefgh';
?>

'fgh'
PHP,
    'solution' => $solutionDir . '/solution_150_2.php'
]);

task([
    'text' => 'Дана строка:

Проверьте, что она начинается на <code>\'http://\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'http://example.com';
?>
PHP,
    'solution' => $solutionDir . '/solution_150_3.php'
]);

task([
    'text' => 'Дана строка:

Проверьте, что она начинается на <code>\'http://\'</code> или <code>\'https://\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'https://example.com';
?>
PHP,
    'solution' => $solutionDir . '/solution_150_4.php'
]);

task([
    'text' => 'Дана строка:

Проверьте, что она заканчивается на <code>\'.png\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'image.png';
?>
PHP,
    'solution' => $solutionDir . '/solution_150_5.php'
]);

task([
    'text' => 'Дана строка:

Проверьте, что она заканчивается на <code>\'.png\'</code> или <code>\'.jpg\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'photo.jpg';
?>
PHP,
    'solution' => $solutionDir . '/solution_150_6.php'
]);

task([
    'text' => 'Дана строка:

Если символов больше <code>5</code>, выведите первые <code>5</code> с троеточием, иначе всю строку:',
    'code' => <<< 'PHP'
<?
	$str = 'This is a long string';
?>

'This ...'
PHP,
    'solution' => $solutionDir . '/solution_150_7.php'
]);

task([
    'text' => 'Дана строка:

Вырежьте последнее слово:',
    'code' => <<< 'PHP'
<?
	$str = 'многобайтовые строки требуют особого подхода';
?>

'подхода'
PHP,
    'solution' => $solutionDir . '/solution_150_8.php'
]);

task([
    'text' => 'Дана строка:

Вырежьте и выведите:',
    'code' => <<< 'PHP'
<?
	$str = 'пример работы с кириллическими символами';
?>

'работы'
'кириллическими'
PHP,
    'solution' => $solutionDir . '/solution_150_9.php'
]);

startLesson('Проверка строк в PHP');

task([
    'text' => 'Дана строка:

Проверьте заканчивается ли строка на <code>\'.pdf\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'document.pdf';
?>
PHP,
    'solution' => $solutionDir . '/solution_151_1.php'
]);

task([
    'text' => 'Дана строка:

Проверьте начинается ли строка с <code>\'https://\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'https://example.com';
?>
PHP,
    'solution' => $solutionDir . '/solution_151_2.php'
]);

task([
    'text' => 'Дана строка:

Проверьте содержит ли строка подстроку <code>\'fox\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'The quick brown fox';
?>
PHP,
    'solution' => $solutionDir . '/solution_151_3.php'
]);

task([
    'text' => 'Дана строка:

Проверьте заканчивается ли строка на <code>\'.png\'</code> или <code>\'.jpg\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'image.png';
?>
PHP,
    'solution' => $solutionDir . '/solution_151_4.php'
]);

task([
    'text' => 'Дана строка:

Проверьте содержит ли строка символ <code>\'@\'</code> и заканчивается на <code>\'.com\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'admin@example.com';
?>
PHP,
    'solution' => $solutionDir . '/solution_151_5.php'
]);

startLesson('Поиск по строкам в PHP');

task([
    'text' => 'Дана строка:

Определите позицию первой буквы <code>\'b\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abc abc abc';
?>
PHP,
    'solution' => $solutionDir . '/solution_152_1.php'
]);

task([
    'text' => 'Дана строка:

Определите позицию последней буквы <code>\'b\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abc abc abc';
?>
PHP,
    'solution' => $solutionDir . '/solution_152_2.php'
]);

task([
    'text' => 'Дана строка:

Определите позицию первой найденной буквы <code>\'b\'</code>,

		если начать поиск не с начала строки, а с

		позиции <code>3</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abc abc abc';
?>
PHP,
    'solution' => $solutionDir . '/solution_152_3.php'
]);

task([
    'text' => 'Дана строка:

Определите позицию второго пробела.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa aaa aaa aaa aaa';
?>
PHP,
    'solution' => $solutionDir . '/solution_152_4.php'
]);

task([
    'text' => 'Дана строка:

Проверьте, что в строке есть две точки подряд.',
    'code' => <<< 'PHP'
<?
	$str = 'example..com';
?>
PHP,
    'solution' => $solutionDir . '/solution_152_5.php'
]);

task([
    'text' => 'Дана строка:

Проверьте, что строка начинается на <code>\'http://\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'http://example.com';
?>
PHP,
    'solution' => $solutionDir . '/solution_152_6.php'
]);

startLesson('Разбиение строк в PHP');

task([
    'text' => 'Дана строка:

Запишите каждое слово этой строки

		в отдельный элемент массива.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa bbb ccc';
?>
PHP,
    'solution' => $solutionDir . '/solution_153_1.php'
]);

task([
    'text' => 'Дан массив:

Слейте элементы этого массива в строку

		так, чтобы они были разделены запятыми.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
    'solution' => $solutionDir . '/solution_153_2.php'
]);

task([
    'text' => 'Дана строка:

Разбейте ее на следующий массив:',
    'code' => <<< 'PHP'
<?
	$str = '1234567890';
?>

['12', '34', '56', '78', '90']
PHP,
    'solution' => $solutionDir . '/solution_153_3.php'
]);

task([
    'text' => 'Дана строка:

Разбейте ее на следующий массив:',
    'code' => <<< 'PHP'
<?
	$str = '1234567890';
?>

['1', '2', '3', '4', '5', '6', '7', '8', '9', '0']
PHP,
    'solution' => $solutionDir . '/solution_153_4.php'
]);

task([
    'text' => 'Дана строка:

Сделайте из нее следующую строку

		не используя цикл:',
    'code' => <<< 'PHP'
<?
	$str = '1234567890';
?>

'12-34-56-78-90'
PHP,
    'solution' => $solutionDir . '/solution_153_5.php'
]);

task([
    'text' => 'В переменной <code>$date</code> лежит дата в формате

		<span>год-месяц-день</span>. Преобразуйте эту дату

		в формат <span>день.месяц.год</span>.',
    'solution' => $solutionDir . '/solution_153_6.php'
]);

task([
    'text' => 'Дана строка:

Разделите строку по символу <code>\'※\'</code> с помощью <code>mb_split</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'word※word※word※word';
?>
PHP,
    'solution' => $solutionDir . '/solution_153_7.php'
]);

task([
    'text' => 'Дана строка:

Разбейте строку на массив из символов с помощью <code>mb_str_split</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'программирование';
?>
PHP,
    'solution' => $solutionDir . '/solution_153_8.php'
]);

task([
    'text' => 'Дана строка:

Разбейте строку на массив из символов с помощью <code>mb_str_split</code>, 

		указав длину фрагмента <code>2</code> символа.',
    'code' => <<< 'PHP'
<?
	$str = 'кириллица';
?>
PHP,
    'solution' => $solutionDir . '/solution_153_9.php'
]);

startLesson('Очистка концов строки в PHP');

task([
    'text' => 'Дана строка. Очистите ее от концевых пробелов.',
    'solution' => $solutionDir . '/solution_154_1.php'
]);

task([
    'text' => 'Дана строка <code>\'/php/\'</code>. Сделайте из нее

		строку <code>\'php\'</code>, удалив концевые слеши.',
    'solution' => $solutionDir . '/solution_154_2.php'
]);

task([
    'text' => 'Дана строка <code>\'text text text.\'</code>.

		В конце этой строки может быть точка, а может

		и не быть. Сделайте так, чтобы в конце этой

		строки гарантировано стояла точка. To есть:

		если этой точки нет - ее надо добавить, а

		если есть - ничего не делать. Задачу решите

		через <code>rtrim</code> без всяких ифов.',
    'solution' => $solutionDir . '/solution_154_3.php'
]);

startLesson('Вывод строки со вставкой в PHP');

task([
    'text' => 'Дана переменная:

Выведите цену в следующем формате:',
    'code' => <<< 'PHP'
<?
	$price = 19.99;
?>

'price: 19.99$'
PHP,
    'solution' => $solutionDir . '/solution_155_1.php'
]);

task([
    'text' => 'Даны переменные:

Выведите строку в следующем формате:',
    'code' => <<< 'PHP'
<?
	$name = "John";
	$age = 25;
?>

'Name: John, Age: 25 years'
PHP,
    'solution' => $solutionDir . '/solution_155_2.php'
]);

task([
    'text' => 'Даны переменные:

Выведите следующую строку:',
    'code' => <<< 'PHP'
<?
	$name = 'John';
	$score = 95;
?>

'student John scored 95 points'
PHP,
    'solution' => $solutionDir . '/solution_155_3.php'
]);

task([
    'text' => 'Даны переменные:

Выведите информацию о товаре в формате:',
    'code' => <<< 'PHP'
<?
	$product = "Laptop";
	$price = 1299.99;
	$discount = 15;
?>

'Product: Laptop | Price: $1299.99 | Discount: 15%'
PHP,
    'solution' => $solutionDir . '/solution_155_4.php'
]);

task([
    'text' => 'Даны переменные:

Выведите результат в формате:',
    'code' => <<< 'PHP'
<?
	$x = 10;
	$y = 20;
	$z = 30;
?>

'Sum: 10 + 20 + 30 = 60'
PHP,
    'solution' => $solutionDir . '/solution_155_5.php'
]);

task([
    'text' => 'Даны переменные:

Выведите дату в формате:',
    'code' => <<< 'PHP'
<?
	$day = 15;
	$month = "March";
	$year = 2023;
?>

'Date: March 15, 2023'
PHP,
    'solution' => $solutionDir . '/solution_155_6.php'
]);

startLesson('Форматирование числа в PHP');

task([
    'text' => 'Дана строка:

Сделайте из нее строку:',
    'code' => <<< 'PHP'
<?
	$str = '12345678';
?>

'12 345 678'
PHP,
    'solution' => $solutionDir . '/solution_156_1.php'
]);

task([
    'text' => 'Дано число:

Отформатируйте число, чтобы оно имело разделители тысяч (пробел) и два знака в дробной части:',
    'code' => <<< 'PHP'
<?
	$number = 9876543.21;
?>

'9 876 543.21'
PHP,
    'solution' => $solutionDir . '/solution_156_2.php'
]);

task([
    'text' => 'Дано число:

Отформатируйте число с разделителями тысяч (точка), двумя знаками в дробной части и символом валюты:',
    'code' => <<< 'PHP'
<?
	$price = 1234.5678;
?>

'€1.234,57'
PHP,
    'solution' => $solutionDir . '/solution_156_3.php'
]);

startLesson('Переворот строки в PHP');

task([
    'text' => 'Дана строка:

Сделайте из нашей строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = '12345';
?>

'54321'
PHP,
    'solution' => $solutionDir . '/solution_157_1.php'
]);

task([
    'text' => 'Проверьте, является ли слово <i>палиндромом</i>

		(одинаково читается во всех направлениях,

		примеры таких слов: madam, otto, kayak, nun,

		level).',
    'solution' => $solutionDir . '/solution_157_2.php'
]);

startLesson('Заполнение строки в PHP');

task([
    'text' => 'С помощью одного цикла и функции <code>str_repeat</code>

		выведите на экран следующую пирамидку:',
    'solution' => $solutionDir . '/solution_158_1.php'
]);

task([
    'text' => 'С помощью одного цикла и функции <code>str_repeat</code>

		выведите на экран следующую пирамидку:',
    'solution' => $solutionDir . '/solution_158_2.php'
]);

startLesson('Функции для HTML тегов в PHP');

task([
    'text' => 'Дана строка:

Удалите теги из этой строки.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa <b>bbb</b> ccc';
?>
PHP,
    'solution' => $solutionDir . '/solution_159_1.php'
]);

task([
    'text' => 'Дана строка:

<p>

		Удалите все теги из этой строки,

		кроме тегов <code>b</code> и <code>i</code>.

	</p>',
    'code' => <<< 'PHP'
<?
	$str = '
		<p>aaa</p>
		<b>bbb</b>
		<s>ccc</s>
		<i>ddd</i>
	';
?>
PHP,
    'solution' => $solutionDir . '/solution_159_2.php'
]);

task([
    'text' => 'Дана строка:

Выведите ее на экран так,

		чтобы теги не преобразовались

		в команды браузера.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa <b>bbb</b> <i>ccc</i>';
?>
PHP,
    'solution' => $solutionDir . '/solution_159_3.php'
]);

startLesson('Коды символов в PHP');

task([
    'text' => 'Узнайте код символов <code>\'a\'</code>, <code>\'b\'</code>,

		<code>\'c\'</code>, пробела.',
    'solution' => $solutionDir . '/solution_160_1.php'
]);

task([
    'text' => 'Изучите таблицу

		ASCII Определите границы, в которых располагаются

		буквы английского алфавита.',
    'solution' => $solutionDir . '/solution_160_2.php'
]);

task([
    'text' => 'Выведите на экран символ с кодом <code>33</code>.',
    'solution' => $solutionDir . '/solution_160_3.php'
]);

task([
    'text' => 'Запишите в переменную <code>$str</code> случайный

		символ - большую букву латинского алфавита.

		Для этого с помощью таблицы ASCII определите

		какие целые числа соответствуют большим буквам

		латинского алфавита.',
    'solution' => $solutionDir . '/solution_160_4.php'
]);

task([
    'text' => 'Запишите в переменную <code>$str</code> случайную

		строку <code>$len</code> длиной, состоящую из маленьких

		букв латинского алфавита.',
    'solution' => $solutionDir . '/solution_160_5.php'
]);

task([
    'text' => 'Дана буква английского алфавита. Узнайте,

		она маленькая или большая.',
    'solution' => $solutionDir . '/solution_160_6.php'
]);

startLesson('Подсчет подстрок в PHP');

task([
    'text' => 'Дана строка:

Подсчитайте количество слов в этой строке.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa bbb ccc';
?>
PHP,
    'solution' => $solutionDir . '/solution_161_1.php'
]);

task([
    'text' => 'Дана строка:

Подсчитайте сколько раз подстрока <code>\'hello\'</code> встречается в строке.',
    'code' => <<< 'PHP'
<?
	$str = 'hello hello world hello';
?>
PHP,
    'solution' => $solutionDir . '/solution_161_2.php'
]);

task([
    'text' => 'Дана строка:

Подсчитайте сколько раз подстрока <code>\'※\'</code> встречается в строке.',
    'code' => <<< 'PHP'
<?
	$str = '※※※';
?>
PHP,
    'solution' => $solutionDir . '/solution_161_3.php'
]);

task([
    'text' => 'Дана строка:

Подсчитайте сколько раз каждый символ встречается в строке.',
    'code' => <<< 'PHP'
<?
	$str = 'abracadabra';
?>
PHP,
    'solution' => $solutionDir . '/solution_161_4.php'
]);

task([
    'text' => 'Дана строка:

Подсчитайте количество слов длиннее трех символов.',
    'code' => <<< 'PHP'
<?
	$str = 'The quick brown fox jumps over the lazy dog';
?>
PHP,
    'solution' => $solutionDir . '/solution_161_5.php'
]);

startLesson('Части строк в PHP');

task([
    'text' => 'Дана строка:

С помощью функции <code>strchr</code>

		выведите на экран строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ab-cd-ef';
?>

'-cd-ef'
PHP,
    'solution' => $solutionDir . '/solution_162_1.php'
]);

task([
    'text' => 'Дана строка:

С помощью функции <code>strrchr</code>

		выведите на экран строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ab-cd-ef';
?>

'-ef'
PHP,
    'solution' => $solutionDir . '/solution_162_2.php'
]);

task([
    'text' => 'Дана строка:

С помощью функции <code>strstr</code>

		выведите на экран строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ab--cd--ef';
?>

'--cd--ef'
PHP,
    'solution' => $solutionDir . '/solution_162_3.php'
]);

task([
    'text' => 'Дана строка:

С помощью функции <code>mb_strrchr</code>

		выведите на экран часть строки после последнего дефиса:',
    'code' => <<< 'PHP'
<?
	$str = 'программирование-на-php';
?>

'-php'
PHP,
    'solution' => $solutionDir . '/solution_162_4.php'
]);

task([
    'text' => 'Дана строка:

С помощью функции <code>mb_strrichr</code> (без учета регистра)

		найдите подстроку начиная с первого вхождения <code>\'мир\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'Привет-Мир-Пока';
?>

'-Мир-Пока'
PHP,
    'solution' => $solutionDir . '/solution_162_5.php'
]);

task([
    'text' => 'Дана строка:

С помощью функции <code>mb_strstr</code>

		выведите часть строки начиная с первого вхождения <code>\'работы\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'Функции-для-работы-со-строками';
?>

'-работы-со-строками'
PHP,
    'solution' => $solutionDir . '/solution_162_6.php'
]);

task([
    'text' => 'Дана строка:

С помощью <code>mb_stristr</code> найдите подстроку начиная с <code>\'РРР\'</code> (без учета регистра).',
    'code' => <<< 'PHP'
<?
	$str = 'ппп ррр ссс ттт ууу';
?>

'ррр ссс ттт ууу'
PHP,
    'solution' => $solutionDir . '/solution_162_7.php'
]);

task([
    'text' => 'Дана строка:

С помощью функции <code>mb_strrchr</code>

		выведите часть строки после последнего дефиса:',
    'code' => <<< 'PHP'
<?
	$str = 'Тестирование-многобайтовых-функций';
?>

'-функций'
PHP,
    'solution' => $solutionDir . '/solution_162_8.php'
]);

task([
    'text' => 'Дана строка:

С помощью функции <code>mb_strrichr</code> (без учета регистра)

		найдите подстроку начиная с первого вхождения <code>\'тексте\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'Пример-Поиска-Подстроки-В-Тексте';
?>

'-В-Тексте'
PHP,
    'solution' => $solutionDir . '/solution_162_9.php'
]);

endLesson();
