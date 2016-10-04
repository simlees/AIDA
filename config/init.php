<?php 
session_start();
require_once 'config.php';

function __autoload($class_name) {
    require_once '../includes/classes/' .$class_name. '.php';
}

?>