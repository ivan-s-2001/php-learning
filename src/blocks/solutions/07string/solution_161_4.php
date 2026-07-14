<?
$str = 'abracadabra';
foreach (count_chars($str,1) as $char => $count) {
    echo chr($char) . ' => ' . $count . '<br>';
}
?>