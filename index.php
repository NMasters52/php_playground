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
// Sample data
$navItems = [
    ["label" => "Home", "url" => "/", "active" => true],
    ["label" => "About", "url" => "/about", "active" => false],
    ["label" => "Contact", "url" => "/contact", "active" => false]
];

// Your task: Create function navbar($items, $options = [])
// Should generate: <nav><ul><li><a>...</a></li></ul></nav>
// Options: 'showActive' => true/false (adds 'active' class)


function navBar($items, $options = []) {
    $html = "<div>
                <nav>
                    <ul>";

    foreach($items as $item){
        $label = $item['label'];
        $urlLink = $item['url'];
        $isActive = $item['active'];

        if ($isActive) {
            $html .= "<li class='underline'><a href={$urlLink}>{$label}</a></li>";
        } else {
            $html .= "<li><a href={$urlLink}>{$label}</a></li>";
        }
    }

    $html .= "      </ul>
                </nav>
            </div>";
    return $html;
}

echo navBar($navItems);



?>

</body>
</html>