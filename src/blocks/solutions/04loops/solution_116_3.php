<?
$arr = [-1, 1, -2, 2, -3, 3, -4, 4, -5, 5];
$sum = 0;
foreach ($arr as $value) {
    if ($value > 0) {
        $sum += $value;
    }
}
echo $sum;
?>