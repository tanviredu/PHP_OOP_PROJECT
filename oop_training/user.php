
<?php
require_once('oop_training/database.php'); 
class User{
	//adding attribure so we can access that but this is for one 
	//public $id;
	//public $username;	
	//public $pasword;	
	//public $first_name;	
	//public $last_name;

	// we can do it with a function

	public function instantiate($array){
		// we can instantiate an objet with  getting data from find_by_id()
		// get the array and instantiatie it quickly
		// cause if we use different different user we need to instantiate different differnt copy of user
		// and we can apply different different method to diferent user
		//make a copy of the class object
		$object = new self;
		$object->id = $array['id'];
		$object->username = $array['username'];
		$object->password = $array['password'];
		$object->first_name = $array['first_name'];
		$object->last_name = $array['last_name'];

		return $object;


	}	

	public function find_all(){
		global $database;
		$result_set = $database->query("SELECT * FROM users");
		return $result_set;
	}

	public function find_by_id($id){
		global $database;
		$result_set = $database->query("SELECT * FROM users WHERE id={$id}");
		$found = $database->fetch_array($result_set);
		return $found;
	}

	public function find_by_sql($sql){
		global $database;
		$result_set = $database->query($sql);
		return $result_set;
	}
	public function get_all_user(){
		global $database;
		$user_set = $this->find_all();
		while($user = $database->fetch_array($user_set)){

			echo $user['username'];
		}

	}

	public function full_name(){
		return $this->first_name ." ". $this->last_name;
	}


}
?>