<?php
  $title = 'Edit record';

  require_once 'includes/header.php';
  require_once 'db/conn.php';

  $results = $crud->getSpecs();

  if(!isset($_GET['id'])){
    // echo 'error';
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
  } else {
    $id = $_GET['id'];
    $attendee = $crud->getOne($id);
?>

  <h1 class="text-center">Edit Record</h1>

  <form method="POST" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>">
    <div class="mb-3">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>"
      id="firstname" name="firstname">      
    </div>

    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>"
      id="lastname" name="lastname">
    </div>

    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth</label>
      <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>"
      id="dob" name="dob">
    </div>

    <div class="mb-3">
      <label for="specialty" class="form-label">Area of Expertise</label>
      <select class="form-select" id="specialty" name="specialty">
        <!-- <option value="1" selected>Database Admin</option>
        <option value="2">Software Developer</option>
        <option value="3">Web Administrator</option>
        <option value="4">Other</option> -->

        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
          <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?> >
            <?php echo $r['name'] ?>
          </option>
        <?php }?>
      </select>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" value="<?php echo $attendee['email'] ?>"
      id="email" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
    <div class="mb-3">
      <label for="phone" class="form-label">Contact number</label>
      <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>"
      id="phone" aria-describedby="phoneHelp" name="phone">
      <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-success btn-block" name="submit">Save changes</button>
  </form>

<?php }?>

<?php require_once 'includes/footer.php'; ?>
