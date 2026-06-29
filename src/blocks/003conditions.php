<?

startLesson('Конструкция if-else в PHP');
// https://code.mu/ru/php/book/prime/conditions/if-else/
// ⊗ppPmCdIE

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
PHP);

startLesson('Операторы больше и меньше в PHP');
// https://code.mu/ru/php/book/prime/conditions/less-more-operators/
// ⊗ppPmCdLME

codeBlock(<<<'PHP'
<?
	$test = 1;
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 1;
	
	if ($test > 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = -1; // поменяем значение переменной
	
	if ($test > 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 0;
	
	if ($test > 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 0;
	
	if ($test >= 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Проверьте то, что переменная <code>$test</code> больше <code>10</code>.',
	'solution' => <<<'PHP'
<?
	$test = 15;
	
	if ($test > 10) {
		echo 'Больше 10'; // сработает это
	} else {
		echo 'Не больше 10';
	}
?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Проверьте то, что переменная <code>$test</code> меньше <code>10</code>.',
	'solution' => <<<'PHP'
<?
	$test = 5;
	
	if ($test < 10) {
		echo 'Меньше 10'; // сработает это
	} else {
		echo 'Не меньше 10';
	}
?>
PHP
]);

task([
	'num' => 3,
	'text' => 'Проверьте то, что переменная <code>$test</code> больше или равна <code>10</code>.',
	'solution' => <<<'PHP'
<?
	$test = 15;
	
	if ($test >= 10) {
		echo 'Больше или равно 10'; // сработает это
	} else {
		echo 'Меньше 10';
	}
?>
PHP
]);

task([
	'num' => 4,
	'text' => 'Проверьте то, что переменная <code>$test</code> меньше или равна <code>10</code>.',
	'solution' => <<<'PHP'
<?
	$test = 5;
	
	if ($test <= 10) {
		echo 'Меньше или равно 10'; // сработает это
	} else {
		echo 'Больше 10';
	}
?>
PHP
]);

startLesson('Проверка на равенство в PHP');
// https://code.mu/ru/php/book/prime/conditions/equality-checking/
// ⊗ppPmCdECh

codeBlock(<<<'PHP'
<?
	$test = 0; // пусть значение переменной равно 0
	
	if ($test == 0) {
		echo '+++'; // сработает это, так как переменная равна 0
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 1; // пусть значение переменной равно 1
	
	if ($test == 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как переменная НЕ равна 0
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Проверьте то, что переменная <code>$test</code> равна <code>10</code>.',
	'solution' => <<<'PHP'
<?
	$test = 10; // пусть значение переменной равно 10
	
	if ($test == 10) {
		echo 'Переменная равна 10'; // сработает это, так как переменная равна 10
	} else {
		echo 'Переменная не равна 10';
	}
?>
PHP
]);

startLesson('Проверка на неравенство в PHP');
// https://code.mu/ru/php/book/prime/conditions/inequality-checking/
// ⊗ppPmCdIeCh

codeBlock(<<<'PHP'
<?
	$test = 1; // пусть значение переменной равно 1
	
	if ($test != 0) {
		echo '+++'; // сработает это, так как переменная НЕ равна 0
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 0; // пусть значение переменной равно 0
	
	if ($test != 0) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как переменная равна 0
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Проверьте то, что переменная <code>$test</code> не равна <code>10</code>.',
	'solution' => <<<'PHP'
<?
	$test = 5; // пусть значение переменной равно 5
	
	if ($test != 10) {
		echo 'Переменная не равна 10'; // сработает это, так как переменная не равна 10
	} else {
		echo 'Переменная равна 10';
	}
?>
PHP
]);

startLesson('Сравнение переменных в PHP');
// https://code.mu/ru/php/book/prime/conditions/variables-comparison/
// ⊗ppPmCdVC

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
PHP);

task([
	'num' => 1,
	'text' => 'Даны переменные <code>$test1</code> и <code>$test2</code>. Проверьте, что значение какой из этих переменных больше и выведите соответствующее сообщение на экран.',
	'solution' => <<<'PHP'
<?
	$test1 = 5;
	$test2 = 10;
	
	if ($test2 > $test1) {
		echo 'Значение $test2 больше $test1';
	} else {
		echo 'Значение $test1 больше $test2';
	}
?>
PHP
]);

startLesson('Типы данных и конструкция if-else в PHP');
// https://code.mu/ru/php/book/prime/conditions/data-types/
// ⊗ppPmCdDT

codeBlock(<<<'PHP'
<?
	$test = 'abc';
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 'abc';
	
	if ($test == 'abc') {
		echo '+++'; // сработает это, так как переменная равна 'abc'
	} else {
		echo '---';
	}
?>
PHP);

startLesson('Числа в кавычках в PHP');
// https://code.mu/ru/php/book/prime/conditions/numbers-in-quotes/
// ⊗ppPmCdNQ

codeBlock(<<<'PHP'
<?
	if ('3' == 3) {
		echo '+++'; // сработает это - значения равны
	} else {
		echo '---';
	}
?>
PHP);

startLesson('Равенство по значению и типу в PHP');
// https://code.mu/ru/php/book/prime/conditions/values-types-equality/
// ⊗ppPmCdVTE

codeBlock(<<<'PHP'
<?
	if ('3' === 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, тк значения не равны по типу
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ('3' === '3') {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if (3 === 3) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if (2 === 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = '3';
	$test2 = '3';
	$a = '+++'		
	$res =  ($test1 == $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';

?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = '3';
	$test2 = '3';
	$a = '+++'		
	$res =  ($test1 === $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = 3;
	$test2 = '3';
	$a = '+++'		
	$res =  ($test1 == $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = 3;
	$test2 = '3';
	$a = '---'		
	$res =  ($test1 === $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = 3;
	$test2 = 3;
	$a = '+++'		
	$res =  ($test1 === $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]
);

startLesson('Неравенство по значению и типу в PHP');
// https://code.mu/ru/php/book/prime/conditions/values-types-inequality/
// ⊗ppPmCdVTI

codeBlock(<<<'PHP'
<?
	if (3 != 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ('3' != 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if (3 !== 3) {
		echo '+++';
	} else {
		echo '---'; // сработает это, так как значения равны
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ('3' !== 3) {
		echo '+++'; // сработает это, так как значения НЕ равны
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = '3';
	$test2 = '3';
	$a = '---'		
	$res =  ($test1 != $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = '3';
	$test2 = '3';
	$a = '---'		
	$res =  ($test1 !== $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
	?>
PHP
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = 3;
	$test2 = '3';
	$a = '---'		
	$res =  ($test1 != $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = 3;
	$test2 = '3';
	$a = '+++'		
	$res =  ($test1 !== $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
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
'solution' => <<<'PHP'
<?
	$test1 = 3;
	$test2 = 2;
	$a = '+++'		
	$res =  ($test1 !== $test2) ? '+++' : '---';

	echo ($res == $a) ? 'Верно' : 'Неверно';
?>
PHP
]);

startLesson('Нюансы при сравнении типов данных в PHP');
// https://code.mu/ru/php/book/prime/conditions/comparison-nuances/
// ⊗ppPmCdCN

codeBlock(<<<'PHP'
<?
	if (0 == '') {
		echo '+++';
	} else {
		echo '---'; // сработает это
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if (0 == '0') {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
?>
PHP);

startLesson('Сложные условия в if-else в PHP');
// https://code.mu/ru/php/book/prime/conditions/compound-statements/
// ⊗ppPmCdCS

startLesson('Логическое И в PHP');
// https://code.mu/ru/php/book/prime/conditions/logical-and/
// ⊗ppPmCdLA

codeBlock(<<<'PHP'
<?
	$num = 3;
	
	if ($num > 0 and $num < 10) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

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
PHP);

task([
	'num' => 1,
	'text' => 'Проверьте то, что переменная <code>$num</code> больше нуля и меньше <code>5</code>.',
]);

task([
	'num' => 2,
	'text' => 'Проверьте то, что переменная <code>$num</code> больше или равна <code>10</code> и меньше или равна <code>20</code>.',
]);

task([
	'num' => 3,
	'text' => 'Проверьте то, что переменная <code>$num1</code> равна или меньше <code>1</code>, а переменная <code>$num2</code> больше или равна <code>3</code>.',
]);

startLesson('Логическое ИЛИ в PHP');
// https://code.mu/ru/php/book/prime/conditions/logical-or/
// ⊗ppPmCdLOr

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
PHP);

task([
	'num' => 1,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
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
]);

task([
	'num' => 2,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
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
]);

task([
	'num' => 3,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
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
]);

task([
	'num' => 4,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
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
]);

task([
	'num' => 5,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
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
]);

task([
	'num' => 6,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 1;
	
	if ($num == 0 or $num == 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 7,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 2;
	
	if ($num == 0 or $num == 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 8,
	'text' => 'Не запуская код определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 2;
	
	if ($num == 0 or $num == 1 or $num == 2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Приоритет операций сравнения в PHP');
// https://code.mu/ru/php/book/prime/conditions/comparison-operations-priority/
// ⊗ppPmCdCOP

codeBlock(<<<'PHP'
<?
	$num = 3;
	
	if ($num > 0 and $num < 5 or $num > 10 and $num < 20) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

startLesson('Группировка условий в PHP');
// https://code.mu/ru/php/book/prime/conditions/conditions-grouping/
// ⊗ppPmCdCG

codeBlock(<<<'PHP'
<?
	$num = 3;
	
	if ( ($num > 0 and $num < 5) or ($num > 10 and $num < 20) ) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'В приведенном ниже коде укажите приоритет операций в явном виде:',
	'code' => <<<'PHP'
<?
	$num = 3;
		
	if ($num > 5 and $num < 10 or $num == 20) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'В приведенном ниже коде укажите приоритет операций в явном виде:',
	'code' => <<<'PHP'
<?
	$num = 3;
		
	if ($num > 5 or $num > 0 and $num < 3) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'В приведенном ниже коде укажите приоритет операций в явном виде:',
	'code' => <<<'PHP'
<?
	$num = 3;
		
	if ($num == 9 or $num > 10 and $num < 20 or $num > 20 and $num < 30) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Инвертирование высказываний в if-else');
// https://code.mu/ru/php/book/prime/conditions/statements-inverting/
// ⊗ppPmCdSI

codeBlock(<<<'PHP'
<?
	if ($num > 0 and $num < 5) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ($num <= 0 or $num >= 5) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ( !($num > 0 and $num < 5) ) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дан следующий код: Используя оператор <code>!</code> инвертируйте приведенное условие.',
	'code' => <<<'PHP'
<?
	if ($num1 >= 0 or $num2 <= 10) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Конструкция if-else и булевы значения');
// https://code.mu/ru/php/book/prime/conditions/boolean-types/
// ⊗ppPmCdBT

codeBlock(<<<'PHP'
<?
	$test = true;
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test === true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Проверьте то, что переменная <code>$test</code> равна <code>true</code>.',
]);

task([
	'num' => 2,
	'text' => 'Проверьте то, что переменная <code>$test</code> равна <code>false</code>.',
]);

startLesson('Нестрогое сравнение логических значений в PHP');
// https://code.mu/ru/php/book/prime/conditions/weak-boolean-comparison/
// ⊗ppPmCdWBC

codeBlock(<<<'PHP'
<?
	$test = true; // тут пишем или true, или false
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 1;
	
	if ($test == true) {
		echo '+++'; // сработает это, тк 1 == true - это верно
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 0;
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---'; // сработает это, тк 0 == true - это НЕверно
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 1;
		
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 0;
		
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 1;
		
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 1;
		
	if ($test != true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = '';
		
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 6,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Сокращенный if в конструкции if-else');
// https://code.mu/ru/php/book/prime/conditions/booleans-shorted-if/
// ⊗ppPmCdBShI

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test) { // эквивалентно if ($test == true)
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test != true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if (!$test) { // используем логическое НЕ
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if ($test != true) { // эквивалентно if ($test == false)
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = true;
	
	if (!$test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Перепишите следующий код с использованием сокращенного сравнения:',
	'code' => <<<'PHP'
<?
	$test = true;
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Перепишите следующий код с использованием сокращенного сравнения:',
	'code' => <<<'PHP'
<?
	$test = true;
	
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Перепишите следующий код с использованием сокращенного сравнения:',
	'code' => <<<'PHP'
<?
	$test = true;
	
	if ($test != true) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Перепишите следующий код с использованием сокращенного сравнения:',
	'code' => <<<'PHP'
<?
	$test = true;
	
	if ($test != false) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Нюанс сокращенных операций в PHP');
// https://code.mu/ru/php/book/prime/conditions/booleans-nuance/
// ⊗ppPmCdBN

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 3;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 'abc';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = '';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 3 * 'abc';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = null;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 6,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = false;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 7,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 8,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 0;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 9,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = '0';
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 10,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = -1;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Команда isset в PHP');
// https://code.mu/ru/php/book/prime/conditions/isset/
// ⊗ppPmCdIs

codeBlock(<<<'PHP'
<?
	$test = null;
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = null;
	
	if ($test !== null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = null;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = null;
	
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Переделайте следующий код согласно изученной теории:',
	'code' => <<<'PHP'
<?
	$test = null;
		
	if ($test == null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Переделайте следующий код согласно изученной теории:',
	'code' => <<<'PHP'
<?
	$test = null;
		
	if ($test != null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Подавление ворнинга в PHP');
// https://code.mu/ru/php/book/prime/conditions/warining-supression/
// ⊗ppPmCdWSu

codeBlock(<<<'PHP'
<?
	var_dump($test); // выведет null и ворнинг
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ($test !== null) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if (isset($test)) {
		echo $test;
	} else {
		echo 'variable does not exist';
	}
?>
PHP);

startLesson('Проверка существования элемента массивоа в PHP');
// https://code.mu/ru/php/book/prime/conditions/array-elements-checking/
// ⊗ppPmCdAEC

codeBlock(<<<'PHP'
<?
	$arr = ['a', 'b', 'c'];
	
	if (isset($arr[5])) {
		echo $arr[5];
	} else {
		echo 'element does not exist';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if (isset($arr[5])) {
		echo $arr[5];
	} else {
		echo 'array or element does not exist';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 0;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = null;
	
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = null;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = '';
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 6,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 7,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = false;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 8,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
	
	if (isset($arr[])) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Команда empty в PHP');
// https://code.mu/ru/php/book/prime/conditions/empty/
// ⊗ppPmCdEm

codeBlock(<<<'PHP'
<?
	$test = '';
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = '';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 0;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = -1;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = '';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = -1;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 5,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = '0';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 6,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = -1;
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 7,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = null;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 8,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = false;
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 9,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = true;
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 10,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 'false';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 11,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$test = 'null';
	
	if (!empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

startLesson('Необязательность команды else в PHP');
// https://code.mu/ru/php/book/prime/conditions/else-optionality/
// ⊗ppPmCdShS

codeBlock(<<<'PHP'
<?
	$test = 1;
	
	if ($test == 1) {
		echo '+++';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Если переменная <code>$test</code> равна <code>10</code>, то пусть на экран выведется <code>\'+++\'</code>. В противном случае пусть ничего не произойдет.',
]);

startLesson('Необязательность фигурных скобок в условиях в PHP');
// https://code.mu/ru/php/book/prime/conditions/braces-optionality/
// ⊗ppPmCdBO

codeBlock(<<<'PHP'
<?
	if ($test == 0) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ($test == 0) echo '+++'; else echo '---';
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ($test == 0) {
		echo '+++';
	} else echo '---';
?>
PHP);

codeBlock(<<<'PHP'
<?
	if ($test == 0)
		echo '+++';
	else
		echo '---';
?>
PHP);

task([
	'num' => 1,
	'text' => 'Перепишите следующий код в сокращенной форме:',
	'code' => <<<'PHP'
<?
	if ($test == 0) {
		echo 'yes';
	} else {
		echo 'no';
	}
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Перепишите следующий код в сокращенной форме:',
	'code' => <<<'PHP'
<?
	if ($test == 0) {
		echo 'yes';
	}
?>
PHP,
]);

startLesson('Проблема необязательности фигурных скобок в условиях в PHP');
// https://code.mu/ru/php/book/prime/conditions/braces-optionality-problem/
// ⊗ppPmCdBOP

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0)
		echo $test;
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0)
		echo $test;
		echo '+++';
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0) {
		echo $test;
	}
	
	echo '+++'; // эта строка оказалась снаружи условия
?>
PHP);

codeBlock(<<<'PHP'
<?
	$test = 3;
	
	if ($test > 0) {
			echo $test;
			echo '+++'; // эта строка внутри условия
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 5;
	
	if ($num === 5)
		echo $num;
		echo '+++';
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 0;
	
	if ($num === 5)
		echo $num;
		echo '+++';
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Не запуская код, определите, что выведется на экран:',
	'code' => <<<'PHP'
<?
	$num = 0;
	
	if ($num === 5)
		echo $num;
		echo '---';
	echo '+++';
?>
PHP,
]);

startLesson('Комбинации конструкций if-else в PHP');
// https://code.mu/ru/php/book/prime/conditions/combinations/
// ⊗ppPmCdCm

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
PHP);

task([
	'num' => 1,
	'text' => 'В переменной <code>$day</code> лежит какое-то число из интервала от <code>1</code> до <code>31</code>. Определите в какую декаду месяца попадает это число.',
]);

startLesson('Конструкция elseif в PHP');
// https://code.mu/ru/php/book/prime/conditions/elseif/
// ⊗ppPmCdEI

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
PHP);

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
PHP);

task([
	'num' => 1,
	'text' => 'В переменной <code>$day</code> лежит какое-то число из интервала от <code>1</code> до <code>31</code>. Определите в какую декаду месяца попадает это число (в первую, вторую или третью).',
]);

task([
	'num' => 2,
	'text' => 'Модифицируйте предыдущую задачу так, чтобы, если в переменной <code>$day</code> будет не число от <code>1</code> до <code>31</code>, выдавалось сообщение об ошибке.',
]);

startLesson('Вложенные if в PHP');
// https://code.mu/ru/php/book/prime/conditions/nested-if/
// ⊗ppPmCdNIf

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
PHP);

task([
	'num' => 1,
	'text' => 'Пусть в переменной <code>$age</code> хранится число. Если это число меньше <code>10</code> или больше <code>99</code>, то выведите на экран сообщение об этом. Если же число попадает в указанный диапазон, то найдите сумму цифр этого числа. Если полученная сумма меньше или равна <code>9</code>, то выведите на экран сообщение о том, что сумма цифр однозначна, в противном случае выведите сообщение о том, что сумма цифр двузначна.',
]);

startLesson('Конструкция switch-case в PHP');
// https://code.mu/ru/php/book/prime/conditions/switch/
// ⊗ppPmCdSch

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
PHP);

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
PHP);

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
PHP);

task([
	'num' => 1,
	'text' => 'Переменная <code>$num</code> может принимать значения <code>1</code>, <code>2</code>, <code>3</code> или <code>4</code>. Определите, в какую пору года попадает значение этой переменной.',
]);

startLesson('Необязательность default в PHP');
// https://code.mu/ru/php/book/prime/conditions/default-optionality/
// ⊗ppPmCdDNM

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
PHP);

startLesson('Конструкция match в PHP');
// https://code.mu/ru/php/book/prime/conditions/match/
// ⊗ppPmCdMch

codeBlock(<<<'PHP'
<?
	match (переменная) {
		значение1 => результат1,
		значение2 => результат3,
		значение3 => результат3,
		default => значение по умолчанию
	}
?>
PHP);

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
PHP);

task([
	'num' => 1,
	'text' => 'Переменная <code>$num</code> может принимать значения <code>1</code>, <code>2</code>, <code>3</code> или <code>4</code>. Определите, в какую пору года попадает значение этой переменной.',
]);

startLesson('Необязательность break в PHP');
// https://code.mu/ru/php/book/prime/conditions/break-optionality/
// ⊗ppPmCdBNM

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
PHP);

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
PHP);

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
PHP);

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
PHP);

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
PHP);

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
PHP);

startLesson('Тернарный оператор в PHP');
// https://code.mu/ru/php/book/prime/conditions/ternary-operator/
// ⊗ppPmCdTO

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
PHP);

codeBlock(<<<'PHP'
<?
	variable = condition ? value1 : value2;
?>
PHP);

codeBlock(<<<'PHP'
<?
	$age = 17;
	$adult = $age >= 18 ? true: false;
	var_dump($adult);
?>
PHP);

codeBlock(<<<'PHP'
<?
	$age = 17;
	var_dump( $age >= 18 ? true: false );
?>
PHP);

task([
	'num' => 1,
	'text' => 'Пусть дана переменная <code>$num</code>, которая может быть либо отрицательной, либо положительной. Запишите в переменную <code>$res</code> число <code>1</code>, если переменная <code>$num</code> больше или равна нулю, и число <code>-1</code>, если переменная <code>$num</code> меньше нуля.',
]);

startLesson('Оператор объединения с null в PHP');
// https://code.mu/ru/php/book/prime/conditions/null-coalescing/
// ⊗ppPmCdNC

codeBlock(<<<'PHP'
<?
	if (isset($arr['test'])) {
		$elem = $arr['test'];
	} else {
		$elem = 'empty';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$elem = isset($arr['test']) ? $arr['test'] : 'empty';
?>
PHP);

codeBlock(<<<'PHP'
<?
	$elem = $arr['test'] ?? 'empty';
?>
PHP);

task([
	'num' => 1,
	'text' => 'Перепишите следующий код через изученный оператор:',
	'code' => <<<'PHP'
<?
	$user = ['name' => 'john', 'age' => 30];
	
	if (isset($user['name'])) {
		$name = $user['name'];
	} else {
		$name = 'unknown';
	}
?>
PHP,
]);

startLesson('Цепочки операторов объединения с null в PHP');
// https://code.mu/ru/php/book/prime/conditions/null-coalescing-chaining/
// ⊗ppPmCdNCCh

codeBlock(<<<'PHP'
<?
	$elem = $arr['test1'] ?? $arr['test2'] ?? 'empty';
?>
PHP);

task([
	'num' => 1,
	'text' => 'Перепишите следующий код через изученный оператор:',
	'code' => <<<'PHP'
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
]);

startLesson('Логические операции в PHP');
// https://code.mu/ru/php/book/prime/conditions/logical-operations/
// ⊗ppPmCdLO

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
PHP);

codeBlock(<<<'PHP'
<?
	var_dump(1 == 1); // выведет true
	var_dump(1 == 2); // выведет false
?>
PHP);

codeBlock(<<<'PHP'
<?
	$a = 1;
	$b = 2;
	
	var_dump($a == $b);
?>
PHP);

codeBlock(<<<'PHP'
<?
	$a = 1;
	$b = 2;
	
	$res = $a == $b;
	var_dump($res);
?>
PHP);

task([
	'num' => 1,
	'text' => 'Пусть даны следующие переменные: Используя оператор <code>==</code>, узнайте, равны ли значения этих переменных или нет.',
	'code' => <<<'PHP'
<?
	$a = 2 * (3 - 1);
	$b = 6 - 2;
?>
PHP,
]);

task([
	'num' => 2,
	'text' => 'Пусть даны следующие переменные: Используя оператор <code>></code>, узнайте, больше ли переменная <code>$a</code>, чем <code>$b</code>.',
	'code' => <<<'PHP'
<?
	$a = 5 * (7 - 4);
	$b = 1 + 2 + 7;
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Пусть даны следующие переменные: Используя оператор <code>!=</code>, узнайте, разные ли значения этих переменных или нет.',
	'code' => <<<'PHP'
<?
	$a = 2 ** 4;
	$b = 4 ** 2;
?>
PHP,
]);

startLesson('Определение части часа в PHP');
// https://code.mu/ru/php/book/prime/conditions/examples/hour-part/
// ⊗ppPmCdExHP

codeBlock(<<<'PHP'
<?
	$min = 10;
?>
PHP);

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
PHP);

task([
	'num' => 1,
	'text' => 'Решите аналогичную задачу, только определите в какую треть часа попадает указанное количество минут.',
]);

startLesson('Проверка длины строк и массивов в PHP');
// https://code.mu/ru/php/book/prime/conditions/examples/string-arrays-length/
// ⊗ppPmCdExSAL

codeBlock(<<<'PHP'
<?
	$str = '12345';
?>
PHP);

codeBlock(<<<'PHP'
<?
	$str = '12345';
	
	if (strlen($str) >= 3) {
		echo '!';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'В переменной <code>$arr</code> содержится некоторый массив с числами. Напишите условие, которое проверит, что в массиве <code>3</code> элемента. Если это так, выведите на экран сумму элементов массива.',
]);

startLesson('Проверка символа строки в PHP');
// https://code.mu/ru/php/book/prime/conditions/examples/string-character-checking/
// ⊗ppPmCdExSCC

codeBlock(<<<'PHP'
<?
	$str = '12345';
?>
PHP);

codeBlock(<<<'PHP'
<?
	$str = '12345';
	
	if ($str[0] == 1) {
		echo '!';
	}
?>
PHP);

codeBlock(<<<'PHP'
<?
	$str = '12345';
	$last = $str[-1];
	
	if ($last == 5) {
		echo '!';
	}
?>
PHP);

task([
	'num' => 1,
	'text' => 'Дана некоторая строка. Проверьте, заканчивается ли она на <code>\'0\'</code>.',
]);

startLesson('Проверка остатка от деления в PHP');
// https://code.mu/ru/php/book/prime/conditions/examples/remainder-checking/
// ⊗ppPmCdExRC

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 3;
?>
PHP);

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 3;
	
	echo $a % $b; // выведет 1
?>
PHP);

codeBlock(<<<'PHP'
<?
	$a = 10;
	$b = 5;
	
	echo $a % $b; // выведет 0
?>
PHP);

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
PHP);

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
PHP);

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
PHP);

task([
	'num' => 1,
	'text' => 'Как известно, четные числа делятся на <code>2</code> без остатка, а нечетные - с остатком. Пусть у вас дано число. С помощью оператора <code>%</code> и конструкции <code>if</code> проверьте четное это число или нет.',
]);

task([
	'num' => 2,
	'text' => 'Дано число. Проверьте, что оно делится на <code>3</code>.',
]);

startLesson('Поиск ошибок в коде с условиями PHP');
// https://code.mu/ru/php/book/prime/conditions/mistakes/
// ⊗ppPmCdMst

task([
	'num' => 1,
	'text' => 'Код должен проверить сумму чисел:',
	'code' => <<<'PHP'
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
]);

task([
	'num' => 2,
	'text' => 'Код должен проверить первую цифру числа:',
	'code' => <<<'PHP'
<?
	$num = 123;
	
	if ($num[0] === 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 3,
	'text' => 'Код должен проверить первую цифру числа:',
	'code' => <<<'PHP'
<?
	$num = 123;
	
	if ((string) $num[0] === 1) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 4,
	'text' => 'Код должен проверить первую цифру числа:',
	'code' => <<<'PHP'
<?
	$num = 123;
	$str = (string) $num;
	
	if ($str[0] === 1) {
		echo '+++';
	} else {
		echo '---';
	}
PHP,
]);

task([
	'num' => 5,
	'text' => 'Код должен проверить, что в числе ровно две цифры:',
	'code' => <<<'PHP'
<?
	$num = 12;
	
	if (strlen($num) === 2) {
		echo '+++';
	} else {
		echo '---';
	}
?>
PHP,
]);

task([
	'num' => 6,
	'text' => 'Код должен проверить первую цифру числа:',
	'code' => <<<'PHP'
<?
	$num = 123;
	$str = (string) $num;
	
	if ($num[0] === '1') {
		echo '+++';
	} else {
		echo '---';
	}
PHP,
]);

task([
	'num' => 7,
	'text' => 'Код должен проверить, что в числе ровно две цифры:',
	'code' => <<<'PHP'
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
]);

task([
	'num' => 8,
	'text' => 'Приведенный код работает не так, как задумал автор: Объясните причину.',
	'code' => <<<'PHP'
<?
	$num = 1;
	
	if ($num !== 1 or $num !== 2) {
		echo '+++';
	} else {
		echo '---'; // должно вывести это
	}
?>
PHP,
]);

task([
	'num' => 9,
	'text' => 'Приведенный код работает не так, как задумал автор: Объясните причину.',
	'code' => <<<'PHP'
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
]);

startLesson('Практика на условия if-else в PHP');
// https://code.mu/ru/php/book/prime/conditions/practicum/
// ⊗ppPmCdPrm

task([
	'num' => 1,
	'text' => 'В переменной <code>$month</code> лежит какое-то число из интервала от <code>1</code> до <code>12</code>. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).',
]);

task([
	'num' => 2,
	'text' => 'Дана строка, состоящая из символов, например, <code>\'abcde\'</code>. Проверьте, что первым символом этой строки является буква <code>\'a\'</code>.',
]);

task([
	'num' => 3,
	'text' => 'Дано число, например, <code>12345</code>. Проверьте, что первым символом этого числа является цифра <code>1</code>, <code>2</code> или <code>3</code>.',
]);

task([
	'num' => 4,
	'text' => 'Дано трехзначное число. Найдите сумму цифр этого числа.',
]);

task([
	'num' => 5,
	'text' => 'Дано число из <code>6</code>-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.',
]);
