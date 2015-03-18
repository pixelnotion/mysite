<?php

// $user1 = ["firstName" => "Clara", "lastName" => "Oswald", "userid" => "coswald"];
// $user2 = ["firstName" => "Joshua", "lastName" => "Marrero", "userid" => "jmarrero"];

class Person {
	public $firstName;
	public $lastName;
}

class User extends Person{
	public $userid;
	public $password;
	public $numberOfLogins = 0;
	
	function __construct($firstName, $lastName, $userid, $password){
		$this->firstName = $firstName;
		$this->lastName  = $lastName;
		$this->userid    = $userid;
		$this->password  = $password;
	}
	
	function login($pswd){
		if($pswd === $this->password){
			$this->numberOfLogins++;
			return("Welcome ".$this->firstName.". This is login # ".$this->numberOfLogins);	
		}else{
			return("NONE SHALL PASS");
		}
	}
}

$user1 = new User("Clara", "Oswald", "coswald", "secret1");

say("the user is:".$user1->userid."<hr>");
say("login attempts:");
say($user1->login("secret1"));
say($user1->login("secret2"));
say($user1->login("pswd1"));
say($user1->login("secret1"));

function say($thingToSay){
	echo($thingToSay."<br>");
}

?>