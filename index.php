<?
include __DIR__ . '/src/layout.php';

if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}

startPage('Основы');

startLesson('001. Введение в язык PHP для новичков');

hint('Язык PHP предназначен для создания динамических сайтов. На нём делают страницы, которые зависят от данных: личные кабинеты, формы, каталоги, интернет-магазины.<br>Технически PHP нужен для генерации HTML-кода. Тексты и настройки часто хранятся в базе данных.<br>Для PHP полезно знать базовый HTML: именно его PHP обычно генерирует.');

endLesson();


startLesson('002. Начало работы с PHP');

hint('Для запуска PHP локально нужна программа-сервер. Для Windows лучший вариант — OpenServer, для Linux — LAMP, для macOS — MAMP.<br>Для первых проб можно использовать онлайн-редактор, но локальный сервер удобнее для нормальной работы.');

endLesson();


startLesson('003. Выполнение кода PHP');

hint('PHP-файлы имеют расширение <code>.php</code> и выполняются через сервер.');


codeBlock(<<< CODE
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My first program</title>
	</head>
	<body>
		my first program
	</body>
</html>
CODE);

hint('В этих файлах внутри HTML-кода можно писать PHP-код.');

codeBlock(<<< CODE
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My first program</title>
	</head>
	<body>
		<?
			echo 'my first program';
		?>
	</body>
</html>
CODE);

hint('Если запустить этот файл через PHP-сервер, то сервер выполнит команды PHP и результат отправит в браузер.<br>Для простоты на этапе обучения лишние теги можно не писать:');

codeBlock(<<< CODE
<?
	echo 'my first program';
?>
CODE);

endLesson();


startLesson('004. Проблема с кодировками');

hint('Для нормального вывода кириллицы файл и страница должны использовать <code>UTF-8</code>.');


codeBlock(<<< CODE
<meta charset="utf-8">
<?
	echo 'моя первая программа';
?>
CODE);

hint('Иногда описанные процедуры не помогают и тогда может помочь команда <code>mb_internal_encoding</code>:');

codeBlock(<<< CODE
<meta charset="utf-8">
<?
	mb_internal_encoding('UTF-8');
	echo 'моя первая программа';
?>
CODE);

endLesson();


startLesson('005. Вывод ошибок PHP');

hint('PHP может показывать ошибки прямо в браузере.<br>Notice — это замечания о том, что в коде может что-то быть не так.<br>Warning — это предупреждения о том, что что-то пошло не так.<br>Fatal возникает, когда PHP-код не может быть выполнен.<br>На учебном проекте лучше включить полный вывод ошибок.');


codeBlock(<<< CODE
<?
	error_reporting(E_ALL);
?>
CODE);

hint('Иногда эта команда не сработает (зависит от настроек сервера).');

codeBlock(<<< CODE
<?
	ini_set('display_errors', 'on');
?>
CODE);

hint('Лучше сразу писать две:');

codeBlock(<<< CODE
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
?>
CODE);

hint('На выложенном в интернет сайте вывод ошибок лучше отключать.');

codeBlock(<<< CODE
<?
	error_reporting(0);
	ini_set('display_errors', 'off');
?>
CODE);

endLesson();


startLesson('006. Полный код для запуска PHP');


codeBlock(<<< CODE
<meta charset="utf-8">
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	echo 'my first program';
?>
CODE);

endLesson();


startLesson('007. Улучшенный код для запуска');

hint('Код можно доработать.');


codeBlock(<<< CODE
<meta charset="utf-8">
<?
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	include 'code.php';
?>
CODE);

hint('<code>include</code> подключает второй файл к первому.<br>А второй файл будет называться <code>code.php</code>.');

codeBlock(<<< CODE
<?
	echo 'test';
?>
CODE);

endLesson();


startLesson('008. Обзор начальных PHP команд');

hint('Команда <code>echo</code> выводит значение.');


codeBlock(<<< CODE
<?
	echo 'hello';
?>
CODE);

hint('Число выводится так:');

codeBlock(<<< CODE
<?
	echo 123;
?>
CODE);

endLesson();


startLesson('009. Комментарии в PHP');

hint('Подобно языкам HTML и CSS в языке PHP можно оставлять комментарии.<br>Однострочный комментарий начинается с <code>//</code>.');


codeBlock(<<< CODE
<?
	echo 'hello'; // Комментарий
?>
CODE);

hint('Многострочный комментарий записывается между <code>/*</code> и <code>*/</code>.');

codeBlock(<<< CODE
<?
	/*
		комментарий
		комментарий
	*/
	echo 'hello';
?>
CODE);

endLesson();


startLesson('010. Комментарии в учебнике');

hint('Такой комментарий можно ставить справа от строки кода.');


codeBlock(<<< CODE
<?
	echo 'hello'; // Выведет 'hello'
?>
CODE);

hint('Однако, эта строка выведется без кавычек.<br>Если мы выводим число, то его я в кавычки брать не буду:');

codeBlock(<<< CODE
<?
	echo 12345; // Выведет 12345
?>
CODE);

codeBlock(<<< CODE
<?
	echo '12345'; // Выведет '12345'
?>
CODE);

hint('Но в PHP разница между числами и строками с цифрами все-таки есть, поэтому я ее всегда буду подчеркивать.');

endLesson();


startLesson('011. Функция var_dump в PHP');

hint('Команда <code>echo</code> не всегда дает представление о том, что мы выводим.');


codeBlock(<<< CODE
<?
	var_dump('12345'); // Выведет '12345' и еще некоторую полезную инфу
?>
CODE);

endLesson();


startLesson('012. Функции в PHP');

hint('<code>var_dump</code> относится к функциям. Они позволяют выполнять некоторые действия.');

endLesson();


startLesson('013. Переменные в PHP');

hint('Основным понятием любого языка программирования является переменная. Переменная это контейнер, в котором можно хранить данные, например, строки или числа.<br>Каждая переменная должна иметь имя, которое может состоять из латинских букв, чисел и знаков подчеркивания. При этом в PHP перед переменной обязательно должен быть написан знак доллара <code>$</code>, а первый символ имени переменной не должен быть цифрой.');

endLesson();


startLesson('014. Использование переменных в PHP');

hint('Чтобы записать значение в переменную используется знак <code>=</code>, который называется оператором присваивания. например, запишем в переменную <code>$a</code> число <code>3</code>:');


codeBlock(<<< CODE
<?
	\$a = 3;
?>
CODE);

hint('А теперь выведем содержимое переменной <code>$a</code> командой <code>echo</code>:');

codeBlock(<<< CODE
<?
	\$a = 3;
	echo \$a; // Выведет на экран число 3
?>
CODE);

endLesson();


startLesson('015. Изменения значений переменных в PHP');

hint('Значение переменной не является чем-то постоянным к ней.');


codeBlock(<<< CODE
<?
	\$a = 1;  // Записываем в переменную значение 1
	echo \$a; // Выведет 1
	\$a = 2;  // Записываем теперь значение 2, затирая значение 1
	echo \$a; // Выведет 2
?>
CODE);

task(
        1,
        'Создайте переменную <code>$a</code>. Запишите в нее значение <code>10</code>,
    выведите его на экран. Затем запишите в нее значение <code>20</code>,
    выведите его на экран.'
);

startResult();

$a = 10;
echo '<p>$a = ' . $a . '</p>';

$a = 20;
echo '<p>$a = ' . $a . '</p>';

endResult();

endLesson();


startLesson('016. Математические операции с числами в PHP');

hint('Сложение:');


codeBlock(<<< CODE
<?
	\$a = 1 + 2;
	echo \$a; // Выведет 3
?>
CODE);

hint('Вычитание:');

codeBlock(<<< CODE
<?
	\$b = 3 - 2;
	echo \$b; // Выведет 1
?>
CODE);

hint('Умножение:');

codeBlock(<<< CODE
<?
	\$c = 3 * 2;
	echo \$c; // Выведет 6
?>
CODE);

hint('Деление:');

codeBlock(<<< CODE
<?
	\$d = 4 / 2;
	echo \$d; // Выведет 2
?>
CODE);

task(
        1,
        'Создайте переменную <code>$a</code>. Запишите в нее сумму чисел
    <code>1</code>, <code>2</code> и <code>3</code>. Выведите на экран
    содержимое переменной <code>$a</code>.'
);

startResult();

$a = 1 + 2 + 3;
echo '<p>1 + 2 + 3 = ' . $a . '</p>';

endResult();

task(
        2,
        'Создайте переменную <code>$a</code> со значением <code>10</code>
    и переменную <code>$b</code> со значением <code>2</code>.
    Выведите на экран их сумму, разность, произведение и частное.'
);

startResult();

$a = 10;
$b = 2;

echo '<p>' . $a . ' + ' . $b . ' = ' . ($a + $b) . '</p>';
echo '<p>' . $a . ' - ' . $b . ' = ' . ($a - $b) . '</p>';
echo '<p>' . $a . ' * ' . $b . ' = ' . ($a * $b) . '</p>';
echo '<p>' . $a . ' / ' . $b . ' = ' . ($a / $b) . '</p>';

endResult();

task(
        3,
        'Создайте переменную <code>$c</code> со значением <code>10</code>
    и переменную <code>$d</code> со значением <code>5</code>.
    Просуммируйте их, а результат присвойте переменной <code>$res</code>.
    Выведите на экран значение переменной <code>$res</code>.'
);

startResult();

$c = 10;
$d = 5;
$res = $c + $d;

echo '<p>$res = ' . $res . '</p>';

endResult();

task(
        4,
        'Создайте переменную <code>$a</code> со значением <code>1</code>,
    переменную <code>$b</code> со значением <code>2</code> и переменную
    <code>$c</code> со значением <code>3</code>. Выведите на экран их сумму.'
);

startResult();

$a = 1;
$b = 2;
$c = 3;

echo '<p>$a + $b + $c = ' . ($a + $b + $c) . '</p>';

endResult();

task(
        5,
        'Создайте переменную <code>$a</code> со значением <code>10</code>
    и переменную <code>$b</code> со значением <code>5</code>.
    Отнимите от <code>$a</code> переменную <code>$b</code> и результат
    присвойте переменной <code>$c</code>. Затем создайте переменную
    <code>$d</code>, присвойте ей значение <code>7</code>. Сложите
    переменные <code>$c</code> и <code>$d</code>, а результат запишите
    в переменную <code>$res</code>.'
);

startResult();

$a = 10;
$b = 5;
$c = $a - $b;
$d = 7;
$res = $c + $d;

echo '<p>$res = ' . $res . '</p>';

endResult();

endLesson();


startLesson('017. Математические операции с переменными в PHP');

hint('Математические операции можно производить не только над числами, но и над переменными.');


codeBlock(<<< CODE
<?
	\$a = 1;
	\$b = 2;
	echo \$a + \$b; // Выведет 3
?>
CODE);

hint('Не обязательно сразу выводить результат операции, можно вначале записать его в переменную, а уже затем вывести значение этой переменной:');

codeBlock(<<< CODE
<?
	\$a = 1;
	\$b = 2;
	\$c = \$a + \$b; // Запишем сумму в переменную \$c
	echo \$c;      // Выведет 3
?>
CODE);

endLesson();


startLesson('018. Приоритет математических операций в PHP');

hint('Математические операции PHP имеют такой же приоритет, как в обычной математике.');


codeBlock(<<< CODE
<?
	\$a = 2 * 2 + 3;
	echo \$a; // Выведет 7 (результат 4 + 3)
?>
CODE);

endLesson();


startLesson('019. Равный приоритет в PHP');

hint('Умножение и деление имеют равный приоритет и выполняются по очереди слева направо.');


codeBlock(<<< CODE
<?
	\$a = 8 / 2 * 4;
	echo \$a; // Выведет 16 (результат 4 * 4)
?>
CODE);

hint('Если же переставить знаки местами, то вначале выполнится умножение, а потом деление:');

codeBlock(<<< CODE
<?
	\$a = 8 * 2 / 4;
	echo \$a; // Выведет 4 (результат 16 / 4)
?>
CODE);

hint('каждая новая операция деления будет применяться к предыдущей:');

codeBlock(<<< CODE
<?
	\$a = 16 / 2 / 2 / 2;
	echo \$a; // Выведет 2
?>
CODE);

endLesson();


startLesson('020. Группирующие скобки в PHP');

hint('При желании вы можете указывать приоритет операций через круглых скобок. например, переделаем наш код так, чтобы вначале выполнилось сложение, а уже потом умножение:');


codeBlock(<<< CODE
<?
	\$a = 2 * (2 + 3);
	echo \$a; // Выведет 10 (результат 2 * 5)
?>
CODE);

hint('Скобок может быть любое количество, в том числе и вложенных друг в друга:');

codeBlock(<<< CODE
<?
	\$a = 2 * (2 + 4 * (3 + 1));
	echo \$a;
?>
CODE);

endLesson();


startLesson('021. Нюансы группировки в PHP');

hint('В скобки можно заключить операции, обладающие приоритетом — это не будет ошибкой.');


codeBlock(<<< CODE
<?
	\$a = (2 * 2) + 3;
	echo \$a; // Выведет 7 (результат 4 + 3)
?>
CODE);

hint('В данном случае скобки получаются лишними (у умножения ведь и так приоритет), но код является допустимым.');

codeBlock(<<< CODE
<?
	\$a = 8 / 2 * 4;
	echo \$a;
?>
CODE);

hint('Как вы уже знаете, в нем вначале выполнится деление, а потом умножение.');

codeBlock(<<< CODE
<?
	\$a = (8 / 2) * 4;
	echo \$a;
?>
CODE);

endLesson();


startLesson('022. Дроби в PHP');

hint('В PHP также существуют и десятичные дроби.');


codeBlock(<<< CODE
<?
	\$a = 0.5;
	echo \$a; // Выведет 0.5
?>
CODE);

codeBlock(<<< CODE
<?
	\$a = 0.5 + 0.5;
	echo \$a; // Выведет 1
?>
CODE);

task(
        1,
        'Запишите в переменную <code>$a</code> число <code>1.5</code>,
    а в переменную <code>$b</code> число <code>0.75</code>.
    Найдите сумму значений этих переменных и выведите ее на экран.'
);

startResult();

$a = 1.5;
$b = 0.75;

echo '<p>' . $a . ' + ' . $b . ' = ' . ($a + $b) . '</p>';

endResult();

endLesson();


startLesson('023. Отрицательные числа в PHP');

hint('Числа могут быть отрицательными.');


codeBlock(<<< CODE
<?
	\$a = -1;
	echo \$a; // Выведет -1
?>
CODE);

hint('Знак минус можно писать как к числам, так и к переменным:');

codeBlock(<<< CODE
<?
	\$a = 1;
	\$b = -\$a; // Записали в \$b содержимое \$a с обратным знаком
	echo \$b;  // Выведет -1
?>
CODE);

hint('Возможна и такая запись:');

codeBlock(<<< CODE
<?
	\$a = 1;
	echo -\$a; // Выведет -1
?>
CODE);

task(
        1,
        'Создайте переменную <code>$a</code> со значением <code>-100</code>.
    Выведите это значение на экран.'
);

startResult();

$a = -100;

echo '<p>$a = ' . $a . '</p>';

endResult();

task(
        2,
        'Создайте переменную <code>$a</code>, запишите в нее какое-нибудь
    положительное или отрицательное число. Выведите на экран это число
    с обратным знаком.'
);

startResult();

$a = -100;

echo '<p>$a = ' . (-$a) . '</p>';

endResult();

endLesson();


startLesson('024. Остаток от деления в PHP');

hint('Существует специальный оператор <code>%</code>, через которого можно найти остаток от деления одного числа на другое:');


codeBlock(<<< CODE
<?
	echo 10 % 3; // Выведет 1
?>
CODE);

hint('Если одно число делится нацело на второе — остаток будет равен нулю:');

codeBlock(<<< CODE
<?
	echo 10 % 2; // Выведет 0
?>
CODE);

hint('Оператор <code>%</code>, конечно же, можно применять не только к числам, но и к переменным:');

codeBlock(<<< CODE
<?
	\$a = 10;
	\$b = 3;
	echo \$a % \$b; // Выведет 1
?>
CODE);

task(
        1,
        'Дана переменная <code>$a</code> со значением <code>10</code> и переменная
    <code>$b</code> со значением <code>3</code>. Найдите остаток от деления
    <code>$a</code> на <code>$b</code>.'
);

startResult();

$a = 10;
$b = 3;

echo '<p>' . $a . ' % ' . $b . ' = ' . ($a % $b) . '</p>';

endResult();

endLesson();


startLesson('025. Возведение в степень в PHP');

hint('Для возведения числа в степень также существует специальный оператор <code>**</code>. с его помощью возведем число <code>10</code> в третью степень:');


codeBlock(<<< CODE
<?
	echo 10 ** 3; // Выведет 1000
?>
CODE);

hint('возведем в степень значение переменной:');

codeBlock(<<< CODE
<?
	\$a = 10;
	echo \$a ** 3; // Выведет 1000
?>
CODE);

hint('Может быть такое, что и число, и степень будут содержаться в переменных:');

codeBlock(<<< CODE
<?
	\$a = 10;
	\$b = 3;
	echo \$a ** \$b; // Выведет 1000
?>
CODE);

task(
        1,
        'Возведите число <code>2</code> в <code>10-ю степень</code>.
    Выведите результат на экран.'
);

startResult();

$a = 2;
$b = 10;

echo '<p>' . $a . '<sup>' . $b . '</sup> = ' . ($a ** $b) . '</p>';

endResult();

endLesson();


startLesson('026. Приоритет возведения в степень в PHP');

hint('Операция возведения в степень имеет приоритет перед умножением и делением. вначале выполнится возведение в степень, а затем умножение:');


codeBlock(<<< CODE
<?
	echo 2 * 2 ** 3;
?>
CODE);

task(
        1,
        'Запишите примеры:'
);

startResult();

echo '<p>2 * 2<sup>3</sup> = ' . (2 * 2 ** 3) . '</p>';
echo '<p>3 * 2<sup>3</sup> = ' . (3 * 2 ** 3) . '</p>';
echo '<p>(3 * 2)<sup>3</sup> = ' . ((3 * 2) ** 3) . '</p>';
echo '<p>3 * 2<sup>(3+1)</sup> = ' . (3 * 2 ** (3 + 1)) . '</p>';
echo '<p>2<sup>3</sup> * 3 = ' . (2 ** 3 * 3) . '</p>';
echo '<p>3 * 2<sup>3</sup> * 3 = ' . (3 * 2 ** 3 * 3) . '</p>';

endResult();

endLesson();


startLesson('027. Строки в PHP');

hint('Как уже упоминалось ранее, данные могут иметь различный тип.<br>Строки создаются через кавычек:');


codeBlock(<<< CODE
<?
	\$str = 'abc';
	echo \$str; // Выведет 'abc'
?>
CODE);

hint('Кавычки могут быть не только одинарными, но и двойными:');

codeBlock(<<< CODE
<?
	\$str = "abc";
	echo \$str; // Выведет 'abc'
?>
CODE);

endLesson();


startLesson('028. Сложение строк в PHP');

hint('Для сложения (конкатенации) строк используется оператор точка:');


codeBlock(<<< CODE
<?
	\$str = 'abc' . 'def'; // Складываем две строки
	echo \$str;            // Выведет 'abcdef'
?>
CODE);

hint('Строки также могут храниться в переменных:');

codeBlock(<<< CODE
<?
	\$str1 = 'abc';
	\$str2 = 'def';
	echo \$str1 . \$str2; // Выведет 'abcdef'
?>
CODE);

hint('Можно также складывать переменные и строки:');

codeBlock(<<< CODE
<?
	\$str1 = 'abc';
	\$str2 = 'def';
	echo \$str1 . '!!!' . \$str2; // Выведет 'abc!!!def'
?>
CODE);

task(
        1,
        'Создайте переменную <code>$str</code> и присвойте ей строку
    <code>\'hello\'</code>. Выведите значение этой переменной на экран.'
);

startResult();

$str = 'hello';

echo '<p>$str = ' . $str . '</p>';

endResult();

task(
        2,
        'Создайте переменную с текстом <code>\'abc\'</code> и переменную с текстом
    <code>\'def\'</code>. С помощью этих переменных и операции сложения строк
    выведите на экран строку <code>\'abcdef\'</code>.'
);

startResult();

$str1 = 'abc';
$str2 = 'def';

echo '<p>' . $str1 . $str2 . '</p>';

endResult();

endLesson();


startLesson('029. Пробелы при сложении строк в PHP');

hint('Пусть две строки хранятся в переменных, а при их сложении мы хотим вставить между ними пробел.');


codeBlock(<<< CODE
<?
	\$str1 = 'abc';
	\$str2 = 'def';
	echo \$str1 . ' ' . \$str2; // Выведет 'abc def'
?>
CODE);

hint('Пусть переменная только одна:');

codeBlock(<<< CODE
<?
	\$str = 'abc';
	echo \$str . ' ' . 'def'; // Выведет 'abc def'
?>
CODE);

hint('В этом случае нет смысла выделять пробел, как отдельную строку — вставим его как часть второго слагаемого:');

codeBlock(<<< CODE
<?
	\$str = 'abc';
	echo \$str . ' def'; // Выведет 'abc def'
?>
CODE);

task(
        1,
        'Создайте переменную с текстом <code>\'hello\'</code> и переменную с текстом
    <code>\'world\'</code>. С помощью этих переменных и операции сложения строк
    выведите на экран строку <code>\'hello world\'</code>.'
);

startResult();

$str1 = 'hello';
$str2 = 'world';

echo '<p>' . $str1 . ' ' . $str2 . '</p>';

endResult();

endLesson();


startLesson('030. Длина строки в PHP');

hint('Количество символов строки можно найти функцией <code>strlen</code>:');


codeBlock(<<< CODE
<?
	echo strlen('abcde'); // Выведет 5
?>
CODE);

hint('Строка может хранится и в переменной:');

codeBlock(<<< CODE
<?
	\$str = 'abcde';
	echo strlen(\$str); // Выведет 5
?>
CODE);

hint('Пробел также является символом:');

codeBlock(<<< CODE
<?
	echo strlen('ab de'); // Выведет 5
?>
CODE);

task(
        1,
        'Запишите в переменную какую-нибудь строку. Выведите на экран длину вашей строки.'
);

startResult();

$str = 'hello world!';

echo '<p>Строка: ' . $str . '</p>';
echo '<p>Длина строки: ' . strlen($str) . '</p>';

endResult();

endLesson();


startLesson('031. Проблема с кириллицей в PHP');

hint('Функция <code>strlen</code>, как и многие другие строковые функции PHP, некорректно работает с кириллицей — она каждую кириллическую букву считает два раза:');


codeBlock(<<< CODE
<?
	echo strlen('абвгд'); // Выведет 10, а не 5
?>
CODE);

hint('Поэтому для строк, которые содержат или потенциально могут содержать проблемные символы, используйте функцию <code>mb_strlen</code> — она будет работать корректно:');

codeBlock(<<< CODE
<?
	echo mb_strlen('абвгд'); // Выведет 5
?>
CODE);

task(
        1,
        'Запишите в переменную какую-нибудь строку. Выведите на экран длину вашей строки.'
);

startResult();

$str = 'привет мир!';

echo '<p>Строка: ' . $str . '</p>';
echo '<p>strlen(' . $str . '): ' . strlen($str) . '</p>';
echo '<p>mb_strlen(' . $str . '): ' . mb_strlen($str) . '</p>';

endResult();

endLesson();


startLesson('032. Работа с HTML тегами в PHP');

hint('Теги HTML с точки зрения PHP это обычные строки. например, через тега b выведем жирный текст:');


codeBlock(<<< CODE
<?
	echo '<b>bold</b>';
?>
CODE);

hint('Можно использовать несколько <code>echo</code>:');

codeBlock(<<< CODE
<?
	echo '<b>';
	echo 'bold';
	echo '</b>';
?>
CODE);

hint('Можно использовать конкатенацию:');

codeBlock(<<< CODE
<?
	\$str = 'bold';
	echo '<b>' . \$str . '</b>';
?>
CODE);

hint('Возможна и такая запись:');

codeBlock(<<< CODE
<?
	\$str   = 'bold';
	\$open  = '<b>';
	\$close = '</b>';
	echo \$open . \$str . \$close;
?>
CODE);

task(
        1,
        'С помощью тега <code>i</code> выведите на экран курсивный текст.'
);

startResult();

$str = 'привет мир!';
$open = '<i>';
$close = '</i>';

echo '<p>' . $open . $str . $close . '</p>';

endResult();

task(
        2,
        'С помощью тега <code>br</code> выведите на экран столбец чисел от 1 до 9.'
);

startResult();

echo '<p>';

$i = 1;
echo $i;

for ($i = 2; $i < 10; $i++) {
    echo '<br>' . $i;
}

echo '</p>';

endResult();

endLesson();


startLesson('033. Атрибуты тегов в PHP');

hint('через тега a выведем ссылку:');


codeBlock(<<< CODE
<?
	echo '<a href="index.php">ссылка</a>';
?>
CODE);

hint('Пусть теперь адрес и текст ссылки хранятся в отдельных переменных:');

codeBlock(<<< CODE
<?
	\$href = 'index.php';
	\$text = 'ссылка';
	echo '<a href="' . \$href . '">' . \$text . '</a>';
?>
CODE);

task(
        1,
        'С помощью тега <code>img</code> выведите на экран какую-нибудь картинку.'
);

startResult();

$src = 'resources/img/mem1.jpg';
$alt = 'Лето в стиле Тони Сопрано (ссоры с семьей и приступы паники)';
$width = '100%';
$height = 'auto';

echo '<p>';
echo '<img src="' . $src . '" height="' . $height . '" width="' . $width . '" alt="' . $alt . '">';
echo '</p>';

endResult();

task(
        2,
        'С помощью тега <code>input</code> выведите на экран инпут с каким-нибудь текстом.'
);

startResult();

$type = 'text';
$value = 'текст из кода';
$placeholder = 'тут текст из кода';
$name = 'demo';

echo '<p>';
echo '<input type="' . $type . '" value="' . $value . '" placeholder="' . $placeholder . '" name="' . $name . '">';
echo '</p>';

endResult();

task(
        3,
        'С помощью тега <code>textarea</code> выведите на экран многострочное поле ввода с каким-нибудь текстом.'
);

startResult();

$textareaValue = 'Это текст из PHP кода';

echo '<p>';
echo '<textarea>' . $textareaValue . '</textarea>';
echo '</p>';

endResult();

endLesson();


startLesson('034. Логические значения в PHP');

hint('Кроме чисел и строк существует еще один тип данных — логический (boolean).<br>Логический тип данных используется для таких вещей, которые предполагают два варианта ответа — да или нет.<br>посмотрим на примере:');


codeBlock(<<< CODE
<?
	\$isAdult = true;  // Уже взрослый
?>
CODE);

hint('Поменяем значение на другое:');

codeBlock(<<< CODE
<?
	\$isAdult = false; // Еще не взрослый
?>
CODE);

hint('Выведем значение нашей переменной.');

codeBlock(<<< CODE
<?
	\$isAdult = true;
	var_dump(\$isAdult); // Выведет true
?>
CODE);

hint('А вот через <code>echo</code> выводить логические значения не удобно:');

codeBlock(<<< CODE
<?
	echo true;  // Выведет 1
	echo false; // Выведет пустоту
?>
CODE);

task(
        1,
        'Присвойте переменной значение <code>true</code>. Выведите эту переменную на экран.'
);

startResult();

$isAdult = true;

echo '<p>' . $isAdult . '</p>';

endResult();

task(
        2,
        'Присвойте переменной значение <code>false</code>. Выведите эту переменную на экран.'
);

startResult();

$isAdult = false;

echo '<p>' . $isAdult . '</p>';

endResult();

endLesson();


startLesson('035. Значение null в PHP');

hint('В PHP существует еще одно специальное значение <code>null</code>, которое обозначает &quot;ничего&quot;.<br>посмотрим на примере:');


codeBlock(<<< CODE
<?
	\$test = null;
?>
CODE);

hint('Выведем значение нашей переменной через <code>var_dump</code>:');

codeBlock(<<< CODE
<?
	\$test = null;
	var_dump(\$test); // Выведет null
?>
CODE);

hint('А вот через <code>echo</code> мы ничего не увидим:');

codeBlock(<<< CODE
<?
	\$test = null;
	echo \$test;      // Выведет пустоту
?>
CODE);

hint('По умолчанию переменные, которые не были объявлены в коде, имеют значение <code>null</code>:');

codeBlock(<<< CODE
<?
	var_dump(\$test); // Выведет null
?>
CODE);

task(
    1,
    'Присвойте переменной значение <code>null</code>. Выведите эту переменную на экран.'
);

startResult();

$a = null;

echo '<p>' . $a . '</p>';

endResult();

task(
    2,
    'Выведите на экран значение любой необъявленной переменной.'
);

startResult();

echo '<p>' . var_dump($test) . '</p>';

endResult();

endLesson();

endPage();
?>