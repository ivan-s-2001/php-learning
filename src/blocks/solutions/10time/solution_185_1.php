<?
$date = '2025-12-31';
$parts = explode('-', $date);
$year = $parts[0];
$month = $parts[1];
$day = $parts[2];
var_dump(checkdate($month, $day, $year));
?>