<?
$num = 92345;
$str = (string)$num;
$res = (($str[0] == 1) or ($str[0] == 2) or ($str[0] == 3)) ? '+++' : '---';
echo $res;
?>
