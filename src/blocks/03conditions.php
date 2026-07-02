<?

$solutionDir = 'solutions/03conditions';

startLesson('Конструкция if-else в PHP');

text('Сейчас мы изучим специальную конструкцию
	<code>if-else</code>, которая позволяет выполнять
	некоторый код в зависимости от выполнения
	какого-либо условия. Синтаксис конструкции
	выглядит так:');

codeBlock(<<<'PHP'
<?
	if (операция сравнения) {
		/*
			расположенный здесь код выполнится,
			если результат операция сравнения верный
		*/
	} else {
		/*
			расположенный здесь код выполнится,
			если результат операция сравнения неверный
		*/
	}
?>
PHP
);

startLesson('Операторы больше и меньше в PHP');

text('Для проверки того, которое из значений больше,
	а которое меньше, используются операторы
	больше <code>></code>, больше или равно <code>>=</code>,
	меньше <code><</code>, меньше или равно <code><=</code>.');

text('Изучим их работу на практическом примере.
	Пусть у нас есть переменная <code>$test</code>
	с каким-то значением:');

codeBlock(<<<'PHP'
<?
	$test = 1;
?>
PHP
);

text('Давайте проверим, значение этой переменной
	больше нуля или нет:');

codeBlock(<<<'PHP'
<?
	$test = 1;
	
	if ($test > 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP
);

text('А теперь поменяем значение переменной на
	отрицательное:');

codeBlock(<<<'PHP'
<?
	$test = -1; // поменяем значение переменной
	
	if ($test > 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP
);

text('Пусть теперь значение переменной равно <code>0</code>.
	В этом случае мы попадем в блок <code>else</code>,
	так как в нашем условии написано, что переменная
	<code>$test</code> должна быть строго больше нуля:');

codeBlock(<<<'PHP'
<?
	$test = 0;
	
	if ($test > 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP
);

text('Давайте поменяем условие на больше или равно:');

codeBlock(<<<'PHP'
<?
	$test = 0;
	
	if ($test >= 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		больше <code>10</code>.',
    'solution' => $solutionDir . '/solution_68_1.php'
]);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		меньше <code>10</code>.',
    'solution' => $solutionDir . '/solution_68_2.php'
]);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		больше или равна <code>10</code>.',
    'solution' => $solutionDir . '/solution_68_3.php'
]);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		меньше или равна <code>10</code>.',
    'solution' => $solutionDir . '/solution_68_4.php'
]);

startLesson('Проверка на равенство в PHP');

text('Для проверки двух значений на равенство используется
	оператор <code>==</code>. Давайте для примера проверим,
	что переменная <code>$test</code> равна <code>0</code>:');

codeBlock(<<<'PHP'
<?
	$test = 0; // пусть значение переменной равно 0
	
	if ($test == 0) {
		echo '+++'; // сработает это, так как переменная равна 0
	} else {
		echo '---';
	}
?>
PHP
);

text('Поменяем значение переменной так, чтобы условие
	не выполнялось:');

codeBlock(<<<'PHP'
<?
	$test = 1; // пусть значение переменной равно 1
	
	if ($test == 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как переменная НЕ равна 0
	}
?>
PHP
);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		равна <code>10</code>.',
    'solution' => $solutionDir . '/solution_69_1.php'
]);

startLesson('Проверка на неравенство в PHP');

text('Существует также оператор <code>!=</code>, который
	наоборот, проверяет на неравенство. Давайте
	для примера проверим, что <code>test</code> переменная
	не равна <code>0</code>:');

codeBlock(<<<'PHP'
<?
	$test = 1; // пусть значение переменной равно 1
	
	if ($test != 0) {
		echo '+++'; // сработает это, так как переменная НЕ равна 0
	} else {
		echo '---';
	}
?>
PHP
);

text('Поменяем значение переменной:');

codeBlock(<<<'PHP'
<?
	$test = 0; // пусть значение переменной равно 0
	
	if ($test != 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как переменная равна 0
	}
?>
PHP
);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		не равна <code>10</code>.',
    'solution' => $solutionDir . '/solution_70_1.php'
]);

startLesson('Сравнение переменных в PHP');

text('В примерах выше мы сравнивали переменную
	с каким-то числом. Но никто не запрещает
	нам сравнивать две переменные.');

text('Смотрите пример:');

codeBlock(<<<'PHP'
<?
	$test1 = 1;
	$test2 = 2;
	
	if ($test2 > $test1) {
		echo '+++'; // сработает это, так как $test2 больше $test1
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Даны переменные <code>$test1</code> и <code>$test2</code>.
		Проверьте, что значение какой из этих переменных
		больше и выведите соответствующее сообщение
		на экран.',
    'solution' => $solutionDir . '/solution_71_1.php'
]);

startLesson('Типы данных и конструкция if-else в PHP');

text('При использовании конструкции <code>if</code> можно
	сравнивать и строки. Для примера пусть в
	переменной <code>$test</code> хранится какая-то
	строка, например такая:');

codeBlock(<<<'PHP'
<?
	$test = 'abc';
?>
PHP
);

text('Давайте проверим, равно ли содержимое переменной
	<code>$test</code> строке <code>\'abc\'</code>:');

codeBlock(<<<'PHP'
<?
	$test = 'abc';
	
	if ($test == 'abc') {
		echo '+++'; // сработает это, так как переменная равна 'abc'
	} else {
		echo '---';
	}
?>
PHP
);

startLesson('Числа в кавычках в PHP');

text('Как вы знаете, число в кавычках представляет
	собой строку. Например, <code>\'3\'</code> - это
	строка. Однако, при сравнении таких строк
	с настоящими числами PHP считает, что строка
	в кавычках равна такому же числу.');

text('Давайте для примера сравним строку <code>\'3\'</code>
	и число <code>3</code>:');

codeBlock(<<<'PHP'
<?
	if ('3' == 3) {
		echo '+++'; // сработает это - значения равны
	} else {
		echo '---';
	}
?>
PHP
);

startLesson('Равенство по значению и типу в PHP');

text('Пусть вы хотите сравнивать так, чтобы число

	в кавычках не было равно такому же числу

	без кавычек. Говоря другими словами, вы хотите

	сравнивать так, чтобы сравнение было не только

	по значению, но и по типу данных. Для этого

	вместо оператора <code>==</code> следует использовать

	оператор <code>===</code>. Сравнение с таким оператором

	называется <dfn>строгим</dfn>.');

text('Смотрите пример:');

codeBlock(<<<'PHP'
<?
	if ('3' === 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, тк значения не равны по типу
	}
?>
PHP
);

text('А вот при сравнении двух строк <code>\'3\'</code>

	на экран выведется <code>\'+\'</code>:');

codeBlock(<<<'PHP'
<?
	if ('3' === '3') {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP
);

text('Так же, как и при сравнении чисел:');

codeBlock(<<<'PHP'
<?
	if (3 === 3) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP
);

text('Разница между двумя операторами проявляется

	именно тогда, когда значения одинаковые,

	но разный тип данных. В остальных случаях

	эти операторы работают одинаково. К примеру,

	при сравнении разных чисел, конечно же, выведется

	минус:');

codeBlock(<<<'PHP'
<?
	if (2 === 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP
);

text('В настоящее время в PHP общепринято везде

	использовать строгое сравнение.

	Считается, что в этом случае код менее подвержен

	ошибкам.');

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 == $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_74_1.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 === $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_74_2.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 == $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_74_3.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 === $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_74_4.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = 3;
	$test2 = 3;
		
	if ($test1 === $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_74_5.php'
]);

startLesson('Неравенство по значению и типу в PHP');

text('Кроме оператора <code>!=</code> существует также
	оператор <code>!==</code>, учитывающий тип при
	сравнении. Давайте рассмотрим различия между
	ними на примерах.');

text('Пусть с помощью оператора <code>!=</code> сравниваются
	два числа <code>3</code>. Данный оператор сравнивает
	значения на то, что они НЕ равны. Так как
	наши значения как раз-таки равны, то на экран
	выведется <code>\'-\'</code>:');

codeBlock(<<<'PHP'
<?
	if (3 != 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны
	}
?>
PHP
);

text('Пусть теперь одно из наших значений будет
	в кавычках. В этом случае оператор <code>!=</code>
	все равно посчитает их равными (так как совпадает
	значение, а тип не важен для данного оператора)
	и опять выведет <code>\'-\'</code>:');

codeBlock(<<<'PHP'
<?
	if ('3' != 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны
	}
?>
PHP
);

text('Давайте теперь сравним два числа <code>3</code>
	с помощью оператора <code>!==</code>. Он также
	посчитает их равными и выведет <code>\'-\'</code>:');

codeBlock(<<<'PHP'
<?
	if (3 !== 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны
	}
?>
PHP
);

text('А вот если теперь одну из троек взять в кавычки,
	то оператор <code>!==</code> посчитает наши тройки
	неравными, так как, хотя значения их и совпадают,
	но у них разный тип:');

codeBlock(<<<'PHP'
<?
	if ('3' !== 3) {
		echo '+++'; // сработает это, так как значения НЕ равны
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 != $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_75_1.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = '3';
	$test2 = '3';
		
	if ($test1 !== $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_75_2.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 != $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_75_3.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = 3;
	$test2 = '3';
		
	if ($test1 !== $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_75_4.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test1 = 3;
	$test2 = 2;
		
	if ($test1 !== $test2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_75_5.php'
]);

startLesson('Нюансы при сравнении типов данных в PHP');

text('Обратите внимание на следующий код:');

codeBlock(<<<'PHP'
<?
	if (0 == '') {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP
);

text('И на следующий:');

codeBlock(<<<'PHP'
<?
	if (0 == '0') {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP
);

startLesson('Сложные условия в if-else в PHP');

text('Иногда может быть нужно составить какое-то
	сложное условие. Для этого существуют операторы
	<code>and</code> (логическое <code>И</code>) и <code>or</code>
	(логическое <code>ИЛИ</code>).');

startLesson('Логическое И в PHP');

text('Логическое <code>И</code> позволяет задать одновременность
	условий. В следующем примере условие выполнится,
	если переменная <code>$num</code> больше нуля и
	<i>одновременно</i> меньше <code>10</code>:');

codeBlock(<<<'PHP'
<?
	$num = 3;
	
	if ($num > 0 and $num < 10) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Условия могут налагаться не на одну переменную,
	а на разные. В следующем примере условие
	выполнится, если переменная <code>$num1</code>
	равна <code>2</code> и одновременно переменная
	<code>$num2</code> равна <code>3</code>:');

codeBlock(<<<'PHP'
<?
	$num1 = 2;
	$num2 = 3;
	
	if ($num1 == 2 and $num2 == 3) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Проверьте то, что переменная <code>$num</code>
		больше нуля и меньше <code>5</code>.',
    'solution' => $solutionDir . '/solution_78_1.php'
]);

task([
    'text' => 'Проверьте то, что переменная <code>$num</code>
		больше или равна <code>10</code> и меньше или равна
		<code>20</code>.',
    'solution' => $solutionDir . '/solution_78_2.php'
]);

task([
    'text' => 'Проверьте то, что переменная <code>$num1</code>
		равна или меньше <code>1</code>, а переменная <code>$num2</code>
		больше или равна <code>3</code>.',
    'solution' => $solutionDir . '/solution_78_3.php'
]);

startLesson('Логическое ИЛИ в PHP');

text('Логическое <code>ИЛИ</code> требует выполнения
	хотя бы одного условия. В следующем примере
	условие выполнится, если переменная <code>$num1</code>
	больше <code>0</code> или переменная <code>$num2</code>
	больше <code>0</code> (достаточно выполнения хотя
	бы одного из условий):');

codeBlock(<<<'PHP'
<?
	$num1 = 10;
	$num2 = -5;
	
	if ($num1 > 0 or $num2 > 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = -10;
	$num2 = -10;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_1.php'
]);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 0;
	$num2 = 0;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_2.php'
]);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 0;
	$num2 = 5;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_3.php'
]);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = 5;
	$num2 = 5;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_4.php'
]);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num1 = -5;
	$num2 = 15;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_5.php'
]);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num = 1;
	
	if ($num == 0 or $num == 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_6.php'
]);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num = 2;
	
	if ($num == 0 or $num == 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_7.php'
]);

task([
    'text' => 'Не запуская код определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$num = 2;
	
	if ($num == 0 or $num == 1 or $num == 2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_79_8.php'
]);

startLesson('Приоритет операций сравнения в PHP');

text('Операция <code>and</code> имеет приоритет над <code>or</code>.
	В следующем примере условие сработает, если
	переменная <code>$num</code> от <code>0</code> до <code>5</code>
	ИЛИ от <code>10</code> до <code>20</code>:');

codeBlock(<<<'PHP'
<?
	$num = 3;
	
	if ($num > 0 and $num < 5 or $num > 10 and $num < 20) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

startLesson('Группировка условий в PHP');

text('Хотя операция <code>and</code> и имеет приоритет
	над <code>or</code>, часто удобнее использовать
	группирующие круглые скобки, чтобы явно показать
	приоритет операций:');

codeBlock(<<<'PHP'
<?
	$num = 3;
	
	if ( ($num > 0 and $num < 5) or ($num > 10 and $num < 20) ) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Конечно же, группировка может быть использована и в том
	случае, когда вам нужен свой приоритет операций, а не тот,
	который получается по умолчанию.');

task([
    'text' => 'В приведенном ниже коде укажите приоритет
		операций в явном виде:',
    'code' => <<< 'PHP'
<?
	$num = 3;
		
	if ($num > 5 and $num < 10 or $num == 20) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_81_1.php'
]);

task([
    'text' => 'В приведенном ниже коде укажите приоритет
		операций в явном виде:',
    'code' => <<< 'PHP'
<?
	$num = 3;
		
	if ($num > 5 or $num > 0 and $num < 3) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_81_2.php'
]);

task([
    'text' => 'В приведенном ниже коде укажите приоритет
		операций в явном виде:',
    'code' => <<< 'PHP'
<?
	$num = 3;
		
	if ($num == 9 or $num > 10 and $num < 20 or $num > 20 and $num < 30) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_81_3.php'
]);

startLesson('Инвертирование высказываний в if-else');

text('Рассмотрим следующий код:');

codeBlock(<<<'PHP'
<?
	if ($num > 0 and $num < 5) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Давайте инвертируем условие из приведенного
	кода, то есть превратим его в его противоположность.
	Противоположное условие получится таким:');

codeBlock(<<<'PHP'
<?
	if ($num <= 0 or $num >= 5) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Как вы видите, чтобы инвертировать условие,
	приходится несколько задуматься. Гораздо
	проще будет использовать оператор <code>!</code>,
	представляющий собой логическое <code>НЕ</code>.
	С помощью этого оператора нам достаточно
	поставить восклицательный знак перед изначальным
	условием - и оно инвертируется само:');

codeBlock(<<<'PHP'
<?
	if ( !($num > 0 and $num < 5) ) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Дан следующий код:

Используя оператор <code>!</code> инвертируйте
		приведенное условие.',
    'code' => <<< 'PHP'
<?
	if ($num1 >= 0 or $num2 <= 10) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_82_1.php'
]);

startLesson('Конструкция if-else и булевы значения');

text('Пусть у нас есть какая-то булева переменная,
	которая может принимать значения <code>true</code>
	или <code>false</code>:');

codeBlock(<<<'PHP'
<?
	$test = true;
?>
PHP
);

text('Давайте напишем <code>if</code>, проверяющий нашу
	переменную на значение <code>true</code>:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test === true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		равна <code>true</code>.',
    'solution' => $solutionDir . '/solution_83_1.php'
]);

task([
    'text' => 'Проверьте то, что переменная <code>$test</code>
		равна <code>false</code>.',
    'solution' => $solutionDir . '/solution_83_2.php'
]);

startLesson('Нестрогое сравнение логических значений в PHP');

text('В предыдущем примере я использовал для сравнения

	оператор <code>===</code>. В этом случае наша переменная

	сравнивалась на равенство <code>true</code> как

	по значению, так и по типу.');

text('В нашей задаче можно использовать и оператор

	<code>==</code>. Если в переменной <code>test</code>

	всегда будет одно из значений <code>true</code>

	или <code>false</code>, то ничего и не изменится:');

codeBlock(<<<'PHP'
<?
	$test = true; // тут пишем или true, или false
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('А вот если в переменную <code>$test</code> могут

	попадать любые значения, то все становится

	намного сложнее. В таком случае, если в переменной

	будет не булево значение, то это значение

	вначале будет преобразовано к булеву и только

	затем будет сравниваться.');

text('Пусть, например, в нашей переменной будет

	число <code>1</code>. В этом случае оно вначале

	преобразуется к логическому типу, то есть

	к <code>true</code>. И затем будет выполнено сравнение:');

codeBlock(<<<'PHP'
<?
	$test = 1;
	
	if ($test == true) {
		echo '+++'; // сработает это, тк 1 == true - это верно
	} else {
		echo '---';
	}
?>
PHP
);

text('А вот, к примеру, число <code>0</code> преобразуется

	к <code>false</code>. И наше условие в результате

	будет ложным:');

codeBlock(<<<'PHP'
<?
	$test = 0;
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---'; // сработает это, тк 0 == true - это НЕверно
	}
?>
PHP
);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 1;
		
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_84_1.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 0;
		
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_84_2.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 1;
		
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_84_3.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 1;
		
	if ($test != true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_84_4.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = '';
		
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_84_5.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_84_6.php'
]);

startLesson('Сокращенный if в конструкции if-else');

text('Пусть, к примеру, мы хотим узнать, равна
	ли переменная <code>$test</code> значению <code>true</code>.
	В этом случае конструкцию <code>if</code> можно
	записать так:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('При программировании такие проверки требуются
	очень часто, поэтому для них существует более
	изящная сокращенная форма: вместо <code>if ($test
	== true)</code> можно написать просто <code>if
	($test)</code>.');

text('Давайте перепишем наш код в сокращенной форме:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test) { // эквивалентно if ($test == true)
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Пусть теперь мы проверяем на то, что переменная
	<code>$test</code> не равна <code>true</code>:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test != true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('В этом случае сокращенный синтаксис будет
	выглядеть так:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if (!$test) { // используем логическое НЕ
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Аналогичное сокращение существует и для проверки
	на <code>false</code>. Пусть дан вот такой код:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Условие <code>$test == false</code> на самом деле
	все равно, что <code>$test != true</code>:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test != true) { // эквивалентно if ($test == false)
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Ну, а такое условие мы уже научились сокращать
	в предыдущем примере. Сократим:');

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if (!$test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Перепишите следующий код с использованием
		сокращенного сравнения:',
    'code' => <<< 'PHP'
<?
	$test = true;
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_85_1.php'
]);

task([
    'text' => 'Перепишите следующий код с использованием
		сокращенного сравнения:',
    'code' => <<< 'PHP'
<?
	$test = true;
	
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_85_2.php'
]);

task([
    'text' => 'Перепишите следующий код с использованием
		сокращенного сравнения:',
    'code' => <<< 'PHP'
<?
	$test = true;
	
	if ($test != true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_85_3.php'
]);

task([
    'text' => 'Перепишите следующий код с использованием
		сокращенного сравнения:',
    'code' => <<< 'PHP'
<?
	$test = true;
	
	if ($test != false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_85_4.php'
]);

startLesson('Нюанс сокращенных операций в PHP');

text('Учтите, что в сокращенных операциях сравнение
	идет по <code>==</code>, а не по <code>===</code>.');

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 3;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_1.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 'abc';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_2.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = '';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_3.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 3 * 'abc';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_4.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = null;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_5.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = false;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_6.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_7.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 0;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_8.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = '0';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_9.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = -1;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_86_10.php'
]);

startLesson('Команда isset в PHP');

text('Пусть у нас есть следующая переменная:');

codeBlock(<<<'PHP'
<?
	$test = null;
?>
PHP
);

text('Давайте напишем условие, выполняющее проверку

	на то, что переменная не равна <code>null</code>:');

codeBlock(<<<'PHP'
<?
	$test = null;
	
	if ($test !== null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Более удобно такую проверку можно выполнить

	с помощью специальной команды <code>isset</code>:');

codeBlock(<<<'PHP'
<?
	$test = null;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Можно выполнить обратную проверку, на то,

	что переменная не определена. Для этого выполним

	инвертирование <code>isset</code> с помощью логического

	<code>НЕ</code>:');

codeBlock(<<<'PHP'
<?
	$test = null;
	
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Переделайте следующий код

		согласно изученной теории:',
    'code' => <<< 'PHP'
<?
	$test = null;
		
	if ($test == null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_87_1.php'
]);

task([
    'text' => 'Переделайте следующий код

		согласно изученной теории:',
    'code' => <<< 'PHP'
<?
	$test = null;
		
	if ($test != null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_87_2.php'
]);

startLesson('Подавление ворнинга в PHP');

text('Пусть переменная <code>$test</code> вообще не определена.
	Как вы уже знаете, значение такой переменной
	будет равно <code>null</code>. При этом попытка
	обратиться к этой переменной приведет к появлению
	ворнинга:');

codeBlock(<<<'PHP'
<?
	var_dump($test); // выведет null и ворнинг
?>
PHP
);

text('Ворнинг также будет показан при попытке проверить
	переменную на <code>null</code>:');

codeBlock(<<<'PHP'
<?
	if ($test !== null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('А вот проверка через команду <code>isset</code>
	не приведет к появлению ворнинга - он будет
	автоматически подавлен:');

codeBlock(<<<'PHP'
<?
	if (isset($test)) {
		echo $test;
	} else {
		echo 'variable does not exist';
	}
?>
PHP
);

startLesson('Проверка существования элемента массивоа в PHP');

text('С помощью <code>isset</code> можно проверить существование

	элемента массива:');

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	
	if (isset($arr[5])) {
		echo $arr[5];
	} else {
		echo 'element does not exist';
	}
?>
PHP
);

text('Можно также проверить элемент несуществующего

	массива:');

codeBlock(<<<'PHP'
<?
	if (isset($arr[5])) {
		echo $arr[5];
	} else {
		echo 'array or element does not exist';
	}
?>
PHP
);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 0;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_1.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = null;
	
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_2.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = null;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_3.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_4.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = '';
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_5.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_6.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$test = false;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_7.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	if (isset($arr[])) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_89_8.php'
]);

startLesson('Команда empty в PHP');

text('Зачастую в скриптах возникает нужда в проверке
	переменной на <i>пустоту</i>. В PHP переменная
	будет пустая, если она равна <code>0</code>, <code>\'\'</code>,
	<code>\'0\'</code>, <code>false</code> или <code>null</code>.');

text('Проверка на пустоту выполняется с помощью
	команды <code>empty</code>:');

codeBlock(<<<'PHP'
<?
	$test = '';
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Чаще, однако, возникает обратная задача -
	проверка на то, что переменная является не
	пустой. Давайте инвертируем наше условие:');

codeBlock(<<<'PHP'
<?
	$test = '';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 0;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_1.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = -1;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_2.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = '';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_3.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = -1;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_4.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = '0';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_5.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = -1;
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_6.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = null;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_7.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = false;
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_8.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = true;
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_9.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 'false';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_10.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется
		на экран:',
    'code' => <<< 'PHP'
<?
	$test = 'null';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_90_11.php'
]);

startLesson('Необязательность команды else в PHP');

text('Конструкция <code>else</code> не является обязательной.

	В следующем примере текст выведется только в том случае,

	если значение переменной равно <code>1</code>.

	В противном случае просто ничего не случится:');

codeBlock(<<<'PHP'
<?
	$test = 1;
	
	if ($test == 1) {
		echo '+++';
	}
?>
PHP
);

task([
    'text' => 'Если переменная <code>$test</code> равна <code>10</code>,

		то пусть на экран выведется <code>\'+++\'</code>.

		В противном случае пусть ничего не произойдет.',
    'solution' => $solutionDir . '/solution_91_1.php'
]);

startLesson('Необязательность фигурных скобок в условиях в PHP');

text('В случае, если в фигурных скобках <code>if</code>
	или <code>else</code> будет только одно выражение,
	можно эти фигурные скобки не писать. Пусть,
	к примеру, дан вот такой код со всеми скобками:');

codeBlock(<<<'PHP'
<?
	if ($test == 0) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP
);

text('Можно сократить его вот так:');

codeBlock(<<<'PHP'
<?
	if ($test == 0) echo '+++'; else echo '---';
?>
PHP
);

text('Или так:');

codeBlock(<<<'PHP'
<?
	if ($test == 0) {
		echo '+++';
	} else echo '---';
?>
PHP
);

text('Можно также убрать все скобки, но оформить
	все не в линию, а вот так:');

codeBlock(<<<'PHP'
<?
	if ($test == 0)
		echo '+++';
	else
		echo '---';
?>
PHP
);

task([
    'text' => 'Перепишите следующий код в сокращенной форме:',
    'code' => <<< 'PHP'
<?
	if ($test == 0) {
		echo 'yes';
	} else {
		echo 'no';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_92_1.php'
]);

task([
    'text' => 'Перепишите следующий код в сокращенной форме:',
    'code' => <<< 'PHP'
<?
	if ($test == 0) {
		echo 'yes';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_92_2.php'
]);

startLesson('Проблема необязательности фигурных скобок в условиях в PHP');

text('Не смотря на то, что PHP допускает показанные

	выше сокращения с фигурными скобками, я в

	общем-то не рекомендую так делать, так как

	это рассадник трудноуловимых ошибок.');

text('Пусть к примеру есть следующий код:');

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0)
		echo $test;
?>
PHP
);

text('Пусть теперь мы решили в том случае, если

	условие выполняется, сделать еще и второе

	<code>echo</code>:');

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0)
		echo $test;
		echo '+++';
?>
PHP
);

text('Однако, без фигурных скобок внутри условия

	находится только первый вывод, то есть первый

	вывод будет срабатывать при верном условии,

	а второй - всегда.');

text('Фактически наш код эквивалентен такому:');

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0) {
		echo $test;
	}
	
	echo '+++'; // эта строка оказалась снаружи условия
?>
PHP
);

text('А мы бы хотели такой код:');

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0) {
			echo $test;
			echo '+++'; // эта строка внутри условия
	}
?>
PHP
);

text('Именно поэтому рекомендуется всегда выполнять

	расстановку фигурных скобок, дабы не попадать

	в такого рода ошибки.');

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$num = 5;
	
	if ($num === 5)
		echo $num;
		echo '+++';
?>
PHP,
    'solution' => $solutionDir . '/solution_93_1.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$num = 0;
	
	if ($num === 5)
		echo $num;
		echo '+++';
?>
PHP,
    'solution' => $solutionDir . '/solution_93_2.php'
]);

task([
    'text' => 'Не запуская код, определите, что выведется

		на экран:',
    'code' => <<< 'PHP'
<?
	$num = 0;
	
	if ($num === 5)
		echo $num;
		echo '---';
	echo '+++';
?>
PHP,
    'solution' => $solutionDir . '/solution_93_3.php'
]);

startLesson('Комбинации конструкций if-else в PHP');

text('Пусть переменная <code>$num</code> может принимать
	значения <code>1</code>, <code>2</code> или <code>3</code>.
	Пусть также для каждого значения мы хотим
	выводить на экран различные строки. Для решения
	задачи можно просто написать три <code>if</code>
	без конструкции <code>else</code>:');

codeBlock(<<<'PHP'
<?
	$num = 1; // может быть 1, 2 или 3
	
	if ($num === 1) {
		echo 'variant 1'; // сработает, если $num равно 1
	}
	
	if ($num === 2) {
		echo 'variant 2'; // сработает, если $num равно 2
	}
	
	if ($num === 3) {
		echo 'variant 3'; // сработает, если $num равно 3
	}
?>
PHP
);

task([
    'text' => 'В переменной <code>$day</code> лежит какое-то число
		из интервала от <code>1</code> до <code>31</code>. Определите
		в какую декаду месяца попадает это число.',
    'solution' => $solutionDir . '/solution_94_1.php'
]);

startLesson('Конструкция elseif в PHP');

text('Конструкция <code>elseif</code> позволяет
	задавать условия в блоке <code>else</code>.
	Давайте посмотрим на примере:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	if ($num === 1) {
		echo 'variant 1';
	} elseif ($num === 2) {
		echo 'variant 2';
	} elseif ($num === 3) {
		echo 'variant 3';
	}
?>
PHP
);

text('Преимуществом использования <code>elseif</code>
	вместо нескольких <code>if</code> является возможность
	отловить ситуацию, когда значение переменной
	<code>$num</code> не подходит ни под одно из условий:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	if ($num === 1) {
		echo 'variant 1';
	} elseif ($num === 2) {
		echo 'variant 2';
	} elseif ($num === 3) {
		echo 'variant 3';
	} else {
		echo 'variant not supported';
	}
?>
PHP
);

task([
    'text' => 'В переменной <code>$day</code> лежит какое-то число
		из интервала от <code>1</code> до <code>31</code>. Определите
		в какую декаду месяца попадает это число
		(в первую, вторую или третью).',
    'solution' => $solutionDir . '/solution_95_1.php'
]);

task([
    'text' => 'Модифицируйте предыдущую задачу так, чтобы,
		если в переменной <code>$day</code> будет не число
		от <code>1</code> до <code>31</code>, выдавалось сообщение
		об ошибке.',
    'solution' => $solutionDir . '/solution_95_2.php'
]);

startLesson('Вложенные if в PHP');

text('Конструкции <code>if else</code> можно вкладывать
	друг в друга произвольным образом. Смотрите
	пример:');

codeBlock(<<<'PHP'
<?
	$num = 3;
	
	if ($num >= 0) {
		if ($num <= 5) {
			echo 'less than or equal to 5';
		} else {
			echo 'more than 5';
		}
	} else {
		echo 'less than zero';
	}
?>
PHP
);

task([
    'text' => 'Пусть в переменной <code>$age</code> хранится число.
		Если это число меньше <code>10</code> или больше
		<code>99</code>, то выведите на экран сообщение
		об этом. Если же число попадает в указанный
		диапазон, то найдите сумму цифр этого числа.
		Если полученная сумма меньше или равна <code>9</code>,
		то выведите на экран сообщение о том, что
		сумма цифр однозначна, в противном случае
		выведите сообщение о том, что сумма цифр
		двузначна.',
    'solution' => $solutionDir . '/solution_96_1.php'
]);

startLesson('Конструкция switch-case в PHP');

text('В PHP есть специальная конструкция <code>switch-case</code>,

	которая используется для выбора одного значения

	из некоторого ряда значений. Изучите ее синтаксис:');

codeBlock(<<<'PHP'
<?
	switch (переменная) {
		case 'значение1':
			/*
				здесь код, который выполнится в случае,
				если переменная имеет значение1
			*/
		break;
		case 'значение2':
			/*
				здесь код, который выполнится в случае,
				если переменная имеет значение2
			*/
		break;
		case 'значение3':
			/*
				здесь код, который выполнится в случае,
				если переменная имеет значение3
			*/
		break;
		default:
			/*
				здесь код, который выполнится в случае,
				если не совпала ни с одним значением
			*/
		break;
	}
?>
PHP
);

text('Как вы можете заметить, <code>switch-case</code>

	представляет собой альтернативу множеству

	<code>elseif</code>. Давайте посмотрим на примере.

	Пусть у нас есть вот такой код:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	if ($num === 1) {
		echo 'variant 1';
	} elseif ($num === 2) {
		echo 'variant 2';
	} elseif ($num === 3) {
		echo 'variant 3';
	} else {
		echo 'variant not supported';
	}
?>
PHP
);

text('Перепишем этот код через конструкцию <code>switch-case</code>:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	switch ($num) {
		case 1:
			echo 'variant 1';
		break;
		case 2:
			echo 'variant 2';
		break;
		case 3:
			echo 'variant 3';
		break;
		default:
			echo 'variant not supported';
		break;
	}
?>
PHP
);

task([
    'text' => 'Переменная <code>$num</code> может принимать значения

		<code>1</code>, <code>2</code>, <code>3</code> или <code>4</code>.

		Определите, в какую пору года попадает значение

		этой переменной.',
    'solution' => $solutionDir . '/solution_97_1.php'
]);

startLesson('Необязательность default в PHP');

text('Блок <code>default</code> является необязательным.

	Давайте его уберем из предыдущего кода:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	switch ($num) {
		case 1:
			echo 'variant 1';
		break;
		case 2:
			echo 'variant 2';
		break;
		case 3:
			echo 'variant 3';
		break;
	}
?>
PHP
);

startLesson('Конструкция match в PHP');

text('В PHP <code>8.0</code> появилась специальная конструкция
	<code>match</code>, представляющая собой упрощенный
	вариант <code>switch</code>. Данная конструкция также
	используется для выбора одного значения
	из некоторого ряда значений. Вот ее синтаксис:');

codeBlock(<<<'PHP'
<?
	match (переменная) {
		значение1 => результат1,
		значение2 => результат3,
		значение3 => результат3,
		default => значение по умолчанию
	}
?>
PHP
);

text('To, что стоит после оператора <code>=></code>,
	возвращается как результат работы
	<code>match</code> и может быть присвоено
	в переменную. Давайте попробуем
	на практике:');

codeBlock(<<<'PHP'
<?
	$lang = 'ru';
	
	$res = match ($lang) {
		'ru' => '111',
		'en' => '222',
		'de' => '333',
		default => 'unsupported language'
	};
	
	echo $res;
?>
PHP
);

task([
    'text' => 'Переменная <code>$num</code> может принимать значения
		<code>1</code>, <code>2</code>, <code>3</code> или <code>4</code>.
		Определите, в какую пору года попадает значение
		этой переменной.',
    'solution' => $solutionDir . '/solution_99_1.php'
]);

startLesson('Необязательность break в PHP');

text('Команда <code>break</code> является необязательной.
	Без нее, однако, поведение блоков <code>case</code>
	будет неожиданным. Давайте посмотрим на примере.
	Пусть у нас есть вот такой код:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	switch ($num) {
		case 1:
			echo 1;
		break;
		case 2:
			echo 2;
		break;
		case 3:
			echo 3;
		break;
	}
?>
PHP
);

text('Уберем в нем все <code>break</code>, а в переменную
	<code>$num</code> для начала запишем число <code>3</code>.');

text('Пока все будет работать так, как и работало:');

codeBlock(<<<'PHP'
<?
	$num = 3; // пусть здесь число 3
	
	switch ($num) {
		case 1:
			echo 1;
		case 2:
			echo 2;
		case 3:
			echo 3;
	}
	
	// После запуска код выведет 3 - все хорошо
?>
PHP
);

text('Давайте теперь в переменную <code>$num</code> запишем
	число <code>2</code>. В этом случае у нас ожидаемо
	выполнится <code>case 2</code>, а затем неожиданно
	еще и <code>case 3</code>:');

codeBlock(<<<'PHP'
<?
	$num = 2;
	
	switch ($num) {
		case 1:
			echo 1;
		case 2:
			echo 2;
		case 3:
			echo 3;
	}
	
	// После запуска код выведет 2, а затем 3
?>
PHP
);

text('Если же в переменную <code>$num</code> записать
	число <code>1</code>, то вообще выполнятся все
	конструкции <code>case</code>:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	switch ($num) {
		case 1:
			echo 1;
		case 2:
			echo 2;
		case 3:
			echo 3;
	}
	
	// После запуска код выведет 1, затем 2, а затем 3
?>
PHP
);

text('To есть получается, что при отсутствии <code>break</code>
	после выполнения задуманного <code>case</code>,
	выполнятся и все <code>case</code> ниже него. Иногда
	такую особенность используют, при решении задач.');

text('В следующем примере, если переменная <code>$num</code>
	имеет значение <code>1</code> или <code>2</code>, то
	в переменную <code>$res</code> запишется <code>\'a\'</code>.
	Если же переменная <code>$num</code> имеет значение
	<code>3</code>, то в переменную <code>$res</code>
	запишется <code>\'b\'</code>:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	switch ($num) {
		case 1:
		case 2:
			$res = 'a';
		break;
		case 3:
			$res = 'b';
		break;
	}
	
	echo $res;
?>
PHP
);

text('Выше я написал, что иногда такую особенность
	используют, но я, в общем-то, не рекомендую
	ей пользоваться, так как код становится не
	очень очевидным.');

text('Очевиднее решить такую задачу через ифы:');

codeBlock(<<<'PHP'
<?
	$num = 1;
	
	if ($num == 1 or $num == 2) {
		$res = 'a';
	}
	
	if ($num == 3) {
		$res = 'b';
	}
	
	echo $res;
?>
PHP
);

startLesson('Тернарный оператор в PHP');

text('Пусть у нас есть следующий код, проверяющий
	есть ли уже пользователю <code>18</code> лет или нет:');

codeBlock(<<<'PHP'
<?
	$age = 17;
	
	if ($age >= 18) {
		$adult = true;
	} else {
		$adult = false;
	}
	
	var_dump($adult);
?>
PHP
);

text('Как вы видите, конструкция <code>if-else</code>
	нужна только для того, чтобы записать определенное
	значение в переменную <code>$adult</code>. Для
	таких задач, когда у нас в условии происходит
	только запись одной переменной, существует
	более короткое решение через так называемый
	<dfn>тернарный оператор</dfn>.');

text('Его синтаксис таков:');

codeBlock(<<<'PHP'
<?
	variable = condition ? value1 : value2;
?>
PHP
);

text('Оператор работает так: если условие истинно,
	то возвращается <code>value1</code>, в противном
	случае - <code>value2</code>. Давайте перепишем
	приведенный в самом начале урока код через
	тернарный оператор:');

codeBlock(<<<'PHP'
<?
	$age = 17;
	$adult = $age >= 18 ? true: false;
	var_dump($adult);
?>
PHP
);

text('Можно, кстати, не записывать результат в
	переменную, а сразу вывести в через <code>var_dump</code>:');

codeBlock(<<<'PHP'
<?
	$age = 17;
	var_dump( $age >= 18 ? true: false );
?>
PHP
);

text('Тернарный оператор следует использовать только в
	самых простых случаях, так как его использование
	затрудняет понимание кода.');

task([
    'text' => 'Пусть дана переменная <code>$num</code>, которая
		может быть либо отрицательной, либо положительной.
		Запишите в переменную <code>$res</code> число
		<code>1</code>, если переменная <code>$num</code> больше
		или равна нулю, и число <code>-1</code>, если переменная
		<code>$num</code> меньше нуля.',
    'solution' => $solutionDir . '/solution_101_1.php'
]);

startLesson('Оператор объединения с null в PHP');

text('Рассмотрим следующий код:');

codeBlock(<<<'PHP'
<?
	if (isset($arr['test'])) {
		$elem = $arr['test'];
	} else {
		$elem = 'empty';
	}
?>
PHP
);

text('Этот код можно переписать через
	тернарный оператор:');

codeBlock(<<<'PHP'
<?
	$elem = isset($arr['test']) ? $arr['test'] : 'empty';
?>
PHP
);

text('Однако, и первый вариант кода, и второй,
	вызывают некоторое неудобство. Для упрощения
	таких конструкций был придуман <dfn>оператор
	объединения с null</dfn>, представляющий
	собой команду <code>??</code>. Перепишем наш
	код через этот оператор:');

codeBlock(<<<'PHP'
<?
	$elem = $arr['test'] ?? 'empty';
?>
PHP
);

task([
    'text' => 'Перепишите следующий код через
		изученный оператор:',
    'code' => <<< 'PHP'
<?
	$user = ['name' => 'john', 'age' => 30];
	
	if (isset($user['name'])) {
		$name = $user['name'];
	} else {
		$name = 'unknown';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_102_1.php'
]);

startLesson('Цепочки операторов объединения с null в PHP');

text('Операторы объединения можно вызывать
	друг за другом цепочкой. В следующем примере
	в переменную запишется либо первый элемент массива,
	либо второй элемент массива, либо заданная строка,
	если этих элементов нет:');

codeBlock(<<<'PHP'
<?
	$elem = $arr['test1'] ?? $arr['test2'] ?? 'empty';
?>
PHP
);

task([
    'text' => 'Перепишите следующий код через
		изученный оператор:',
    'code' => <<< 'PHP'
<?
	if (isset($user['name'])) {
		$res = $user['name'];
	} elseif (isset($user['surname'])) {
		$res = $user['surname'];
	} else {
		$res = '';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_103_1.php'
]);

startLesson('Логические операции в PHP');

text('Давайте посмотрим на следующий код:');

codeBlock(<<<'PHP'
<?
	$a = 1;
	$b = 2;
	
	if ($a == $b) {
		var_dump(true);
	} else {
		var_dump(false);
	}
?>
PHP
);

text('Как вы видите, в данном коде выполняется
	сравнение переменных <code>a</code> и <code>b</code>
	и, если они равны, то в консоль выводится
	<code>true</code>, а если не равны - то <code>false</code>.');

text('Здесь пришло время открыть вам некоторую
	неочевидную вещь: на самом деле конструкция
	<code>if</code> не является обязательной для сравнения
	- сами операторы вида ==, ===, !=, <, > и
	т.д. возвращают своим результатом либо <code>true</code>,
	либо <code>false</code>.');

text('Смотрите пример:');

codeBlock(<<<'PHP'
<?
	var_dump(1 == 1); // выведет true
	var_dump(1 == 2); // выведет false
?>
PHP
);

text('Исходя из написанного, код из начала урока
	можно переписать более простым образом:');

codeBlock(<<<'PHP'
<?
	$a = 1;
	$b = 2;
	
	var_dump($a == $b);
?>
PHP
);

text('Можно не выводить результат сразу, а присвоить
	его какой-нибудь переменной:');

codeBlock(<<<'PHP'
<?
	$a = 1;
	$b = 2;
	
	$res = $a == $b;
	var_dump($res);
?>
PHP
);

task([
    'text' => 'Пусть даны следующие переменные:

Используя оператор <code>==</code>, узнайте, равны
		ли значения этих переменных или нет.',
    'code' => <<< 'PHP'
<?
	$a = 2 * (3 - 1);
	$b = 6 - 2;
?>
PHP,
    'solution' => $solutionDir . '/solution_104_1.php'
]);

task([
    'text' => 'Пусть даны следующие переменные:

Используя оператор <code>></code>, узнайте, больше
		ли переменная <code>$a</code>, чем <code>$b</code>.',
    'code' => <<< 'PHP'
<?
	$a = 5 * (7 - 4);
	$b = 1 + 2 + 7;
?>
PHP,
    'solution' => $solutionDir . '/solution_104_2.php'
]);

task([
    'text' => 'Пусть даны следующие переменные:

Используя оператор <code>!=</code>, узнайте, разные
		ли значения этих переменных или нет.',
    'code' => <<< 'PHP'
<?
	$a = 2 ** 4;
	$b = 4 ** 2;
?>
PHP,
    'solution' => $solutionDir . '/solution_104_3.php'
]);

startLesson('Определение части часа в PHP');

text('Пусть у нас есть переменная <code>$min</code>,

	в которой хранится количество минут от <code>0</code>

	до <code>59</code>:');

codeBlock(<<<'PHP'
<?
	$min = 10;
?>
PHP
);

text('Давайте определим, в какую четверть часа

	попадает указанное количество минут:');

codeBlock(<<<'PHP'
<?
	$min = 10;
	
	if ($min >= 0 and $min <= 14) {
		echo '1 quarter';
	}
	
	if ($min >= 15 and $min <= 29) {
		echo '2 quarter';
	}
	
	if ($min >= 30 and $min <= 44) {
		echo '3 quarter';
	}
	
	if ($min >= 45 and $min <= 59) {
		echo '4 quarter';
	}
?>
PHP
);

task([
    'text' => 'Решите аналогичную задачу, только определите

		в какую треть часа попадает указанное количество

		минут.',
    'solution' => $solutionDir . '/solution_105_1.php'
]);

startLesson('Проверка длины строк и массивов в PHP');

text('Пусть у нас есть переменная <code>$str</code>,
	в которой хранится некоторая произвольная строка:');

codeBlock(<<<'PHP'
<?
	$str = '12345';
?>
PHP
);

text('Давайте напишем условие, которое выведет
	сообщение на экран, если длина строки равна
	или больше трех символов:');

codeBlock(<<<'PHP'
<?
	$str = '12345';
	
	if (strlen($str) >= 3) {
		echo '!';
	}
?>
PHP
);

task([
    'text' => 'В переменной <code>$arr</code> содержится некоторый
		массив с числами. Напишите условие, которое
		проверит, что в массиве <code>3</code> элемента.
		Если это так, выведите на экран сумму элементов
		массива.',
    'solution' => $solutionDir . '/solution_106_1.php'
]);

startLesson('Проверка символа строки в PHP');

text('Пусть дана некоторая строка, состоящая из цифр:');

codeBlock(<<<'PHP'
<?
	$str = '12345';
?>
PHP
);

text('Давайте проверим, равен ли первый символ
	этой строки числу <code>1</code>:');

codeBlock(<<<'PHP'
<?
	$str = '12345';
	
	if ($str[0] == 1) {
		echo '!';
	}
?>
PHP
);

text('Проверим теперь последний символ на равенство
	числу <code>5</code>:');

codeBlock(<<<'PHP'
<?
	$str = '12345';
	$last = $str[-1];
	
	if ($last == 5) {
		echo '!';
	}
?>
PHP
);

task([
    'text' => 'Дана некоторая строка. Проверьте,
		заканчивается ли она на <code>\'0\'</code>.',
    'solution' => $solutionDir . '/solution_107_1.php'
]);

startLesson('Проверка остатка от деления в PHP');

text('Пусть у нас есть две переменные с числами:');

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 3;
?>
PHP
);

text('Давайте найдем остаток от деления одной переменной

	на другую:');

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 3;
	
	echo $a % $b; // выведет 1
?>
PHP
);

text('Пусть теперь в переменных хранятся такие

	значения, что одна переменная делится на

	вторую нацело:');

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 5;
	
	echo $a % $b; // выведет 0
?>
PHP
);

text('Давайте напишем скрипт, который будет проверять,

	делится ли нацело одно число на второе:');

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 3;
	
	if ($a % $b === 0) {
		echo 'divisible without remainder';
	} else {
		echo 'divisible with remainder';
	}
?>
PHP
);

text('Пусть теперь требуется, если число делится

	с остатком, вывести этот остаток на экран:');

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 3;
	
	if ($a % $b === 0) {
		echo 'divisible without remainder';
	} else {
		echo 'divisible with remainder ' . $a % $b;
	}
?>
PHP
);

text('В приведенном выше коде получается, что остаток

	вычисляется в двух местах, а это не оптимально.');

text('Поправим проблему:');

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 3;
	$rest = $a % $b;
	
	if ($rest === 0) {
		echo 'divisible without remainder';
	} else {
		echo 'divisible with remainder ' . $rest;
	}
?>
PHP
);

task([
    'text' => 'Как известно, четные числа делятся на <code>2</code>

		без остатка, а нечетные - с остатком. Пусть

		у вас дано число. С помощью оператора <code>%</code>

		и конструкции <code>if</code> проверьте четное

		это число или нет.',
    'solution' => $solutionDir . '/solution_108_1.php'
]);

task([
    'text' => 'Дано число. Проверьте, что оно делится на

		<code>3</code>.',
    'solution' => $solutionDir . '/solution_108_2.php'
]);

startLesson('Поиск ошибок в коде с условиями PHP');

text('В следующих задачах некоторый программист написал код
	и, возможно, допустил в нем ошибки. Вы должны проверить,
	делает ли код то, что описано. Если код
	работает некорректно, вы должны исправить ошибки.');

task([
    'text' => 'Код должен проверить сумму чисел:',
    'code' => <<< 'PHP'
<?
	$num1 = '1';
	$num2 = '2';
	
	if ($num1 + $num2 === '3') {
		echo '+++'; // должно вывести это
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_109_1.php'
]);

task([
    'text' => 'Код должен проверить первую цифру числа:',
    'code' => <<< 'PHP'
<?
	$num = 123;
	
	if ($num[0] === 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_109_2.php'
]);

task([
    'text' => 'Код должен проверить первую цифру числа:',
    'code' => <<< 'PHP'
<?
	$num = 123;
	
	if ((string) $num[0] === 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_109_3.php'
]);

task([
    'text' => 'Код должен проверить первую цифру числа:',
    'code' => <<< 'PHP'
<?
	$num = 123;
	$str = (string) $num;
	
	if ($str[0] === 1) {
		echo '+++';
	} else {
		echo '---';
	}
PHP,
    'solution' => $solutionDir . '/solution_109_4.php'
]);

task([
    'text' => 'Код должен проверить, что в числе
		ровно две цифры:',
    'code' => <<< 'PHP'
<?
	$num = 12;
	
	if (strlen($num) === 2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_109_5.php'
]);

task([
    'text' => 'Код должен проверить первую цифру числа:',
    'code' => <<< 'PHP'
<?
	$num = 123;
	$str = (string) $num;
	
	if ($num[0] === '1') {
		echo '+++';
	} else {
		echo '---';
	}
PHP,
    'solution' => $solutionDir . '/solution_109_6.php'
]);

task([
    'text' => 'Код должен проверить, что в числе
		ровно две цифры:',
    'code' => <<< 'PHP'
<?
	$num = 12;
	$str = (int) $num;
	
	if (strlen($str) === 2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_109_7.php'
]);

task([
    'text' => 'Приведенный код работает не так,
		как задумал автор:

Объясните причину.',
    'code' => <<< 'PHP'
<?
	$num = 1;
	
	if ($num !== 1 or $num !== 2) {
		echo '+++';
	} else {
		echo '---'; // должно вывести это
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_109_8.php'
]);

task([
    'text' => 'Приведенный код работает не так,
		как задумал автор:

Объясните причину.',
    'code' => <<< 'PHP'
<?
	$var1 = '1';
	$var2 = '2';
	
	if ($var1 + 1 === $var2) {
		echo '+++'; // должно сработать это
	} else {
		echo '---';
	}
?>
PHP,
    'solution' => $solutionDir . '/solution_109_9.php'
]);

startLesson('Практика на условия if-else в PHP');

task([
    'text' => 'В переменной <code>$month</code> лежит какое-то
		число из интервала от <code>1</code> до <code>12</code>.
		Определите в какую пору года попадает этот
		месяц (зима, лето, весна, осень).',
    'solution' => $solutionDir . '/solution_110_1.php'
]);

task([
    'text' => 'Дана строка, состоящая из символов, например,
		<code>\'abcde\'</code>. Проверьте, что первым символом
		этой строки является буква <code>\'a\'</code>.',
    'solution' => $solutionDir . '/solution_110_2.php'
]);

task([
    'text' => 'Дано число, например, <code>12345</code>. Проверьте,
		что первым символом этого числа является
		цифра <code>1</code>, <code>2</code> или <code>3</code>.',
    'solution' => $solutionDir . '/solution_110_3.php'
]);

task([
    'text' => 'Дано трехзначное число. Найдите сумму цифр
		этого числа.',
    'solution' => $solutionDir . '/solution_110_4.php'
]);

task([
    'text' => 'Дано число из <code>6</code>-ти цифр. Проверьте,
		что сумма первых трех цифр равняется сумме
		вторых трех цифр.',
    'solution' => $solutionDir . '/solution_110_5.php'
]);

endLesson();
