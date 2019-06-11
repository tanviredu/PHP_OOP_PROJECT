<?php 

	class Utils{

		public function redirect($url){
			return header("Location: $url");
		}

		public function primary_login_validation($username,$password){
			if($username && $password){
				echo "insert both fiel";
			}

		}

		public function greetings_messages(){}

	}

	$utils = new Utils();

?>