<?php 
include "./functions.php";
session_start();

$loggedIn = login($_POST["userid"], $_POST["password"]);

if($loggedIn){
	$_SESSION['userid']=$_POST['userid'];
	header("Location: ./main.php");
}else{
	header("Location: ./login.html");
}

?>