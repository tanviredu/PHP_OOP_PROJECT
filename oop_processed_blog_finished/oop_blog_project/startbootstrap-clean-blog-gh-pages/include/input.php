<?php
	// this script handles all the input 
	//from in the blog application
	//require_once('database.php');
	require_once('user.php');
	require_once('utils.php');

	//require_once('blog.php');


	class Input{

		public function login_input(){
			global $user;
			session_start();

			if(isset($_POST['login'])){
				$username = $_POST['username'];
				$password = $_POST['password'];

				
				if($username && $password){
					$user->get_user_by_username_password($username,$password);

					

					

			}
		}
	}

		public function register_input(){
			global $user;
			global $utils;

			if(isset($_POST['register'])){

				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				$password = $_POST['password'];

				
				if($firstname && $lastname && $username && $password){
					$user->create_user($firstname,$lastname,$username,$password);

				return $utils->redirect('login.php');

			}
		}
	}

		public function blog_input(){
			global $database;
			global $user;
			global $blog;
			
			if(isset($_POST['post'])){
			 		$username =  $_SESSION['username'];
			 		$title = $_POST['title'];
			 		$content = $_POST['content'];

			 		if($username && $title && $content){
			 			// make query
						$blog->create_post($username,$title,$content);

			 		}

			}
		}
	}

$input = new Input();

?>