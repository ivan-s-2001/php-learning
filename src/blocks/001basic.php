<?

startLesson('Переменные и арифметика');

task(
    1,
    'Создайте переменную, измените ее значение и выведите результат на экран.'
);

result(<<<'PHP'
<?
$num = 123;
echo '<p>$num = ' . $num . '</p>';
$num = 456;
echo '<p>$num = ' . $num . '</p>';
?>
PHP);

task(
    2,
    'Выполните арифметические операции с числами и переменными: сложение, вычитание, умножение и деление.'
);

result(<<<'PHP'
<?
$a = 10;
$b = 2;
echo '<p>$a = ' . $a . '</p>';
echo '<p>$b = ' . $b . '</p>';
echo '<p>$a + $b = ' . ($a + $b) . '</p>';
echo '<p>$a - $b = ' . ($a - $b) . '</p>';
echo '<p>$a * $b = ' . ($a * $b) . '</p>';
echo '<p>$a / $b = ' . ($a / $b) . '</p>';
?>
PHP);

task(
    3,
    'Сохраните результат вычислений в отдельную переменную и выведите ее значение.'
);

result(<<<'PHP'
<?
$a = 10;
$b = 5;
$res = $a + $b;
echo '<p>$a = ' . $a . '</p>';
echo '<p>$b = ' . $b . '</p>';
echo '<p>$res = ' . $res . '</p>';
?>
PHP);

task(
    4,
    'Не запуская код, определите результат выражения с учетом приоритета математических операций.'
);

result(<<<'PHP'
<?
$res = 20;
$a = 5 + 5 * 3;
echo '<p>5 + 5 * 3 = ' . $a . '</p>';
echo '<p>' . (($res === $a) ? 'Правильно' : 'Неправильно') . '</p>';
?>
PHP);

task(
    5,
    'Используйте скобки для изменения порядка вычислений.'
);

result(<<<'PHP'
<?
$a = (2 + 3) * (2 + 3);
echo '<p>(2 + 3) * (2 + 3) = ' . $a . '</p>';
?>
PHP);

task(
    6,
    'Поработайте с дробными числами, отрицательными числами и выводом числа с обратным знаком.'
);

result(<<<'PHP'
<?
$a = 1.5;
$b = 0.75;
$c = -100;
echo '<p>$a = ' . $a . '</p>';
echo '<p>$b = ' . $b . '</p>';
echo '<p>$a + $b = ' . ($a + $b) . '</p>';
echo '<p>$c = ' . $c . '</p>';
echo '<p>-$c = ' . (-$c) . '</p>';
?>
PHP);

task(
    7,
    'Найдите остаток от деления и возведите число в степень.'
);

result(<<<'PHP'
<?
$a = 10;
$b = 3;
echo '<p>$a = ' . $a . '</p>';
echo '<p>$b = ' . $b . '</p>';
echo '<p>$a % $b = ' . ($a % $b) . '</p>';
echo '<p>2 ** 10 = ' . (2 ** 10) . '</p>';
?>
PHP);

endLesson();

startLesson('Строки');

task(
    1,
    'Создайте строковую переменную и выведите ее значение на экран.'
);

result(<<<'PHP'
<?
$str = 'hello';
echo '<p>$str = ' . $str . '</p>';
?>
PHP);

task(
    2,
    'Склейте несколько строк, в том числе с пробелом между ними.'
);

result(<<<'PHP'
<?
$str1 = 'hello';
$str2 = 'world';
echo '<p>$str1 = ' . $str1 . '</p>';
echo '<p>$str2 = ' . $str2 . '</p>';
echo '<p>$str1 . $str2 = ' . $str1 . $str2 . '</p>';
echo '<p>$str1 . " " . $str2 = ' . $str1 . ' ' . $str2 . '</p>';
?>
PHP);

task(
    3,
    'Найдите длину строки и разберите нюанс с длиной кириллической строки.'
);

result(<<<'PHP'
<?
$str = 'hello';
$ru = 'привет';
echo '<p>$str = ' . $str . '</p>';
echo '<p>strlen($str) = ' . strlen($str) . '</p>';
echo '<p>$ru = ' . $ru . '</p>';
echo '<p>strlen($ru) = ' . strlen($ru) . '</p>';
echo '<p>mb_strlen($ru) = ' . mb_strlen($ru) . '</p>';
?>
PHP);

endLesson();

startLesson('HTML через PHP');

task(
    1,
    'Выведите HTML-теги через PHP.'
);

result(<<<'PHP'
<?
$open = '<i>';
$close = '</i>';
echo '<p>' . $open . 'Курсивный текст' . $close . '</p>';
$br = '<br>';
echo '<p>' . 1 . $br;
for ($i = 2; $i <= 9; $i++)
{
    echo $i . $br;
}
echo '</p>';
?>
PHP);

task(
    2,
    'Выведите HTML-теги с атрибутами через PHP.'
);

result(<<<'PHP'
<?
$src = '/resources/img/mem1.jpg';
$alt = 'Картинка';
$text = 'Какой-нибудь текст';
echo '<p><img src="' . $src . '" alt="' . $alt . '" width="100%"></p>';
echo '<p><input type="text" value="' . $text . '"></p>';
echo '<p><textarea>' . $text . '</textarea></p>';
?>
PHP);

endLesson();

startLesson('Типы данных');

task(
    1,
    'Поработайте со значениями <code>true</code>, <code>false</code> и <code>null</code>.'
);

result(<<<'PHP'
<?
$a = true;
$b = false;
$c = null;

echo '<p>$a = ' . var_export($a, true) . '</p>';
echo '<p>$b = ' . var_export($b, true) . '</p>';
echo '<p>$c = ' . var_export($c, true) . '</p>';
?>
PHP);

task(
    2,
    'Разберите поведение необъявленной переменной.'
);

result(<<<'PHP'
<?
var_dump($unknown);
?>
PHP);

task(
    3,
    'Выполните автоматическое преобразование типов.'
);

result(<<<'PHP'
<?
$a = '1';
$b = '2';
$c = '3';
$res = $a + $b + $c;
echo '<p>$a + $b + $c = ' . $res . '</p>';
$a = 1;
$b = 2;
$c = 3;
$res = $a . $b . $c;
echo '<p>$a . $b . $c = ' . $res . '</p>';
?>
PHP);

task(
    4,
    'Выполните явное преобразование строки, числа, дроби и целого значения.'
);

result(<<<'PHP'
<?
$a = '12345';
$b = '12.345';
$c = 12345;
$d = 12.345;

var_dump((int) $a);
var_dump((float) $b);
var_dump((string) $c);
var_dump((int) $d);
var_dump((string) $d);
?>
PHP);

endLesson();

startLesson('Символы и цифры');

task(
    1,
    'Получите символы строки по индексам.'
);

result(<<<'PHP'
<?
$str = 'abcde';
$num = 3;
echo '<p>$str = ' . $str . '</p>';
echo '<p>$str[0] = ' . $str[0] . '</p>';
echo '<p>$str[strlen($str) - 1] = ' . $str[strlen($str) - 1] . '</p>';
$res = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
echo '<p>$res = ' . $res . '</p>';
echo '<p>$str[$num] = ' . $str[$num] . '</p>';
?>
PHP);

task(
    2,
    'Найдите произведение и обратный порядок цифр.'
);

result(<<<'PHP'
<?
$num = 12345;
$str = (string) $num;
$product = $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
$reverse = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
echo '<p>$num = ' . $num . '</p>';
echo '<p>$product = ' . $product . '</p>';
echo '<p>$reverse = ' . $reverse . '</p>';
?>
PHP);

endLesson();

startLesson('Операции присваивания');

task(
    1,
    'Используйте сокращенные операции присваивания.'
);

result(<<<'PHP'
<?
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
echo '<p>$num = ' . $num . '</p>';
$str = 'a';
$str .= 'b';
$str .= 'c';
echo '<p>$str = ' . $str . '</p>';
?>
PHP);

task(
    2,
    'Используйте инкремент и декремент.'
);

result(<<<'PHP'
<?
$num = 10;
$num++;
$num++;
$num--;
echo '<p>$num = ' . $num . '</p>';
?>
PHP);

task(
    3,
    'Разберите разницу между префиксным и постфиксным инкрементом и декрементом.'
);

result(<<<'PHP'
<?
$num = 3;
echo '<p>++$num = ' . ++$num . '</p>';
$num = 3;
echo '<p>$num++ = ' . $num++ . '</p>';
echo '<p>$num = ' . $num . '</p>';
$num = 3;
echo '<p>--$num = ' . --$num . '</p>';
$num = 3;
echo '<p>$num-- = ' . $num-- . '</p>';
echo '<p>$num = ' . $num . '</p>';
$num1 = 3;
$num2 = ++$num1;
echo '<p>$num1 = ' . $num1 . '</p>';
echo '<p>$num2 = ' . $num2 . '</p>';
?>
PHP);

endLesson();

startLesson('Практика на поиск ошибок');

task(
    1,
    'Исправьте ошибки с индексами строк и цифр.'
);

result(<<<'PHP'
<?
$str = 'abc';
echo '<p>Последний символ строки abc: ' . $str[strlen($str) - 1] . '</p>';
$num = 123;
$str = (string) $num;
echo '<p>Первая цифра числа 123: ' . $str[0] . '</p>';
$str = 'abc def';
echo '<p>Последний символ строки abc def: ' . $str[strlen($str) - 1] . '</p>';
$num = 123;
$str = (string) $num;
echo '<p>Сумма первой и второй цифры числа 123: ' . ($str[0] + $str[1]) . '</p>';
$num = 123;
$str = (string) $num;
echo '<p>Сумма всех цифр числа 123: ' . ($str[0] + $str[1] + $str[2]) . '</p>';
?>
PHP);

task(
    2,
    'Исправьте ошибки с операторами <code>+</code>, <code>.</code>, типами данных и функциями.'
);

result(<<<'PHP'
<?
$num1 = 1;
$num2 = 2;
echo '<p>result: ' . ($num1 + $num2) . '</p>';
$num1 = 1;
$num2 = 2;
$num3 = 3;
echo '<p>$num1 + $num2 + $num3 = ' . ($num1 + $num2 + $num3) . '</p>';
echo '<p>1 . 2 = ' . 1 . 2 . '</p>';

$str = 'abc def';
echo '<p>strlen($str) = ' . strlen($str) . '</p>';
echo '<p>Пробел тоже считается символом.</p>';
$a = 0;
++$a;
echo '<p>$a = ' . $a . '</p>';
$str = 'abc';
echo '<p>strlen($str) = ' . strlen($str) . '</p>';
$seconds = 24 * 60 * 60;
echo '<p>Секунд в сутках: ' . $seconds . '</p>';
echo '<p>1.2 + 1.3 = ' . (1.2 + 1.3) . '</p>';
$a = 123;
$b = 456;
$s = $a + $b;
echo '<p>$s = ' . $s . '</p>';
$num1 = (float) '2.5';
$num2 = (float) '3.5';
echo '<p>$num1 + $num2 = ' . ($num1 + $num2) . '</p>';
?>
PHP);

endLesson();

startLesson('Практические вычисления');

task(
    1,
    'Решите практические задачи на единицы времени и памяти.'
);

result(<<<'PHP'
<?
$secondsInDay = 24 * 60 * 60;
$secondsIn30Days = $secondsInDay * 30;
$secondsInYear = $secondsInDay * 365;
$minutesInDay = 24 * 60;
$minutesInYear = $minutesInDay * 365;
$bytesInMb = 1024 * 1024;
$bytesInGb = $bytesInMb * 1024;
$bytesIn10Gb = $bytesInGb * 10;
$bytesInTb = $bytesInGb * 1024;
$kbInTb = 1024 * 1024 * 1024;
echo '<p>Секунд в сутках: ' . $secondsInDay . '</p>';
echo '<p>Секунд в 30 сутках: ' . $secondsIn30Days . '</p>';
echo '<p>Секунд в году: ' . $secondsInYear . '</p>';
echo '<p>Минут в сутках: ' . $minutesInDay . '</p>';
echo '<p>Минут в году: ' . $minutesInYear . '</p>';
echo '<p>Байт в мегабайте: ' . $bytesInMb . '</p>';
echo '<p>Байт в гигабайте: ' . $bytesInGb . '</p>';
echo '<p>Байт в 10 гигабайтах: ' . $bytesIn10Gb . '</p>';
echo '<p>Байт в терабайте: ' . $bytesInTb . '</p>';
echo '<p>Килобайт в терабайте: ' . $kbInTb . '</p>';
?>
PHP);

endLesson();

startLesson('Формулы');

task(
    1,
    'Решите задачи по формулам: площадь круга, площадь квадрата, площадь прямоугольника, периметр прямоугольника и перевод температуры.'
);

result(<<<'PHP'
<?
$r = 5;
$s = 3.14 * $r ** 2;
echo '<p>Площадь круга: $s = ' . $s . '</p>';
$a = 4;
$s = $a ** 2;
echo '<p>Площадь квадрата: $s = ' . $s . '</p>';
$a = 4;
$b = 6;
$s = $a * $b;
echo '<p>Площадь прямоугольника: $s = ' . $s . '</p>';
$a = 4;
$b = 6;
$p = 2 * ($a + $b);
echo '<p>Периметр прямоугольника: $p = ' . $p . '</p>';
$tc = 25;
$tf = $tc * 9 / 5 + 32;
echo '<p>$tc = ' . $tc . '</p>';
echo '<p>$tf = ' . $tf . '</p>';
$tf = 77;
$tc = ($tf - 32) * 5 / 9;
echo '<p>$tf = ' . $tf . '</p>';
echo '<p>$tc = ' . $tc . '</p>';
?>
PHP);

endLesson();

?>