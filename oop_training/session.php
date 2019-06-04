 <?php 

class Session{
// attribute so we can work with that with session
	private $logged_in = false;  //only private method use that
	public  $user_id;
function __constructor(){
	session_start();
	$this->check_login();
 }

//checking function
 private function check_login(){
 	if(isset($_SESSION['user_id'])){
 		$this->user_id = $_SESSION['user_id'];
 		$this->logged_in = true;
 	}else{
 		unset($this->user_id);
 		$this->logged_in = false;
 	}
}
//checking function
public function is_logged_in(){
	return $this->logged_in;
} 
// settign function
public static function login($user){
//if the database find the correct credential
// the do it

	if($user){
		$this->user_id = $_SESSION['user_id'] = $user->id;
		$this->logged_in = true;
	}

}
public static function logout($user){
//if the database find the correct credential
// the do it

	if($user){
		unset($_SESSION['user_id']);
		unset($this->user_id);
		$this->logged_in = false;



	}





}
$session = new Session(); 

 ?>
