<?php
$title = "Browse";
require_once 'config/init.php';
include 'template/header.php';
include 'template/nav.php';

echo '<div class="container content-container">';
?>
 <!-- CONTENT START -->


<div id="browse-filter-box">
    <button class="btn btn-info" layout="detail">Detail</button>
    <button class="btn btn-info" layout="grid">Grid</button>
    <p>The chosen layout is <span id="layout-choice">Detail</span>.</p>
</div>




<?php
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

</div>
<script src="assets/js/layout-choice-local-storage.js"></script>


<?php
include 'template/footer.php';
?>
