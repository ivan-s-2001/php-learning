<?
$date1 = '2020-11-30';
$date2 = '2020-12-01';

$time1 = strtotime($date1);
$time2 = strtotime($date2);

if ($time1 > $time2) {
    echo 'Первая дата больше';
} elseif ($time1 < $time2) {
    echo 'Вторая дата больше';
} else {
    echo 'Даты равны';
}
?>