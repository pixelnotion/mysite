<?php

$keys = array_keys($_SERVER);

foreach($keys as $aKey){
	echo $aKey."=".$_SERVER[$aKey]."<br />";	
}

?>