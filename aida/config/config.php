<?php








$environment = 3;
// 1 - LIVE
// 2 - XAMPP
// 3 - C9.io








if($environment == 1)
{
  $config['base_url']='http://simeonlees.co.uk/';
  $db['hostname'] = 'simeonlees.co.uk.mysql';
  $db['username'] = 'simeonlees_co_uk';
  $db['password'] = 'EYdBW8K2';
  $db['database'] = 'simeonlees_co_uk';
  $db['dbdriver'] = 'mysql';
} else if ($environment == 2){
  $config['base_url']='http://simeonlees.co.uk/';
  $db['hostname'] = 'localhost';
  $db['username'] = 'root';
  $db['password'] = '';
  $db['database'] = 'citybasedb';
  $db['dbdriver'] = 'mysql';
} else {
  $config['base_url']= getenv('IP');
  $db['hostname'] = getenv('IP');
  $db['username'] = 'simeonlees';
  $db['password'] = '';
  $db['database'] = 'citybasedb';
  $db['dbdriver'] = 'mysql';
}


try
{
     $dbConnection = new PDO("mysql:host={$db['hostname']};dbname={$db['database']}",$db['username'],$db['password']);

     // What does this mean?
     $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    



}
catch(PDOException $e)
{
     echo $e->getMessage();
}
