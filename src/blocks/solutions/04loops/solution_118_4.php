<?
$arr = [2, 5, 9, 3, 1, 4];
$comp = 1;
foreach ($arr as $value) {
    $comp *= $value;
}
echo "Произведение равно {$comp}";
?>