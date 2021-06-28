<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - First attempt</title>
</head>
<body>
  <h2>Follow each link to the page example</h2>
  <li><a href="array.php">Simple Array and Printouts</a></li>
  <li><a href="forloop.php">Simple For Loop</a></li>
  <li><a href="while-dowhileloop.php">While & Do While Loop</a></li>
  <li><a href="ifstatement.php">Simple If Statement</a></li>
  <li><a href="switchstatement.php">Simple Switch Statement</a></li>
  <li><a href="stringmanip.php">String Manipulation</a></li>
  <li><a href="datetime.php">Date and Time</a></li>

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