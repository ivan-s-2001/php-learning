<?
$str = 'photo.jpg';
$typeOfImage = ['.png', '.jpg'];
$flag = false;
foreach ($typeOfImage as $type) {
    if (substr($str, -strlen($type)) == $type) {
        $flag = true;
        break;
    }
}
if ($flag) echo "+++"; else echo "---";
?>