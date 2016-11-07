<?php
$title = "Browse";
require_once 'config/init.php';
include 'template/header.php';
include 'template/nav.php';
echo '<div class="container content-container">';

// <!-- CONTENT START -->



if (isset($_GET['search']))
{
  $properties = $property->search($_GET['search']);
} else {
  $properties = $property->getAll();
}




if (count($properties) > 0)
{
  foreach($properties as $property)
  {
    include 'template/browse-item.php';
  }
} else {
  echo "<p>No properties were found.</p>";
}


?>





  <!-- CONTENT END -->
<?php

echo '</div>';
include 'template/footer.php';
?>
