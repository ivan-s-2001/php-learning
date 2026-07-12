<?
$min = 33;
switch ($min) {
    case ($min>=0 and $min<=19):
        echo "Первая треть";
        break;
    case ($min>=20 and $min<=39):
        echo "Вторая треть";
        break;
    case ($min>=40 and $min<=59):
        echo "Третья треть";
        break;
    default: echo "Число вне диапозона (0-59)";
    break;
}
?>
