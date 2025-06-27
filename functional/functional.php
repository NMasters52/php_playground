
<!-- 
// Write a function filterByCategory($products, $category)
// Should return only products matching the category -->

<?php

// $products = [
//     ["name" => "Laptop", "price" => 999, "category" => "electronics"],
//     ["name" => "Shirt", "price" => 25, "category" => "clothing"],
//     ["name" => "Phone", "price" => 699, "category" => "electronics"],
//     ["name" => "Jeans", "price" => 80, "category" => "clothing"]
// ];

// function filterByCategory($products, $category) {
//     return array_filter($products, fn($product) => $product["category"] === $category);
// }

$users = [
    ["first_name" => "John", "last_name" => "Doe", "age" => 25],
    ["first_name" => "Jane", "last_name" => "Smith", "age" => 30]
];

function getFullNames($users) {
    return array_map(fn($user) => $user["first_name"] . ' ' . $user["last_name"] ,$users);
}

?>