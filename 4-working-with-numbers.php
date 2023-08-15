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

echo -40;
//integer
echo "<br>";
echo - 55.555;
//floating point number or decimal number
echo "<br>";
echo 5 + 9;
echo "<br>";
echo 10 % 3;
//ostatak
echo 4 + 5 * 10;
echo "<br>";
echo (4+5) * 10;
echo "<br>";
$num = 10;
echo $num;
echo "<br>";
//increment variable
$broj = 11;
$broj++;
echo $broj;
echo "<hr>";
$broj = 11;
$broj--;
echo $broj;
echo "<hr>";
$broj = 11;
$broj += 25; //jednako sto i $broj = $broj + 25;
echo $broj;

echo "<hr>";
echo abs(-100);
echo "<hr>";
echo pow(2,4); // 2 na 5i
echo "<hr>";
echo sqrt(10); //koren
echo "<hr>";
echo max(2,10); //prikazuje veci broj
echo min( 2,10);
echo "<hr>";
echo round(3.6); //zaokruzuje
echo round(3.4);
echo "<hr>";
echo ceil(3.3); //uvek zaokruzuje na veci broj
echo ceil(3.1);
echo "<hr>";
echo floor(3.1);
echo floor(3.9); //zaokruzuje na manje npr na 3 ovde

?>
</body>
</html>