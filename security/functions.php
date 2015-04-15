<?php 

// Starts the PHP session so we don't have to do it on every page.
session_start();

/*
 * Closes the PHP session and redirects the user to
 * the location that was passed in.
 */
function redirect($location){
	session_write_close();
	header("Location: ".$location);
}


/*
 * Checks the userid and password against known userid's and passwords,
 * returns true if there's a match, false if not.
 */
function doLogin($userid, $password){
	$goodUserid="clara";
	$goodPassword="12345";

	if($userid == $goodUserid){
		if($password == $goodPassword){
			return true;
		}
	}
	
	return false;
}

/*
 * Logs a user out by destroying the session and depositing them on the login page.
 */
function doLogout(){
	session_destroy();
	redirect("./login.php");
}

?>
