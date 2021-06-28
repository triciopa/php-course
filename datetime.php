<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date and Time</title>
</head>
<body>
  <h1>Date and Time</h1>

  <?php
  $datenow = getdate();    
    echo "Day number: ". $datenow['mday']. '<br>';
    echo "Month number: ".$datenow['mon']. '<br>';
    echo "Year: ".$datenow['year']. '<br>';
    echo "Time value:". time(). '<br>';    

    echo "<p>So, today is: ". $datenow['mday']."/".$datenow['mon']."/".$datenow['year']. '</p>';

    print date("d/m/y G.i:s<br>", time()) . '<br>';
    print "Today is :";
    echo "<br>";
    print date("j of F Y, \a\\t g.i a", time());
  ?>
  
</body>
</html>