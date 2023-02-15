<?php
const DBNAME = "Klassy_cafe";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "localhost";
class BaseModel{
    public function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
    public $conn;
    //hàm khởi tạo
    public function __construct()
    {
        //set connect
        $this->conn = $this->getConnect();
    }
    public function getData($query, $getAll = true)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }  
}
