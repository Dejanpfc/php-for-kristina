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

     <h1>Koje voce Ilija najvise voli:</h1>
           <form action="8-using-checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Bananas: <input type="checkbox" name="fruits[]" value="bananas"> <br>
         <input type="submit">
       </form>
       
       <br><br>
       
       <?php
          $fruits = $_POST['fruits'];
          echo $fruits[1];
       
       ?>

</body>
</html>