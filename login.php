<?php 
	require_once('oop_training/database.php');
	require_once('oop_training/user.php');
	require_once('oop_training/session.php');
	if ($session->is_logged_in()) {
		//redirect
	}

	else{

		//form processing
		//authenticate

		if($found_user){
			$session->login($found_user); //found user is a array of value
			//redirect() to index.php

		}
	}

	
?>