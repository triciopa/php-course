<?php
  $title = 'Success';
  require_once 'includes/header.php';
?>

  <h1 class="success">You have been registered</h1>

  <div class="card" style="width: 18rem;">  
    <div class="card-body">
      <h5 class="card-title"><?php 
        // echo $_GET['firstname'] . ' ' . $_GET['lastname'];
        echo $_POST['firstname'] . ' ' . $_POST['lastname'];

      ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php
         // echo $_GET['specialty'];
         echo $_POST['specialty'];
        ?>
      </h6>
      <p class="card-text">
        <?php
          // echo $_GET['dob'];
         echo $_POST['dob'];
        ?>
      </p>
      <p class="card-text">
        <?php
        //  echo $_GET['email'];
         echo $_POST['email'];
        ?>
      </p>
      <p class="card-text">
        <?php
          // echo $_GET['phone'];
         echo $_POST['phone'];
        ?>
      </p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

<?php require_once 'includes/footer.php'; ?>