<?php

function configForm(){
	
	// Validation
	if(!$_GET['email']){ echo "No email address provided"; return "<script>jQuery('#registerform').show();</script>"; } 

	if(!preg_match("/^[\w-]+(\.[\w+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_GET['email'])) {
		echo "Email address is invalid"; 
		return "<script>jQuery('#registerform').show();</script>";
	}

	require_once('MCAPI.class.php');
	$api = new MCAPI('5c5ad7e0e4678d8e9c96e4a0f46ef438-us3'); 
	$list_id = "553fdbf9db";
	$merge_vars = array( 
        'FNAME' => $_GET['fname'], 
        'LNAME' => $_GET['lname']
    );

	if($api->listSubscribe($list_id, $_GET['email'], $merge_vars) === true) {
		// It worked!	
		return 'We\'ll be in touch.';
	}else{
		// An error ocurred, return error message	
		return 'Error: ' . $api->errorMessage;
	}
	
}

// If being called via ajax, autorun the function
if($_GET['ajax']){ echo configForm(); }
?>