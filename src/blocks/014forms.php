<?

startLesson('Основы работы с формами в PHP');
// https://code.mu/ru/php/book/prime/forms/intro/
// ⊗ppPmFmInr

codeBlock(<<< 'PHP'
<form>
	<input>
	<input>
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form>
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form action="/result.php">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте форму с тремя инпутами, в которые можно ввести имя, возраст и зарплату пользователя.',
]);

startLesson('Метод отправки формы в PHP');
// https://code.mu/ru/php/book/prime/forms/form-submission-method/
// ⊗ppPmFmFSM

codeBlock(<<< 'PHP'
<form action="/result.php" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form action="/result.php" method="POST">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP);

task([
    'num' => 1,
    'text' => 'На странице <code>index.php</code> сделайте форму. Отправьте ее на страницу <code>result.php</code>. Проверьте оба метода отправки формы.',
]);

startLesson('Получение данных форм в PHP');
// https://code.mu/ru/php/book/prime/forms/data-getting/
// ⊗ppPmFmDG

startLesson('Получение данных форм методом GET в PHP');
// https://code.mu/ru/php/book/prime/forms/data-getting-exemple-get/
// ⊗ppPmFmDGEG

codeBlock(<<< 'PHP'
<form action="/result.php" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET);     // массив с ключами test1 и test2
	var_dump($_POST);    // пустой массив
	var_dump($_REQUEST); // массив с ключами test1 и test2
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo $_GET['test1'];
?>
PHP);

codeBlock(<<< 'PHP'
<?
	echo $_GET['test1'] . $_GET['test2'];
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа. После отправки формы выведите на экран сумму этих чисел.',
]);

startLesson('Получение данных форм методом POST в PHP');
// https://code.mu/ru/php/book/prime/forms//data-getting-exemple-post/
// ⊗ppPmFmDGEP

codeBlock(<<< 'PHP'
<form action="/result.php" method="POST">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET);     // пустой массив
	var_dump($_POST);    // массив с ключами test1 и test2
	var_dump($_REQUEST); // массив с ключами test1 и test2
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью формы спросите у пользователя его имя и возраст. После отправки формы выведите эти данные на экран.',
]);

task([
    'num' => 2,
    'text' => 'Пусть с помощью формы у пользователя спрашивается пароль: Пусть на странице с результатом в переменной хранится правильный пароль: Сделайте так, чтобы после отправки формы на странице результата сравнивался пароль из переменной и пароль из формы. После сравнения сообщите пользователю, правильный он ввел пароль или нет.',
    'code' => <<< 'PHP'
<form action="/result.php" method="POST">
	<input type="password" name="pass">
	<input type="submit">
</form>

<?
	$pass = '12345';
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'С помощью трех инпутов спросите у пользователя год, месяц и день рождения пользователя. После отправки формы определите день недели, в который родился пользователь.',
]);

startLesson('Обработка формы в одном файле PHP');
// https://code.mu/ru/php/book/prime/forms/one-file-handling/
// ⊗ppPmFmOFH

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?
	var_dump($_GET);
?>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?
	echo $_GET['test1'] + $_GET['test2'];
?>
PHP);

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'Спросите у пользователя фамилию, имя и отчество. После отправки формы выведите на экран введенные данные.',
]);

startLesson('Скрытие формы после отправки в PHP');
// https://code.mu/ru/php/book/prime/forms/hiding-after-submit/
// ⊗ppPmFmHAS

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите.',
]);

startLesson('Сохранение значений формы после отправки в PHP');
// https://code.mu/ru/php/book/prime/forms/values-remaining/
// ⊗ppPmFmVR

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input name="test">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input name="test" value="<? echo $_GET['test'] ?>">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input
		name="test"
		value="<? if (isset($_GET['test'])) echo $_GET['test'] ?>"
	>
	<input type="submit">
</form>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью формы спросите город и страну пользователя. После отправки формы выведите введенные данные на экран. Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы.',
]);

startLesson('Сохранение значения по умолчанию формы в PHP');
// https://code.mu/ru/php/book/prime/forms/values-remaining-default-value/
// ⊗ppPmFmVRDV

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'С помощью формы спросите у пользователя год. После отправки определите, этот год високосный или нет. Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год.',
]);

startLesson('Сокращенный код для сохранения значений по умолчанию в PHP');
// https://code.mu/ru/php/book/prime/forms/values-remaining-shorten-code/
// ⊗ppPmFmVRShC

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input
		name="test"
		value="<?
			echo isset($_GET['test']) ? $_GET['test'] : 'default' 
		?>"
	>
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input
		name="test"
		value="<?= isset($_GET['test']) ? $_GET['test'] : 'default' ?>"
	>
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input name="test" value="<?= $_GET['test'] ?? 'default' ?>">
	<input type="submit">
</form>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью трех инпутов спросите у пользователя год, месяц и день. После отправки формы выведите на экран, сколько дней осталось от введенной даты до Нового Года. По заходу на страницу сделайте так, чтобы в инпутах стояла текущая дата.',
]);

startLesson('Элемент textarea в PHP');
// https://code.mu/ru/php/book/prime/forms/textarea/
// ⊗ppPmFmTx

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<textarea name="test"></textarea>
	<input type="submit">
</form>
PHP);

task([
    'num' => 1,
    'text' => 'Попросите пользователя оставить отзыв на сайт. После отправки формы выведите этот отзыв на экран.',
]);

startLesson('Сохранение значения textarea после отправки в PHP');
// https://code.mu/ru/php/book/prime/forms/textarea-save-value/
// ⊗ppPmFmTxSV

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<textarea name="test"><?= $_GET['test'] ?? '' ?></textarea>
	<input type="submit">
</form>
PHP);

task([
    'num' => 1,
    'text' => 'Пусть в <code>textarea</code> вводится русский текст. После отправки формы выведите на экран транслит этого текста. Сделайте так, чтобы содержимое формы сохранялось после отправки.',
]);

startLesson('Чекбокс в PHP');
// https://code.mu/ru/php/book/prime/forms/checkbox/
// ⊗ppPmFmChc

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input type="checkbox" name="flag">
	<input name="text">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET['flag']); // 'on' или null
?>
PHP);

codeBlock(<<< 'PHP'
<?
	if (!empty($_GET)) { // если форма была отправлена
		if (isset($_GET['flag'])) { // если флажок отмечен
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте форму с инпутом и флажком. С помощью инпута спросите у пользователя имя. После отправки формы, если флажок был отмечен, поприветствуйте пользователя, а если не был отмечен - попрощайтесь.',
]);

startLesson('Нюансы использования чекбоксов в PHP');
// https://code.mu/ru/php/book/prime/forms/checkbox-nuances/
// ⊗ppPmFmChcN

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input type="checkbox" name="flag">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	if (!empty($_GET)) { // если форма была отправлена
		if (isset($_GET['flag'])) { // если флажок отмечен
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input type="hidden" name="flag" value="0">
	<input type="checkbox" name="flag" value="1">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET['flag']); // '0' или '1'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	if (!empty($_GET)) {
		if ($_GET['flag'] === '1') {
			echo 'отмечен';
		} else {
			echo 'не отмечен';
		}
	}
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью флажка спросите у пользователя, есть ему уже <code>18</code> лет или нет. Если есть, разрешите ему доступ на сайт, а если нет - не разрешите.',
]);

startLesson('Сохранение выбранного значения в чекбоксе после отправки в PHP');
// https://code.mu/ru/php/book/prime/forms/checkbox-save-value/
// ⊗ppPmFmChcSV

codeBlock(<<< 'PHP'
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
PHP);

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте три чекбокса, которые будут сохранять свое значение после отправки.',
]);

startLesson('Радиокнопки в PHP');
// https://code.mu/ru/php/book/prime/forms/radio/
// ⊗ppPmFmRd

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input type="radio" name="radio" value="1">
	<input type="radio" name="radio" value="2">
	<input type="radio" name="radio" value="3">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET['radio']); // '1', '2', '3' или null
?>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input type="hidden" name="radio" value="0">
	<input type="radio"  name="radio" value="1">
	<input type="radio"  name="radio" value="2">
	<input type="radio"  name="radio" value="3">
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<input type="radio" name="radio" value="1" checked>
	<input type="radio" name="radio" value="2">
	<input type="radio" name="radio" value="3">
	<input type="submit">
</form>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью двух переключателей спросите у пользователя его пол. Выведите результат на экран.',
]);

startLesson('Сохранение выбранного значения в радиокнопках после отправки в PHP');
// https://code.mu/ru/php/book/prime/forms/radio-save-value/
// ⊗ppPmFmRdSV

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'С помощью переключателей попросите пользователя выбрать его язык. Сделайте так, чтобы выбор не пропадал после отправки формы.',
]);

startLesson('Селекты в PHP');
// https://code.mu/ru/php/book/prime/forms/select/
// ⊗ppPmFmSl

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<select name="test">
		<option>item1</option>
		<option>item2</option>
		<option>item3</option>
	</select>
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET['test']); // 'item1', 'item2' или 'item3'
?>
PHP);

task([
    'num' => 1,
    'text' => 'С помощью выпадающего списка предложите пользователю выбрать страну, в которой он живет.',
]);

startLesson('Атрибут value в селектах в PHP');
// https://code.mu/ru/php/book/prime/forms/select-attribute-value/
// ⊗ppPmFmSlAV

codeBlock(<<< 'PHP'
<form action="" method="GET">
	<select name="test">
		<option value="1">item1</option>
		<option value="2">item2</option>
		<option value="3">item3</option>
	</select>
	<input type="submit">
</form>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET['test']); // '1', '2' или '3'
?>
PHP);

task([
    'num' => 1,
    'text' => 'Объясните, чем удобнее такой подход.',
]);

task([
    'num' => 2,
    'text' => 'С помощью выпадающего списка попросите пользователя выбрать его язык.',
]);

startLesson('Сохранение значения в селектах после отправки в PHP');
// https://code.mu/ru/php/book/prime/forms/select-save-value/
// ⊗ppPmFmSSV

codeBlock(<<< 'PHP'
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
PHP);

task([
    'num' => 1,
    'text' => 'Модифицируйте предыдущую задачу так, чтобы выбранное значение не исчезало после отправки.',
]);

startLesson('GET запросы в PHP');
// https://code.mu/ru/php/book/prime/forms/get-queries/
// ⊗ppPmFmGQ

codeBlock(<<< 'PHP'
<?
	echo $_GET['par1']; // выведет '1'
?>
PHP);

codeBlock(<<< 'PHP'
<?
	var_dump($_GET); // ['par1' => '1', 'par2' => '2']
?>
PHP);

task([
    'num' => 1,
    'text' => 'Отправьте с помощью <code>GET</code>-запроса число. Выведите его на экран.',
]);

task([
    'num' => 2,
    'text' => 'Отправьте с помощью <code>GET</code>-запроса число. Выведите его на экран квадрат этого числа.',
]);

task([
    'num' => 3,
    'text' => 'Отправьте с помощью <code>GET</code>-запроса два числа. Выведите его на экран сумму этих чисел.',
]);

task([
    'num' => 4,
    'text' => 'Пусть с помощью <code>GET</code>-запроса отправляется число. Сделайте так, чтобы если передано число 1 - на экран вывелось слово <code>\'hello\'</code>, а если 2 - то слово <code>\'bye\'</code>.',
]);

task([
    'num' => 5,
    'text' => 'Дан массив: Пусть с помощью <code>GET</code>-запроса можно передать число. Сделайте так, чтобы на экран вывелся элемент массива с переданным в запросе номером.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
]);

startLesson('GET запросы с помощью ссылок в PHP');
// https://code.mu/ru/php/book/prime/forms/get-queries-links/
// ⊗ppPmFmGQL

codeBlock(<<< 'PHP'
<a href="index.php?par1=1&par2=2">ссылка</a>
PHP);

codeBlock(<<< 'PHP'
<a href="?par1=1&par2=2">ссылка</a>
PHP);

task([
    'num' => 1,
    'text' => 'Сделайте три ссылки. Пусть первая передает число <code>1</code>, вторая - число <code>2</code>, третья - число <code>3</code>. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.',
]);

task([
    'num' => 2,
    'text' => 'Сформируйте в цикле <code>10</code> ссылок. Пусть каждая ссылка передает свое число. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.',
]);

task([
    'num' => 3,
    'text' => 'Дан массив: Сделайте так, чтобы с помощью <code>GET</code> запроса можно было вывести любой элемент этого массива. Для этого с помощью цикла <code>foreach</code> сделайте ссылку для каждого элемента массива.',
    'code' => <<< 'PHP'
$arr = ['a', 'b', 'c', 'd', 'e'];
PHP,
]);

startLesson('Практика на формы в PHP');
// https://code.mu/ru/php/book/prime/forms/practicum/
// ⊗ppPmFmPrm

task([
    'num' => 1,
    'text' => 'Напишите скрипт, который будет преобразовывать температуру из градусов Цельсия в градусы Фарингейта. Для этого сделайте инпут и кнопку',
]);

task([
    'num' => 2,
    'text' => 'Напишите скрипт, который будет считать факториал числа. Само число вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат.',
]);

task([
    'num' => 3,
    'text' => 'Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку выведите список делителей этого числа.',
]);

task([
    'num' => 4,
    'text' => 'Даны <code>2</code> инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите список общих делителей этих двух чисел.',
]);

task([
    'num' => 5,
    'text' => 'Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте <code>3</code> инпута, в которые будут вводиться коэффициенты уравнения.',
]);

task([
    'num' => 6,
    'text' => 'Даны <code>3</code> инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух остальных.',
]);

task([
    'num' => 7,
    'text' => 'Дан инпут и кнопка. В этот инпут вводится дата рождения в формате <code>\'01.12.1990\'</code>. По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя.',
]);

task([
    'num' => 8,
    'text' => 'Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов и количество символов в тексте.',
]);

task([
    'num' => 9,
    'text' => 'Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте.',
]);

task([
    'num' => 10,
    'text' => 'Даны <code>3</code> селекта и кнопка. Первый селект - это дни от <code>1</code> до <code>31</code>, второй селект - это месяцы от января до декабря, а третий - это годы от <code>1990</code> до <code>2025</code>. С помощью этих селектов можно выбрать дату. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате.',
]);

task([
    'num' => 11,
    'text' => 'Сделайте скрипт-гороскоп. Внутри него хранится массив гороскопов на несколько дней вперед для каждого знака зодиака. По заходу на страницу спросите у пользователя дату рождения, определите его знак зодиака и выведите предсказание для этого знака зодиака на текущий день.',
]);
