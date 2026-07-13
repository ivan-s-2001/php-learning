<?
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];

$sum = 0;

$userForFind = ['user1','user3'];
foreach ($arr as $item) {
    if (in_array($item['name'], $userForFind)) $sum += $item['salary'];
}

echo $sum;
?>