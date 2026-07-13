<?
$password = '';
for ($i = 0; $i < rand(1,20); $i++) {
    if (rand(0, 1)) {
        $password .= rand(0,9);
    } elseif (rand(0, 1)) {
        $password .= chr(rand(ord('a'),ord('z')));
    } else $password .= chr(rand(ord('A'),ord('Z')));
}
$len = strlen($password);
echo "password ({$len}) : {$password}<br>";
if (in_array($len,range(5+1, 10-1))) {
    echo "Пароль подходит";
} else echo "Пароль не подходит";
?>