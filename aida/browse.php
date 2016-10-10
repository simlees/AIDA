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
    echo '<div class="browse-item">';
    echo '<h3 class="browse-item-name">'.$property['title'].'</h3>';
    echo '<h4 class="browse-item-location">'.$property['city'].', '.$property['country'].'</h3>';
    echo '<span class="browse-item-sleeps">'.$property['capacity'].'</span>';
    echo '<span class="browse-item-price">£'.$property['price'].'pn</span>';
    echo '</div>';
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
