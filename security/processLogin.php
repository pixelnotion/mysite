<?php 
include "./functions.php";

// Check the user's password.  $loggedIn will be true if it's good.
$loggedIn = doLogin($_POST["userid"], $_POST["password"]);

if($loggedIn){

	// Set the userid in the session to the userid passed in
	$_SESSION['userid']=$_POST['userid'];

	redirect('./main.php');

}else{

	// Add a friendly message to be displayed on the login page.
	$_SESSION['login_failure_message'] = 'Your user ID or password does not match what we have.';

	redirect('./login.php');
}

?>