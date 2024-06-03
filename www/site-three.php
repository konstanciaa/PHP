<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- Better Calculator -->
    <!-- type="number" step="0.001" - for float numbers -->
    <form action="site-three.php" method="post">
        First Number: <input type="number" step="0.001" name="num1"><br>
        Operator: <input type="text" name="op"><br>
        Second Number: <input type="number" step="0.001" name="num2"><br>
        <input type="submit">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        } elseif($op == "-"){
            echo $num1 - $num2;
        } elseif($op == "/"){
            echo $num1 / $num2;
        } elseif($op == "*"){
            echo $num1 * $num2;
        } else {
            echo "Invalid Operator";
        }
    ?>

    <!-- Switch Statements -->
    <form action="site-three.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "YOU FAIL!";
                break;
            default:
                echo "Invalid Grade";
                break;
        }
    ?>

    <!-- While Loops -->
    <?php
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        }

        // frist do, then check a condition
        $index = 6;
        do{
            echo "$index <br>";
            $index++;
        }while($index <= 5);
    ?>

    <!-- For Loops -->
    <?php
        for($i = 1; $i <= 5; $i++){ // initialize variable, looping condition, increment
            echo "$i <br>";
        }

        // loop through array
        $numbers = array(4, 8, 16, 23, 32, 42);
        for($i = 0; $i < count($numbers); $i++){ // $i = 0 - index of the array
            echo "$numbers[$i] <br>";
        }

        /*
          comment block
          comments
          comments
        */
    ?>
</body>
</html>