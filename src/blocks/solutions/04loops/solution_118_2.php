<?
$arr = [2, 5, 9, 3, 1, 4];
$sum = 0;
foreach ($arr as $value) {
    if ($value % 2 == 0) $sum += $value;
}
echo "Сумма равна {$sum}";
?>