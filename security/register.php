<?php
session_start();

$firstName = (isset($_SESSION['postData'])
                    ? $_SESSION['postData']['firstName']
                    : '');

$lastName = (isset($_SESSION['postData']) ? $_SESSION['postData']['lastName']  : '');
$email = (isset($_SESSION['postData']) ? $_SESSION['postData']['email']     : '');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="./styles.css" />
</head>
<body>

<div id="loginTitle">None shall pass without logging in</div>


<div id="loginImageDiv">
<img src="../images/blackknight.jpg"/>
</div>

<div id="loginFormDiv">

<?php
// Display a login registration if one was passed in on the session
if (isset($_SESSION['registration_failure_message'])) {
    echo("<div id='loginErrorMessage'>" . $_SESSION['registration_failure_message'] . "</div>");
}
?>

<form action="processRegistration.php" method="post">
    <div style="display: table">
        <div style="display: table-row">
            <div style="display:table-cell; text-align: right"><label for="firstName">First Name:</label></div>
            <div style="display:table-cell"><input type="text" name="firstName" id="firstName" value="<?=$firstName?>"/></div>
        </div>
        <div style="display: table-row">
            <div style="display:table-cell; text-align: right"><label for="lastName">Last Name:</label></div>
            <div style="display:table-cell"><input type="text" name="lastName" id="lastName" value="<?=$lastName?>"/></div>
        </div>
        <div style="display: table-row">
            <div style="display:table-cell; text-align: right"><label for="email">email:</label></div>
            <div style="display:table-cell"><input type="text" name="email" id="email" value="<?=$email?>"/></div>
        </div>
        <div style="display: table-row">
            <div style="display:table-cell; text-align: right"><label for="password">Password:</label></div>
            <div style="display:table-cell"><input type="password" name="password" id="password"/></div>
        </div>
        <div style="display: table-row">
            <div style="display:table-cell; text-align: right"><label for="password2">Password Again:</label></div>
            <div style="display:table-cell"><input type="password" name="password2" id="password2"/></div>
        </div>
        <div style="display: table-row">
            <div style="display:table-cell">&nbsp;</div>
            <div style="display:table-cell; text-align: right"><input type="submit" value="login"/></div>
        </div>
    </div>
</form>
</div>

</body>

</html>