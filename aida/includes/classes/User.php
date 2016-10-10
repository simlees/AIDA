<?php

class User
{
    public $id;
    public $email;
    public $fname;
    public $lname;
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

    public function login($email, $password)
    {
       try
       {

          $statement = $this->connection->prepare("SELECT * FROM users WHERE email =:email LIMIT 1");
          //$statement->bindParam("s", $email);
          $statement->execute(array(":email" => $email));
          $row = $statement->fetch(PDO::FETCH_ASSOC);
          if($statement->rowCount() > 0)
          {
             if(password_verify($password, $row['password']))
             {
                $_SESSION['userID'] = $row['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }

    public function getFullname()
    {
        echo $this->firstname . ' ' . $this->lastname;
    }

    public function isLoggedIn()
    {

      if (isset($_SESSION['userId']))
      {
        return true;
      } else {
        return false;
      }
    }
}
