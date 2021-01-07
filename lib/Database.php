<?php
 class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $dbname = DB_NAME;
    public $password = DB_PASS;

    public $link;
    public $error;

    function __construct(){
       $this->connect();
    }

    private function connect(){
        $this->link = new mysqli($this->host, $this->user, $this->password,
            $this->dbname);
        if(!$this->link){
            $this->error ="Connection fail".$this->link->connect_error;
            return false;
        }
    }

    function selectorRead($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);

        if ($result->num_rows>0){
           return $result;
        }else{
            return false;
        }
    }

    function update($query){
        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);

        if ($update_row){
           return $update_row;
        }else{
            return false;
        }
    }

    function delete($query){
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);

        if ($delete_row){
           return $delete_row;
        }else{
            return false;
        }
    }
}