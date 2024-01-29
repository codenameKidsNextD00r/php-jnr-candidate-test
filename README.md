# Junior PHP Test

Dear candidate,

As part of the hiring process, we have a few tasks that we would like you to complete. These tasks are designed to assess your proficiency in PHP and your understanding of 
Object-Oriented Programming. 

Instructions for each task are below. 

Please clone this repository to your local machine and then create a new, public repository on your own GitHub account where you can push your changes. 

Make sure to create a new branch where you make modifications as you solve the tasks. Regular and meaningful commits are greatly appreciated as they help us understand your process. 

## Tasks

### Task 1: Problem Solving

The following PHP snippet  has a few issues: syntax errors, logical errors, and others. Your task is to identify and fix these errors. Here's the script:

```php
</php

function get_products($products, $productId) {
    $productDetails = [];
    foreach ($products as $product) {
        if($product['id'] = $productId)) {
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
$product = get_product($products, $productId);
echo 'Product Name: ' . $product['name'] . "\n";
echo 'Product Price: ' . $product['price'] . "\n";

```

### Task 2: Class Refactor Task

Using the corrected code from Task 1, refactor the `get_products` function into a `Product` class using Object-Oriented PHP. The class should have a constructor that takes in the `$products` array and a method to find a product by its ID.

Remember, we would like to see the use of encapsulation and Dependency Injection in your solution.

### Task 3: Data Retrieval Task

For this task, create an integration using PHP to retrieve the product data from a Google Sheets document. Make sure to interact with the Google Sheets API and parse the response correctly. The goal is to replace our static `$products` array with data fetched from a spreadsheet.

### Task 4: Documentation

Please include comments in your code to explain your logic. Also, update this README in your private repository to provide an overview of your solutions, the reason behind your code 
modifications, and any challenges you faced.

After you have completed all tasks and updated the README, please create a pull request to the main branch in your private repository and share the link with us so we can review your 
work.

---
Thank you in advance for your effort and time, and good luck!
