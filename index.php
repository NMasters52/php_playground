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
//MARK:class component
class Alert {
    private $props;

    public function __construct($props)
    {
        $this->props = $props;
    }

    public function render(){
        $message = $this->props['message'] ?? null;
        $type = $this->props['type'] ?? false;
        $dismissible = $this->props['dismissible'] ?? false;

        if($type === 'success'){
            $alertStyle = 'text-green-500';
        } else if($type === 'error') {
             $alertStyle = 'text-red-500';
        } else if($type === 'warning') {
            $alertStyle = 'text-yellow-500';
        } else {
            //info
            $alertStyle = 'text-blue-500';
        }

        if($dismissible){
            $dismiss = "<button class='cursor-pointer'>Dismiss</button>";
        } else {
             $dismiss = null;
        }

        echo "
            <div>
                <p class='{$alertStyle}'>{$message}</p>
                {$dismiss}
            </div>
            ";
    }
}

$alert = new Alert([
    'message' => 'Success! Data saved.',
    'type' => 'success',
    'dismissible' => true
]);
echo $alert->render() . '<br/>';

$error = new Alert([
    'message' => 'Error: Something went wrong!',
    'type' => 'error'
]);
echo $error->render() . '<br/>';

//MARK:functional component
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

</body>
</html>