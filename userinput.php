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

<form action="userinput.php" method="get">
    <br>
    Name: <input type="text" name="name">
    <br>
    Age:  <input type="number" name="age">
    <br>
    Username:  <input type="username" name="username">
    <br>
    Password: <input type="password" name="password">
    <br>
    Email: <input type="password" name="email">
    <input type="submit">
</form>
<br>
Your name is: <?php echo $_GET["name"] ?>
<br>
Your password is: <?php echo $_GET["password"] ?>
<br>
Your name is: <?php echo $_GET["username"] ?>
<br>
Your age is: <?php echo $_GET["age"] ?>


</body>
</html>