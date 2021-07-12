<?php
  $title = 'Index';
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  $results = $crud->getSpecs();
?>

  <h1 class="text-center">Registration for IT conference</h1>

  <!-- <form method="get" action="success.php"> -->
  <form method="POST" action="success.php">
    <div class="mb-3">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp"
      name="firstname" required>
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" required>
    </div>

    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth</label>
      <input type="text" class="form-control" id="dob" name="dob" required>
    </div>

    <div class="mb-3">
      <label for="specialty" class="form-label">Area of Expertise</label>
      <select class="form-select" id="specialty" name="specialty">
        <!-- <option value="1" selected>Database Admin</option>
        <option value="2">Software Developer</option>
        <option value="3">Web Administrator</option>
        <option value="4">Other</option> -->

        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
          <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name'] ?></option>
        <?php }?>
      </select>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" 
      name="email" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
    <div class="mb-3">
      <label for="phone" class="form-label">Contact number</label>
      <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
      <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>

    <div class="mb-3 custom-file">
      <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
      <label for="avatar" class="custom-file-label">Choose File</label>
      <small id="avatar" class="form-text text-warning">File Upload is optional</small>
    </div>

    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
  </form>


<?php require_once 'includes/footer.php'; ?>
