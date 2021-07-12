<?php
  class crud{
    // private DB object
    private $db;

    // constructor to initialize private variable to the database connection
    function __construct($conn) {
      $this->db = $conn;
    }

    // function to insert a new record
    public function insert($fname, $lname, $dob, $email, $contact, $specialty, $avatar_path){
      try {
        // define SQL statement to be executed
        $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,email,contactnumber,specialty_id,avatar_path) VALUES (:fname, :lname, :dob, :email, :contact, :specialty, :avatar_path)";
        // prepare the SQL statement for execution
        $stmt = $this->db->prepare($sql);
        // bind all placeholders to the actual values
        $stmt->bindparam(':fname',$fname);
        $stmt->bindparam(':lname',$lname);
        $stmt->bindparam(':dob',$dob);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':contact',$contact);
        $stmt->bindparam(':specialty',$specialty);
        $stmt->bindparam(':avatar_path',$avatar_path);

        $stmt->execute();
        return true;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function getAll(){
      try {
        $sql = "SELECT * FROM attendee a INNER JOIN specialties s ON a.specialty_id = s.specialty_id";
        $result = $this->db->query($sql);
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function getOne($id){
      try {
        $sql = "SELECT * FROM attendee a INNER JOIN specialties s ON a.specialty_id = s.specialty_id WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }      
    }

    public function getSpecs(){
      try {
        $sql = "SELECT * FROM specialties";
        $result = $this->db->query($sql);
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }      
    }

    public function getSpecialtyById($id){
      try{
          $sql = "SELECT * FROM `specialties` where specialty_id = :id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':id', $id);
          $stmt->execute();
          $result = $stmt->fetch();
          return $result;
      }catch (PDOException $e) {
          echo $e->getMessage();
          return false;
      }
    }

    public function edit($id, $fname, $lname, $dob, $email, $contact, $specialty){
      try {
        $sql = "UPDATE `attendee` SET `firstname`=:fname, `lastname`=:lname,
        `dateofbirth`=:dob,`email`=:email, `contactnumber`=:contact,
        `specialty_id`=:specialty WHERE attendee_id = :id";

        $stmt = $this->db->prepare($sql);
        // bind all placeholders to the actual values
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':fname',$fname);
        $stmt->bindparam(':lname',$lname);
        $stmt->bindparam(':dob',$dob);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':contact',$contact);
        $stmt->bindparam(':specialty',$specialty);

        $stmt->execute();
        return true;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function delete($id){
      try {
        $sql = "DELETE FROM attendee WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        return true;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }      
    }

  }
?>