<?
$sum = 0;
$pos = 0;
while ($sum <= 100) {
    $pos += 1;
    $sum += $pos;
}
echo "Потребовалось {$pos} чисел";
?>