<!DOCTYPE html>
<html>
<head><title>Dates</title></head>
<body>
This is a page to play with the date() function

<div>
<form action="dates.php" method="get">
<label for="fmtString">Please enter your format:</label>
<input type="text" id="fmtString" name="fmtString" />
<input type="submit" value="Check" />
</form>
</div>
<hr />
<table cellpadding="3" cellspacing="2" border="1">
<tr><td>Format String</td><td>Result</td></tr>


<?php if( (array_key_exists("fmtString",$_GET)) 
		&& (strlen($_GET["fmtString"]) > 0)){?>
	<tr>
		<td><?php echo $_GET["fmtString"];?></td>
		<td><?php echo date($_GET["fmtString"], time());?></td>
	</tr>
<?php } else { ?>
	<tr><td colspan="2">Please enter a format string.</td></tr>
<?php }?>


</table>

</body>
</html>

