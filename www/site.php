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
        echo 40; // 40
        echo "<br>";
        echo -40; // -40
        echo "<br>";
        echo -30.378; // -30.378
        echo "<br>";
        echo 5 + 9; // 14
        echo "<br>";
        echo 10 / 2; // 5
        echo "<br>";
        echo 10 % 3; // modulo operator, remainder of devision = 1
        echo "<br>";
        echo 4 + 5 * 10; // 54
        echo "<br>";
        echo (4 + 5) * 10; // 90
        echo "<br>";
        $num = 10;
        echo $num; // 10
        echo "<br>";
        $num++;
        echo $num; // 11
        echo "<br>";
        $num--;
        echo $num; // 10
        echo "<br>";
        $num = $num + 25; // $num += 25;
        echo $num; // 35
        echo "<br>";
        $num -= 25;
        echo $num; // 10
        echo "<br>";
        echo abs(-100); // absolute value of a number = 100
        echo "<br>";
        echo pow(2, 4); // 2 raised to 4 power = 16
        echo "<br>";
        echo sqrt(144); // square root = 12
        echo "<br>";
        echo max(2, 10); // prints the bigger number = 10
        echo "<br>";
        echo min(2, 10); // prints the smallest number = 2
        echo "<br>";
        echo round(3.2); // rounds = 3
        echo "<br>";
        echo ceil(3.3); // rounds up no matter what = 4
        echo "<br>";
        echo floor(3.9); // rounds down no matter what = 3
        echo "<br>";
    ?>

    <!-- Getting User Input -->
    <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

    <!-- prints the name from the input on the page -->
    Your name is <?php echo $_GET["name"] ?> 


    <!-- Basic Calculator -->
    <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    <!-- Mad Libs Game -->
    <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>
</body>
</html>