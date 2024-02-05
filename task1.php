<?php //incorrect delimiter

function get_products($products, $productId) {
    $productDetails = [];
    foreach ($products as $product) {
        if($product['id'] = $productId) { //extra parentheses
            $productDetails = $product;
        }
    }
    return $productDetails;
}

$products = [
    ['id' => 101, 'name' => 'Product 1', 'price' => 99.99],
    ['id' => 102, 'name' => 'Product 2', 'price' => 75.00],
    ['id' => 103, 'name' => 'Product 3', 'price' => 120.00],
];

$productId = 102;
$product = get_products($products, $productId); //incorrect function called(spelling)
echo 'Product Name: ' . $product['name'] . "\n";
echo 'Product Price: ' . $product['price'] . "\n";