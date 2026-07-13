<?
$str = 'пример работы с кириллическими символами';
echo mb_substr($str, 7, 6, 'utf-8') . '<br>';
echo mb_substr($str, 16, -9, 'utf-8') . '<br>';
?>