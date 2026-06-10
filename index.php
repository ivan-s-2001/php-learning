<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные PHP</title>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
<div class="page">
    <h1>
        <a href="https://code.mu/ru/php/book/prime/" target="_blank">
            Основной учебник PHP8+
        </a>
    </h1>

    <h2>1. Введение в язык</h2>

    <div class="lesson">
        <h3>Изменения значений переменных в PHP</h3>

        <div class="task">
            <h4>Задание №1</h4>

            <p>
                Создайте переменную <code>$a</code>. Запишите в нее значение <code>10</code>,
                выведите его на экран. Затем запишите в нее значение <code>20</code>,
                выведите его на экран.
            </p>

            <div class="result">
                <?
                $a = 10;
                ?>
                <p>$a = <?= $a ?></p>

                <?
                $a = 20;
                ?>
                <p>$a = <?= $a ?></p>
            </div>
        </div>
    </div>

    <div class="lesson">
        <h3>Математические операции с числами в PHP</h3>

        <div class="task">
            <h4>Задание №1</h4>

            <p>
                Создайте переменную <code>$a</code>. Запишите в нее сумму чисел
                <code>1</code>, <code>2</code> и <code>3</code>. Выведите на экран
                содержимое переменной <code>$a</code>.
            </p>

            <div class="result">
                <?
                $a = 1 + 2 + 3;
                ?>
                <p>1 + 2 + 3 = <?= $a ?></p>
            </div>
        </div>

        <div class="task">
            <h4>Задание №2</h4>

            <p>
                Создайте переменную <code>$a</code> со значением <code>10</code>
                и переменную <code>$b</code> со значением <code>2</code>.
                Выведите на экран их сумму, разность, произведение и частное.
            </p>

            <div class="result">
                <?
                $a = 10;
                $b = 2;
                ?>
                <p><?= $a ?> + <?= $b ?> = <?= $a + $b ?></p>
                <p><?= $a ?> - <?= $b ?> = <?= $a - $b ?></p>
                <p><?= $a ?> * <?= $b ?> = <?= $a * $b ?></p>
                <p><?= $a ?> / <?= $b ?> = <?= $a / $b ?></p>
            </div>
        </div>

        <div class="task">
            <h4>Задание №3</h4>

            <p>
                Создайте переменную <code>$c</code> со значением <code>10</code>
                и переменную <code>$d</code> со значением <code>5</code>.
                Просуммируйте их, а результат присвойте переменной <code>$res</code>.
                Выведите на экран значение переменной <code>$res</code>.
            </p>

            <div class="result">
                <?
                $c = 10;
                $d = 5;
                $res = $c + $d;
                ?>
                <p>$res = <?= $res ?></p>
            </div>
        </div>

        <div class="task">
            <h4>Задание №4</h4>

            <p>
                Создайте переменную <code>$a</code> со значением <code>1</code>,
                переменную <code>$b</code> со значением <code>2</code> и переменную
                <code>$c</code> со значением <code>3</code>. Выведите на экран их сумму.
            </p>

            <div class="result">
                <?
                $a = 1;
                $b = 2;
                $c = 3;
                ?>
                <p>
                    $a + $b + $c = <?= $a + $b + $c ?>
                </p>
            </div>
        </div>

        <div class="task">
            <h4>Задание №5</h4>

            <p>
                Создайте переменную <code>$a</code> со значением <code>10</code>
                и переменную <code>$b</code> со значением <code>5</code>.
                Отнимите от <code>$a</code> переменную <code>$b</code> и результат
                присвойте переменной <code>$c</code>. Затем создайте переменную
                <code>$d</code>, присвойте ей значение <code>7</code>. Сложите
                переменные <code>$c</code> и <code>$d</code>, а результат запишите
                в переменную <code>$res</code>.
            </p>

            <div class="result">
                <?
                $a = 10;
                $b = 5;
                $c = $a - $b;
                $d = 7;
                $res = $c + $d;
                ?>
                <p>$res = <?= $res ?></p>
            </div>
        </div>
    </div>

    <div class="lesson">
        <h3>Дроби в PHP</h3>

        <div class="task">
            <h4>Задание №1</h4>

            <p>
                Запишите в переменную <code>$a</code> число <code>1.5</code>,
                а в переменную <code>$b</code> число <code>0.75</code>.
                Найдите сумму значений этих переменных и выведите ее на экран.
            </p>

            <div class="result">
                <?
                $a = 1.5;
                $b = 0.75;
                ?>
                <p><?= $a ?> + <?= $b ?> = <?= $a + $b ?></p>
            </div>
        </div>
    </div>
    <div class="lesson">
        <h3>Отрицательные числа в PHP</h3>

        <div class="task">
            <h4>Задание №1</h4>

            <p>
                Создайте переменную <code>$a</code> со значением <code>-100</code>. Выведите это значение на экран.
            </p>

            <div class="result">
                <?
                $a = -100;
                ?>
                <p>$a = <?= $a ?></p>
            </div>
        </div>
        <div class="task">
            <h4>Задание №2</h4>

            <p>
                Создайте переменную <code>$a</code>, запишите в нее какое-нибудь положительное или отрицательное число. Выведите на экран это число с обратным знаком.
            </p>

            <div class="result">
                <?
                $a = -100;
                ?>
                <p>$a = <?= -$a ?></p>
            </div>
        </div>
    </div>
    <div class="lesson">
        <h3>Остаток от деления в PHP</h3>
        <div class="hint">
            <p>
                Существует специальный оператор <code>%</code>, с помощью которого можно найти остаток от деления одного числа на другое.
            </p>
        </div>
        <div class="task">
            <h4>Задание №1</h4>
            <p>
                Дана переменная <code>$a</code> со значением <code>10</code> и переменная <code>$b</code> со значением <code>3</code>. Найдите остаток от деления <code>$a</code> на <code>$b</code>.
            </p>
            <div class="result">
                <?
                $a = 10;
                $b = 3;
                ?>
                <p><?= $a ?> % <?= $b ?> = <?= $a % $b ?></p>
            </div>
        </div>
    </div>
    <div class="lesson">
        <h3>Возведение в степень в PHP</h3>
        <div class="hint">
            <p>
                Для возведения числа в степень также существует специальный оператор <code>**</code>.
            </p>
        </div>
        <div class="task">
            <h4>Задание №1</h4>

            <p>
                Возведите число <code>2</code> в <code>10-ю степень</code>. Выведите результат на экран.
            </p>

            <div class="result">
                <?
                $a = 2;
                $b = 10;
                ?>
                <p><?= $a ?><sup><?= $b ?></sup> = <?= $a ** $b ?></p>
            </div>
        </div>
    </div>
    <div class="lesson">
        <h3>Приоритет возведения в степень в PHP</h3>
        <div class="hint">
            <p>
                Операция возведения в степень имеет приоритет перед умножением и делением. В следующем примере вначале выполнится возведение в степень, а затем умножение.
            </p>
        </div>
        <div class="task">
            <h4>Задание №1</h4>
            <p>
                Запишите примеры:
            </p>
            <div class="result">
                <p>2 * 2<sup>3</sup> = <?= 2 * 2 ** 3 ?></p>
                <p>3 * 2<sup>3</sup> = <?= 3 * 2 ** 3 ?></p>
                <p>(3 * 2)<sup>3</sup> = <?= (3 * 2) ** 3 ?></p>
                <p>3 * 2<sup>(3+1)</sup> = <?= 3 * 2 ** (3 + 1) ?></p>
                <p>2<sup>3</sup> * 3 = <?= 2 ** 3 * 3 ?></p>
                <p>3 * 2<sup>3</sup> * 3 = <?= 3 * 2 ** 3 * 3 ?></p>
            </div>
        </div>
    </div>
    <div class="lesson">
        <h3>Сложение строк в PHP</h3>
        <div class="hint">
            <p>
                Для сложения (конкатенации) строк используется оператор точка: <code>$str . 'def'</code>
            </p>
        </div>
        <div class="task">
            <h4>Задание №1</h4>
            <p>
                Создайте переменную <code>$str</code> и присвойте ей строку <code>'hello'</code>. Выведите значение этой переменной на экран.
            </p>
            <div class="result">
                <?
                $str = 'hello';
                ?>
                <p>$str = <?= $str ?></p>
            </div>
        </div>
        <div class="task">
            <h4>Задание №2</h4>
            <p>
                Создайте переменную с текстом <code>'abc'</code> и переменную с текстом <code>'def'</code>. С помощью этих переменных и операции сложения строк выведите на экран строку <code>'abcdef'</code>.
            </p>
            <div class="result">
                <?
                $str1 = 'abc';
                $str2 = 'def';
                ?>
                <p> <?= $str1 . $str2 ?></p>
            </div>
        </div>
        <div class="lesson">
            <h3>Пробелы при сложении строк в PHP</h3>
            <div class="hint">
                <p>
                    Пусть две строки хранятся в переменных, а при их сложении мы хотим вставить между ними пробел. Это делается так: <code>$str1 . ' ' . $str2</code><br>
                    Пусть переменная только одна: <code>$str . ' ' . 'def'</code>
                </p>
            </div>
            <div class="task">
                <h4>Задание №1</h4>
                <p>
                    Создайте переменную с текстом <code>'hello'</code> и переменную с текстом <code>'world'</code>. С помощью этих переменных и операции сложения строк выведите на экран строку <code>'hello world'</code>.
                </p>
                <div class="result">
                    <?
                    $str1 = 'hello';
                    $str2 = 'world';
                    ?>
                    <p> <?= $str1 . ' ' . $str2 ?></p>
                </div>
            </div>
        </div>
        <div class="lesson">
            <h3>Длина строки в PHP</h3>
            <div class="hint">
                <p>
                    Количество символов строки можно найти с помощью функции <code>strlen</code>
                </p>
            </div>
            <div class="task">
                <h4>Задание №1</h4>

                <p>
                    Запишите в переменную какую-нибудь строку. Выведите на экран длину вашей строки.
                </p>

                <div class="result">
                    <?
                    $str = 'hello world!';
                    ?>
                    <p>Строка: <?= $str ?></p>
                    <p>Длина строки: <?= strlen($str) ?></p>
                </div>
            </div>
        </div>
        <div class="lesson">
            <h3>Проблема с кириллицей в PHP</h3>
            <div class="hint">
                <p>
                    Функция <code>strlen</code>, как и многие другие строковые функции PHP, некорректно работает с кириллицей - она каждую кириллическую букву считает два раза.<br>
                    Поэтому для строк, которые содержат или потенциально могут содержать проблемные символы, используйте функцию <code>mb_strlen</code> - она будет работать корректно
                </p>
            </div>
            <div class="task">
                <h4>Задание №1</h4>
                <p>
                    Запишите в переменную какую-нибудь строку. Выведите на экран длину вашей строки.
                </p>

                <div class="result">
                    <?
                    $str = 'привет мир!';
                    ?>
                    <p>Строка: <?= $str ?></p>
                    <p>strlen(<?= $str ?>): <?= strlen($str) ?></p>
                    <p>mb_strlen(<?= $str ?>): <?= mb_strlen($str) ?></p>
                </div>
            </div>
        </div>
        <div class="lesson">
            <h3>Работа с HTML тегами в PHP</h3>
            <div class="task">
                <h4>Задание №1</h4>
                <p>
                    С помощью тега <code>i</code> выведите на экран курсивный текст.
                </p>

                <div class="result">
                    <?
                    $str = 'привет мир!';
                    $open = '<i>';
                    $close = '</i>';
                    ?>
                    <p><?= $open . $str . $close ?></p>
                </div>
                <h4>Задание №2</h4>
                <p>
                    С помощью тега <code>br</code> выведите на экран столбец чисел от 1 до 9.
                </p>

                <div class="result">

                    <p>
                        <?
                        $i = 1;
                        echo $i;
                        $i++;
                        for ($i = 2; $i < 10; $i++) {
                            echo "<br>{$i}";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="lesson">
                <h3>Работа с HTML тегами в PHP</h3>
                <div class="task">
                    <h4>Задание №1</h4>
                    <p>
                        С помощью тега <code>img</code> выведите на экран какую-нибудь картинку.
                    </p>

                    <div class="result">
                        <?
                        $src = 'resources/img/mem1.jpg';
                        $alt = 'Лето в стиле Тони Сопрано (ссоры с семьей и приступы паники)';
                        $width = '100%';
                        $height = 'auto';
                        ?>
                        <p><?= '<img src=' . $src . ' height=' . $height . ' width=' . $width . ' alt=' . $alt . '>'  ?></p>
                    </div>
                </div>
                <div class="task">
                    <h4>Задание №2</h4>
                    <p>
                        С помощью тега <code>input</code> выведите на экран инпут с каким-нибудь текстом.
                    </p>

                    <div class="result">
                        <?
                        $type = 'text';
                        $value = 'текст из кода';
                        $placeholder = 'тут текст из кода';
                        $name = 'demo';
                        ?>
                        <p><?= '<input type=\''. $type .'\' value=\''. $value .'\' placeholder=\''. $placeholder .'\' name=\''. $name .'\'>' ?></p>
                    </div>
                </div>
                <div class="task">
                    <h4>Задание №3</h4>
                    <p>
                        С помощью тега <code>textarea</code> выведите на экран многострочное поле ввода с каким-нибудь текстом. 
                    </p>

                    <div class="result">
                        <?
                        $textareaValue = 'Это текст из PHP кода';
                        ?>
                        <p><?= '<textarea>' . $textareaValue . '</textarea>' ?></p>
                    </div>
                </div>
            </div>
            <div class="lesson">
                <h3>Логические значения в PHP</h3>
                <div class="hint">
                    <?php
                    $code = <<< a123
                    <?php
                    echo true;  // выведет 1
                    echo false; // выведет пустоту
                    ?>
                    a123;
                    highlight_string($code);
                    ?>
                </div>
                <div class="task">
                    <h4>Задание №1</h4>
                    <p>
                        Присвойте переменной значение <code>true</code>. Выведите эту переменную на экран. 
                    </p>

                    <div class="result">
                        <?
                        $isAdult = true;
                        ?>
                        <p><?= $isAdult ?></p>
                    </div>
                </div>
                <div class="task">
                    <h4>Задание №2</h4>
                    <p>
                        Присвойте переменной значение <code>false</code>. Выведите эту переменную на экран. 
                    </p>

                    <div class="result">
                        <?
                        $isAdult = false;
                        ?>
                        <p><?= $isAdult ?></p>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>