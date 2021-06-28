<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - While & Do-While Loops </title>
</head>
<body>
  <h1>While Loop</h1>
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
</body>
</html>