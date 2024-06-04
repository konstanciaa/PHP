<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php 
        $title = "My First Post";
        $author = "Anna";
        $wordCount = 400;
        include "article-header.php"
    ?>

    <?php
        include "useful-tools.php";
        sayHi("Anna");
        echo $feetInMile;
    ?>

</body>
</html>