<?
//$user = ['name' => 'john', 'surname' => 'Dolce'];
//$user = ['surname' => 'Dolce'];
$user = [];
$res = $user['name'] ?? $user['surname'] ?? 'unknown';
echo $res;
?>