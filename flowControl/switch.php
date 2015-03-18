<html>
<head><title>switch</title></head>
<body>
<h1>Hello and welcome to our site.</h1>

<?php 
	$age = 30;
	switch($age){
		case 47:
			echo "You are too old for our site.";
			break;
		case 30:
			echo "You are just right for our site.";
			break;
		case 17:
			echo "You are too young for our site.";
			break;
		default:
			echo "Thank you for your interest.";
			break;
	}

?>
</body>
</html>