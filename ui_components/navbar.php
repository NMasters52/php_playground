<?php
function navBar($items, $options = []) {
    $html = "<div class='bg-gray-300 flex items-center justify-center'>
                <nav>
                    <ul class='flex flex-row gap-2'>";

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

    // Sample data
$navItems = [
    ["label" => "Home", "url" => "/", "active" => true],
    ["label" => "About", "url" => "/about", "active" => false],
    ["label" => "Contact", "url" => "/contact", "active" => false]
];
//render it to the page
    echo navBar($navItems);

?>
