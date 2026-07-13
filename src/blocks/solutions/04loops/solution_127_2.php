<?
$arr = [];
for ($i = 1; $i <= 99; $i+=2) {
    $arr[] = $i;
}
foreach ($arr as $item) {
    echo "{$item}\t";
}
