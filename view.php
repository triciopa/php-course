<?php
  $title = 'View record';
  
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  if(!isset($_GET['id'])) {
    echo "<h1 class='text-danger'>Please check details</h1>";
  } else {
        $id = $_GET['id'];
    $result = $crud->getOne($id);
  
?>

<div class="card" style="width: 18rem;">  
    <div class="card-body">
      <h5 class="card-title"><?php 
        // echo $_GET['firstname'] . ' ' . $_GET['lastname'];
        echo $result['firstname'] . ' ' . $result['lastname'];

      ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php
         // echo $_GET['specialty'];
         echo $result['name'];
        ?>
      </h6>
      <p class="card-text">
        <?php
          // echo $_GET['dob'];
         echo 'Date of birth: ' .  $result['dateofbirth'];
        ?>
      </p>
      <p class="card-text">
        <?php
        //  echo $_GET['email'];
         echo 'E-mail: ' .$result['email'];
        ?>
      </p>
      <p class="card-text">
        <?php
          // echo $_GET['phone'];
         echo 'Contact number: ' .$result['contactnumber'];
        ?>
      </p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <?php }?>

<?php require_once 'includes/footer.php'; ?>