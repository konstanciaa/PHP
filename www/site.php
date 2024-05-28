<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // writing HTML
        echo "<h1>Anna's Site</h1>";
        echo "<hr>";
        echo "<p>This is my site</p>";

        // variable
        $characterName = "John";
        $characterAge = "35";
        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        echo "He really liked the name $characterName <br>";
        echo "But didn't like being $characterAge <br>";

        echo "<br>";
        
        // re-assign variable
        $characterName = "John";
        $characterAge = "35";
        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        $characterName = "Mike";
        echo "He really liked the name $characterName <br>";
        echo "But didn't like being $characterAge <br>";
    ?>

    <!-- data types -->
    <?php
        $phrase = "To be or not to be"; //strings
        $age = 30; // integer (the whole number)
        $price = 32.967; // float number (decimal)
        $isMale = true; // boolean
        echo "<br>";
        echo $phrase;
        echo "<br>";
        echo 30;
    ?>

</body>
</html>