<?php
$title = "Home";
include 'template/header.php';
include 'template/nav.php';
include 'template/labs.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->


  <h2>Lab Exercises</h2>
  <ul>
    <?php foreach ($labs as $lab):?>
            <li><a href="<?=$lab[1]?>"><?=$lab[0]?></a></li>
    <?php endforeach; ?>
  </ul>

  <h2>Other Files</h2>
  <ul>
    <?php foreach ($otherDocs as $file):?>
            <li><a target="blank" href="<?=$file[1]?>"><?=$file[0]?></a></li>
    <?php endforeach; ?>
  </ul>



  <!-- CONTENT END -->
<?php
include 'template/footer.php';
?>
