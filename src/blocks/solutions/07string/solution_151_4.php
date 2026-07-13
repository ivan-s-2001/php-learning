<?
$str = 'image.png';
$typeOfImage = ['.png', '.jpg'];
$flag = false;
foreach ($typeOfImage as $type) {
    if (str_ends_with($str, $type)) {
        $flag = true;
        break;
    }
}
if ($flag) echo "+++"; else echo "---";
?>