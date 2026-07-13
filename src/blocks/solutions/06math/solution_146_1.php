<?
for ($i = 1; $i <= 10; $i++) {
    $a = rand(-20, 20);
    $b = rand(-20, 20);
    $sub = $a - $b;
    $abs = abs($sub);
    echo "|({$a}) - ({$b})| = |{$sub}| = {$abs}<br>";
}
?>
