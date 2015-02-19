<html>
	<head>
		<title>Variables</title>
	</head>
	<body>
		<table>
			<tr>
				<td><strong>Kind</strong></td>
				<td><strong>Example</strong></td>
			</tr>
			<tr>
				<td>String</td>
				<td><?php $mystr = "Hello"; echo $mystr;?></td>
			</tr>
			<tr>
				<td>String replaced</td>
				<td><?php echo str_replace("ello", "i", $mystr);?></td>
			</tr>
			<?php $thing = -1;?>
			
			<tr><td>$thing is:</td><td><?php echo $thing;?></td></tr>
			<tr><td>is_array($thing)</td><td><?php echo (is_array($thing)) ? "YES" : "NO"; ?></td></tr>
			<tr><td>is_bool($thing)</td><td><?php echo is_bool($thing);   ?></td></tr>
			<tr><td>is_callable($thing)</td><td><?php echo is_callable($thing) ;?></td></tr>
			<tr><td>is_double($thing)</td><td><?php echo is_double($thing) ;?></td></tr>
			<tr><td>is_float($thing)</td><td><?php echo is_float($thing) ;?></td></tr>
			<tr><td>is_int($thing)</td><td><?php echo is_int($thing) ;?></td></tr>
			<tr><td>is_integer($thing)</td><?php echo is_integer($thing) ;?><td></td></tr>
			<tr><td>is_long($thing)</td><td><?php echo is_long($thing) ;?></td></tr>
			<tr><td>is_null($thing)</td><td><?php echo is_null($thing) ;?></td></tr>
			<tr><td>is_numeric($thing)</td><td><?php echo is_numeric($thing) ;?></td></tr>
			<tr><td>is_object($thing)</td><td><?php echo is_object($thing) ;?></td></tr>
			<tr><td>is_real($thing)</td><td><?php echo is_real($thing) ;?></td></tr>
			<tr><td>is_resource($thing)</td><td><?php echo is_resource($thing) ;?></td></tr>
			<tr><td>is_scalar($thing)</td><td><?php echo is_scalar($thing) ;?></td></tr>
			<tr><td>is_string($thing)</td><td><?php echo is_string($thing) ;?></td></tr>
			<tr><td>isset($thing)</td><td><?php echo isset($thing) ;?></td></tr>
			
		</table>	
	
	</body>
</html>