<?php 
  $title = "Arrays and Printouts";
  include 'includes/header.php'  
?>

  <h1><?php echo $title ?></h1>
  
  <?php
    // Variable
    $num = 3;

    // Array - only one data type
    $numbers = array(1,2,3,4,5);

    echo $numbers[3];
    echo "<p>$numbers[0]</p>";

    $size = count($numbers);
    echo "<p>Array count is size: $size</p>";
  
    echo "<ul>";
    for ($i=0; $i < $size; $i++){ 
      echo "<li>$numbers[$i] at position $i</li>";
    };
    echo "</ul>";
  
  ?>
  
  <?php require 'includes/footer.php' ?>