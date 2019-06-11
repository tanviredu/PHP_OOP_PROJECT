<?php 
	require_once('database.php');
	require_once('utils.php');



	class User{
		public function get_all_users(){
			global $database;
			$all_user = $database->query("SELECT * FROM users");
			while($user = $database->fetch_array($all_user)){
				//echo $user['firstname']." ".$user['lastname'];
				echo "<tr>";
				echo  "<th scope='row'>".$user['id']."</th>";
				echo "<td>".$user['firstname']." ".$user['lastname']."</td>";
				
				echo "<td>".$user['username']."</td>";
				echo "</tr>";


				//echo "<h2 class='section-heading'>".$user['firstname']." ".$user['lastname']."</h2>";
			}
		}

		public function create_user($firstname,$lastname,$username,$password){
			global $database;
			$sql = "INSERT INTO users (firstname, lastname,username,password) VALUES ('$firstname', '$lastname','$username','$password')";
			$result = $database->query($sql);
			$database->confirm_query($result);
			echo "<script>alert('User Created Successfully')</script>";

			//return $result;

		}

		public function get_user_by_username_password($username,$password){
			session_start();
			global $database;
			global $utils;
			$status = false;
			$users = $database->query("SELECT username,password FROM users WHERE username = '$username' AND password = '$password'");
			while($user = $database->fetch_array($users)){
				//echo $user['username']." ".$user['password'];
				if($user['username'] && $user['password']){
					$status=true;
				}
		}

		if($status){
			$utils->redirect('index.php');
			$_SESSION['username'] = $username;
		}	
			

		}

		public function get_user_by_id($id){
			global $database;
			$users = $database->query("SELECT * FROM users WHERE id = '$id'");
			while($user = $database->fetch_array($users)){
				echo $user['firstname']." ".$user['lastname'];
			}
		}

		public function get_all_username(){
			global $database;
			$users = $database->query("SELECT username FROM users");
			while($user = $database->fetch_array($users)){
				echo $user['username'];
			}
		}

		public function user_exists($username,$password){
			global $database;
			$users = $database->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
			if(!$users){
				return false;
			}
			echo true;
		}

		public function search_user($username){
			global $database;
			$users = $database->query("SELECT * FROM users WHERE username LIKE '%$username%'");
			while($user = $database->fetch_array($users)){
				echo $user['username'];
			}

		}

		public function remove_user($username,$password){
			global $database;
			$sql = "DELETE FROM users WHERE username = '$username' AND password = '$password'";
			$result = $database->query($sql);
			$database->confirm_query($result);
			return $result;

		}
		public function update_user_password($username,$password){}



	}

	$user = new User();
	
	//$user->get_all_users();





	//$user->get_user_by_username_password("hasnat123","1122");

	

?>