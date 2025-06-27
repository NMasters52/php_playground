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


    class ProductCard {
       public $props = [];

       public function __construct($props)
       {
        $this->props = $props;
       }

       public function render() {
            $product = $this->props['product'];
            $showProduct = $this->props['showCategory'];
            $html = "<h3>{$product['name']}</h3>";
            
            if ($showProduct) {
                $stockText = $product['inStock'] ? 'in stock' : 'out of stock';
                $html .= "<p>{$stockText}</p>";
            }
            return $html;
        }
    }
        
    $cardContent = new ProductCard(['product'=>$products[0], 'showCategory'=>false]);
    echo $cardContent->render();

?>

<br/>

<div class="border-2 border-black-500 w-1/2 mx-auto p-2">
    <div class="border-2 border-red-200">
        <img src="" alt="">
    </div>
    <p>Name</p>
    <p>price</p>
    <p>catagory</p>
    <p>In Stock</p>
</div>

</body>
</html>