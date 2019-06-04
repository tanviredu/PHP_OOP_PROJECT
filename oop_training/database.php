<?php 
	require_once("config.php");
	//create the connection

class MysqlDatabase{
	private $connection;

	function __constructor(){
		$this->open_connection();
	}

	public function open_connection(){
		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		if(!$this->connection){
			die("connection not avilable");
		}
	}

	public function close_connection(){
		if (isset($this->connection)) {
			mysqli_close($this->connection);
			unset($this->connection);
		}
	}

	public function query($sql){
		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$result = mysqli_query($this->connection,$sql);
		$this->confirm_query($result);
		if(!$result){
			die("query failed");
		}		
		
		return $result;

	}
	private function confirm_query($result){

    if(!$result){
       die("Query Failed" .mysqli_error($this->connection));
    }

	}

	public function fetch_array($result_set){
		return mysqli_fetch_array($result_set);
	}


	public function affected_row(){
		return mysqli_affected_rows($this->connection);
}
}

$database = new MysqlDatabase();
//$database->close_connection();
$db =& $database;
?>