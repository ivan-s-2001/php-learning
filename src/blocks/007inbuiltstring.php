<?

startLesson('Длина строки в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/length/
// ⊗ppPmSFLn

task([
    'num' => 1,
    'text' => 'Дана строка: Найдите количество символов в этой строке.',
    'code' => <<< 'PHP'
<?
	$str = 'abcde';
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: Найдите количество символов в этой строке.',
    'code' => <<< 'PHP'
<?
	$str = 'привет';
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана переменная <code>$password</code>, в которой хранится пароль пользователя. Если количество символов пароля больше <code>5</code>-ти и меньше <code>10</code>-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.',
]);

startLesson('Регистр символов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/case/
// ⊗ppPmSFCs

task([
    'num' => 1,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'php';
?>

'PHP'
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'PHP';
?>

'php'
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'london';
?>

'London'
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'London';
?>

'london'
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'london is the capital of great britain';
?>

'London Is The Capital Of Great Britain'
PHP,
]);

task([
    'num' => 6,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'LONDON';
?>

'London'
PHP,
]);

task([
    'num' => 7,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'привет';
?>

'ПРИВЕТ'
PHP,
]);

task([
    'num' => 8,
    'text' => 'Дана строка: Сделайте из этой строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ПРИВЕТ';
?>

'привет'
PHP,
]);

startLesson('Вырезание строк в в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/cutting/
// ⊗ppPmSFCt

task([
    'num' => 1,
    'text' => 'Дана строка: Вырежьте из нашей строки и выведите на экран:',
    'code' => <<< 'PHP'
<?
	$str = 'html css php';
?>

'html'
'css'
'php'
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: Выведите последние <code>3</code> символа:',
    'code' => <<< 'PHP'
<?
	$str = 'abcdefgh';
?>

'fgh'
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Проверьте, что она начинается на <code>\'http://\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'http://example.com';
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана строка: Проверьте, что она начинается на <code>\'http://\'</code> или <code>\'https://\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'https://example.com';
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дана строка: Проверьте, что она заканчивается на <code>\'.png\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'image.png';
?>
PHP,
]);

task([
    'num' => 6,
    'text' => 'Дана строка: Проверьте, что она заканчивается на <code>\'.png\'</code> или <code>\'.jpg\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'photo.jpg';
?>
PHP,
]);

task([
    'num' => 7,
    'text' => 'Дана строка: Если символов больше <code>5</code>, выведите первые <code>5</code> с троеточием, иначе всю строку:',
    'code' => <<< 'PHP'
<?
	$str = 'This is a long string';
?>

'This ...'
PHP,
]);

task([
    'num' => 8,
    'text' => 'Дана строка: Вырежьте последнее слово:',
    'code' => <<< 'PHP'
<?
	$str = 'многобайтовые строки требуют особого подхода';
?>

'подхода'
PHP,
]);

task([
    'num' => 9,
    'text' => 'Дана строка: Вырежьте и выведите:',
    'code' => <<< 'PHP'
<?
	$str = 'пример работы с кириллическими символами';
?>

'работы'
'кириллическими'
PHP,
]);

startLesson('Проверка строк в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/checking/
// ⊗ppPmSFCh

task([
    'num' => 1,
    'text' => 'Дана строка: Проверьте заканчивается ли строка на <code>\'.pdf\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'document.pdf';
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: Проверьте начинается ли строка с <code>\'https://\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'https://example.com';
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Проверьте содержит ли строка подстроку <code>\'fox\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'The quick brown fox';
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана строка: Проверьте заканчивается ли строка на <code>\'.png\'</code> или <code>\'.jpg\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'image.png';
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дана строка: Проверьте содержит ли строка символ <code>\'@\'</code> и заканчивается на <code>\'.com\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'admin@example.com';
?>
PHP,
]);

startLesson('Поиск по строкам в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/searching/
// ⊗ppPmSFSch

task([
    'num' => 1,
    'text' => 'Дана строка: Определите позицию первой буквы <code>\'b\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abc abc abc';
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: Определите позицию последней буквы <code>\'b\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abc abc abc';
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Определите позицию первой найденной буквы <code>\'b\'</code>, если начать поиск не с начала строки, а с позиции <code>3</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'abc abc abc';
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана строка: Определите позицию второго пробела.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa aaa aaa aaa aaa';
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дана строка: Проверьте, что в строке есть две точки подряд.',
    'code' => <<< 'PHP'
<?
	$str = 'example..com';
?>
PHP,
]);

task([
    'num' => 6,
    'text' => 'Дана строка: Проверьте, что строка начинается на <code>\'http://\'</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'http://example.com';
?>
PHP,
]);

startLesson('Разбиение строк в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/splitting/
// ⊗ppPmSFSp

task([
    'num' => 1,
    'text' => 'Дана строка: Запишите каждое слово этой строки в отдельный элемент массива.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa bbb ccc';
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Слейте элементы этого массива в строку так, чтобы они были разделены запятыми.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Разбейте ее на следующий массив:',
    'code' => <<< 'PHP'
<?
	$str = '1234567890';
?>

['12', '34', '56', '78', '90']
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана строка: Разбейте ее на следующий массив:',
    'code' => <<< 'PHP'
<?
	$str = '1234567890';
?>

['1', '2', '3', '4', '5', '6', '7', '8', '9', '0']
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дана строка: Сделайте из нее следующую строку не используя цикл:',
    'code' => <<< 'PHP'
<?
	$str = '1234567890';
?>

'12-34-56-78-90'
PHP,
]);

task([
    'num' => 6,
    'text' => 'В переменной <code>$date</code> лежит дата в формате <span>год-месяц-день</span>. Преобразуйте эту дату в формат <span>день.месяц.год</span>.',
]);

task([
    'num' => 7,
    'text' => 'Дана строка: Разделите строку по символу <code>\'※\'</code> с помощью <code>mb_split</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'word※word※word※word';
?>
PHP,
]);

task([
    'num' => 8,
    'text' => 'Дана строка: Разбейте строку на массив из символов с помощью <code>mb_str_split</code>.',
    'code' => <<< 'PHP'
<?
	$str = 'программирование';
?>
PHP,
]);

task([
    'num' => 9,
    'text' => 'Дана строка: Разбейте строку на массив из символов с помощью <code>mb_str_split</code>, указав длину фрагмента <code>2</code> символа.',
    'code' => <<< 'PHP'
<?
	$str = 'кириллица';
?>
PHP,
]);

startLesson('Очистка концов строки в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/trimming/
// ⊗ppPmSFTr

task([
    'num' => 1,
    'text' => 'Дана строка. Очистите ее от концевых пробелов.',
]);

task([
    'num' => 2,
    'text' => 'Дана строка <code>\'/php/\'</code>. Сделайте из нее строку <code>\'php\'</code>, удалив концевые слеши.',
]);

task([
    'num' => 3,
    'text' => 'Дана строка <code>\'text text text.\'</code>. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. To есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через <code>rtrim</code> без всяких ифов.',
]);

startLesson('Вывод строки со вставкой в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/insert-printing/
// ⊗ppPmSFIP

task([
    'num' => 1,
    'text' => 'Дана переменная: Выведите цену в следующем формате:',
    'code' => <<< 'PHP'
<?
	$price = 19.99;
?>

'price: 19.99$'
PHP,
]);

task([
    'num' => 2,
    'text' => 'Даны переменные: Выведите строку в следующем формате:',
    'code' => <<< 'PHP'
<?
	$name = "John";
	$age = 25;
?>

'Name: John, Age: 25 years'
PHP,
]);

task([
    'num' => 3,
    'text' => 'Даны переменные: Выведите следующую строку:',
    'code' => <<< 'PHP'
<?
	$name = 'John';
	$score = 95;
?>

'student John scored 95 points'
PHP,
]);

task([
    'num' => 4,
    'text' => 'Даны переменные: Выведите информацию о товаре в формате:',
    'code' => <<< 'PHP'
<?
	$product = "Laptop";
	$price = 1299.99;
	$discount = 15;
?>

'Product: Laptop | Price: $1299.99 | Discount: 15%'
PHP,
]);

task([
    'num' => 5,
    'text' => 'Даны переменные: Выведите результат в формате:',
    'code' => <<< 'PHP'
<?
	$x = 10;
	$y = 20;
	$z = 30;
?>

'Sum: 10 + 20 + 30 = 60'
PHP,
]);

task([
    'num' => 6,
    'text' => 'Даны переменные: Выведите дату в формате:',
    'code' => <<< 'PHP'
<?
	$day = 15;
	$month = "March";
	$year = 2023;
?>

'Date: March 15, 2023'
PHP,
]);

startLesson('Форматирование числа в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/numbers-formatting/
// ⊗ppPmSFNF

task([
    'num' => 1,
    'text' => 'Дана строка: Сделайте из нее строку:',
    'code' => <<< 'PHP'
<?
	$str = '12345678';
?>

'12 345 678'
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дано число: Отформатируйте число, чтобы оно имело разделители тысяч (пробел) и два знака в дробной части:',
    'code' => <<< 'PHP'
<?
	$number = 9876543.21;
?>

'9 876 543.21'
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дано число: Отформатируйте число с разделителями тысяч (точка), двумя знаками в дробной части и символом валюты:',
    'code' => <<< 'PHP'
<?
	$price = 1234.5678;
?>

'€1.234,57'
PHP,
]);

startLesson('Переворот строки в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/reversing/
// ⊗ppPmSFRv

task([
    'num' => 1,
    'text' => 'Дана строка: Сделайте из нашей строки следующую строку:',
    'code' => <<< 'PHP'
<?
	$str = '12345';
?>

'54321'
PHP,
]);

task([
    'num' => 2,
    'text' => 'Проверьте, является ли слово <i>палиндромом</i> (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).',
]);

startLesson('Заполнение строки в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/filling/
// ⊗ppPmSFFl

task([
    'num' => 1,
    'text' => 'С помощью одного цикла и функции <code>str_repeat</code> выведите на экран следующую пирамидку: <div data-w="cont/mono"> x<br/> xx<br/> xxx<br/> xxxx<br/> xxxxx<br/> xxxxxx<br/> xxxxxxx<br/> xxxxxxxx<br/> xxxxxxxxx </div>',
]);

task([
    'num' => 2,
    'text' => 'С помощью одного цикла и функции <code>str_repeat</code> выведите на экран следующую пирамидку: <div data-w="cont/mono"> 1<br/> 22<br/> 333<br/> 4444<br/> 55555<br/> 666666<br/> 7777777<br/> 88888888<br/> <code>999999999</code> </div>',
]);

startLesson('Функции для HTML тегов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/tags/
// ⊗ppPmSFTg

task([
    'num' => 1,
    'text' => 'Дана строка: Удалите теги из этой строки.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa <b>bbb</b> ccc';
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: <p> Удалите все теги из этой строки, кроме тегов <code>b</code> и <code>i</code>. </p>',
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
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Выведите ее на экран так, чтобы теги не преобразовались в команды браузера.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa <b>bbb</b> <i>ccc</i>';
?>
PHP,
]);

startLesson('Коды символов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/char-codes/
// ⊗ppPmSFCC

task([
    'num' => 1,
    'text' => 'Узнайте код символов <code>\'a\'</code>, <code>\'b\'</code>, <code>\'c\'</code>, пробела.',
]);

task([
    'num' => 2,
    'text' => 'Изучите <a>таблицу ASCII</a> Определите границы, в которых располагаются буквы английского алфавита.',
]);

task([
    'num' => 3,
    'text' => 'Выведите на экран символ с кодом <code>33</code>.',
]);

task([
    'num' => 4,
    'text' => 'Запишите в переменную <code>$str</code> случайный символ - большую букву латинского алфавита. Для этого с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.',
]);

task([
    'num' => 5,
    'text' => 'Запишите в переменную <code>$str</code> случайную строку <code>$len</code> длиной, состоящую из маленьких букв латинского алфавита.',
]);

task([
    'num' => 6,
    'text' => 'Дана буква английского алфавита. Узнайте, она маленькая или большая.',
]);

startLesson('Подсчет подстрок в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/counting/
// ⊗ppPmSFCn

task([
    'num' => 1,
    'text' => 'Дана строка: Подсчитайте количество слов в этой строке.',
    'code' => <<< 'PHP'
<?
	$str = 'aaa bbb ccc';
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: Подсчитайте сколько раз подстрока <code>\'hello\'</code> встречается в строке.',
    'code' => <<< 'PHP'
<?
	$str = 'hello hello world hello';
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: Подсчитайте сколько раз подстрока <code>\'※\'</code> встречается в строке.',
    'code' => <<< 'PHP'
<?
	$str = '※※※';
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана строка: Подсчитайте сколько раз каждый символ встречается в строке.',
    'code' => <<< 'PHP'
<?
	$str = 'abracadabra';
?>
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дана строка: Подсчитайте количество слов длиннее трех символов.',
    'code' => <<< 'PHP'
<?
	$str = 'The quick brown fox jumps over the lazy dog';
?>
PHP,
]);

startLesson('Части строк в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/string/parts/
// ⊗ppPmSFPr

task([
    'num' => 1,
    'text' => 'Дана строка: С помощью функции <code>strchr</code> выведите на экран строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ab-cd-ef';
?>

'-cd-ef'
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дана строка: С помощью функции <code>strrchr</code> выведите на экран строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ab-cd-ef';
?>

'-ef'
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дана строка: С помощью функции <code>strstr</code> выведите на экран строку:',
    'code' => <<< 'PHP'
<?
	$str = 'ab--cd--ef';
?>

'--cd--ef'
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дана строка: С помощью функции <code>mb_strrchr</code> выведите на экран часть строки после последнего дефиса:',
    'code' => <<< 'PHP'
<?
	$str = 'программирование-на-php';
?>

'-php'
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дана строка: С помощью функции <code>mb_strrichr</code> (без учета регистра) найдите подстроку начиная с первого вхождения <code>\'мир\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'Привет-Мир-Пока';
?>

'-Мир-Пока'
PHP,
]);

task([
    'num' => 6,
    'text' => 'Дана строка: С помощью функции <code>mb_strstr</code> выведите часть строки начиная с первого вхождения <code>\'работы\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'Функции-для-работы-со-строками';
?>

'-работы-со-строками'
PHP,
]);

task([
    'num' => 7,
    'text' => 'Дана строка: С помощью <code>mb_stristr</code> найдите подстроку начиная с <code>\'РРР\'</code> (без учета регистра).',
    'code' => <<< 'PHP'
<?
	$str = 'ппп ррр ссс ттт ууу';
?>

'ррр ссс ттт ууу'
PHP,
]);

task([
    'num' => 8,
    'text' => 'Дана строка: С помощью функции <code>mb_strrchr</code> выведите часть строки после последнего дефиса:',
    'code' => <<< 'PHP'
<?
	$str = 'Тестирование-многобайтовых-функций';
?>

'-функций'
PHP,
]);

task([
    'num' => 9,
    'text' => 'Дана строка: С помощью функции <code>mb_strrichr</code> (без учета регистра) найдите подстроку начиная с первого вхождения <code>\'тексте\'</code>:',
    'code' => <<< 'PHP'
<?
	$str = 'Пример-Поиска-Подстроки-В-Тексте';
?>

'-В-Тексте'
PHP,
]);
