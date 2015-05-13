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

function doDBLogin($userid, $password){
	$retVal = false;

	$mysql = new mysqli("localhost", "root", "root", "phpschema", 3306);
	if ($mysql->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysql->connect_error . ")";
	}

	$result = $mysql->query("select email, pswd from users where email='$userid'");

	if($result->num_rows == 0){
		$retVal = false;
	}else{
		$result->data_seek(1);
		$aRow = $result->fetch_assoc();

		$retVal = ($password == $aRow['pswd']);
	}

	$result->free();

	return $retVal;
}

function doesUserExist($userid){
	$retVal = true;

	$mysql = new mysqli("localhost", "root", "root", "phpschema", 3306);
	if ($mysql->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysql->connect_error . ")";
	}

	$result = $mysql->query("select email from users where email='$userid'");

	$retVal = ($result->num_rows > 0);

	$result->free();

	return $retVal;
}

function createUser($firstName, $lastName, $email, $password){
	$retVal = false;

	$mysql = new mysqli("localhost", "root", "root", "phpschema", 3306);
	if ($mysql->connect_errno) {
		$retVal = false;
	}

	$queryString = "insert into users (firstname, lastname, email, pswd) values ('$firstName', '$lastName', '$email', '$password')";

	$mysql->query($queryString);

	$retVal = true;

	return $retVal;
}

/*
 * Logs a user out by destroying the session and depositing them on the login page.
 */
function doLogout(){
	session_destroy();
	redirect("./login.php");
}

?>



















