<?php
$title = "JSON";
require_once 'config/init.php';


// <!-- CONTENT START -->



$properties = $property->getAll();

print $json_encode($properties);