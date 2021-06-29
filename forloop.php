<?php include 'includes/header.php' ?>

  <h1>For Loops</h1> 

  <?php

    for($count = 0; $count < 5; $count++){
      echo '<p>Hello World</p>';
    }

    for ($i= 5; $i > 0; $i--) { 
      echo "<p>The count is: $i</p>";
    }

  ?>

<?php require 'includes/footer.php' ?>