<?php 
	require_once('oop_training/database.php');
	require_once('oop_training/user.php');
	
	$sql  = "SELECT * FROM users WHERE id=1";
	$result = $db->query($sql);
	$db->fetch_array($result);
	echo $db->affected_row();
	$user = new User();
	
	$user->get_all_user();
	$found_user = $user->find_by_id(1);
	// found_user is an arrya of value
	// now we can add it to our attribute for simplicity
	//$user->id=$found_user['id'];
	//$user->username=$found_user['username'];
	//$user->first_name=$found_user['first_name'];
	//$user->last_name=$found_user['last_name'];
	//$user->password=$found_user['password'];
	//echo $user->id;
	//echo $user->username;
	//echo $user->first_name;
	//echo $user->last_name;
	//echo $user->password;
	//echo $user->full_name();
	$user1 = $user->instantiate($found_user);

	echo $user1->id;
	echo $user1->username;
	echo $user1->first_name;
	echo $user1->last_name;
	echo $user1->password;
	echo $user1->full_name();



