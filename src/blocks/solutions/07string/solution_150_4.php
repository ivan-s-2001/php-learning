<?
$str = 'https://example.com';
$protocols = [ 'http://', 'https://' ];
$flag = false;
foreach ($protocols as $protocol) {
    if (substr($str, 0, strlen($protocol)) == $protocol) {
        $flag = true;
        break;
    }
}
if ($flag) echo "+++"; else echo "---";
?>