<?
$arr = [1,2,3,4,5,6,7,8,9];
for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] *= $arr[$i];
    echo "{$arr[$i]}\t";
}