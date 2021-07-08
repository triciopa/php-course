<?php 
  $title = "While and Do-While Loops";
  include 'includes/header.php'  
?>

  <h1><?php echo $title ?></h1>

  <?php
    $grade = 0;
    while($grade < 5){
      echo "<p>I'm less than ten</p>";
      echo $grade;
      $grade++;
    }
    echo "<br>";
    echo 'Exit Loop';
  ?>

  <h1>Do-While Loop</h1>
  <?php
    $grade = 10;

    do{
      echo "<p>I'm doing this while some conditions exist</p>";
      echo $grade--;      
    }while($grade > 5);
  ?>
  
<?php require 'includes/footer.php' ?>