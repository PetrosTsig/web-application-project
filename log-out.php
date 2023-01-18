<?php
session_start();

if($_GET['logout'] == 'ok')//if user click button logout destroy session and go to login.php page
{
	session_destroy();
	header("Location:log-in.php");
}
else
{
		header("Location:home.php");
}
?>