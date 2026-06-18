<?
$pageTitle = 'Основной учебник PHP8+';

$blocks = [
    'basis' => [
        'title' => 'Основы',
        'file' => __DIR__ . '/blocks/001basic.php',
    ],
    'array' => [
        'title' => 'Массивы',
        'file' => __DIR__ . '/blocks/002arrays.php',
    ],
    'conditions' => [
        'title' => 'Условия',
        'file' => __DIR__ . '/blocks/003conditions.php',
    ],
    'loop' => [
        'title' => 'Циклы',
        'file' => __DIR__ . '/blocks/004loop.php',
    ],
    'multi' => [
        'title' => 'Многомерность',
        'file' => __DIR__ . '/blocks/005multi.php',
    ],
    'inbuiltmath' => [
        'title' => 'Математические функции',
        'file' => __DIR__ . '/blocks/006inbuiltmath.php',
    ],
    'inbuiltstring' => [
        'title' => 'Строковые функции',
        'file' => __DIR__ . '/blocks/007inbuiltstring.php',
    ],
    'inbuiltarray' => [
        'title' => 'Функции массивов',
        'file' => __DIR__ . '/blocks/008inbuiltarray.php',
    ],
    'random' => [
        'title' => 'Рандом',
        'file' => __DIR__ . '/blocks/009random.php',
    ],
    'time' => [
        'title' => 'Время',
        'file' => __DIR__ . '/blocks/010time.php',
    ],
    'functions' => [
        'title' => 'Пользовательские функции',
        'file' => __DIR__ . '/blocks/011functions.php',
    ]
];

$defaultBlock = array_key_first($blocks);

?>