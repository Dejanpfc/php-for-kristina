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
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }elseif($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            }else{
                return $num3;
            }
        }
        echo getMax(200,900,999);

    ?>

</body>
</html>