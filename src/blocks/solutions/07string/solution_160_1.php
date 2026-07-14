<?
$arr = ['a', 'b', 'c', ' '];
$arrOrd = [];
foreach ($arr as $value) {
    $arrOrd[$value] = ord($value);
}
var_dump($arrOrd);
?>