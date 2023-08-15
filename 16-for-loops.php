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
        // $index = 1;
        // while ($index <= 5) {
        //     echo "$index <br>";
        //     $index++;
        // }
        //poredjenje izmedju i pokazivanje razlike
        
        $luckyNum = array(2,5,7,9,12,15,16);
        for ($i=0; $i < count($luckyNum) ; $i++) { 
            echo "$luckyNum[$i] <br>";
        }
    ?>

</body>
</html>