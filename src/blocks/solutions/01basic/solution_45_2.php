<?
$str = (string) 12345;
$res = 1;
for ($i = 0; $i < strlen($str); $i++)
{
    $res *= $str[$i];
}
echo $res;
?>