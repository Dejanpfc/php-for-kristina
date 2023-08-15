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
    class Book {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle,$aAuthor,$aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    $book1 = new Book("Harry Potter","JK Rowlings",300);
    $book1->title ="Jebo sad 100 dinara";
    $book2 = new Book("Lord of the rings","Toliken", 500);

    echo $book1->title;
    echo "<br>";
    echo $book2->title;
    
    ?>
</body>
</html>