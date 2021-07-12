<?php
  $title = 'Success';
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  if(isset($_POST['submit'])){
    // extract values from $_POST
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];
    // Call function to insert and track if success or not
    $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty);

    if($isSuccess) {
      // echo '<h1 class="text-center text-success">You have been registered</h1>';
      include 'includes/successmessage.php';
    }
    else {
      include 'includes/errormessage.php';
    }
  }
?>

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