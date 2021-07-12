<?php
  // Development Connection
  $host = '127.0.0.1';
  $db = 'attendance_db';
  $user = 'root';
  $pass = '';
  $charset = 'utf8mb4';
  
  //Remote Database Connection
  // $host = 'remotemysql.com';
  // $db = 'JHPJ9kjrwG';
  // $user = 'JHPJ9kjrwG';
  // $pass = 'lAo0TaBKo7';
  // $charset = 'utf8mb4';
  

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset" ;

  try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    // echo '<h3 style="color:red">No database connection</h3>';
    throw new PDOException($e->getMessage());
  }

  require_once 'crud.php';
  $crud = new crud($pdo);
  require_once 'user.php';
  $user = new user($pdo);

  $user->addUser("admin","password");
?>