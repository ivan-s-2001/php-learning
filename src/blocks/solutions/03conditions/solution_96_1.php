<?
$age = 23;
if ($age < 10 or $age > 99) {
    echo "Возраст вне диапазона (10-99)";
} else {
    $strAge = (string)$age;
    $sum = 0;
    for ($i = 0; $i < strlen($strAge); $i++) {
        $sum += $strAge[$i];
    }
    if ($sum <= 9) echo 'Сумма цифр возраста однозначная: ' . $sum; else echo 'Сумма цифр возраста двухзначная: ' . $sum;
}
?>