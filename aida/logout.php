<?php
require 'config/init.php';

$_SESSION['userID'] = null;
session_destroy();

header('Location: index.php');
exit();
