<html>
<head><title>ifthen</title></head>
<body>
<?php 

$thing1 = "47";

?>

<h1>Welcome to my page.  I see that you are <?php echo $thing1; ?> years old.</h1>

<?php 
	if($thing1 > 40){
		echo "This page is for younger people.  Thank you for your interest.";
		$rejected = true;
	}else if($thing1 > 30){
		echo "You are right in the middle of our demographic.  Please insert $100 into the CD slot.";
	}else{
		echo "Does your mother know you're on the computer?";
	}
?>
</body>

</html>