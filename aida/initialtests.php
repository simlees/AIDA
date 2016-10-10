<?php
$title = "Initial Tests";
require_once 'config/init.php';
include 'template/header.php';
include 'template/nav.php';
include 'template/content-box.php';
?>

<!-- CONTENT START -->


<h2>Test: Initialisation and Configuration</h2>
	<?php
	    print  "Base URL: ". $config['base_url'];
	    print "<br />";
	    print "Database Details: ";
	    print "<pre>";
	    print_r($db);
	    print "</pre>";
	 ?>


<!-- CONTENT END -->

<?php
include 'template/content-footer.php';
include 'template/footer.php';
?>
