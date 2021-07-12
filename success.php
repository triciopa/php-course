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

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = 'uploads/';
    $destination = "$target_dir$contact.$ext";
    move_uploaded_file($orig_file,$destination);  

    // Call function to insert and track if success or not
    $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty, $destination);
    $specialtyName = $crud->getSpecialtyById($specialty);

    if($isSuccess) {
      // echo '<h1 class="text-center text-success">You have been registered</h1>';
      include 'includes/successmessage.php';
    }
    else {
      include 'includes/errormessage.php';
    }
  }
?>
  <img src="<?php echo empty($ext) ? "uploads/default.png" : $destination; ?>" alt="User Image" class="rounded-circle" style="width: 20%; height: 20%">
  <p>Extension: <?php echo empty($ext) ? "empty" : $ext ?></p>
  <p>File name: <?php echo empty($_FILES["avatar"]["name"]) ? "empty" : $_FILES["avatar"]["name"] ?></p>
  <p>File temp name: <?php echo empty($_FILES["avatar"]["tmp_name"]) ? "empty" : $_FILES["avatar"]["tmp_name"] ?></p>
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