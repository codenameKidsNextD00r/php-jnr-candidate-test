<?php //incorrect delimiter

function get_products($products, $productId) {
    $productDetails = [];
    foreach ($products as $product) {
        //add extra = to indicate comparison not assignment
        if($productId == $product['id'] ) { //extra parentheses removed
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

//assigned this var to 'id' elemenet to make the variable more dynamic
$productId = $products['id'];
$product = get_products($products, 104); //incorrect function called(spelling)

//added conditional check to cater for ids provided that aren't present
if (empty($product)){
    echo "That product does not exist";
}else{
    echo 'Product Name: ' . $product['name'] . "\n";
    echo 'Product Price: ' . $product['price'] . "\n";    
}
