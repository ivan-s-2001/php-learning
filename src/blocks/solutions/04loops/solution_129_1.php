<?
$arr = [10, 20, 30, 40, 21, 32, 51];
$sum = 0;

foreach ($arr as $elem) {
    $str = (string) $elem;
    if ($str[0] == 1 or $str[0] == 2) {
        $sum += $elem;
    }
}

echo $sum;
?>