<?php

class Database{
    private $host = "localhost";
    private $database = "web_anime";
    private $username = "root";
    private $password = "";

    public function __construct(){
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if($connection){
            echo "Database berhasil";
        }else{
            echo "Database gagal";
        }
    }
}
$database = new Database;
?>