<?php 

Class Product
{
    private $products;
    // encapsulating array in this class
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function get_products($productID)
    {
        foreach($this->products as $product){
            if($productID == $product['id']){
                return $product;
            }
        }
    }
}

$products = [
    ['id' => 101, 'name' => 'Product 1', 'price' => 99.99],
    ['id' => 102, 'name' => 'Product 2', 'price' => 75.00],
    ['id' => 103, 'name' => 'Product 3', 'price' => 120.00],
];

$productObject = new Product($products);
$productId = $products['id'];

//enter id here
$product = $productObject->get_products(11); 

if (empty($product)) {
    echo "That product does not exist\n";
} else {
    echo 'Product Name: ' . $product['name'] . "\n";
    echo 'Product Price: ' . $product['price'] . "\n";
}
