<?
$str = 'abcde';
$res = '';
for ($i = 1; $i <= strlen($str); $i++)
{
    $res.= $str[-$i];
}
echo $res;
?>
