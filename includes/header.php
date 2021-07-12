<?php
include_once 'includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap and jQueryUI -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Own CSS -->
  <link rel="stylesheet" href="css/site.css">

  <title>Attendance - <?php echo $title ?></title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">IT Event</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="viewrecords.php">View Attendees</a>                     
          </div>
          <div class="navbar-nav mr-auto">
            <?php
              if(!isset($_SESSION['userid'])){              
            ?>
            <a class="nav-link" href="login.php"><button class="btn btn-info">Login</button></a>
            <?php } else {?>
            <a class="nav-link text-center" href="#"><span>Hello <?php echo $_SESSION['username'] ?>!</span></a>
            <a class="nav-link" href="logout.php"><button class="btn btn-info">Logout</button></a>
            <?php }?>
          </div>
        </div>
      </div>
    </nav>
    <br>