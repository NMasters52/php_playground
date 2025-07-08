<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>

<div class="mx-auto w-[350px] md:w-[640px] xl:w-[1132px] mt-2">
    <?php

// Initial multidimensional array
$assignment = [
    "title" => "Initial Title - Card One",
    "notes" => "Initial notes about the assignment."
];

echo "<h2>Demonstrating Data State in __destruct()</h2>";

class AssignmentCardDestruct {
    private $props;

    public function __construct($props){
        // When an array is assigned directly like this, it creates a COPY.
        // So, $this->props is a separate copy of the array passed in.
        $this->props = $props;
        echo "<p>Constructor: Object created with title: '{$this->props['title']}'</p>\n";
    }

    public function __destruct()
    {
        // This method will use the state of $this->props at the time of destruction.
        // If $this->props was a COPY, changes to the original $assignment won't matter.
        // If $this->props was a REFERENCE to an object, changes to that object *would* matter.
        $title = $this->props['title'] ?? 'Default Title in Destruct';
        $notes = $this->props['notes'] ?? 'No notes in Destruct';

        echo "<div style='border: 1px solid red; padding: 10px; margin-top: 15px;'>";
        echo "<p><strong>__destruct() output:</strong></p>";
        echo "<p>Title at destruction: '{$title}'</p>";
        echo "<p>Notes at destruction: '{$notes}'</p>";
        echo "</div>\n";
    }
}

echo "<p><strong>--- Main script execution begins ---</strong></p>\n";

// 1. Instantiate the object with the current state of $assignment
$cardOne = new AssignmentCardDestruct($assignment);

// 2. Modify the original $assignment array *after* $cardOne was created
$assignment["title"] = "Modified Title After Object Creation - Card 2";
$assignment["new_field"] = "This is a new field.";
echo "<p>Main script: Original \$assignment array modified.</p>\n";
echo "<p>Main script: Current original \$assignment title: '{$assignment['title']}'</p>\n";


// 3. Instantiate another object with the *modified* $assignment array
$cardTwo = new AssignmentCardDestruct($assignment);


echo "<p><strong>--- Main script execution ends ---</strong></p>\n";

// The destructors will be called at the end of the script in reverse order of creation.
// So, $cardTwo's destructor then $cardOne's destructor.
// You'll notice $cardOne's destructor still uses "Initial Title".
// $cardTwo's destructor uses "Modified Title After Object Creation".

// To explicitly force destruction earlier (for demo purposes):
// unset($cardTwo);
// unset($cardOne);

?>
</div>


</body>
</html>