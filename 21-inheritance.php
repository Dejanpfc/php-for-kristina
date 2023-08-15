<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           margin: 220px 200px;
           max-width: 550px;
           font-size: 30px;
        }
    </style>
</head>
<body>
<?php
    class Chef {
        function makeChicken(){
            echo "The chef can makes chicken <br>";
        }
        function makeSalad(){
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes bbq ribs <br>";
        }
    }
    class ItalianChef extends Chef{
        function makePasta(){
            echo "The chef can make pasta";
        }
        //menjanje specijalnog jela
        function makeSpecialDish(){
            echo "The chef can make pizza";
        }
    }
    
    $chef = new Chef();
    $chef->makeChicken();
    $chef->makeSpecialDish();

    echo "<hr>";

    $italianChef = new ItalianChef();
    $italianChef->makePasta();
    echo "<br>";
    $italianChef->makeSpecialDish();
    
?>
</body>
</html>