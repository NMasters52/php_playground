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
            $showCategory = $this->props['showCategory'] ?? false;
            $html = "<h3>{$product['name']}</h3>";
            
            if ($showCategory) {
                $stockText = $product['inStock'] ? 'in stock' : 'out of stock';
                $html .= "<p>{$stockText}</p>";
            }
            return $html;
        }
    }
        
    $cardContent = new ProductCard(['product'=>$products[0]]);
    echo $cardContent->render();

?>

</body>
</html>