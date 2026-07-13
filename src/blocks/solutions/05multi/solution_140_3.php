<?
$arr = [];
for ($i = 0, $k = 1; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($m = 0; $m < 2; $m++, $k ++) {
            $arr[$i][$j][$m] = $k;
        }
    }
}
foreach ($arr as $table) {
    echo "<table>" . PHP_EOL;
    foreach ($table as $rows) {
        echo "<tr>" . PHP_EOL;
        foreach ($rows as $column) {
            echo "<td>{$column}</td>" . PHP_EOL;
        }
        echo "</tr>" . PHP_EOL;
    }
    echo "</table>" . PHP_EOL;
}