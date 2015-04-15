<?php
include './functions.php';

// Check for a userid stored in the session.  If it doesn't exist, redirect to login.php.  If it does, do nothing.
if(!isset($_SESSION['userid'])){
    redirect('login.php');
}
?>