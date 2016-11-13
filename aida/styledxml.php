<?php
$title = "Styled XML";
require_once 'config/init.php';
include 'template/header.php';
include 'template/nav.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->

<?php

//$xml = simplexml_load_file("http://simeonlees.co.uk/aida/xml.php") or die("Error: Cannot create object");
$xmlObj = simplexml_load_file("http://simeonlees.co.uk/aida/xml.php") or die("Error: Cannot create object");
//print_r($xmlObj->property);

echo "hello world";
?>


  <!-- CONTENT END -->
<?php
include 'template/content-footer.php';
include 'template/footer.php';
?>
