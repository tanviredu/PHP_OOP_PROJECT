<?php
    require_once('database.php');

    class Utils{

        public function redirect($page){
            return header("Location: $page");
        }

        public function primary_validate($username,$password){
            if(!($username && $password)){
                return redirect('404.php');
            }

        }

        public function page_not_found(){
            return redirect("404.php");
        }
    }
$utils = new Utils();
?>