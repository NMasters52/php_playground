<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    
<?php
   
	$products = [
	    [
	        "id" => 1,
	        "name" => "MacBook Pro",
	        "price" => 1299.99,
	        "category" => "Electronics",
	        "image" => "macbook.jpg",
	        "inStock" => true,
	        "rating" => 4.8
	    ],
	    [
	        "id" => 2,
	        "name" => "Coffee Mug",
	        "price" => 12.99,
	        "category" => "Home",
	        "image" => "mug.jpg",
	        "inStock" => false,
	        "rating" => 4.2
	    ]
	];


    function displayProductCard($products) {
        foreach($products as $product) {
            echo "
            <h1 class='text-red-200'>{$product['name']}</h1>
            ";
        }
    }

    echo displayProductCard($products);



  

?>

</body>
</html>