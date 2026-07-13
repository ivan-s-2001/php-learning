<?
$arr = [2, 5, 9, 3, 1, 4];
$sum = 0;
foreach ($arr as $value) {
    $sum += $value ** 2;
}
echo "Сумма равна {$sum}";
?>