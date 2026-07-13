<?
$num = 21;
$flag = true;

for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) $flag = false;
}

if ($flag === true) {
    echo '+++';
} else {
    echo '---';
}
?>