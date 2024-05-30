<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="/css/site.css">
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
        echo "<br>";
    ?>

    <!-- string functions -->
    <?php
        $phrase = "Free Code Camp";
        echo strtolower($phrase);
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase); // how many characters in the string
        echo "<br>";
        echo $phrase[0]; // index indicates the character position in the string
        echo "<br>";
        echo $phrase[13];
        echo "<br>";
        $phrase[0] = "B"; // replace letter in a string
        echo $phrase;
        echo "<br>";
        echo str_replace("Camp", "House", $phrase); // replace a word
        echo "<br>";
        echo substr($phrase, 5); // a part of a string; index indicates the beginning
        echo "<br>";
        echo substr($phrase, 5, 4); // 4 characters starting with index 5
        echo "<br>";
    ?>

    <!-- working with numbers -->
    <?php
        echo "<h2>Working with numbers</h2>";
        echo "<code>echo 40;</code> Result: ";
        echo 40;
        echo "<br>";
        echo "<code>echo -40;</code> Result: ";
        echo -40;
        echo "<br>";
        echo "<code>echo -30.378;</code> Result: ";
        echo -30.378;
        echo "<br>";
        echo "<code>echo 5 + 9;</code> Result: ";
        echo 5 + 9;
        echo "<br>";
        echo "<code>echo 10 / 2;</code> Result: ";
        echo 10 / 2;
        echo "<br>";
        echo "<code>echo 10 % 3;</code> Result: ";
        echo 10 % 3; // modulo operator, remainder of devision
        echo "<br>";
        echo "<code>echo 4 + 5 * 10;</code> Result: ";
        echo 4 + 5 * 10;
        echo "<br>";
        echo "<code>echo (4 + 5) * 10;</code> Result: ";
        echo (4 + 5) * 10;
        echo "<br>";
        echo "<code>$num = 10; echo $num;</code> Result: ";
        $num = 10;
        echo $num;
        echo "<br>";
        $num++;
        echo $num;
        echo "<br>";
        $num--;
        echo $num;
        echo "<br>";
        $num = $num + 25; // $num += 25;
        echo $num;
        echo "<br>";
        $num -= 25;
        echo $num;
        echo "<br>";
        echo abs(-100); // absolute value of a number
        echo "<br>";
        echo pow(2, 4); // 2 raised to 4 power
        echo "<br>";
        echo sqrt(144); // square root
        echo "<br>";
        echo max(2, 10); // prints the bigger number
        echo "<br>";
        echo min(2, 10); // prints the smallest number
        echo "<br>";
        echo round(3.2); // rounds
        echo "<br>";
        echo ceil(3.3); // rounds up no matter what
        echo "<br>";
        echo floor(3.9); // rounds down no matter what
        echo "<br>";
    ?>
</body>
</html>