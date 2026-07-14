<?
$date = date_create('2025-12-31');
date_modify($date, '+1 year');
echo date_format($date, 'Y-m-d');
?>