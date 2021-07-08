<?php
  $title = 'Success';
  require_once 'includes/header.php';
?>

  <h1 class="success">You have been registered</h1>

  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET['specialty']; ?></h6>
      <p class="card-text">
        <?php echo $_GET['dob']; ?>
      </p>
      <p class="card-text">
        <?php echo $_GET['email']; ?>
      </p>
      <p class="card-text">
        <?php echo $_GET['phone']; ?>
      </p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

<?php require_once 'includes/footer.php'; ?>