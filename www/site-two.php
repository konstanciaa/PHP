<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- Arrays -->
    <?php 
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        echo $friends; // Array
        echo $friends[0]; // Kevin
        echo $friends[3]; // Jim
        $friends[1] = "Anna"; // change value of an element
        echo $friends[1]; // Jim
        $friends[4] = "Valeria"; // add an element
        echo $friends[4];
        echo count($friends); // count elements - 5
    ?>
</body>
</html>