<?
$num = 1234021;
$str = (string)$num;
if (strlen($str)==6) {
    if ($str[0]+$str[1]+$str[2] == $str[3]+$str[4]+$str[5]) echo 'Сумма равна'; else echo'Сумма неравна';
} else echo "Число не из 6 цифр";
