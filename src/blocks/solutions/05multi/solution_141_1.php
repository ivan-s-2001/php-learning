<?
$products = [
    [
        'name'   => 'prod1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'prod2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'prod3',
        'price'  => 300,
        'amount' => 7,
    ],
];

foreach ($products as $product) {
    echo "{$product['name']} ({$product['amount']} шт.): {$product['price']}р.<br>";
}
?>