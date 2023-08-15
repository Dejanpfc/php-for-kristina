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
        function sayHi($name,$age){
            echo "Hallo, $name , you are $age" ;
        }
        echo sayHi("Mad Max",33);
        echo "<hr>";
        echo sayHi('Mordor' ,'unknown date of birth');
        echo "<hr>";
        echo sayHi('Pepa Pig',5);

    ?>

</body>
</html>