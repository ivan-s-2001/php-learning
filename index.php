<?php

include __DIR__ . '/src/layout.php';

mb_internal_encoding('UTF-8');

startPage('1. Введение в язык');


startLesson('Изменения значений переменных в PHP');

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


startLesson('Математические операции с числами в PHP');

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


startLesson('Дроби в PHP');

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


startLesson('Отрицательные числа в PHP');

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


startLesson('Остаток от деления в PHP');

hint(
        'Существует специальный оператор <code>%</code>, с помощью которого можно найти
    остаток от деления одного числа на другое.'
);

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


startLesson('Возведение в степень в PHP');

hint(
        'Для возведения числа в степень также существует специальный оператор <code>**</code>.'
);

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


startLesson('Приоритет возведения в степень в PHP');

hint(
        'Операция возведения в степень имеет приоритет перед умножением и делением.
    В следующем примере вначале выполнится возведение в степень, а затем умножение.'
);

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


startLesson('Сложение строк в PHP');

hint(
        'Для сложения, или конкатенации, строк используется оператор точка:
    <code>$str . \'def\'</code>.'
);

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


startLesson('Пробелы при сложении строк в PHP');

hint(
        'Пусть две строки хранятся в переменных, а при их сложении нужно вставить
    между ними пробел. Это делается так: <code>$str1 . \' \' . $str2</code>.<br>
    Если переменная только одна: <code>$str . \' \' . \'def\'</code>.'
);

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


startLesson('Длина строки в PHP');

hint(
        'Количество символов строки можно найти с помощью функции <code>strlen</code>.'
);

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


startLesson('Проблема с кириллицей в PHP');

hint(
        'Функция <code>strlen</code>, как и многие другие строковые функции PHP,
    некорректно работает с кириллицей — она каждую кириллическую букву считает
    два раза.<br>
    Поэтому для строк, которые содержат или потенциально могут содержать
    проблемные символы, используйте функцию <code>mb_strlen</code>.'
);

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


startLesson('Работа с HTML тегами в PHP');

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


startLesson('Работа с HTML тегами в PHP');

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


startLesson('Логические значения в PHP');

hint(
        '<pre><code>echo true;  // выведет 1
echo false; // выведет пустоту</code></pre>'
);

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

startLesson('Значение null в PHP');

hint(
    'В PHP существует еще одно специальное значение <code>null</code>, которое обозначает "ничего".'
);


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