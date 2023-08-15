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
    

<form action="14-switch-statements.php" method="post">
    What grade you have
    Number 1: <input type="text" name="number1"> <br> 
    <input type="submit">

    <?php
         $number1 = $_POST['number1'];
         echo "<hr>";
         switch ($number1) {
            case 'A':
                echo "You did amazing job";
                break;
            case 'B':
                echo "You did pretty good job,keep working";
                break;
            default:
                echo "Rest of you folks,better keep stool  hoot";
                break;
         }

    ?>

</body>
</html>