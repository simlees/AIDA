<nav id="main-nav">
  <div id="main-nav-top">
    <ul class="float-left">
      <li><a href="index.php"><img class="main-nav-logo" src="assets/images/logo.png" alt="City Base logo"/></a></li>
      <li id="search-box">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        <form method="get" action="browse.php"><input type="text" name="search" placeholder="Where to go?"/></form>
      </li>
    </ul>
    <ul class="float-right">
      <li><a href="#" id="main-menu-button"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a></li>
    </ul>
  </div>
  <div class="main-nav-dropdown float-right">
    <ul>
      <li><a href="browse.php">Browse</a></li>
    </ul>
    <ul>
      <?php if (isset($_SESSION['userID']))
      {
        echo '<li><a href="account.php">My Account</a></li>';
        echo '<li><a href="logout.php">Log out</a></li>';

      } else {
        echo '<li><a href="login.php">Log in</a></li>';
        echo '<li><a href="register.php">Register</a></li>';
      }
      ?>
    </ul>
    <ul>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul>
      <li><a href="xml.php">XML</a></li>
      <li><a href="styledxml.php">Styled XML</a></li>
      <li><a href="json.php">JSON</a></li>
    </ul>
    <ul>
      <li><a href="../index.php">Return to Main Site</a></li>
    </ul>
  </div>
</nav>
