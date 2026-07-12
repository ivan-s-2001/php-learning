<?
$arr = [1,2,3];
if (count($arr) == 3){
    $sum = 0;
    foreach ($arr as $x){
        $sum += $x;
    }
    echo $sum;
} else {
    echo 'В массиве не 3 элемента';
}
