<?php
  require_once 'db/conn.php';

  if(!$_GET['id']){
    echo 'no ID';
  } else {
    $id = $_GET['id'];
    $result = $crud->delete($id);

    if($result){
      header("Location: viewrecords.php");
    } else {
      echo 'error in deletion';
    }
  }
?>