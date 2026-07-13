<?
$str = '';
for ($i = 0; $i < rand(1,20); $i++) $str .= chr(rand(ord('a'), ord('z')));
$str = ucfirst($str);
echo "{$str}<br>";
if (strlen($str) >5) echo substr($str, 0, 5). ' ...'; else echo $str;
