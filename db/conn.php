<?php
  $host = '127.0.0.1';
  $db = 'attendance_db';
  $user = 'root';
  $pass = '';
  $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset" ;

  try {
    $pdo = new PDO($dsn, $user, $pass);
    echo 'Database connected';
  } catch(PDOException $e) {
    echo '<h3 style="color:red">No database connection</h3>';
    // throw new PDOException($e->getMessage());
  }
?>