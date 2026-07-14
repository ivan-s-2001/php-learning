<?
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
if (in_array('-',$arr)) {
    array_splice($arr, array_search('-',$arr),1);
}
var_dump($arr);
?>