<?

$arr = [1, 2, 3, 4, 5];
$res = false;

foreach ($arr as $elem) {
    if ($elem === 3) {
        $res = true;
        break;
    }
}

var_dump($res);
?>