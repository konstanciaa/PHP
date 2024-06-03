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

</body>
</html>