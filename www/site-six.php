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

            // constructor
            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->auhtor = $aAuthor;
                $this->pages = $aPages;
            }
        }

        /* 
        create, model a book inside a programm
        and store it in a variable
        */
        // object, an instance of a class, actual book
        $book1 = new Book("Pride and Prejudice", "Jane Austen", 400); // calls a constructor function
        $book1->title = "Persuasion"; // modify data
        $book2 = new Book("Emma", "Jane Austen", 500);

        echo $book1->title;
        echo $book2->title;
    ?>

</body>
</html>