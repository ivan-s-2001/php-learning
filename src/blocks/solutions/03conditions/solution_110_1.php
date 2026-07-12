<?
$month = 5;
$monthList = [
    'Зима' => [1, 2, 12],
    'Весна' => [3, 4, 5],
    'Лето' => [6, 7, 8],
    'Осень' => [9, 10, 11],
];
if ($month>=1 and $month<=12) {
    foreach ($monthList as $name => $months) {
        if (in_array($month, $months)) {
            echo $name;
            break;
        }
    }
} else echo 'Такого номера месяца не существует';
?>

