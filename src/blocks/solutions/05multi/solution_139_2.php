<?
$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $arr[$i][$j] = 'x';
    }
}
echo "<table>" . PHP_EOL;
foreach ($arr as $row) {
    echo "<tr>" . PHP_EOL;
    foreach ($row as $column) echo "<td>{$column}</td>" . PHP_EOL;
    echo "</tr>" . PHP_EOL;
}
echo "</table>";
