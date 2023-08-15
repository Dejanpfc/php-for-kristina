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
    class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($name,$major,$gpa,){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
          
        }

        function hasHonors(){
            if ($this->gpa >= 5.5) {
                echo "true";
            }elseif($this->gpa <= 5.4){
                echo "false";
            }
        }
    }

    $student1 = new Student("Dejan Pavlovic","IT expert", 9.7);
    $student2 = new Student("Pera Petroivc","Art",3.6);


    echo $student1->name;
    echo $student1->hasHonors();
    echo "<br>";
    echo $student2->name;
    echo $student2->hasHonors();

    ?>
</body>
</html>