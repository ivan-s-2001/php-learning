<?
$str = (string) 12345;
$res = '';
for ($i = 1; $i <= strlen($str); $i++)
{
    $res .= $str[-$i];
}
echo (int) $res;
?>