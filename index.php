<?php include 'includes/header.php' ?>

  <h1>Hello PHP</h1>

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


<?php require 'includes/footer.php' ?>