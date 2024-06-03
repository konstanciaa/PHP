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

    <!-- Checkboxes -->
    <!-- name="fruits[]" - getting multiple values into an array -->
    <form action="site-two.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>

    <!-- Associative Arrays (objects)-->
    <?php
        // key names should be unique, values can be same
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+"); // key-value pairs
        echo $grades["Jim"]; // A+
        $grades["Jim"] = "F"; // modify value
        echo $grades["Jim"]; // F
    ?>

    <form action="site-two.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        echo $grades[$_POST["student"]]; // you type the name - it shows grade
    ?>

    <!-- Functions -->
    <?php
        function sayHi(){
            echo "Hello User";
        }

        sayHi();

        // with a parameter
        function sayHello($name){
            echo "Hello $name";
        }

        sayHello("Anna"); // Hello Anna
        sayHello("Pam"); // Hello Pam


        // with two parameters
        function sayHallo($name, $age){
            echo "Hello $name, you are $age <br>";
        }

        sayHallo("Anna", 24); // Hello Anna, you are 24
        sayHallo("Pam", 30); // Hello Pam, you are 30
    ?>
</body>
</html>