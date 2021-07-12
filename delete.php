<?php
  require_once 'db/conn.php';

  if(!isset($_GET['id'])){
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
  } else {
    $id = $_GET['id'];
    $result = $crud->delete($id);

    if($result){
      header("Location: viewrecords.php");
    } else {
      include 'includes/errormessage.php';
    }
  }
?>