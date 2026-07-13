<?
$arr = [1, 2, 3, -3, 4, 5];
$find = 3;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $find) {
        echo "Первое вхождение {$find} - индекс №{$i}";
        break;
    }
}
?>