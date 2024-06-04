# PHP

## In Terminal
php -S localhost:4000

## Create a file
www folder

site.php file

HTML template

Inside of the body: 

    <?php
        echo("Hello World");
    ?>

in browser command line: `/www/site.php` (to open the folder and the file)

## echo
`<body>`

    <?php
        echo("Hello World");
        echo "Hello World";
        echo "<h1>Anna's Site</h1>"; //html in text
        echo "<hr>";
        echo "<p>This is my site</p>";
    ?>

`</body>`

![Anna's Site](media/readme-images/Anna's-site.png)

## Variables
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

![variables](media/readme-images/variables.png)

## Data Types

![Data Types](media/readme-images/data-types.png) | ![Data Types Site](media/readme-images/data-types-site.png)
|----|----|


## String Functions

![String Functions](media/readme-images/string-functions.png) | ![String Functions Site](media/readme-images/string-functions-site.png)
|----|----|


## site.php
- Write HTML
- Variables
- Data Types
- String Functions
- Numbers
- User Input
- Basic Calculator
- Mad Libs Game
- POST vs. GET
- Include HTML

## site-two.php
- Arrays
- Checkboxes
- Associative Arrays
- Functions
- Return Statements
- If Statements
- If Statements (Comparisons)
- Include HTML

## site-three.php
- Better Calculator
- Switch Statements
- While Loops
- For Loops
- Comments
- Include HTML

## site-four.php
- Include PHP

## useful-tools.php
A file for storing variables, functions to include in other pages.

## site-five.php
- Classes & Objects