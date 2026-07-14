<?
$arr = ['A', 'a', 'Z', 'z'];
sort($arr);
for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] = ord($arr[$i]);
}
echo "{$arr[0]} - {$arr[1]}, {$arr[2]} - {$arr[3]}";