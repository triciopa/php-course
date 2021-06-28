<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Arrays and Printouts</title>
</head>
<body>
  <h1>Arrays</h1>
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
  
</body>
</html>