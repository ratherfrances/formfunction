<?php
	session_start();
	
	$_SESSION['nameField'] = $_REQUEST['nameField'] ;
	$_SESSION['emailField'] = $_REQUEST['emailField'] ;
	
	$landing_page = "Location: ".$_REQUEST['end_display'] ;
	//redirect to landing page
	header($landing_page);
?>