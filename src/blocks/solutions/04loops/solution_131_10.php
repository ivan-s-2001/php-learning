<?
$arr = [-15, -10, -5, 0, 4, 2, 5, 8,10 ,15];
$sum = 0;
foreach ($arr as $item) {
    $sum += $item;
}
$av = $sum / count($arr);
echo $av;