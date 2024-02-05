<?php //incorrect delimiter

function get_products($products, $productId) {
    $productDetails = [];
    foreach ($products as $product) {
        if($productId == $product['id'] ) { //extra parentheses
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

$productId = $products['id'];
$product = get_products($products, 104); //incorrect function called(spelling)

if (empty($product)){
    echo "That product does not exist";
}else{
    echo 'Product Name: ' . $product['name'] . "\n";
    echo 'Product Price: ' . $product['price'] . "\n";    
}
