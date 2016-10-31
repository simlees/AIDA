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

    public function register($email, $fname, $lname, $password, $confirmPassword)
    {
      if ($password !== $confirmPassword)
      {
        $_SESSION['register']['errors']['password'] = "Passwords do not match!";
        return false;
      }

      if ($this->userExists($email))
      {
        $_SESSION['register']['errors']['email'] = "Email is already taken.";
        return false;
      }

      try
      {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $statement = $this->connection->prepare("INSERT INTO users(email,password,fname,lname) VALUES(:email, :password, :fname, :lname)");
        $statement->execute(array(":email" => $email, ":password" => $hashedPassword, ":fname" => $fname, ":lname" => $lname)); 

        return true;
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
        return false;
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

    public function userExists($email)
    {
      try
      {
        $statement = $this->connection->prepare("SELECT * FROM users WHERE email =:email");
        $statement->execute(array(":email" => $email));
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if($statement->rowCount() > 0)
        {
          return true;
        } else {
          return false;
        }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }
}
