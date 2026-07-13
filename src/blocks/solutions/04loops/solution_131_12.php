<?
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $k => $v) {
    $arr[$k] = $v * 1.1;
}
foreach ($arr as $k => $v) {
    echo "{$k} => {$v}<br>";
}
?>