<?php
  class crud{
    // private DB object
    private $db;

    // constructor to initialize private variable to the database connection
    function __construct($conn) {
      $this->db = $conn;
    }

    // function to insert a new record
    public function insert($fname, $lname, $dob, $email, $contact, $specialty){
      try {
        // define SQL statement to be executed
        $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,email,contactnumber,specialty_id) VALUES (:fname, :lname, :dob, :email, :contact, :specialty)";
        // prepare the SQL statement for execution
        $stmt = $this->db->prepare($sql);
        // bind all placeholders to the actual values
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

    public function getAll(){
      $sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id";
      $result = $this->db->query($sql);
      return $result;
    }

    public function getSpecs(){
      $sql = "SELECT * FROM specialties";
      $result = $this->db->query($sql);
      return $result;
    }

  }
?>