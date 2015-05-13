<?php
session_start();

$email = '';
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
// The fancy way to do the same thing
// $email = (isset($_SESSION['email']) ? $_SESSION['email'] : '');
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
// Display a login error if one was passed in on the session
if (isset($_SESSION['login_failure_message'])) {
    echo("<div id='loginErrorMessage'>" . $_SESSION['login_failure_message'] . "</div>");
}
?>

<form action="processLogin.php" method="post">
    <div style="display: table">
        <div style="display: table-row">
            <div style="display:table-cell; text-align: right"><label for="userid">userid:</label></div>
            <div style="display:table-cell"><input
                                type="text"
                                name="userid"
                                id="userid"
                                value="<?=$email?>"
                            />
            </div>
        </div>
        <div style="display: table-row">
            <div style="display:table-cell; text-align: right"><label for="password">password:</label></div>
            <div style="display:table-cell"><input type="password" name="password" id="password"/></div>
        </div>
        <div style="display: table-row">
            <div style="display:table-cell"><a href="register.php">Register Free</a></div>
            <div style="display:table-cell; text-align: right"><input type="submit" value="login"/></div>
        </div>
    </div>
</form>
</div>

</body>

</html>