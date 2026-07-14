<?
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr = array_replace($arr, [0 => '!', 3 => '!!']);
var_dump($arr);
?>