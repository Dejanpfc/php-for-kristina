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
         font-family: Verdana, Geneva, Tahoma, sans-serif;
         
        }
    </style>
</head>
<body>
        <h3>Ukucajte svoje ime i proverite ocene zavrsnog ispita i Slobin komentar</h3>
        <form action="9-associative-array.php" method="post">
          <input type="text" name="student">
          <input type="submit">
        </form>
    
       <?php
         $ocene = array("Dejan Pavlovic" => "10 Bravo majstore", "Kristina" => "8", "Iva" => "8.5");
         
         echo $ocene[$_POST["student"]];
       
       ?>

</body>
</html>