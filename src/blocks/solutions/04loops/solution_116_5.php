<?
$indexWeekend = [6,7];
$weekDay = [
    1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'
];
foreach ($weekDay as $key => $day) {
    if (in_array($key, $indexWeekend)) {
        echo "<b>{$day}</b><br>";
    } else {
        echo "{$day}<br>";
    }
}
?>