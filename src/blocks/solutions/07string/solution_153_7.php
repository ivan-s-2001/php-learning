<?
$str = 'word※word※word※word';
$arr = mb_split('※', $str);
var_dump($arr);
?>