<?
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arrV = [];
foreach ($arr as $k => $v) {
    $strV = (string) $v;
    if (in_array($strV[0], range(1, 2))) $arrV[] = $v;
}
var_dump($arrV);
?>