<?php
require("database_credentials.php");

class Database{
    //properties
    public $db = null;
    public $results = null;

    public function connect(){
        $this->db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

        //test connection
        if(mysqli_connect_error()){
            return false;
        }
        else{
            return true;
        }
    }

    //run query
    public function run($query){
        if(!$this->connect()){
            return false;
        }
        elseif($this->db == null){
            return false;
        }

        //run query
        $this->results=mysqli_query(this->db, $query);
        if($this->results == false){
            return false;
        }
        else{
            return true;
        }
    }

    public function fetch(){
        //check if result is set
        if($this->results == null){
            return false;
        }
        elseif($this->results == false){
            return false;
        }

        return mysqli_fetch_assoc($this->results);
    }
}      
