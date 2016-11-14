<?php
$title = "Styled XML";
require_once 'config/init.php';
include 'template/header.php';
include 'template/nav.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->

<h1>Styled XML</h1>

<?php

//$xml = simplexml_load_file("http://simeonlees.co.uk/aida/xml.php") or die("Error: Cannot create object");
$xmlObj = simplexml_load_file("http://simeonlees.co.uk/aida/xml.php") or die("Error: Cannot create object");


echo '<table class="table table-striped"><tr><th>Title</th><th>City</th><th>Capacity</th><th>Price</th></tr>';
//print_r($xmlObj->property);

foreach($xmlObj->property as $property)
{
    echo "<tr>";
    echo "<td>".$property->title."</td>";
    echo "<td>".$property->city."</td>";
    echo "<td>".$property->capacity."</td>";
    echo "<td>£".$property->price."</td>";
    echo "</tr>";
}

echo "</table>";

?>


  <!-- CONTENT END -->
<?php
include 'template/content-footer.php';
include 'template/footer.php';
?>
