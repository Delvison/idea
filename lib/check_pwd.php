<?php

	/**
	* This function checks whether the password contains any alphabetic
	*	characters and numeric values
	* @author Nuwan
	*/
	function check_pwd($str)
	{
		if ( strlen($str) >= 8 && preg_match('/[A-Z]/',$str ) &&
		preg_match('#[0-9]#',$str) && preg_match('/[a-z]/',$str ))
		{
			return TRUE;
		}
		else return FALSE;
	}


?>
