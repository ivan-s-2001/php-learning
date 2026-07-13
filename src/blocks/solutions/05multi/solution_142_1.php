<?
$arr = [
    [
        'country' => 'country1',
        'city' =>    'city1',
    ],
    [
        'country' => 'country2',
        'city' =>    'city2',
    ],
    [
        'country' => 'country1',
        'city' =>    'city3',
    ],
    [
        'country' => 'country1',
        'city' =>    'city4',
    ],
    [
        'country' => 'country3',
        'city' =>    'city5',
    ],
    [
        'country' => 'country2',
        'city' =>    'city6',
    ],
    [
        'country' => 'country3',
        'city' =>    'city7',
    ],
];
$res = [];
foreach ($arr as $item) {
    $res[$item['country']][] = $item['city'];
}

var_dump($res);
?>