<?php
//1
/*
 * Дан следующий массив:

<?php
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
?>
Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.
 */
$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];
foreach ($products as $product) {
    echo $product["name"]."==".$product["price"]." amount".$product["amount"]."\n";
}

//2
/*
 * <?php
	$users[] = [
		'name'   => 'name4',
		'age'    => 34,
		'salary' => 4000,
	];
?>
№2⊗ppPmMdAAA

Добавьте в массив с продуктами из предыдущей задачи еще один продукт.
 */
$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];
$products[3]["name"]="name4";
$products[3]["price"]="34";
$products[3]["amount"]="4000";
var_dump($products);