<?php 
  $title = "Switch Statements";
  include 'includes/header.php'  
?>

  <h1><?php echo $title ?></h1>

  <?php

    $grade = 'A';

    switch ($grade) {
      case 'A':
        echo '<p>Excelent! Passed with best qualification: A</p>';
        break;
      case 'B':
        echo '<p>Passed with B</p>';
        break;      
      default:
        echo '<p>Failed test</p>';
        break;
    }

  ?>
  
  <?php require 'includes/footer.php' ?>