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
    
   
<form action="better-calculator.php" method="post">
    Number 1: <input type="number" step="0.001" name="number1"> <br> 
    Operator    : <input type="textbox" name="op"> <br>
    Number 2: <input type="number" step="0.001" name="number2"> <br>
    <input type="submit">
</form>
<?php
    $number1 = $_POST['number1'];
    $operator = $_POST['op'];
    $number2 = $_POST['number2'];

if ($operator == "+") {
    echo $number1 + $number2;
}elseif ($operator == "-") {
    echo $number1 - $number2;
}elseif ($operator == "*") {
    echo $number1 * $number2;
}elseif ($operator == "/") {
    echo $number1 / $number2;
}else{
    echo "Invalid Operator";
}

//step="0.001"  daje mogucnost da se iza broja dodaju 3 decimale tipa 4.456
?>
</body>
</html>