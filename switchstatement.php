<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Switch Statement</title>
</head>
<body>
  <h1>Switch Statements</h1>
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
  
</body>
</html>