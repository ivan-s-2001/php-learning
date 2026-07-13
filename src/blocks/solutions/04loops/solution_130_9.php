<?
$arr = [1, 2, 3, 4, 5];
$res = '';

foreach ($arr as $elem) {
    if ($elem === 3) {
        $res = '+++';
        break;
    } else {
        $res = '---';
    }
}

echo $res;
?>