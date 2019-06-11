<?php 
	require_once('config.php');
	class MySqlDatabase{
		private $connection;

		function __constructor(){
			// function goes here
			$this->open_connection();
		}
		public function open_connection(){
			$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			if(!$this->connection){
				die("Connection Unsuccessful");
			}
		}

		public function close_connection(){
			if(isset($this->connection)){
				mysqli_close($this->connection);
				unset($this->connection);
			}
		}


		public function confirm_query($result){
			if(!$result){
				die("query failed");
			}
		}

		public function query($sql){
			// create the connection here again
			$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			$result = mysqli_query($this->connection,$sql);
			$this->confirm_query($result);
			return $result;

		}
		//using in  a loop
		public function fetch_array($result_set){
			return mysqli_fetch_array($result_set);
		}

		public function affected_row(){
			return mysqli_affected_row($this->connection);
		}

	}

	$database = new MySqlDatabase();



?>