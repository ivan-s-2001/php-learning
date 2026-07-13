<?
$arr = [-15, -10, -5, 0, 4, 2, 5, 8,10 ,15];
$flag = false;
foreach ($arr as $i) {
    if ($i == 5) {
        $flag = true;
        break;
    }
}
echo (($flag) ? "+++" : "---");
?>