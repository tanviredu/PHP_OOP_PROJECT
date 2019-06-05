<?php
require_once('../includes/database.php');
require_once('../includes/session.php');
require_once('../includes/user.php');
require_once('../includes/utils.php');


class REGFORM{
    public $id;
    public $first_name;
    public $last_name;
    public $username;
    public $password;


    public function make_user(){
        global $utils;

        if(isset($_POST['register'])){
            $this->id = $_POST['id'];
            $this->first_name = $_POST['first_name'];
            $this->last_name = $_POST['last_name'];
            $this->username = $_POST['user_name'];
            $this->password = $_POST['password'];
            $user = new User();
            $user->create_user($this->id,$this->first_name,$this->last_name,$this->username,$this->password);
            $sess = new Session();
            $sess->login($this->id);
            return $utils->redirect("index.php");


        }
    }

}

$reg = new REGFORM();
$reg->make_user();

?>