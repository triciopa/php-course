<?php
  $title = 'User Login';

  require_once 'includes/header.php';
  require_once 'db/conn.php';

  // After a POST request
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_pass = md5($password.$username);

    $result = $user->getUser($username,$new_pass);

    if(!$result) {
      echo '<div class="alert alert-danger">User or pass incorrect!</div>';
    } else {
      $_SESSION['username'] = $username;
      $_SESSION['userid'] = $result['id'];
      header('Location: viewrecords.php');
    }
  }
?>

<h1 class="text-center"><?php echo $title ?></h1>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <table class="table table-sm"> 
    <tr>
      <td><label for="username">Username: *</label></td>
      <td><input type="text" name="username" id="username" class="form-control"
        value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
        <?php if(empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>$username_error</p>;" ?>
      </td>
    </tr>
    <tr>
    <td><label for="password">Password: *</label></td>
    <td><input type="password" name="password" id="password" class="form-control">        
        <?php if(empty($password) && isset($password_error)) echo "<p class='text-danger'>$password_error</p>;" ?>
      </td>
    </tr>
  </table><br><br>
  <input type="submit" value="Login" class="btn btn-primary btn-block"><br>
  <a href="#">I forgot my password</a>
</form>

<?php require_once 'includes/footer.php'; ?>