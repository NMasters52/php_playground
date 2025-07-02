<?php
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
?>