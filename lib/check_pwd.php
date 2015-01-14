<?php

	/* This function checks whether
	the password contains any alphabetic
	characters and numeric values*/

	$test = $_GET['t'];

	if (!validatePwd($test)){
		echo "no good";
	}else{
		echo "good";
	}

	function validatePwd($str) {
		
		if ( strlen($str) >= 8 && preg_match('/[A-Z]/',$str ) && preg_match('#[0-9]#',$str)) {
			return TRUE;
		}

		else return FALSE;

	}


?>
