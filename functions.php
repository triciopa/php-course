<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <h1>Functions</h1>

  <?php
    //Defining a function
    function writeMessage(){
      echo "You are really a nice person, have a nice time! <br>";
    }

    // Calling a function
    writeMessage();
    writeMessage();
    writeMessage();

    // Functions with parameters
    function addNumber($num1, $num2){
      $sum = $num1 + $num2;
      echo "Final value: ".$sum."<br>";
    }

    addNumber(10,15);
    $result = addNumber("10","50"); // store result
    echo "<p>$result</p>";

    // Pass by reference

    function changeNum(&$num){
      $num += 10;
    }
    $reference = 300;
    changeNum($reference);
    echo "<p>$reference</p>";
  ?>
  
</body>
</html>