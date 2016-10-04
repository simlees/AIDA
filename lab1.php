<?php
$title = "Lab 1 - Web Projects";
require_once 'config/init.php';
include 'template/header.php';
include 'template/nav.php';
include 'template/content-box.php';
?>
<!-- CONTENT START -->

<?php
if (isset($_SESSION["formSuccess"]))
{
    if($_SESSION["formSuccess"] == true)
    {
        include 'template/form-success-message.php';
    } else 
    {
        include 'template/form-fail-message.php';
    }
    $_SESSION["formSuccess"] = null;
    
    //if(isset($_SESSION['submission'])){ echo $_SESSION['submission']; }
    //if(isset($_SESSION['formErrors'])){ print_r($_SESSION['formErrors']);}
}

?>


<form action="includes/functions/submit_message.php" method="post">
  <div class="form-group">
    <label for="formEmail <?php if(isset($_SESSION['formErrors']['email'])){echo "has-error";} ?>">Email address</label>
    <input type="email" class="form-control" id="formEmail" name="formEmail" placeholder="Email" value="<?php if(isset($_SESSION['formSubmission']['email'])){echo $_SESSION['formSubmission']['email'];}?>" required>
    <span class="error-message"></span>
    <?php if(isset($_SESSION['formErrors']['email'])){echo "<span class=\"error-message\">".$_SESSION['formErrors']['email']."</span>";} ?>
  </div>
  <div class="form-group <?php if(isset($_SESSION['formErrors']['text'])){echo "has-error";} ?>">
    <label for="formText">Message</label>
    <textarea id="formText" name="formText" class="form-control" rows="3" required><?php if(isset($_SESSION['formSubmission']['text'])){echo $_SESSION['formSubmission']['text'];}?></textarea>
    <?php if(isset($_SESSION['formErrors']['text'])){echo "<span class=\"error-message\">".$_SESSION['formErrors']['text']."</span>";} ?>
  </div>
  <div class="form-group <?php if(isset($_SESSION['formErrors']['gender'])){echo "has-error";} ?>">
      <div class="checkbox">
        <label class="radio-inline"><input value="Male" type="radio" name="formGender" <?php if(isset($_SESSION['formSubmission']['gender'])&&$_SESSION['formSubmission']['gender']=="Male"){echo "checked=\"checked\"";}?> required>Male</label>
        <label class="radio-inline"><input value="Female" type="radio" name="formGender" <?php if(isset($_SESSION['formSubmission']['gender'])&&$_SESSION['formSubmission']['gender']=="Female"){echo "checked=\"checked\"";}?> >Female</label>
        <label class="radio-inline"><input value="Other" type="radio" name="formGender" <?php if(isset($_SESSION['formSubmission']['gender'])&&$_SESSION['formSubmission']['gender']=="Other"){echo "checked=\"checked\"";}?> >Other</label>
      </div>
      <?php if(isset($_SESSION['formErrors']['gender'])){echo "<span class=\"error-message\">".$_SESSION['formErrors']['gender']."</span>";} ?>
    </div>
  <div class="form-group">
      <label>I am not a Robot</label>
      <fieldset class="form-inline <?php if(isset($_SESSION['formErrors']['securityAnswer'])){echo "has-error";} ?>">
        <label class="control-label">3 + 4 = </label>
        <input type="text" name="formRobot" class="form-control" value="<?php if(isset($_SESSION['formSubmission']['securityAnswer'])){echo $_SESSION['formSubmission']['securityAnswer'];}?>" required>
      </fieldset>
      <?php if(isset($_SESSION['formErrors']['securityAnswer'])){echo "<span class=\"error-message\">".$_SESSION['formErrors']['securityAnswer']."</span>";} ?>
   </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>



  <!-- CONTENT END -->
<?php
include 'template/footer.php';
?>
