<?
$num = 135;
$str = (string)$num;
if (strlen($str)==3) {
    $sum = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $sum += $str[$i];
    }
    echo $sum;
} else {
    echo 'Число не 3-хзначное';
}