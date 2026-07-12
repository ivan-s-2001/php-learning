<?
//$user = ['name' => 'john', 'age' => 30];
$user = ['age' => 30];
$name = $user['name'] ?? 'unknown';

echo $name;
?>