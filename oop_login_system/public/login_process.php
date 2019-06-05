<?php
require_once('../includes/database.php');
require_once('../includes/session.php');
require_once('../includes/user.php');
require_once('../includes/utils.php');


class REGFORM{

    public $username;
    public $password;


    public function make_user(){
        global $utils;
        global $database;
        if(isset($_POST['login'])){
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            echo $this->username;
            echo $this->password;
            $user = new User();
            $result = $user->get_user_by_username_password($this->username,$this->password);
            if($result){
                $utils->redirect('index.php');
            }

        }
    }

}

$reg = new REGFORM();
$reg->make_user();

?>