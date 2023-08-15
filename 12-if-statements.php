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
        $isMale = true;
        $isTall = false;

        if ($isMale && $isTall) {
            if ($isMale && $isTall){
                echo "You are a tall male";
            }else if($isMale && !$isTall ){
                echo "You are a short male";
            }elseif (!$isMale && $isTall) {
                echo "You are not male but you are tall";
            }
            else{
                "You are not male";
            }
        }
        ?>

</body>
</html>