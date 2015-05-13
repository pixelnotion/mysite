<!DOCTYPE html>
<html>
	<head>
		<title>Functions</title>
	</head>
	<body>
	<h3>The Functions Page</h3>
	<hr />
		<form method="get" action="functions.php">
			<table id="inputTable" cellpadding="2">
				<tr>
					<td>Enter a value for &quot;a&quot;</td>
					<td><input name="a" type="text" pattern="^[0-9]+$" size="3" required></td>
				</tr>
				<tr>
					<td>Enter a value for &quot;b&quot;</td>
					<td><input name="b" type="text" pattern="^[0-9]+$" size="3" required></td>
				</tr>
				<tr>
					<td>Enter a value for &quot;herbie&quot;</td>
					<td><input name="herbie" type="text" pattern="^[0-9]+$" size="3" required></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" value="Send"/></td>
				</tr>

			</table>
		</form>
	<hr />
	<div>The result of our calculation is: <span style="font-weight: bold">
	<?php
	/* Get the variables from the URL request */
	$a = $_GET["a"];
	$b = $_GET["b"];
	$herbie = $_GET["herbie"];

	/* Now that we have collected the user input
     * let's call our function with those values.
     */

	echo doubleUp($a, $b, $herbie);


	function doubleUp($arg1, $arg2, $herbie)
	{
		if ($herbie == 0) {
			return "Can't divide by zero.";
		} else {
			return ($arg1 * $arg2) / $herbie;
		}
	}
	?></span></div>
	</body>
</html>


