<?php
namespace App\Models;
require_once 'BaseModel.php';
use BaseModel;
class User extends BaseModel{
    public function getAllUser(){
        $sql = "SELECT * FROM User";
        return $this->getData($sql);
    }
    public function getOneUser($id){
        $sql ="SELECT * FROM User WHERE User_id =".$id;
        return $this->getData($sql);
    }
    public function addUser($name,$email,$password){
        $sql = "INSERT INTO User VALUES(null,'$name','$email',null,null,'$password',0)";
        $this->getData($sql);
    }
    public function addUserAdmin($name,$email,$address,$phone,$password,$role){
        $sql = "INSERT INTO User VALUES(null,'$name','$email',$address,$phone,'$password',$role)";
        $this->getData($sql);
    }
    public function deleteUser($id){
        $sql = "DELETE FROM User WHERE User_id=".$id;
        $this->getData($sql);
    }
    public function updateUser($id,$name,$email,$address,$phone,$password,$role){
        $sql = "UPDATE `User` SET `Name`='$name',`Email`='$email',`Address`='$address',`Phone`='$phone',`Password`='$password',`role`= $role WHERE User_id=".$id;
        $this->getData($sql);
    }
    public function checkUser($name,$password){
        $sql = "SELECT * FROM User WHERE Name='$name'";
        $sql .= " AND Password ='$password'";
        return $this->getData($sql);
        // 
    }
    public function checkPass($name,$email,$phone){
        $sql = "SELECT * FROM User WHERE Name = '$name' ";
        $sql .=" AND Email='$email'";
        $sql .=" AND Phone =$phone ";
        return $this->getData($sql);
    }
}


