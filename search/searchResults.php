<?php $term = $_REQUEST["searchTerms"];?>

<!DOCTYPE html>
<html>
<head>
<title>Results</title>
</head>
<body>
	<iframe src="https://www.bing.com/search?q=<?php echo($term);?>" width="1000" height="300"></iframe>
	<br />
	<iframe src="https://duckduckgo.com/?q=<?php echo($term);?>" width="1000" height="300"></iframe>
</body>
</html>