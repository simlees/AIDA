<?php

class Property
{
    // public $id;
    // public $email;
    // public $fname;
    // public $lname;
    private $connection;

    public function __construct($dbConnection)
    {
      $this->connection = $dbConnection;

        // if (is_array($data)) {
        //     if (isset($data['id'])) $this->id = $data['id'];
        //
        //     $this->username = $data['username'];
        //     $this->firstname = $data['firstname'];
        //     $this->lastname = $data['lastname'];
        //     $this->email = $data['email'];
        // }
    }

    public function search($searchTerm)
    {
      try
      {
         $statement = $this->connection->prepare("SELECT * FROM properties WHERE city LIKE :searchterm OR country LIKE :searchterm");
         //$statement->bindParam("s", $email);
         $statement->execute(array(":searchterm" => "%".$searchTerm."%"));
         $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
         return $rows;
      }
      catch(PDOException $e)
      {
          return $e->getMessage();
      }
    }

    public function getAll()
    {
      try
      {
         $statement = $this->connection->prepare("SELECT * FROM properties");
         //$statement->bindParam("s", $email);
         $statement->execute();
         $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
         return $rows;
      }
      catch(PDOException $e)
      {
          echo $e->getMessage();
      }
    }
}
