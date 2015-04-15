<?php 
include './securityWall.php';

echo("Hello ".$_SESSION['userid']);
echo("<br /><hr /><a href='./processLogout.php'>Logout</a>");

?>