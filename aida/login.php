<?php
$title = "CityBase - Login";
require_once 'config/init.php';

if ($user->isLoggedIn())
{
  header('Location: index.php');
  exit();
}

if (isset($_POST['formSubmit']))
{
  // SANITIZE INPUTS

  $email = $_POST['formEmail'];
  $password = $_POST['formPassword'];

  if($user->login($email, $password))
  {
   header('Location: index.php');
   exit();
  }
  else
  {
    header('Location: lab2.php');
    exit();
  }
}









include 'template/header.php';
include 'template/nav.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->


<form method="post">
  <div class="form-group">
    <label for="formEmail <?php if(isset($_SESSION['formErrors']['email'])){echo "has-error";} ?>">Email address</label>
    <input type="email" class="form-control" id="formEmail" name="formEmail" placeholder="Email" value="<?php if(isset($_SESSION['formSubmission']['email'])){echo $_SESSION['formSubmission']['email'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['formErrors']['email'])){echo "<span class=\"error-message\">".$_SESSION['formErrors']['email']."</span>";} ?>
  </div>
  <div class="form-group">
    <label for="formPass <?php if(isset($_SESSION['formErrors']['password'])){echo "has-error";} ?>">Password</label>
    <input type="password" class="form-control" id="formPassword" name="formPassword" placeholder="Email" value="<?php if(isset($_SESSION['formSubmission']['password'])){echo $_SESSION['formSubmission']['password'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['formErrors']['password'])){echo "<span class=\"error-message\">".$_SESSION['formErrors']['password']."</span>";} ?>
  </div>
  <button type="submit" name="formSubmit" class="btn btn-default">Submit</button>
</form>



  <!-- CONTENT END -->
<?php
include 'template/content-footer.php';
include 'template/footer.php';
?>
