<?php
session_start();

if(!isset($_SESSION['email'])) {
	header('location:login-to-continue.php');
}


include('../header.php');

include('registrationDisabled.php');


include('../footer.php')
?>
