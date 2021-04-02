<?php
  class Crud{
    // private DB object
    private $db;

    // constructor to initialiaze private variable to the DB connection
    function __construct($db_config){
      $this -> db = $db_config;
    }

    // inserts a new record into the attendee database
    public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty, $avatar_path) {
      try {
        // phase 1: defines sql statement and prepares it for execution
        $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id,avatar_path) VALUES (:fname, :lname, :dob, :email, :contact, :specialty, :avatar_path)";
        $stmt = $this->db->prepare($sql);
        //phase 2: binds all placeholders to the actual form values
        $stmt->bindparam(":fname", $fname);
        $stmt->bindparam(":lname", $lname);
        $stmt->bindparam(":dob", $dob);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":contact", $contact);
        $stmt->bindparam(":specialty", $specialty);
        $stmt->bindparam(":avatar_path", $avatar_path);
        //phase 3: execution statement
        $stmt->execute();
        return true; // success indicator
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; // PDO error indicator
      }
    }

    // edits an existing attendee record
    public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty, $avatar_path) {
      try {
        $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`specialty_id`=:specialty,`avatar_path`=:avatar_path WHERE attendee_id = :id ";
        $stmt = $this->db->prepare($sql);
        //phase 3: binds all placeholders to the actual form values
        $stmt->bindparam(":id", $id);
        $stmt->bindparam(":fname", $fname);
        $stmt->bindparam(":lname", $lname);
        $stmt->bindparam(":dob", $dob);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":contact", $contact);
        $stmt->bindparam(":specialty", $specialty);
        $stmt->bindparam(":avatar_path", $avatar_path);
        //phase 4: execution statement
        $stmt->execute();
        return true;
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; 
      }
    }

    // selects an existing record from the attendee database
    public function getAttendees() {
      try {
        $sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id";
        $result = $this->db->query($sql);
        return $result;
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; 
      }
    }

    // selects an existing id record from the speciealties database
    public function getAttendeeDetails($id) {
      try {
        $sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; 
      }
    }

    // deletes an existing redord from the attendee database
    public function deleteAttendee($id) {
      try{
        $sql = "DELETE FROM attendee WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":id", $id);
        $stmt->execute();
        return true;
      }catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; 
      }
    }

    // selects an existing record from the speciealties database
    public function getSpecialties() {
      try {
        $sql = "SELECT * FROM specialties";
        $result = $this->db->query($sql);
        return $result;
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; 
      }
    }

    public function getSpecialtyById($id){
      try{
          $sql = "SELECT * FROM specialties WHERE specialty_id = :id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(":id", $id);
          $stmt->execute();
          $result = $stmt->fetch();
          return $result;
      }catch (PDOException $Exception) {
          echo $Exception->getMessage();
          return false;
      }
  }

  }
?>