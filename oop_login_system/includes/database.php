<?php
    require_once('config.php');

//create the database CRUD class

class MysqlDatabase{
    private $connection;

    function __constructor(){
        $this->open_connection();
    }
    //open connection
    public function open_connection(){
        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(!$this->connection){
            die("connection unsuccessful");
        }
    }
    //close connection
    public function close_connection(){
    if(isset($this->connection)){
        mysqli_close($this->connection);
        unset($this->connection);
        }
    }
    private function confirm_query($result){
        if(!$result){
            die("query failed");
        }
    }

    //query sql
    public function query($sql){
        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $result = mysqli_query($this->connection,$sql);
        $this->confirm_query($result);
        return $result;
    }

    public function fetch_array($result_set){
        //to get the full data use loop
        return mysqli_fetch_array($result_set);
    }

    public function affected_row(){
        return mysqli_affected_rows($this->connection);
    }

}
$database = new MysqlDatabase();


?>