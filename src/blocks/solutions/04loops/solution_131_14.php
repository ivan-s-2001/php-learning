<?
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumK = 0;
$sumV = 0;
foreach ($arr as $k => $v) {
    $sumK += $k;
    $sumV += $v;
}
echo $sumK/$sumV;
?>