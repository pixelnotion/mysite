<?php


/* Get the variables from the URL request */
$a = $_GET["a"];
$b = $_GET["b"];
$herbie = $_GET["herbie"];

/* Now that we have collected the user input 
 * let's call our function with those values.
 */

echo doubleUp($a, $b, $herbie);


function doubleUp($arg1, $arg2, $herbie){
	if($herbie == 0){
		return "Can't divide by zero.";
	}else{
		return ($arg1 * $arg2) / $herbie;
	}
}



?>