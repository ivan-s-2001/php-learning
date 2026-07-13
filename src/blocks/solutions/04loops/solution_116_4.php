<?
$arrayFirstNum = [1,2,5];
$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $num) {
    $str = (string) $num;
    if (in_array($str[0], $arrayFirstNum)) {
        echo "{$num}\t";
    }
}
?>