<?
$letters = range('a', 'z');
$str = implode('', $letters);
$result = substr(str_shuffle($str), 0, 6);
var_dump($result);
?>