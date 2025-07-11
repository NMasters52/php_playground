<?php
//mutidumensional array we have to work with
$assignment = [
"title" => "MyGuests",
"languages" => ["HTML", "PHP", "SQL", "Bootstrap"],
"concepts" => ["Local Development", "SQL Basics (SELECT, INSERT, UPDATE, DELETE)", "PHP Form Handling"],
"requirements" => ["CRUD Functionality", "Bootstrap for responsive design", "Alerts for Adding, Updating and Deleting"],
"demoLink" => "https://jdavis0825.opalstacked.com/projects/myguests/" 
];

class AssignmentCard {
    private $props;

    public function __construct($props){
        $this->props = $props;
    }

    public function render(){
        //set variables
        $title = $this->props['title'] ?? 'Weekly Assignment';
        $languages = $this->props['languages'] ?? [];
        $concepts = $this->props['concepts'] ?? [];
        $requirements = $this->props['requirements'] ?? [];
        $demoLink = $this->props['demoLink'] ?? false;

        //create for each logic and assign them to variables
        //Languages
        $languageItems = '';
        foreach($languages as $language){
            $languageItems .= "<li>{$language}</li>";
        }
        if($languageItems === ''){
            $languageItems = "<li>No languages specified.</li>";
        }

        //concepts
        $conceptItems = '';
        foreach($concepts as $concept){
            $conceptItems .= "<li>{$concept}</li>";
        }
        if($conceptItems === ''){
            $conceptItems = "<li>No concepts specified.</li>";
        }

        //requirements
        $requirementItems = '';
        foreach($requirements as $requirement){
            $requirementItems .= "<li>{$requirement}</li>";
        }
        if($requirementItems === ''){
            $requirementItems = "<li>No concepts specified.</li>";
        }

        //link to demo button
        $demoLinkButton = '';
        if($demoLink){
            $demoLinkButton = "<a href='{$demoLink}'>Demo The Project</a>";
        }

        //this is what is displayed to the screen
        echo " 
            <main class='bg-gray-100 w-full p-4 rounded-md'> 
                    <h3 class=''>{$title}</h3>
                
                <div class=''>
                    <ul class=''>{$languageItems}</ul>
                    <ul>{$conceptItems}</ul>
                </div>
                    
                    <ul class=''>{$requirementItems}</ul>
                    <button class='mt-2 p-2 bg-blue-700 rounded-md text-white hover:bg-blue-500 cursor-pointer'>{$demoLinkButton}</button>
            </main>    
        ";
       

    }
}

$newCard = new AssignmentCard($assignment);
echo $newCard->render();


?>