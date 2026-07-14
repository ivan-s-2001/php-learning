<?
$str = '';
$len = rand(1,30);
for ($i = 0; $i < $len; $i++) $str .= chr(rand(ord('a'), ord('z')));
echo $str;
?>