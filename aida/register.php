<?php
$title = "CityBase - Register";
require_once 'config/init.php';

if (isset($_POST['submit']))
{
  if ($user->register($_POST['email'], $_POST['fname'], $_POST['lname'], $_POST['password'], $_POST['confirmPassword']))
  {
    $user->login($_POST['email'], $_POST['password']);
    header('Location: index.php');
    exit();
  }
  else
  {
    header('Location: register.php');
    exit();
  }
}



include 'template/header.php';
include 'template/nav.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->

<h1>Register</h1>

<form method="post">
  <div class="form-group">
    <label for="formEmail <?php if(isset($_SESSION['register']['errors']['email'])){echo "has-error";} ?>">Email address</label>
    <input type="email" class="form-control" id="formEmail" name="email" placeholder="Email" value="<?php if(isset($_SESSION['register']['values']['email'])){echo $_SESSION['register']['values']['email'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['register']['errors']['email'])){echo "<span class=\"error-message\">".$_SESSION['register']['errors']['email']."</span>";} ?>
  </div>
    <div class="form-group">
    <label for="formFName <?php if(isset($_SESSION['register']['errors']['fname'])){echo "has-error";} ?>">First Name</label>
    <input type="text" class="form-control" id="formFName" name="fname" placeholder="First Name" value="<?php if(isset($_SESSION['register']['values']['fname'])){echo $_SESSION['register']['values']['fname'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['register']['errors']['fname'])){echo "<span class=\"error-message\">".$_SESSION['register']['errors']['fname']."</span>";} ?>
  </div>
    <div class="form-group">
    <label for="formLName <?php if(isset($_SESSION['register']['errors']['lname'])){echo "has-error";} ?>">Last Name</label>
    <input type="text" class="form-control" id="formLName" name="lname" placeholder="Last Name" value="<?php if(isset($_SESSION['register']['values']['lname'])){echo $_SESSION['register']['values']['lname'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['register']['errors']['lname'])){echo "<span class=\"error-message\">".$_SESSION['register']['errors']['lname']."</span>";} ?>
  </div>
  <div class="form-group">
    <label for="formPassword <?php if(isset($_SESSION['register']['errors']['password'])){echo "has-error";} ?>">Password</label>
    <input type="password" class="form-control" id="formPassword" name="password" placeholder="" value="<?php if(isset($_SESSION['register']['values']['password'])){echo $_SESSION['register']['values']['password'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['register']['errors']['password'])){echo "<span class=\"error-message\">".$_SESSION['register']['errors']['password']."</span>";} ?>
  </div>
  <div class="form-group">
    <label for="formConfirmPassword <?php if(isset($_SESSION['register']['errors']['confirmPassword'])){echo "has-error";} ?>">Confirm Password</label>
    <input type="password" class="form-control" id="formConfirmPassword" name="confirmPassword" placeholder="" value="<?php if(isset($_SESSION['register']['values']['confirmPassword'])){echo $_SESSION['register']['values']['confirmPassword'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['register']['errors']['confirmPassword'])){echo "<span class=\"error-message\">".$_SESSION['register']['errors']['confirmPassword']."</span>";} ?>
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>



  <!-- CONTENT END -->
<?php

$_SESSION['register'] = null;

include 'template/content-footer.php';
include 'template/footer.php';
?>
