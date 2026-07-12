<?
//$test = 3 * 'abc'; Ошибка в типах данных
$test = 'abc' . 'abc' . 'abc';
if ($test) {
    echo '+++'; // Это
} else {
    echo '---';
}
?>