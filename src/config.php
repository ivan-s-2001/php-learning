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
];

$defaultBlock = array_key_first($blocks);

?>