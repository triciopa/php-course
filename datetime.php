<?php include 'includes/header.php' ?>

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
    print date("j o F Y, \a\\t g.i a", time());
  ?>
  
  <?php require 'includes/footer.php' ?>