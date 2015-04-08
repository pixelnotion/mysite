<?php 

function login($userid, $password){
	$goodUserid="clara";
	$goodPassword="12345";

	if($userid == $goodUserid){
		if($password == $goodPassword){
			return true;
		}
	}
	
	return false;
}

?>
