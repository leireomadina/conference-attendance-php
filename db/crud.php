<?php
  class Crud{
    // private DB object
    private $db;

    // constructor to initialiaze private variable to the DB connection
    function __construct($db_config){
      $this -> db = $db_config;
    }

    // inserts a new record into the attendee database
    public function insert($fname, $lname, $dob, $email, $contact, $specialty) {
      try {
        // phase 1: defines sql statement and prepares it for execution
        $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id) VALUES (:fname, :lname, :dob, :email, :contact, :specialty)";
        $stmt = $this->db->prepare($sql);
        //phase 3: binds all placeholders to the actual form values
        $stmt->bindparam(":fname", $fname);
        $stmt->bindparam(":lname", $lname);
        $stmt->bindparam(":dob", $dob);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":contact", $contact);
        $stmt->bindparam(":specialty", $specialty);
        //phase 4: execution statement
        $stmt->execute();
        return true; // success indicator

      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; // PDO error indicator
      }
    }
  }
?>