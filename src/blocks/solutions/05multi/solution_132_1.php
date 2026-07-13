<?
$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];
$arrCheck = ['l', 'e', 'g', 'a'];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if (in_array($arr[$i][$j], $arrCheck)) echo "\$arr[{$i}][{$j}] = {$arr[$i][$j]}<br>";
    }
}
?>