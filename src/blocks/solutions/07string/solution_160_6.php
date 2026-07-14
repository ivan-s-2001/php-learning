<?
$letter = '3';
$code = ord($letter);

if (in_array($code, range(ord('a'), ord('z')))) {
    echo 'small';
} elseif (in_array($code, range(ord('A'), ord('Z')))) {
    echo 'big';
} else {
    echo "is not english letter";
}
?>