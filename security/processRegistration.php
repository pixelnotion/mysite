<?php 
include "./functions.php";

$email = $_POST["email"];

if(doesUserExist($email)){
	$_SESSION['registration_failure_message'] = 'Looks like we already know you.';
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