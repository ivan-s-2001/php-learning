<?
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrK = [];
$arrV = [];
foreach ($arr as $k => $v) {
    $arrK[] = $k;
    $arrV[] = $v;
}
for ($i = 0; $i < count($arr); $i++) {
    echo "{$arrK[$i]} - {$arrV[$i]}<br>";
}
?>