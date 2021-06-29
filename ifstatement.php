<?php include 'includes/header.php' ?>

  <?php

    echo '<h2>If statement</h2>';

    $grade = 50;
    // ===, ==, >, <, <=, >=
    if($grade >= 50){
      echo '<h3 style="color: lightgreen">Condition 1 passed</h3>';
    }
    else {
      echo '<h3 style="color: tomato">Condition 1 failed</h3>';
    }

    $grade = 30;

    // ===, ==, >, <, <=, >=
    if($grade >= 50){
      echo '<h3 style="color: lightgreen">Condition 2 passed</h3>';
    }
    else {
      echo '<h3 style="color: tomato">Condition 2 failed</h3>';
    }

    $grade = 'A';
    if ($grade == 'A'){
      echo '<p>Excelent! You have an A</p>';
    }
    elseif ($grade == 'B') {
      echo '<p>You have passed, with a B</p>';
    }
    else {
      echo '<p>You have failed, try again</p>';
    }
  ?>
  
</body>
</html>