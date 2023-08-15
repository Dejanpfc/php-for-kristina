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
        function cube($num){
            return $num * $num * $num;
        }
        $cubeResult = cube(4);
        echo $cubeResult;


        echo "<hr>";
        //mozemo i skratiti i uraditi ovako

        echo cube(4);
    ?>

</body>
</html>