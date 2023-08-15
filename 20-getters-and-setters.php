<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects ()</title>
    <style>
        body{
           margin: 220px 200px;
           max-width: 550px;
           font-size: 33px;
        }
    </style>
</head>
<body>
    <?php
    class Movie {
        public $title;
        private $rating;
        function __construct($title,$rating){
            $this->title = $title;
            $this->setRating($rating);
        }
        /*omogucava da se prikaze rejting koji je privatan*/
        //getter funkcija
        function getRating(){
            return $this->rating;
        }

        //ogranicavamo rejting koji moze da se unese
        //setter funkcija
        function setRating($rating){
            if ($rating == "G" || $rating == "PG" || $rating =="PG-13" || $rating == "R" || $rating == "NR") {
                $this->rating = $rating;
            }else{
                $this->rating = "NR";
            }
        }
    }
    $avengers = new Movie("Avengers","PG-13");
        
    
    echo $avengers->setRating("Dog");
    echo $avengers->getRating();        

   
    ?>
</body>
</html>