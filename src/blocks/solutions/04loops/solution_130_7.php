<?
$arr = [1, 2, 3, 4, 5];

for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] *= $arr[$i];
}

var_dump($arr);
?>