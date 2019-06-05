<?php
    require_once("database.php");

    class User{
    // instantiate all the different user
        //used by the get_user_by_id
 /*   public function instantiate($array){
        $object = new self;
        $object->id =$array['id'];
        $object->username =$array['username'];
        $object->password =$array['password'];
        $object->fname =$array['first_name'];
        $object->lname =$array['last_name'];
        return $object;

        } */


       public function get_all_user(){
           global $database;
           $result_set = $database->query("SELECT * FROM users");
           while($user = $database->fetch_array($result_set)){
               echo $user['first_name']. " ".$user['first_name'];
           }


       }

       public function create_user($id,$first_name,$last_name,$username,$password){
            global $database;
            $sql = "INSERT INTO users (id, first_name, last_name,username,password) VALUES ('$id', '$first_name', '$last_name','$username','$password')";
            $result = $database->query($sql);
           return $result;
       }

       public function get_user_by_id($id){
           global $database;
           $result = $database->query("SELECT * FROM users WHERE id={$id}");
           return $result;//array of value

       }

        public function get_user_by_username_password($username,$password){
            global $database;
            $result = $database->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
            return $result;//array of value

        }
    }


?>