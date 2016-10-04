<?php include 'contents.php'; ?>

<nav id="main-nav">
  <div id="main-nav-top">
    <ul class="float-left">
      <li><a href="index.php">AIDA</a></li>
    </ul>
    <ul class="float-right">
      <li><a href="#" id="main-menu-button"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a></li>
    </ul>
  </div>
  <div class="main-nav-dropdown float-right">
    <ul>

      <?php foreach ($labs as $lab):?>
              <li><a href="<?=$lab[1]?>"><?=$lab[0]?></a></li>
      <?php endforeach; ?>

    </ul>
    <ul>

      <?php foreach ($otherDocs as $file):?>
              <li><a target="blank" href="<?=$file[1]?>"><?=$file[0]?></a></li>
      <?php endforeach; ?>

    </ul>
  </div>
</nav>
