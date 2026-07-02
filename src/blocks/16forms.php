<?

$solutionDir = 'solutions/16forms';

startLesson('Основы работы с формами в PHP');

text('Мы можем получать данные от пользователя

	сайта с помощью <dfn>форм</dfn>. Формы создаются

	с помощью тега <code>form</code>,

	тегов <code>input</code>

	и кнопок <code>submit</code>:');

codeBlock(<<<'PHP'
<form>
	<input>
	<input>
	<input type="submit">
</form>
PHP
);

text('Каждому элементу формы, данные которого мы

	хотим получить в PHP скрипте, мы должны дать

	имя с помощью атрибута <code>name</code>:');

codeBlock(<<<'PHP'
<form>
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP
);

text('С помощью атрибута <code>action</code> мы указываем

	файл, на который будет отправлена форма:');

codeBlock(<<<'PHP'
<form action="/result.php">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'Сделайте форму с тремя инпутами, в которые

		можно ввести имя, возраст и зарплату пользователя.',
    'solution' => $solutionDir . '/solution_294_1.php'
]);

startLesson('Метод отправки формы в PHP');

text('С помощью атрибута <code>method</code> мы указываем

	метод отправки формы. Он может быть <code>GET</code>

	или POST.');

text('Пусть наша форма отправляется методом <code>GET</code>

	на страницу <code>result.php</code>:');

codeBlock(<<<'PHP'
<form action="/result.php" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP
);

text('В этом случае на этой странице в адресной

	строке появятся данные формы в следующем

	формате: после адреса страницы будет стоять

	знак <code>?</code>, а после него имена инпутов

	и введенные пользователем значения: <code>result.php?test1=value1&test2=value2</code>.');

text('Пусть наша форма отправляется методом <code>POST</code>

	на страницу <code>result.php</code>. В этом случае

	данные также будут отправлены, но в адресной

	строке отражены не будут:');

codeBlock(<<<'PHP'
<form action="/result.php" method="POST">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'На странице <code>index.php</code> сделайте форму.

		Отправьте ее на страницу <code>result.php</code>.

		Проверьте оба метода отправки формы.',
    'solution' => $solutionDir . '/solution_295_1.php'
]);

startLesson('Получение данных форм в PHP');

text('Пусть у нас есть файл <code>form.php</code>, а

	в нем HTML форма, отправляющаяся на страницу

	<code>result.php</code>. На этой странице мы можем

	получить данные формы с помощью специальных

	переменных <code>$_GET</code>, <code>$_POST</code> и

	<code>$_REQUEST</code>.');

text('Эти переменные содержат в себе массив данных

	отправленной формы. При этом ключами этого

	массива будут имена инпутов, а значениями

	- те данные, которые были введены в эти инпуты.');

text('При этом, если форма была отправлена методом

	GET, то данные будут в массиве <code>$_GET</code>,

	а если методом POST, то данные будут соответственно

	в массиве <code>$_POST</code>. А в переменной <code>$_REQUEST</code>

	будут лежать данные формы, отправленные любым

	из методов.');

startLesson('Получение данных форм методом GET в PHP');

text('Давайте посмотрим на примере. Пусть файл

	<code>form.php</code> содержит форму, отправляющуюся

	методом <code>GET</code> на страницу <code>result.php</code>:');

codeBlock(<<<'PHP'
<form action="/result.php" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP
);

text('Если в нашу форму в браузере вбить какие-то

	данные и нажать на кнопку, то форма отправится

	на страницу <code>result.php</code>:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET);     // массив с ключами test1 и test2
	var_dump($_POST);    // пустой массив
	var_dump($_REQUEST); // массив с ключами test1 и test2
?>
PHP
);

text('А можно вывести на экран содержимое определенного

	инпута:');

codeBlock(<<<'PHP'
<?
	echo $_GET['test1'];
?>
PHP
);

text('А можно взять содержимое и первого, и второго

	инпутов, слить их в строку и вывести на экран:');

codeBlock(<<<'PHP'
<?
	echo $_GET['test1'] . $_GET['test2'];
?>
PHP
);

task([
    'text' => 'Сделайте форму с тремя инпутами. Пусть в

		эти инпуты вводятся числа. После отправки

		формы выведите на экран сумму этих чисел.',
    'solution' => $solutionDir . '/solution_297_1.php'
]);

startLesson('Получение данных форм методом POST в PHP');

text('Пусть теперь наша форма отправляется методом POST:');

codeBlock(<<<'PHP'
<form action="/result.php" method="POST">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP
);

text('В этом случае на странице результата данные

	формы будут лежать в переменной <code>$_POST</code>:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET);     // пустой массив
	var_dump($_POST);    // массив с ключами test1 и test2
	var_dump($_REQUEST); // массив с ключами test1 и test2
?>
PHP
);

task([
    'text' => 'С помощью формы спросите у пользователя его

		имя и возраст. После отправки формы выведите

		эти данные на экран.',
    'solution' => $solutionDir . '/solution_298_1.php'
]);

task([
    'text' => 'Пусть с помощью формы у пользователя спрашивается

		пароль:

Пусть на странице с результатом в переменной

		хранится правильный пароль:

Сделайте так, чтобы после отправки формы

		на странице результата сравнивался пароль

		из переменной и пароль из формы. После сравнения

		сообщите пользователю, правильный он ввел

		пароль или нет.',
    'code' => <<<'PHP'
<form action="/result.php" method="POST">
	<input type="password" name="pass">
	<input type="submit">
</form>

<?
	$pass = '12345';
?>
PHP,
    'solution' => $solutionDir . '/solution_298_2.php'
]);

task([
    'text' => 'С помощью трех инпутов спросите у пользователя

		год, месяц и день рождения пользователя.

		После отправки формы определите день недели,

		в который родился пользователь.',
    'solution' => $solutionDir . '/solution_298_3.php'
]);

startLesson('Обработка формы в одном файле PHP');

text('В предыдущем уроке наша форма была размещена

	на одной странице, а отправлялась на другую.

	На самом деле это не обязательно. Если оставить

	атрибут <code>action</code> пустым или убрать его

	совсем, то форма будет отправляться на эту

	же страницу.');

text('Как это будет работать: при первом заходе

	на страницу мы заполним форму данными и нажмем

	на кнопку. После этого страница обновится

	и ее код выполнится снова, но уже с данными формы.');

text('Давайте посмотрим на примере. Пусть у нас

	в одном файле есть форма и ее обработка:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?
	var_dump($_GET);
?>
PHP
);

text('При первом заходе на страницу функция <code>var_dump</code>

	выведет пустой массив. А после отправки формы

	он выведет уже данные формы. To есть первый

	раз <code>$_GET</code> будет пуст, а второй раз

	- будет содержать данные формы.');

text('Это может привести к проблемам. Пусть, к

	примеру, мы в форму будем вводить числа и

	хотим вывести сумму этих чисел на экран:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?
	echo $_GET['test1'] + $_GET['test2'];
?>
PHP
);

text('В этом случае при первом заходе на страницу

	мы увидим ошибки PHP, связанные с тем, что

	массив <code>$_GET</code> пуст, а мы обращаемся

	к его элементам.');

text('Здесь следует сказать, что у вас ошибки могут

	и не появится в браузере. В этом случае

	проверьте, что у вас включен вывод ошибок

	PHP, а также убедитесь, что у вас первый

	заход на страницу и в адресной строке нет

	данных формы.');

text('Давайте исправим проблему. Для этого добавим

	условие, в котором будем проверять то, что

	форма была отправлена.');

text('Например, можно проверять <code>$_GET</code> на

	не пустоту. Если <code>$_GET</code> не пустой -

	то форма была отправлена и можно выполнять

	суммирование. В противном случае у нас еще

	первый заход на страницу и суммирование выполнено

	не будет. Итак, вот исправленный код:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?
	if (!empty($_GET)) {
		echo $_GET['test1'] + $_GET['test2'];
	}
?>
PHP
);

task([
    'text' => 'Спросите у пользователя фамилию, имя и отчество.

		После отправки формы выведите на экран введенные

		данные.',
    'solution' => $solutionDir . '/solution_299_1.php'
]);

startLesson('Скрытие формы после отправки в PHP');

text('Пусть у нас есть форма, в которую вводятся
	два числа. Пусть также после отправки формы
	мы выводим на экран сумму этих чисел:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?
	if (!empty($_GET)) {
		echo $_GET['test1'] + $_GET['test2'];
	}
?>
PHP
);

text('Давайте сделаем так, чтобы форма пряталась
	после отправки. Для этого код формы нужно
	разместить внутри условия:');

codeBlock(<<<'PHP'
<?
	if (empty($_GET)) {
?>
	<form action="" method="GET">
		<input name="test1">
		<input name="test2">
		<input type="submit">
	</form>
<?
	} else {
		echo $_GET['test1'] + $_GET['test2'];
	}
?>
PHP
);

task([
    'text' => 'С помощью формы спросите имя пользователя.
		После отправки формы поприветствуйте пользователя
		по имени, а форму уберите.',
    'solution' => $solutionDir . '/solution_300_1.php'
]);

startLesson('Сохранение значений формы после отправки в PHP');

text('Пусть у нас есть некоторая форма, отправляющаяся

	на текущую страницу:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input name="test">
	<input type="submit">
</form>
PHP
);

text('Давайте сделаем так, чтобы после отправки

	введенные данные не пропадали из нашего инпута:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input name="test" value="<? echo $_GET['test'] ?>">
	<input type="submit">
</form>
PHP
);

text('Такой подход, однако, не совершенен - при

	первом заходе на страницу PHP выдаст ошибку

	из-за того, что <code>$_GET[\'test\']</code> не существует.');

text('Для решения проблемы добавим условие:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input
		name="test"
		value="<? if (isset($_GET['test'])) echo $_GET['test'] ?>"
	>
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'С помощью формы спросите город и страну пользователя.

		После отправки формы выведите введенные данные

		на экран. Сделайте так, чтобы введенные данные

		не пропадали из инпутов после отправки формы.',
    'solution' => $solutionDir . '/solution_301_1.php'
]);

startLesson('Сохранение значения по умолчанию формы в PHP');

text('Пусть мы хотим сделать так, чтобы по при

	заходе на страницу в инпуте уже был какой-то

	текст. Пользователь может поредактировать

	этот текст, а может оставить его без изменения.

	А после отправки формы в инпуте должен остаться

	тот текст, который был на момент отправки.');

text('Для решения этой задачи нам необходимо добавить

	блок <code>else</code> в наше условие и в этом

	блоке вывести значение по умолчанию:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input
		name="test"
		value="<?
			if (isset($_GET['test']))
				echo $_GET['test'];
			else echo 'default' 
		?>"
	>
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'С помощью формы спросите у пользователя год.

		После отправки определите, этот год високосный

		или нет. Сделайте так, чтобы при первом заходе

		на страницу в инпуте уже стоял текущий год.',
    'solution' => $solutionDir . '/solution_302_1.php'
]);

startLesson('Сокращенный код для сохранения значений по умолчанию в PHP');

text('Полученный нами код очень уж длинный. Давайте

	его сократим. Для начала вместо <code>if</code>

	используем тернарный оператор:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input
		name="test"
		value="<?
			echo isset($_GET['test']) ? $_GET['test'] : 'default' 
		?>"
	>
	<input type="submit">
</form>
PHP
);

text('А теперь используем сокращенный вариант PHP

	скобки:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input
		name="test"
		value="<?= isset($_GET['test']) ? $_GET['test'] : 'default' ?>"
	>
	<input type="submit">
</form>
PHP
);

text('А теперь используем оператор <code>??</code>, который

	сократит код еще больше:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input name="test" value="<?= $_GET['test'] ?? 'default' ?>">
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'С помощью трех инпутов спросите у пользователя

		год, месяц и день. После отправки формы выведите

		на экран, сколько дней осталось от введенной

		даты до Нового Года. По заходу на страницу

		сделайте так, чтобы в инпутах стояла текущая дата.',
    'solution' => $solutionDir . '/solution_303_1.php'
]);

startLesson('Элемент textarea в PHP');

text('В данном уроке мы поработаем с элементом

	<code>textarea</code>,

	представляющим собой многострочное поле ввода.

	Вот пример использования этого тега в форме:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<textarea name="test"></textarea>
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'Попросите пользователя оставить отзыв на

		сайт. После отправки формы выведите этот

		отзыв на экран.',
    'solution' => $solutionDir . '/solution_304_1.php'
]);

startLesson('Сохранение значения textarea после отправки в PHP');

text('Давайте теперь сделаем так, чтобы содержимое

	<code>textarea</code> сохранялось после отправки:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<textarea name="test"><?= $_GET['test'] ?? '' ?></textarea>
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'Пусть в <code>textarea</code> вводится русский

		текст. После отправки формы выведите на экран

		транслит этого текста. Сделайте так, чтобы

		содержимое формы сохранялось после отправки.',
    'solution' => $solutionDir . '/solution_305_1.php'
]);

startLesson('Чекбокс в PHP');

text('Давайте теперь научимся работать с флажками

	<code>checkbox</code>

	в PHP. Сделаем такой флажок в нашей форме:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="checkbox" name="flag">
	<input name="text">
	<input type="submit">
</form>
PHP
);

text('После отправки формы в <code>$_GET</code> флажка

	будет содержаться строка <code>\'on\'</code>, если

	флажок был отмечен и <code>null</code>, если нет:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET['flag']); // 'on' или null
?>
PHP
);

text('Давайте выведем что-нибудь на экран в зависимости

	от того, был отмечен флажок или нет:');

codeBlock(<<<'PHP'
<?
	if (!empty($_GET)) { // если форма была отправлена
		if (isset($_GET['flag'])) { // если флажок отмечен
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?>
PHP
);

task([
    'text' => 'Сделайте форму с инпутом и флажком. С помощью

		инпута спросите у пользователя имя. После

		отправки формы, если флажок был отмечен,

		поприветствуйте пользователя, а если не был

		отмечен - попрощайтесь.',
    'solution' => $solutionDir . '/solution_306_1.php'
]);

startLesson('Нюансы использования чекбоксов в PHP');

text('Пусть в нашей форме есть только чекбокс:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="checkbox" name="flag">
	<input type="submit">
</form>
PHP
);

text('Пусть код обработки нашей формы выглядит вот так:');

codeBlock(<<<'PHP'
<?
	if (!empty($_GET)) { // если форма была отправлена
		if (isset($_GET['flag'])) { // если флажок отмечен
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?>
PHP
);

text('Нас ждет проблема - если флажок не отмечен,

	то, так как в форме кроме чекбокса нет других

	элементов, в <code>$_GET</code> будет лежать пустой

	массив. Это значит, что в коде обработки

	формы мы не попадем в первый <code>if</code>, проверяющий

	отправку формы.');

text('Для решения проблемы используют специальный

	прием: создают скрытый инпут с таким же именем,

	как и у нашего чекбокса. При этом значением

	скрытого инпута ставят ноль, а чебокса - единицу:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="hidden" name="flag" value="0">
	<input type="checkbox" name="flag" value="1">
	<input type="submit">
</form>
PHP
);

text('В таком случае получится следующее. Если

	чекбокс не отмечен, то на сервер отправится

	только значение скрытого инпута. Если же

	чекбокс отмечен, то на сервер отправятся

	оба значения с одним именем. Но, так как

	значение чекбокса будет вторым, то оно просто

	затрет первое.');

text('Итак, теперь наша чекбокс будет отправлять

	на сервер или ноль, или один:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET['flag']); // '0' или '1'
?>
PHP
);

text('Используем это в нашей проверке:');

codeBlock(<<<'PHP'
<?
	if (!empty($_GET)) {
		if ($_GET['flag'] === '1') {
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?>
PHP
);

task([
    'text' => 'С помощью флажка спросите у пользователя,

		есть ему уже <code>18</code> лет или нет. Если

		есть, разрешите ему доступ на сайт, а если

		нет - не разрешите.',
    'solution' => $solutionDir . '/solution_307_1.php'
]);

startLesson('Сохранение выбранного значения в чекбоксе после отправки в PHP');

text('Давайте теперь сделаем так, чтобы значение

	чекбокса сохранялось после отправки. Для

	этого проверим, что <code>$_GET[\'flag\']</code>

	существует (то есть была отправка формы)

	и равен единице (то есть флажок отмечен).');

text('Если эти два условия выполняются, то выведем

	в чекбоксе атрибут <code>checked</code>:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="hidden" name="flag" value="0">
	<input
		type="checkbox"
		name="flag" <?
			if (isset($_GET['flag']) and $_GET['flag'] === '1')
				echo 'checked';
			?>
		>
	<input type="submit">
</form>
PHP
);

text('Проверку можно упростить, если мы точно знаем,

	что скрытый инпут передает <code>0</code>. В таком

	случае, если чекбокс не отмечен, то в <code>$_GET[\'flag\']</code>

	будет лежать <code>\'0\'</code>, а если отправки

	формы еще не было, то будет лежать <code>null</code>.');

text('В обоих этих случаях мы не должны выводить

	<code>checked</code>. И оба этих случая мы можем

	поймать функцией <code>empty</code>. Таким образом

	мы можем проверить, что <code>$_GET[\'flag\']</code>

	не пуст, и только в этом случае вывести <code>checked</code>:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="hidden" name="flag" value="0">
	<input
		type="checkbox"
		name="flag"
		value="1"
		<? if (!empty($_GET['flag'])) echo 'checked' ?>
	>
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'Сделайте три чекбокса, которые будут сохранять

		свое значение после отправки.',
    'solution' => $solutionDir . '/solution_308_1.php'
]);

startLesson('Радиокнопки в PHP');

text('Давайте теперь научимся работать с <code>radio</code>

	в PHP. Сделаем несколько переключателей в

	нашей форме:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="radio" name="radio" value="1">
	<input type="radio" name="radio" value="2">
	<input type="radio" name="radio" value="3">
	<input type="submit">
</form>
PHP
);

text('После отправки формы в <code>$_GET</code> переключателя

	будет содержаться значение атрибута <code>value</code>

	отмеченного переключателя, либо <code>null</code>,

	если ничего не было отмечено:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET['radio']); // '1', '2', '3' или null
?>
PHP
);

text('При работе с радио возникают та же проблема,

	что и в чекбоксах. Для решения этой проблемы

	давайте добавим скрытый инпут:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="hidden" name="radio" value="0">
	<input type="radio"  name="radio" value="1">
	<input type="radio"  name="radio" value="2">
	<input type="radio"  name="radio" value="3">
	<input type="submit">
</form>
PHP
);

text('Можно также не вводить скрытый инпут, а сделать

	один из переключателей отмеченным по умолчанию:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="radio" name="radio" value="1" checked>
	<input type="radio" name="radio" value="2">
	<input type="radio" name="radio" value="3">
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'С помощью двух переключателей спросите у

		пользователя его пол. Выведите результат на экран.',
    'solution' => $solutionDir . '/solution_309_1.php'
]);

startLesson('Сохранение выбранного значения в радиокнопках после отправки в PHP');

text('Давайте напишем код, который будет сохранять

	отмеченный переключатель после отправки формы:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<input type="radio" name="radio" value="1" <?
		if (!empty($_GET['radio']) and $_GET['radio'] === '1') {
			echo 'checked';
		}
	?>>
	<input type="radio" name="radio" value="2" <?
		if (!empty($_GET['radio']) and $_GET['radio'] === '2') {
			echo 'checked';
		}
	?>>
	<input type="radio" name="radio" value="3" <?
		if (!empty($_GET['radio']) and $_GET['radio'] === '3') {
			echo 'checked';
		}
	?>>
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'С помощью переключателей попросите пользователя

		выбрать его язык. Сделайте так, чтобы выбор

		не пропадал после отправки формы.',
    'solution' => $solutionDir . '/solution_310_1.php'
]);

startLesson('Селекты в PHP');

text('Давайте теперь научимся работать с тегом

	<code>select</code>

	в PHP. Сделаем такой выпадающий список в

	нашей форме:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<select name="test">
		<option>item1</option>
		<option>item2</option>
		<option>item3</option>
	</select>
	<input type="submit">
</form>
PHP
);

text('После отправки формы в <code>$_GET</code> селекта

	будет содержаться значение выбранного тега

	<code>option</code>:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET['test']); // 'item1', 'item2' или 'item3'
?>
PHP
);

task([
    'text' => 'С помощью выпадающего списка предложите пользователю

		выбрать страну, в которой он живет.',
    'solution' => $solutionDir . '/solution_311_1.php'
]);

startLesson('Атрибут value в селектах в PHP');

text('Давайте для пунктов списка укажем атрибут

	<code>value</code>:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<select name="test">
		<option value="1">item1</option>
		<option value="2">item2</option>
		<option value="3">item3</option>
	</select>
	<input type="submit">
</form>
PHP
);

text('В этом случае на сервер будет отправляться

	именно значение этого атрибута:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET['test']); // '1', '2' или '3'
?>
PHP
);

task([
    'text' => 'Объясните, чем удобнее такой подход.',
    'solution' => $solutionDir . '/solution_312_1.php'
]);

task([
    'text' => 'С помощью выпадающего списка попросите пользователя

		выбрать его язык.',
    'solution' => $solutionDir . '/solution_312_2.php'
]);

startLesson('Сохранение значения в селектах после отправки в PHP');

text('Давайте сделаем так, чтобы выбор пользователя

	сохранялся после отправки:');

codeBlock(<<<'PHP'
<form action="" method="GET">
	<select name="test">
		<option value="1" <?
			if (!empty($_GET['test']) and $_GET['test'] === '1') {
				echo 'selected';
			}
		?>>item1</option>
		<option value="2" <?
			if (!empty($_GET['test']) and $_GET['test'] === '2') {
				echo 'selected';
			}
		?>>item2</option>
		<option value="3" <?
			if (!empty($_GET['test']) and $_GET['test'] === '3') {
				echo 'selected';
			}
		?>>item3</option>
	</select>
	<input type="submit">
</form>
PHP
);

task([
    'text' => 'Модифицируйте предыдущую задачу так, чтобы

		выбранное значение не исчезало после отправки.',
    'solution' => $solutionDir . '/solution_313_1.php'
]);

startLesson('GET запросы в PHP');

text('Вы уже знаете, что при отправке формы методом
	<code>GET</code> в адресной строке браузера после
	знака <code>?</code> появляются данные формы. Эти
	данные в PHP коде будут доступны в массиве
	<code>$_GET</code>.');

text('На самом деле наличие формы на страницы является
	не обязательным - мы можем просто руками
	написать в адресной строке знак вопроса,
	после него перечислить параметры с их значениями
	и нажать энтер.');

text('В этом случае введенные нами данные также
	будут доступны в массиве <code>$_GET</code>. To
	есть получится имитация отправки формы. Такая
	имитация называется <dfn>отправить <code>GET</code>
	запрос</dfn>. Такие слова означают, что мы
	должны руками вбить в адресную строку вопросик
	и параметры запроса.');

text('Параметры запроса перечисляются в следующем
	формате: имя, затем знак равно, затем значение
	параметра. Если параметров несколько, то
	они разделяются знаком амперсанд <code>&</code>.');

text('Давайте попробуем на примерах. Пусть у вас
	есть некоторый PHP файл. Обратитесь к нему
	в браузере, как вы обычно это делаете. А
	затем добавьте в конец адресной строки <code>?par1=1</code>
	и нажмите энтер.');

text('В результате наш параметр будет содержаться
	в <code>$_GET[\'par1\']</code>:');

codeBlock(<<<'PHP'
<?
	echo $_GET['par1']; // выведет '1'
?>
PHP
);

text('Давайте теперь отправим не один параметр,
	а два. Для этого добавьте в конец адресной
	строки это: <code>?par1=1&par2=2</code> и нажмите
	энтер. Вот, что получится в результате:');

codeBlock(<<<'PHP'
<?
	var_dump($_GET); // ['par1' => '1', 'par2' => '2']
?>
PHP
);

task([
    'text' => 'Отправьте с помощью <code>GET</code>-запроса число.
		Выведите его на экран.',
    'solution' => $solutionDir . '/solution_314_1.php'
]);

task([
    'text' => 'Отправьте с помощью <code>GET</code>-запроса число.
		Выведите его на экран квадрат этого числа.',
    'solution' => $solutionDir . '/solution_314_2.php'
]);

task([
    'text' => 'Отправьте с помощью <code>GET</code>-запроса два
		числа. Выведите его на экран сумму этих чисел.',
    'solution' => $solutionDir . '/solution_314_3.php'
]);

task([
    'text' => 'Пусть с помощью <code>GET</code>-запроса отправляется
		число. Сделайте так, чтобы если передано
		число 1 - на экран вывелось слово <code>\'hello\'</code>,
		а если 2 - то слово <code>\'bye\'</code>.',
    'solution' => $solutionDir . '/solution_314_4.php'
]);

task([
    'text' => 'Дан массив:

Пусть с помощью <code>GET</code>-запроса можно
		передать число. Сделайте так, чтобы на экран
		вывелся элемент массива с переданным в запросе
		номером.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
    'solution' => $solutionDir . '/solution_314_5.php'
]);

startLesson('GET запросы с помощью ссылок в PHP');

text('В реальном мире, конечно же, пользователи
	вашего сайта не будут отправлять <code>GET</code>
	запросы вручную через адресную строку.');

text('Для этого мы будем предоставлять им ссылки,
	содержащие параметры <code>GET</code> запроса.
	Пользователи будут переходить по ссылкам
	и автоматически отправлять <code>GET</code> запросы.');

text('Давайте посмотрим на примерах. При переходе
	по следующей ссылке мы попадем на страницу
	<code>index.php</code>, отправив <code>GET</code> параметры:');

codeBlock(<<<'PHP'
<a href="index.php?par1=1&par2=2">ссылка</a>
PHP
);

text('Саму страницу в ссылке можно и не указывать,
	а просто начать адрес со знака <code>?</code>.
	В этом случае при переходе по ссылке мы вернемся
	на текущую страницу, но с <code>GET</code> параметрами
	в адресной строке. Вот пример:');

codeBlock(<<<'PHP'
<a href="?par1=1&par2=2">ссылка</a>
PHP
);

task([
    'text' => 'Сделайте три ссылки. Пусть первая передает
		число <code>1</code>, вторая - число <code>2</code>,
		третья - число <code>3</code>. Сделайте так, чтобы
		по нажатию на ссылку на экран выводилось ее число.',
    'solution' => $solutionDir . '/solution_315_1.php'
]);

task([
    'text' => 'Сформируйте в цикле <code>10</code> ссылок. Пусть
		каждая ссылка передает свое число. Сделайте
		так, чтобы по нажатию на ссылку на экран
		выводилось ее число.',
    'solution' => $solutionDir . '/solution_315_2.php'
]);

task([
    'text' => 'Дан массив:

Сделайте так, чтобы с помощью <code>GET</code>
		запроса можно было вывести любой элемент
		этого массива. Для этого с помощью цикла
		<code>foreach</code> сделайте ссылку для каждого
		элемента массива.',
    'code' => <<<'PHP'
$arr = ['a', 'b', 'c', 'd', 'e'];
PHP,
    'solution' => $solutionDir . '/solution_315_3.php'
]);

startLesson('Практика на формы в PHP');

task([
    'text' => 'Напишите скрипт, который будет преобразовывать

		температуру из градусов Цельсия в градусы

		Фарингейта. Для этого сделайте инпут и кнопку',
    'solution' => $solutionDir . '/solution_316_1.php'
]);

task([
    'text' => 'Напишите скрипт, который будет считать факториал

		числа. Само число вводится в инпут и после

		нажатия на кнопку пользователь должен увидеть

		результат.',
    'solution' => $solutionDir . '/solution_316_2.php'
]);

task([
    'text' => 'Дан инпут и кнопка. В инпут вводится число.

		По нажатию на кнопку выведите список делителей

		этого числа.',
    'solution' => $solutionDir . '/solution_316_3.php'
]);

task([
    'text' => 'Даны <code>2</code> инпута и кнопка. В инпуты вводятся

		числа. По нажатию на кнопку выведите список

		общих делителей этих двух чисел.',
    'solution' => $solutionDir . '/solution_316_4.php'
]);

task([
    'text' => 'Напишите скрипт, который будет находить корни

		квадратного уравнения. Для этого сделайте

		<code>3</code> инпута, в которые будут вводиться

		коэффициенты уравнения.',
    'solution' => $solutionDir . '/solution_316_5.php'
]);

task([
    'text' => 'Даны <code>3</code> инпута. В них вводятся числа.

		Проверьте, что эти числа являются тройкой

		Пифагора: квадрат самого большого числа должен

		быть равен сумме квадратов двух остальных.',
    'solution' => $solutionDir . '/solution_316_6.php'
]);

task([
    'text' => 'Дан инпут и кнопка. В этот инпут вводится

		дата рождения в формате <code>\'01.12.1990\'</code>.

		По нажатию на кнопку выведите на экран сколько

		дней осталось до дня рождения пользователя.',
    'solution' => $solutionDir . '/solution_316_7.php'
]);

task([
    'text' => 'Дан текстареа и кнопка. В текстареа вводится

		текст. По нажатию на кнопку выведите количество

		слов и количество символов в тексте.',
    'solution' => $solutionDir . '/solution_316_8.php'
]);

task([
    'text' => 'Дан текстареа и кнопка. В текстареа вводится

		текст. По нажатию на кнопку нужно посчитать

		процентное содержание каждого символа в тексте.',
    'solution' => $solutionDir . '/solution_316_9.php'
]);

task([
    'text' => 'Даны <code>3</code> селекта и кнопка. Первый селект

		- это дни от <code>1</code> до <code>31</code>, второй

		селект - это месяцы от января до декабря,

		а третий - это годы от <code>1990</code> до <code>2025</code>.

		С помощью этих селектов можно выбрать дату.

		По нажатию на кнопку выведите на экран день

		недели, соответствующий этой дате.',
    'solution' => $solutionDir . '/solution_316_10.php'
]);

task([
    'text' => 'Сделайте скрипт-гороскоп. Внутри него хранится

		массив гороскопов на несколько дней вперед

		для каждого знака зодиака. По заходу на страницу

		спросите у пользователя дату рождения, определите

		его знак зодиака и выведите предсказание

		для этого знака зодиака на текущий день.',
    'solution' => $solutionDir . '/solution_316_11.php'
]);

endLesson();
