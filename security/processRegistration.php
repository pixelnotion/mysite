<?php 
include "./functions.php";

$email = $_POST["email"];

if(doesUserExist($email)){
	$_SESSION['registration_failure_message'] = 'Looks like we already know you.';
	redirect('./register.php');
}

if($_POST['password'] != $_POST['password2']){
	$_SESSION['registration_failure_message'] = "Your passwords don't match.";
	redirect('./register.php');
}

if(createUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'])){
	$_SESSION['login_failure_message'] = "Welcome to Camelot. Please log in.";
	redirect('./login.php');
}else{
	$_SESSION['registration_failure_message'] = "We could not create your user account.";
	redirect('./register.php');

}
/*
if($loggedIn){
	// Set the userid in the session to the userid passed in
	$_SESSION['userid']=$_POST['userid'];

	redirect('./main.php');

}else{

	// Add a friendly message to be displayed on the login page.
	$_SESSION['login_failure_message'] = 'Your user ID or password does not match what we have.';

	redirect('./login.php');
}
*/
?>