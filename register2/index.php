<?php
session_start();

if(!isset($_SESSION['email'])) {
	header('location:login-to-continue.php');
}


include('../header.php');

$current_time=time();
$regOpenTime0=1545748037;
$regOpenTime=1546194599;

if ($current_time>$regOpenTime){
include('registrationActual.php');
}
else{
	include('registrationDisabled.php');
}

include('../footer.php');
?>
