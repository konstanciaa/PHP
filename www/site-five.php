<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<!-- Class to represent any object in a real world. Here library -->
    <?php
        // database for creating a book
        class Book {
            // attributes of a class
            var $title;
            var $author;
            var $pages;
        }

        /* 
        create, model a book inside a programm
        and store it in a variable
        */
        // object, an instance of a class, actual book
        $book1 = new Book;
        $book1->title = "Pride and Prejudice";
        $book1->auhtor = "Jane Austen";
        $book1->pages = 400;

        $book2 = new Book;
        $book2->title = "Emma";
        $book2->auhtor = "Jane Austen";
        $book2->pages = 500;

        echo $book1->title;
        echo $book2->title;
    ?>

</body>
</html>