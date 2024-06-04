<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <?php
        class Movie {
            public $title; // public and var means visible, public is modern way
            private $rating; // private, no one can change it outside the class

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating); // secure
            }

            function getRating(){
                return $this->rating;
            }

            /**
             * function makes sure you can give 
             * only valid rating
             */
            function setRating($rating){
                if($rating == "G" || $rating == "PG"){
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }

        }

        $avengers = new Movie("Avengers", "PG-13");

        // echo $avengers->rating; // not printed out, because it's private

        /*
        use function to print out private attributes
        */
        echo $avengers->getRating();

        $avengers->setRating("0"); // enables to set rating though it's private

        echo $avengers->getRating();
    ?>

</body>
</html>