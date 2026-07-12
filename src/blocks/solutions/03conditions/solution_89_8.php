<?
$arr = [1, 2, 3, 4, 5];

// if (isset($arr[])) { Ошибка не указан индекс
if (isset($arr[3])) {
    echo '+++'; // Это
} else {
    echo '---';
}
?>