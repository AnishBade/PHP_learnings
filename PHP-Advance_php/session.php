<?php
//Start session
session_start();
//set session variables
$_SESSION['username']="Anish";
$_SESSION['password']="12345";
//access session variables
echo $_SESSION['username']; 
echo $_SESSION['password']; 
?>