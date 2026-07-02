<?
$pageTitle = 'Основной учебник PHP8+';

$blocks = [
    'basis' => [
        'title' => 'Основы',
        'file' => __DIR__ . '/blocks/01basic.php',
    ],
    'array' => [
        'title' => 'Массивы',
        'file' => __DIR__ . '/blocks/02arrays.php',
    ],
    'conditions' => [
        'title' => 'Условия',
        'file' => __DIR__ . '/blocks/03conditions.php',
    ],
    'loop' => [
        'title' => 'Циклы',
        'file' => __DIR__ . '/blocks/04loops.php',
    ],
    'multi' => [
        'title' => 'Многомерность',
        'file' => __DIR__ . '/blocks/05multi.php',
    ],
    'inbuiltmath' => [
        'title' => 'Математические функции',
        'file' => __DIR__ . '/blocks/06math.php',
    ],
    'inbuiltstring' => [
        'title' => 'Строковые функции',
        'file' => __DIR__ . '/blocks/07string.php',
    ],
    'inbuiltarray' => [
        'title' => 'Функции массивов',
        'file' => __DIR__ . '/blocks/08array.php',
    ],
    'random' => [
        'title' => 'Рандом',
        'file' => __DIR__ . '/blocks/09random.php',
    ],
    'time' => [
        'title' => 'Время',
        'file' => __DIR__ . '/blocks/10time.php',
    ],
    'functions' => [
        'title' => 'Пользовательские функции',
        'file' => __DIR__ . '/blocks/11functions.php',
    ],
    'scope' => [
        'title' => 'Область видимости',
        'file' => __DIR__ . '/blocks/12scope.php',
    ],
    'forming' => [
        'title' => 'Формирование строк',
        'file' => __DIR__ . '/blocks/15forming.php',
    ],
    'forms' => [
        'title' => 'Формы',
        'file' => __DIR__ . '/blocks/16forms.php',
    ],
];


$defaultBlock = array_key_first($blocks);
?>