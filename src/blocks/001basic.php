<?

startLesson('Переменные');

task(
    1,
    'Создайте переменную <code>$num</code> и присвойте ей значение <code>123</code>. Выведите значение этой переменной на экран с помощью команды <code>echo</code>.'
);

result(<<<'PHP'
<?
$num = 123;
echo '<p><code>$a</code> = ' . $num . '</p>';
?>
PHP);

endLesson();

startLesson('Изменения значений переменных');

task(
    1,
    'Создайте переменную <code>$a</code>. Запишите в нее значение <code>10</code>, выведите его на экран. Затем запишите в нее значение <code>20</code>, выведите его на экран.'
);

result(<<<'PHP'
<?
$a = 10;
echo '<p><code>$a</code> = ' . $a . '</p>';

$a = 20;
echo '<p><code>$a</code> = ' . $a . '</p>';
?>
PHP);

endLesson();

startLesson('Математические операции с числами');

task(
    1,
    'Создайте переменную <code>$a</code>. Запишите в нее сумму чисел <code>1</code>, <code>2</code> и <code>3</code>.
    С помощью команды <code>echo</code> выведите на экран содержимое переменной <code>$a</code>.'
);

result(<<<'PHP'
<?
$a = 1 + 2 + 3;
echo '<p><code>$a</code> = ' . $a . '</p>';
?>
PHP);

endLesson();

startLesson('Математические операции с переменными');

task(
    1,
    'Создайте переменную <code>$a</code> со значением <code>10</code> и переменную <code>$b</code> со значением
    <code>2</code>. Выведите на экран их сумму, разность, произведение и частное (результат деления).'
);

result(<<<'PHP'
<?
$a = 10;
$b = 2;
echo '<p><code>$a</code> = ' . $a . '</p>';
echo '<p><code>$b</code> = ' . $b . '</p>';
echo '<p><code>$a</code> + <code>$b</code> = ' . $a + $b. '</p>';
echo '<p><code>$a</code> - <code>$b</code> = ' . $a - $b. '</p>';
echo '<p><code>$a</code> * <code>$b</code> = ' . $a * $b. '</p>';
echo '<p><code>$a</code> / <code>$b</code> = ' . $a / $b. '</p>';
?>
PHP);

task(
    2,
    'Создайте переменную <code>$c</code> со значением <code>10</code> и переменную <code>$d</code> со значением
    <code>5</code>. Просуммируйте их, а результат присвойте переменной <code>$res</code>. Выведите на экран значение
    переменной <code>$res</code>.'
);

result(<<<'PHP'
<?
$c = 10;
$d = 5;
$res = $c + $d;
echo '<p><code>$c</code> = ' . $c . '</p>';
echo '<p><code>$d</code> = ' . $d . '</p>';
echo '<p><code>$res</code> = ' . $c + $d. '</p>';
?>
PHP);

task(
    3,
    'Создайте переменную <code>$a</code> со значением <code>1</code>, переменную <code>$b</code> со значением
    <code>2</code> и переменную <code>$c</code> со значением <code>3</code>. Выведите на экран их сумму.'
);

result(<<<'PHP'
<?
$a = 1;
$b = 2;
$c = 3;
echo '<p><code>$a</code> = ' . $a . '</p>';
echo '<p><code>$b</code> = ' . $b . '</p>';
echo '<p><code>$c</code> = ' . $c . '</p>';
echo '<p><code>$a</code> + <code>$b</code> + <code>$c</code> = ' . $a + $b + $c . '</p>';
?>
PHP);

task(
    4,
    'Создайте переменную <code>$a</code> со значением <code>10</code> и переменную <code>$b</code> со значением
    <code>5</code>. Отнимите от <code>$a</code> переменную <code>$b</code> и результат присвойте переменной
    <code>$c</code>. Затем создайте переменную <code>$d</code>, присвойте ей значение <code>7</code>. Сложите
    переменные <code>$c</code> и <code>$d</code>, а результат запишите в переменную <code>$res</code>. Выведите на
    экран значение переменной <code>$res</code>.'
);

result(<<<'PHP'
<?
$a = 10;
$b = 5;
$c = $a - $b;
$d = 7;
$res = $c + $d;
echo '<p><code>$a</code> = ' . $a . '</p>';
echo '<p><code>$b</code> = ' . $b . '</p>';
echo '<p><code>$c</code> = ' . $c . '</p>';
echo '<p><code>$d</code> = ' . $d . '</p>';
echo '<p><code>$res</code> = ' . $res . '</p>';
?>
PHP);

endLesson();

startLesson('Приоритет математических операций');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 5 + 5 * 3;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 20;
$a = 5 + 5 * 3;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    2,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 5 + 5 * 3 + 3;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 23;
$a = 5 + 5 * 3 + 3;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    3,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 8 / 2 + 2;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 6;
$a = 8 / 2 + 2;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    4,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 8 + 2 / 2;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 9;
$a = 8 + 2 / 2;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

endLesson();

startLesson('Равный приоритет');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 8 / 2 * 2;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 8;
$a = 8 / 2 * 2;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    2,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 8 * 4 / 2 / 2;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 8;
$a = 8 * 4 / 2 / 2;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

endLesson();

startLesson('Группирующие скобки');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = (2 + 3) * (2 + 3);
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 25;
$a = (2 + 3) * (2 + 3);
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    2,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = (2 + 3) * 2 + 3;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 13;
$a = (2 + 3) * 2 + 3;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    3,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 2 * (2 + 4 * (3 + 1));
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 36;
$a = 2 * (2 + 4 * (3 + 1));
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    4,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 2 * 8 / 4;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 4;
$a = 2 * 8 / 4;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

endLesson();

startLesson('Нюансы группировки');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = (2 * 8) / 4;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 4;
$a = (2 * 8) / 4;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    2,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 2 * (8 / 4);
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 4;
$a = 2 * (8 / 4);
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

endLesson();

startLesson('Дроби');

task(
    1,
    'Запишите в переменную <code>$a</code> число <code>1.5</code>, а в переменную <code>$b</code> - число
    <code>0.75</code>. Найдите сумму значений этих переменных и выведите ее на экран'
);

result(<<<'PHP'
<?
$a = 1.5;
$b = 0.75;
echo '<p><code>$a</code> = ' . $a . '</p>';
echo '<p><code>$b</code> = ' . $b . '</p>';
echo '<p><code>$a</code> + <code>$b</code> = ' . $a + $b . '</p>';
?>
PHP);

endLesson();

startLesson('Отрицательные числа');

task(
    1,
    'Создайте переменную <code>$a</code> со значением <code>-100</code>. Выведите это значение на экран.'
);

result(<<<'PHP'
<?
$a = -100;
echo '<p><code>$a</code> = ' . $a . '</p>';
?>
PHP);

task(
    2,
    'Создайте переменную <code>$a</code>, запишите в нее какое-нибудь положительное или отрицательное число. Выведите
    на экран это число с обратным знаком.'
);

result(<<<'PHP'
<?
$a = -100;
echo '<p><code>$a</code> = ' . $a . '</p>';
echo '<p><code>-$a</code> = ' . -$a . '</p>';
?>
PHP);

endLesson();

startLesson('Остаток от деления');

task(
    1,
    'Дана переменная <code>$a</code> со значением <code>10</code> и переменная <code>$b</code> со значением
    <code>3</code>. Найдите остаток от деления <code>$a</code> на <code>$b</code>.'
);

result(<<<'PHP'
<?
$a = 10;
$b = 3;
echo '<p><code>$a</code> = ' . $a . '</p>';
echo '<p><code>$b</code> = ' . $b . '</p>';
echo '<p><code>$a</code> % <code>$b</code> = ' . $a % $b . '</p>';
?>
PHP);

endLesson();

startLesson('Возведение в степень');

task(
    1,
    'Возведите число <code>2</code> в <code>10</code>-ю степень. Выведите результат на экран.'
);

result(<<<'PHP'
<?
echo '<p><code>2<sup>10</sup></code> = ' . 2 ** 10 . '</p>';
?>
PHP);

endLesson();

startLesson('Приоритет возведения в степень');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 3 * 2 ** 3;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 24;
$a = 3 * 2 ** 3;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    2,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = (3 * 2) ** 3;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 216;
$a = (3 * 2) ** 3;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    3,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 3 * 2 ** (3 + 1);
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 48;
$a = 3 * 2 ** (3 + 1);
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    4,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 2 ** 3 * 3;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 24;
$a = 2 ** 3 * 3;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

task(
    5,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = 3 * 2 ** 3 * 3;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?
$res = 72;
$a = 3 * 2 ** 3 * 3;
echo '<p>' . ( ($res === $a) ? 'Правильно, <code>$a</code> = ' . $res : 'Неправильно, <code>$a</code> != ' . $res) . '</p>';
?>
PHP);

endLesson();

startLesson('Сложение строк');

task(
    1,
    'Создайте переменную <code>$str</code> и присвойте ей строку <code>\'hello\'</code>. Выведите значение
    этой переменной на экран.'
);

result(<<<'PHP'
<?
$str = 'hello';
echo '<p><code>$str</code> = ' . $str . '</p>';
?>
PHP);

task(
    2,
    'Создайте переменную с текстом <code>\'abc\'</code> и переменную с текстом <code>\'def\'</code>.
    С помощью этих переменных и операции сложения строк выведите на экран строку <code>\'abcdef\'</code>.'
);

result(<<<'PHP'
<?
$str = 'abc';
$str1 = 'def';
echo '<p><code>$str</code> = ' . $str . '</p>';
echo '<p><code>$str1</code> = ' . $str1 . '</p>';
echo '<p><code>$str</code> . <code>$str2</code> = ' . $str . $str1 . '</p>';
?>
PHP);

endLesson();

startLesson('Пробелы при сложении строк');

task(
    1,
    'Создайте переменную с текстом <code>\'hello\'</code> и переменную с текстом
    <code>\'world\'</code>. С помощью этих переменных и операции сложения строк выведите на экран строку
    <code>\'hello world\'</code>.'
);

result(<<<'PHP'
<?
$str = 'hello';
$str1 = 'world';
echo '<p><code>$str</code> = ' . $str . '</p>';
echo '<p><code>$str1</code> = ' . $str1 . '</p>';
echo '<p><code>$str</code> . <code>$str2</code> = ' . $str . ' ' . $str1 . '</p>';
?>
PHP);

endLesson();

startLesson('Длина строки');

task(
    1,
    'Запишите в переменную какую-нибудь строку. Выведите на экран длину вашей строки.'
);

result(<<<'PHP'
<?
$str = 'hello';
echo '<p><code>$str</code> = ' . $str . '</p>';
echo '<p><code>strlen($str)</code> = ' . strlen($str) . '</p>';
?>
PHP);

endLesson();

startLesson('Проблема с кириллицей');

task(
    1,
    'Запишите в переменную какую-нибудь кириллическую строку. Выведите на экран длину вашей строки.'
);

result(<<<'PHP'
<?
$str = 'привет';
echo '<p><code>$str</code> = ' . $str . '</p>';
echo '<p><code>strlen($str)</code> = ' . strlen($str) . '</p>';
echo '<p><code>mb_strlen($str)</code> = ' . mb_strlen($str) . '</p>';
?>
PHP);

endLesson();

startLesson('Теги');

task(
    1,
    'С помощью тега <code>i</code> выведите на экран курсивный текст.'
);

result(<<<'PHP'
<?
$open = '<i>';
$close = '</i>';

echo '<p>' . $open . 'Курсивный текст' . $close . '</p>';
?>
PHP);

task(
    2,
    'С помощью тега <code>br</code> выведите на экран столбец чисел от <code>1</code> до <code>9</code>.'
);

result(<<<'PHP'
<?
$br = '<br>';
echo '<p>' . 1 . $br;
for ($i = 2; $i <= 9; $i++) 
{
    echo $i . $br;
}
echo '</p>';
?>
PHP);

endLesson();

startLesson('Атрибуты тегов');

task(
    1,
    'С помощью тега <code>img</code> выведите на экран какую-нибудь картинку.'
);

result(<<<'PHP'
<?
$src = '/resources/img/mem1.jpg';
$alt = 'Лето в стиле Тони Сопрано (ссоры с семьей и приступы паники)';
$width = '100%';
$height = 'auto';

echo '<p><img src="' . $src . '" height="' . $height . '" width="' . $width . '" alt="' . $alt . '"></p>';
?>
PHP);

task(
    2,
    'С помощью тега <code>input</code> выведите на экран инпут с каким-нибудь текстом.'
);

result(<<<'PHP'
<?
$text = 'Какой-нибудь текст';
echo '<input type="text" value="' . $text . '">';
?>
PHP);

task(
    3,
    'С помощью тега <code>textarea</code> выведите на экран многострочное поле ввода с каким-нибудь текстом.'
);

result(<<<'PHP'
<?
$text = 'Какой-нибудь текст';
echo '<textarea>' . $text . '</textarea>';
?>
PHP);

endLesson();

startLesson('Логические значения');

task(
    1,
    'Присвойте переменной значение <code>true</code>. Выведите эту переменную на экран.'
);

result(<<<'PHP'
<?
$isAdult = true;
echo '<p>' . $isAdult . '</p>';
?>
PHP);

task(
    2,
    'Присвойте переменной значение <code>false</code>. Выведите эту переменную на экран.'
);

result(<<<'PHP'
<?
$isAdult = false;
echo '<p>' . $isAdult . '</p>';
?>
PHP);

endLesson();

startLesson('Значение null');

task(
    1,
    'Присвойте переменной значение <code>null</code>. Выведите эту переменную на экран.'
);

result(<<<'PHP'
<?
$a = null;
echo '<p>' . $a . '</p>';
?>
PHP);

task(
    2,
    'Выведите на экран значение любой необъявленной переменной.'
);

result(<<<'PHP'
<?
echo '<p>' . $reed . '</p>';
?>
PHP);

endLesson();

startLesson('Автоматическое преобразование типов');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$a = '1';
$b = '2';
echo $a + $b + '3';
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Автоматическое преобразование к строке');

task(
    1,
    'Даны три переменные:<br>Сложите значения этих переменных как строки.',
    <<<'PHP'
<?
$a = 1;
$b = 2;
$c = 3;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Нюансы преобразования к строке');

task(
    1,
    'Автор кода хотел сложить числа <code>3</code> и <code>4</code> как строки:<br>Код, однако, работает неверно.
    Исправьте ошибку автора кода.',
    <<<'PHP'
<?
echo 3.4;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Преобразование к числу');

task(
    1,
    'Преобразуйте следующую строку в число:',
    <<<'PHP'
<?
$test = '12345';
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Преобразование к дроби');

task(
    1,
    'Преобразуйте следующую строку в число:',
    <<<'PHP'
<?
$test = '12.345';
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Преобразование дроби к целому');

task(
    1,
    'Преобразуйте следующую строку в целое число:',
    <<<'PHP'
<?
$test = '12.345';
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Преобразование числа к строке');

task(
    1,
    'Преобразуйте следующее число в строку:',
    <<<'PHP'
<?
$test = 12345;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Преобразуйте следующее число в строку:',
    <<<'PHP'
<?
$test = 12.345;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Символы строки');

task(
    1,
    'Дана строка:<br>Обращаясь к отдельным символам этой строки выведите на экран символ <code>\'a\'</code>,
    символ <code>\'c\'</code>, символ <code>\'e\'</code>.',
    <<<'PHP'
<?
$str = 'abcde';
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Дана строка:<br>Выведите ее последний символ.',
    <<<'PHP'
<?
$str = 'abcde';
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    3,
    'Дана строка:<br>Обращаясь к отдельным символам этой строки запишите в новую переменную символы этой строки в
    обратном порядке, то есть <code>\'edcba\'</code>.',
    <<<'PHP'
<?
$str = 'abcde';
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    4,
    'Даны переменные:<br>Выведите на экран символ, номер которого хранится в переменной <code>$num</code>.',
    <<<'PHP'
<?
$str = 'abcde';
$num = 3;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Цифры в строке');

task(
    1,
    'Дана строка <code>\'12345\'</code>. Найдите сумму цифр этой строки.'
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Обращение к цифрам числа');

task(
    1,
    'Дано число <code>12345</code>. Найдите сумму цифр этого числа.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Дано число <code>12345</code>. Найдите произведение цифр этого числа.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    3,
    'Дано число <code>12345</code>. Переставьте цифры этого числа в обратном порядке.'
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Нюансы работы с операцией присваивания');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num = 1;
$num = $num + 1;
$num = $num + 1;
echo $num;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num = 1;
$num = $num + 2;
$num = $num + 3;
echo $num;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Сокращенные операции');

task(
    1,
    'Упростите приведенный код через сокращенные операции:',
    <<<'PHP'
<?
$num = 47;
$num = $num + 7;
$num = $num - 18;
$num = $num * 10;
$num = $num / 15;
echo $num;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Упростите приведенный код через сокращенные операции:',
    <<<'PHP'
<?
$str = 'a';
$str = $str . 'b';
$str = $str . 'c';
echo $str;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Инкременация');

task(
    1,
    'Переделайте этот код так, чтобы в нем были операции инкремента и декремента:',
    <<<'PHP'
<?
$num = 10;
$num = $num + 1;
$num = $num + 1;
$num = $num - 1;
echo $num;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Префиксный и постфиксный тип');

task(
    1,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num = 3;
echo ++$num;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num = 3;
echo $num++;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    3,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num = 3;
echo --$num;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    4,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num = 3;
echo $num--;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    5,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num1 = 3;
$num2 = ++$num1;
echo $num1;
echo $num2;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    6,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num1 = 3;
$num2 = $num1++;
echo $num1;
echo $num2;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    7,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num1 = 3;
$num2 = --$num1;
echo $num1;
echo $num2;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    8,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num1 = 3;
$num2 = $num1--;
echo $num1;
echo $num2;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    9,
    'Не запуская код, определите, что выведется на экран:',
    <<<'PHP'
<?
$num1 = 3;
$num1++;
$num2 = $num1--;
echo $num1++;
echo --$num2;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Практика на поиск ошибок');

task(
    1,
    'Код должен получить последний символ строки:',
    <<<'PHP'
<?
$str = 'abc';
echo $str[3];
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Код должен находить сумму чисел:',
    <<<'PHP'
<?
$num1 = 1;
$num2 = 2;
var_dump('result: ' + $num1 + $num2);
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    3,
    'Код должен вывести первую цифру числа:',
    <<<'PHP'
<?
$num = 123;
echo $num[0];
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    4,
    'Код должен получить последний символ строки:',
    <<<'PHP'
<?
$str = 'abc def';
echo $str[5]; // ожидаем 'f'
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    5,
    'Код должен найти сумму чисел:',
    <<<'PHP'
<?
$num1 = 1;
$num2 = 2;
$num3 = 3;
echo $num1 + $num2 + $num2; // должно вывести 6
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    6,
    'Код должен сложить числа как строки:',
    <<<'PHP'
<?
echo 1. 2; // должно быть '12'
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    7,
    'Код должен получить количество символов в строке:<br>Автор кода ожидал, что выведется <code>6</code>, но
    выводится <code>7</code>. В чем ошибка автора кода?',
    <<<'PHP'
<?
$str = 'abc def';
echo strlen($str); // выводит 7
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    8,
    'Код должен был вывести в консоль число <code>1</code>, но выводит <code>0</code>:',
    <<<'PHP'
<?
$a = 0;
echo $a++;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    9,
    'Код должен найти сумму первой и второй цифры числа:',
    <<<'PHP'
<?
$num = 123;
echo $num[0] . $num[1];
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    10,
    'Код должен найти длину строки:',
    <<<'PHP'
<?
$str = 'abc';
echo str_len($str);
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    11,
    'Код должен найти количество секунд в сутках:',
    <<<'PHP'
<?
$a = 24 / 60 / 60;
echo $a;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    12,
    'Код должен сложить две дроби:',
    <<<'PHP'
<?
echo 1. 2 + 1. 3; // должно быть 2.5
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    13,
    'Код должен получить последний символ строки:',
    <<<'PHP'
<?
$str = 'abc';
echo $str[strlen($str)];
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    14,
    'Код должен найти сумму всех цифр числа:',
    <<<'PHP'
<?
$num = (str) 123;
echo $num[1] + $num[2] + $num[3];
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    15,
    'Код должен найти сумму чисел:',
    <<<'PHP'
<?
$a = 123;
$b = 456;
$s = $a . $b;
echo $s;
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

task(
    16,
    'Код должен найти сумму двух дробей:',
    <<<'PHP'
<?
$num1 = (int) '2.5';
$num2 = (int) '3.5';
echo $num1 + $num2; // ожидаем 6
?>
PHP
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Практика на операции');

task(
    1,
    'Найдите количество секунд в сутках.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Найдите количество секунд в <code>30</code> сутках.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    3,
    'Найдите количество секунд в году.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    4,
    'Найдите количество минут в сутках.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    5,
    'Найдите количество минут в году.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    6,
    'Найдите количество байт в мегабайте.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    7,
    'Найдите количество байт в гигабайте.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    8,
    'Найдите количество байт в <code>10</code> гигабайтах.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    9,
    'Найдите количество байт в терабайте.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    10,
    'Найдите количество килобайт в терабайте.'
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

startLesson('Практика на формулы');

task(
    1,
    'Пусть дана переменная <code>$r</code> с радиусом круга. По соответствующей формуле найдите площадь круга и
    запишите ее в переменную <code>$s</code>. Выведите содержимое этой переменной на экран.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    2,
    'Пусть дана переменная <code>$a</code> со стороной квадрата. Найдите площадь квадрата и запишите ее в переменную
    <code>$s</code>. Выведите содержимое этой переменной на экран.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    3,
    'Пусть даны переменные <code>$a</code> и <code>$b</code> со сторонами прямоугольника. Найдите площадь
    прямоугольника и запишите ее в переменную <code>$s</code>. Выведите содержимое этой переменной на экран.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    4,
    'Пусть даны переменные <code>$a</code> и <code>$b</code> со сторонами прямоугольника. Найдите периметр
    прямоугольника и запишите его в переменную <code>$p</code>. Выведите содержимое этой переменной на экран.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    5,
    'Пусть дана переменная <code>$tc</code> с температурой в градусах Цельсия. По соответствующей формуле выполните
    перевод этой температуры в градусы Фаренгейта.'
);

result(<<<'PHP'
<?

?>
PHP);

task(
    6,
    'Пусть дана переменная <code>$tf</code> с температурой в градусах Фаренгейта. По соответствующей формуле
    выполните перевод этой температуры в градусы Цельсия.'
);

result(<<<'PHP'
<?

?>
PHP);

endLesson();

?>
