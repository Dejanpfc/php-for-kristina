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
<form action="url-parameters.php" method="get">
    method="get" prikazuje informacije u URL,koje zelite da budu javne.
    Name: <input type="text" name="name"> <br>
    <input type="submit">
</form>

<br><br>

<?php
    echo $_GET["age"]
?>
</body>
</html>