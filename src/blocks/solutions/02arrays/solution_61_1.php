<?
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
foreach ($arr as $k => $v)
{
    $arr[$k] += 3;
}
echo var_dump($arr);
?>