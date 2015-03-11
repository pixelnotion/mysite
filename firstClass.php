<?php

$dumbWay = ["firstName" => "Clara", "lastName" => "Oswald"];

class Person{
    public $firstName;
    public $lastName;

    public function greet(){
        return("Hello ".$this->firstName);
    }
}

class Member extends Person{
    public $memberSince;

    public function greet(){
        return("Hello ".$this->firstName.". Thank you for your membership.");
    }
}

$p1 = new Person();
$p1->firstName   = 'Clara';
$p1->lastName    = 'Oswald';

$m1 = new Member();
$m1->firstName = "Amy";
$m1->lastName  = "Pond";
$m1->memberSince = 2005;

var_dump($dumbWay);
echo("<br>");
var_dump($p1);
echo("<br>");
var_dump($m1);
echo("<br>");
echo($p1->greet());
echo("<br>");
echo($m1->greet());
echo("<br>");
echo(serialize($m));

?>