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

        $numbers = 1;
        while ($numbers <= 5) {
            echo "$numbers <br>";
            $numbers++;
        }
        echo "<hr>";
       $index = 6;
        do {
            echo "$index <br>";
            $index++;
        } while ($index <= 10);
    ?>

</body>
</html>