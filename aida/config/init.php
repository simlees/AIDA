<?php
session_start();
require_once 'config/config.php';

$user = new User($dbConnection);
$property = new Property($dbConnection);


function __autoload($class_name) {
    require_once 'includes/classes/' .$class_name. '.php';
}

?>
