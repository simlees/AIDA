<?php
include '../../config/init.php';

$_SESSION['formSubmission']['email'] = filter_var($_POST["formEmail"], FILTER_SANITIZE_EMAIL);
$_SESSION['formSubmission']['text'] = filter_var($_POST["formText"], FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['formSubmission']['gender'] = filter_var($_POST["formGender"], FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['formSubmission']['securityAnswer'] = filter_var($_POST["formRobot"], FILTER_SANITIZE_NUMBER_INT);

$_SESSION['formErrors'] = null;
$formSubmissionIsValid = true;

$_SESSION['submission'] = "Email: ".$_SESSION['formSubmission']['email'].", Text: ".$_SESSION['formSubmission']['text'].", Gender: ".$_SESSION['formSubmission']['gender'].", Answer: ".$_SESSION['formSubmission']['securityAnswer'];

// VALIDATE

// EMAIL
if(!filter_var($_SESSION['formSubmission']['email'], FILTER_VALIDATE_EMAIL))
{
	$_SESSION['formErrors']['email'] = "Please enter a valid email.";
	$formSubmissionIsValid = false;
}

// TEXT
if(empty($_SESSION['formSubmission']['text']))
{
	$_SESSION['formErrors']['text'] = "Please enter a message.";
	$formSubmissionIsValid = false;
}

// GENDER
if(empty($_SESSION['formSubmission']['gender']))
{
	$_SESSION['formErrors']['gender'] = "Please select a Gender.";
	$formSubmissionIsValid = false;
}

// SECURITY ANSWER
if($_SESSION['formSubmission']['securityAnswer'] != 7)
{

	$_SESSION['formErrors']['securityAnswer'] = "Please retry the Security Question.";
	$formSubmissionIsValid = false;
}




// Do work

if ($formSubmissionIsValid)
{
	// Update database via prepared statements
	// Send acknowledgement Email
	$_SESSION['formSubmission'] = null;
	$_SESSION["formSuccess"] = true;
} else {
	$_SESSION["formSuccess"] = false;
}

header('Location: ../../lab1.php');
exit();