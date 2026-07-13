<?
$arr = [];
for ($i = 0, $k = 2; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++, $k += 2) {
        $arr[$i][$j] = $k;
    }
}
echo "<table>";
foreach ($arr as $rows) {
    echo "<tr>" . PHP_EOL;
    foreach ($rows as $column) {
        echo "<td>{$column}</td>" . PHP_EOL;
    }
    echo "</tr>" . PHP_EOL;
}
echo "</table>";
