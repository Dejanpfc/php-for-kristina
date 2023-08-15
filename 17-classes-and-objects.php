<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects ()</title>
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
    class Book{
        var $title;
        var $author;
        var $pages;
    }
    
    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowlings";
    $book1->pages = 500;
    
    echo $book1->author;
    echo "<hr>";

    $book2 = new Book;
    $book2->title = "Lord Of The Rings";
    $book2->author = "Tolkien";
    $book2->pages = 800;
    
    echo $book2-> pages;
    echo "<br><br>";
    echo $book2->author;
    echo "<br><br>";
    echo $book2->title


    ?>
</body>
</html>