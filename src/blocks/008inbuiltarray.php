<?

startLesson('Поиск по массивам в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/searching/
// ⊗ppPmAFSch

task([
    'num' => 1,
    'text' => 'Дан массив: Проверьте, что в нем есть элемент со значением <code>3</code>.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Найдите позицию первого элемента <code>\'-\'</code>.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дан массив: Найдите позицию первого элемента <code>\'-\'</code> и удалите его с помощью функции <code>array_splice</code>.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
?>
PHP,
]);

startLesson('Граничные элементы в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/boundary/
// ⊗ppPmAFBr

task([
    'num' => 1,
    'text' => 'Дан массив: Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Добавьте ему в начало элемент <code>0</code>, а в конец - элемент <code>6</code>.',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>
PHP,
]);

startLesson('Слайсинг массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/slicing/
// ⊗ppPmAFSl

task([
    'num' => 1,
    'text' => 'Дан массив: Получите из этого массива следующий срез, не изменяя при этом сам массив:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>

<?
	[2, 3, 4]
?>
PHP,
]);

startLesson('Сплайсинг массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/splicing/
// ⊗ppPmAFSp

task([
    'num' => 1,
    'text' => 'Дан массив: Вырежьте из него элементы, чтобы массив стал вот таким:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>

<?
	[1, 4, 5]
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Получите из этого массива следующий срез:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>

<?
	[2, 3, 4]
?>
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дан массив: Добавьте в этот массив новые элементы:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>

<?
	[1, 2, 3, 'a', 'b', 'c', 4, 5]
?>
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дан массив: Добавьте в этот массив новые элементы:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>

<?
	[1, 'a', 'b', 2, 3, 4, 'c',  5, 'e']
?>
PHP,
]);

startLesson('Диапазон в массив в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/ranging/
// ⊗ppPmAFRg

task([
    'num' => 1,
    'text' => 'Создайте массив, заполненный числами от <code>1</code> до <code>100</code>.',
]);

task([
    'num' => 2,
    'text' => 'Создайте массив, заполненный буквами от <code>\'a\'</code> до <code>\'z\'</code>.',
]);

task([
    'num' => 3,
    'text' => 'Создайте строку <code>\'1-2-3-4-5-6-7-8-9\'</code> не используя цикл.',
]);

task([
    'num' => 4,
    'text' => 'Найдите сумму чисел от <code>1</code> до <code>100</code> не используя цикл.',
]);

task([
    'num' => 5,
    'text' => 'Найдите произведение чисел от <code>1</code> до <code>10</code> не используя цикл.',
]);

startLesson('Заполнение массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/filling/
// ⊗ppPmAFFl

task([
    'num' => 1,
    'text' => 'Дан массив: Сделайте из него следующий массив:',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c'];
?>

<?
	['a', 'b', 'c', '-', '-', '-']
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Заполните массив <code>10</code>-ю буквами <code>\'x\'</code>.',
]);

startLesson('Слияние массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/merging/
// ⊗ppPmAFMr

task([
    'num' => 1,
    'text' => 'Даны массивы: Сделайте из них массив:',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3];
	$arr2 = ['a', 'b', 'c'];
?>

<?
	[1, 2, 3, 'a', 'b', 'c']
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массивы: Создайте с их помощью следующий массив:',
    'code' => <<< 'PHP'
<?
	$arr1 = ['a', 'b', 'c'];
	$arr2 = [1, 2, 3];
?>

<?
	['a' => 1, 'b' => 2, 'c' => 3]
?>
PHP,
]);

startLesson('Ключи-значения массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/keys-values/
// ⊗ppPmAFKV

task([
    'num' => 1,
    'text' => 'Дан массив: Получите массив ключей этого массива.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Получите массив значений этого массива.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
]);

startLesson('Переворот массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/reversing/
// ⊗ppPmAFRv

task([
    'num' => 1,
    'text' => 'Дан массив: Поменяйте в нем местами ключи и значения.',
    'code' => <<< 'PHP'
<?
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Сделайте из него следующий массив:',
    'code' => <<< 'PHP'
<?
	$arr = [1, 2, 3, 4, 5];
?>

<?
	[5, 4, 3, 2, 1]
?>
PHP,
]);

startLesson('Замена в массивах в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/replacing/
// ⊗ppPmAFRp

task([
    'num' => 1,
    'text' => 'Дан массив: Поменяйте элемент с ключом <code>0</code> на <code>\'!\'</code>, а элемент с ключом <code>3</code> - на <code>\'!!\'</code>.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
PHP,
]);

startLesson('Удаление дублей из массива в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/deduplication/
// ⊗ppPmAFDd

task([
    'num' => 1,
    'text' => 'Дан массив: Удалите из этого массива повторяющиеся элементы.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'b', 'a'];
?>
PHP,
]);

startLesson('Подсчет элементов массива в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/counting/
// ⊗ppPmAFCn

task([
    'num' => 1,
    'text' => 'Дан массив: Подсчитайте сколько раз встречается каждая из букв.',
    'code' => <<< 'PHP'
<?
	$arr = ['a', 'b', 'c', 'b', 'a'];
?>
PHP,
]);

startLesson('Разбиение на подмассивы в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/chunking/
// ⊗ppPmAFCh

task([
    'num' => 1,
    'text' => 'Создайте массив, заполненный целыми числами от <code>1</code> до <code>25</code>. С помощью функции <code>array_chunk</code> разбейте этот массив на <code>5</code> подмассивов по пять элементов в каждом.',
]);

startLesson('Сортировка массивов в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/sorting/
// ⊗ppPmAFSt

task([
    'num' => 1,
    'text' => 'Дан массив: Отсортируйте массив по возрастанию значений. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = ['3'=>'a', '2'=>'d', '1'=>'c', '5'=>'e', '4'=>'b'];
?>

['3'=>'a', '4'=>'b', '1'=>'c', '2'=>'d', '5'=>'e'];
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массив: Отсортируйте массив по убыванию значений. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = [10, 2, 35, 4, 15];
?>

[35, 15, 10, 4, 2];
PHP,
]);

task([
    'num' => 3,
    'text' => 'Дан ассоциативный массив: Отсортируйте массив по возрастанию ключей. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = ['z'=>'a', 'y'=>'d', 'x'=>'c', 'w'=>'b'];
?>

['w'=>'b', 'x'=>'c', 'y'=>'d', 'z'=>'a'];
PHP,
]);

task([
    'num' => 4,
    'text' => 'Дан ассоциативный массив: Отсортируйте массив по убыванию ключей. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = ['a'=>1, 'c'=>3, 'b'=>2, 'e'=>5, 'd'=>4];
?>

['e'=>5, 'd'=>4, 'c'=>3, 'b'=>2, 'a'=>1];
PHP,
]);

task([
    'num' => 5,
    'text' => 'Дан массив: Отсортируйте массив по возрастанию значений с сохранением ключей. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = ['a'=>5, 'b'=>2, 'c'=>4, 'd'=>1, 'e'=>3];
?>

['d'=>1, 'b'=>2, 'e'=>3, 'c'=>4, 'a'=>5];
PHP,
]);

task([
    'num' => 6,
    'text' => 'Дан массив: Отсортируйте массив по убыванию значений с сохранением ключей. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = ['a'=>10, 'b'=>40, 'c'=>20, 'd'=>30];
?>

['b'=>40, 'd'=>30, 'c'=>20, 'a'=>10];
PHP,
]);

task([
    'num' => 7,
    'text' => 'Дан массив: Отсортируйте массив, используя "естественную" сортировку. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
?>

['img1.png', 'img2.png', 'img10.png', 'img12.png'];
PHP,
]);

task([
    'num' => 8,
    'text' => 'Дан массив: Отсортируйте массив, используя "естественную" сортировку без учёта регистра. Вот что у вас должно получиться:',
    'code' => <<< 'PHP'
<?
	$arr = ['IMG12.png', 'img10.png', 'img2.png', 'IMG1.png'];
?>

['IMG1.png', 'img2.png', 'img10.png', 'IMG12.png'];
PHP,
]);

startLesson('Множественные операции в PHP');
// https://code.mu/ru/php/book/prime/inbuilt/array/set-operations/
// ⊗ppPmAFSO

task([
    'num' => 1,
    'text' => 'Дан массивы: Запишите в новый массив элементы, которые есть и в том, и в другом массиве.',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
?>
PHP,
]);

task([
    'num' => 2,
    'text' => 'Дан массивы: Запишите в новый массив элементы, которые не присутствуют в обоих массивах одновременно.',
    'code' => <<< 'PHP'
<?
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
?>
PHP,
]);
