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
           font-size: 33px;
        }
    </style>
</head>
<body>

        <?php
            $friends = array('Kevin','Karen','Oscar','Jim');
            echo "<pre>";
            print_r($friends);
            echo "</pre>";
            echo "<hr>";
            echo $friends[0];
            echo "<br>";
            echo $friends[1] = "Mike";
            echo $friends[4] = "Dejan"; 
            echo "<pre>";
            print_r($friends);
            echo "</pre>";
            echo count($friends);
        ?>
</body>
</html>