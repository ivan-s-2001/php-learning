<?
$day = 1;
$weekDay = [
    1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'
];
if (in_array($day, range(1, 7))) {
foreach ($weekDay as $key => $name) {
    if ($key == $day) {
        echo "<i>{$name}</i>";
    } else echo "{$name}";
    echo "<br>";
}
} else echo "Вы указали некорректный день недели!";

?>