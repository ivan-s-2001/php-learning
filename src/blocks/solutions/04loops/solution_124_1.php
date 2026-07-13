<?
$arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];
$flag = false;

foreach ($arr as $elem) {
    if ($elem === 'c') {
        $flag = true;
        break;
    }
}

if ($flag === true) {
    echo '+++';
} else {
    echo '---';
}
?>