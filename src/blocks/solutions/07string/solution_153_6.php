<?
$date = '2043-12-23';
$arr = explode('-', $date);
$date = implode('.', array_reverse($arr));
echo $date;
?>