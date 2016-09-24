<?php
$title = "Home";
include 'template/header.php';
include 'template/nav.php';
include 'template/labs.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->



  <ul>
    <?php foreach ($labs as $lab):?>
            <li><a href="<?=$lab[1]?>"><?=$lab[0]?></a></li>
    <?php endforeach; ?>
  </ul>



  <!-- CONTENT END -->
<?php
include 'template/footer.php';
?>
