<?php

class Database{

    private $host = "localhost";//servidor local ou remoto
    private $user = "root";
    private $password = "";
    private $database = "cinema";//Nome do banco de dados

    //Método construtor
    public function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if($this->conn->connect_error){
            die("Erro de conexão: " .$this->conn->connect_error);
        }
    }//fim do método construtor

    public function query($sql){
        return $this->conn->query($sql);
    }

    public function close(){
        $this->conn->close();
    }
}