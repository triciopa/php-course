<?php include 'includes/header.php' ?>

  <h1>Strings</h1>
  <?php
    $phrase1 = "- 'How are you?'";
    $phrase2 = "- 'Fine, and you?'";
    $name = "aldo lape";
    // Concatenation of strings
      echo "<h3>Concatenation</h3>";
      echo $phrase1."<br>".$phrase2."<br>";

    // Transformations
      echo "<h3>Transform</h3>";
      echo 'Uppercase first letter: '. ucfirst($name) . "<br>";
      echo 'Uppercase all words: '. ucwords($name) . "<br>";
      echo 'Uppercase all letters: '. strtoupper($name) . "<br>";
      echo 'Lowercase all letters: '. strtolower($phrase1) . "<br>";
      echo "<hr>";
      echo "Repeat string: " . strtoupper(str_repeat($name.",", 5)) . "<br>";
      echo "Substring: " . ucfirst(substr($name, 5, 4)) . "<br>";
      echo "Get positions of string: " . strpos($name, 'o') . "<br>";
      echo "Get positions of string: " . strpos($name, 'j') . "<br>";
      echo "Find length of string: " . strlen($phrase1). "<br>";

      echo "Without trim: " . "a"." b c d "."e" . "<br>";
      echo "Trim left: " . "a".ltrim(" left c d ")."e" . "<br>";
      echo "Trim right: " . "A".rtrim(" b c right ")."E" . "<br>";
      echo "Trim both: " . "A".trim(" both c sides ")."E" . "<br>";

      echo "Replace string with another: " . str_replace("you", "thee", $phrase1) . "<br>";

  ?>
  
  <?php require 'includes/footer.php' ?>