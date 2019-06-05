<?php
    class Session{
        private $logged_in; //this is a flag
        public $user_id;

               function __constructor(){
                   session_start();
                   $this->check_login();
               }
        public function login($id){ //user is  an array we instantiate
                $this->user_id = $_SESSION['user_id'] = $id;
                $this->logged_in = true;

            }



        public function logout(){
            unset($_SESSION['user_id']);
            unset($this->user_id);
            $this->logged_in = false;
        }
        public function check_login(){
            if(isset($_SESSION['user_id'])){
                $this->user_id = $_SESSION['user_id'];
                $this->logged_in = true;
            }else{
                unset($this->user_id);
                $this->logged_in = false;
            }

        }
        public function is_logged_in(){

            return $this->logged_in;
        }
    }


?>