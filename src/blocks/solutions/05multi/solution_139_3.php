<?
$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 5; $k++) {
            $arr[$i][$j][$k] = $k + 1;
        }
    }
}
foreach ($arr as $table) {
    echo "<table>" . PHP_EOL;
    foreach ($table as $row) {
        echo "<tr>" . PHP_EOL;
        foreach ($row as $column) echo "<td>{$column}</td>" . PHP_EOL;
        echo "</tr>" . PHP_EOL;
    }
    echo "</table>" . PHP_EOL;
    echo "---<br>" . PHP_EOL;
}