<?php
  require_once 'db/conn.php';

  //Get values
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];

    // Call CRUD
    $result = $crud->edit($id, $fname, $lname, $dob, $email, $contact, $specialty);
    // Redirect to index.php
    if($result){
      header("Location: viewrecords.php");
    } else {
      // echo 'edit Error';
      include 'includes/errormessage.php';
    }
  } else {
    // echo 'load error';
    include 'includes/errormessage.php';
  }
?>