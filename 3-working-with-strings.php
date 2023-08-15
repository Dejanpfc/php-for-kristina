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
    
    $phrase = "Giraffe Academy";
    $phrase[0] = "B";
    echo $phrase;

    echo $phrase;
    echo strlen($phrase);
    echo "<br>";
    echo strtoupper($phrase);
    echo "<br>";
    echo strtolower($phrase);
    echo "<br>";
    echo $phrase[4];
    echo "<br>";
    echo "Mike"[0];
    echo "<br>";

    $predavac = "Boban predaje HTML CSS";
    echo $predavac;
    echo "<br>";
    echo str_replace("Boban predaje HTML CSS", "Sloba sad predaje PHP mySQL", $predavac);
    // brise ,dodaje , od koje varijable brise

    echo "<hr>";
    $academy = "Giraffe Academy";

    echo substr($academy,8);
    // od akademije brise prvih 8 ostavlja ostatak
    echo "<br>";
    echo substr($academy,8,3);
    // od akademije brise prvih 8 ostavlja sledecih 3
        


?>
</body>
</html>