<?
$str = (string) 12345;
$num = 0;
for ($i = 0; $i < strlen($str); $i++)
{
    $num += $str[$i];
}
echo $num;
?>