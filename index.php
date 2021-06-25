<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - First attempt</title>
</head>
<body>
  <h1>Hello World</h1>

 <?php
    // Printing to HTML using echo
    echo "I'm a PHP sentence";
    echo "<hr/>";
    echo "Second line";
    echo "<br>";    
 ?>
 
 <?php
    $name = 'Pato';
    $age  = 34;
    // echo $name;
    echo "<h4>My name is: ".$name."</h4>";
    echo "<h5>My age is: ".$age."</h5>";
  ?>


</body>
</html>