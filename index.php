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
    function createTitle($title) {
        echo "<h1>{$title}</h1>";
    }

    createTitle('hello world');
?>
</body>
</html>