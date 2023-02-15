<?php
namespace App\Models;

use BaseModel;

require_once 'BaseModel.php';
class Categories extends BaseModel{
public function getAllCate(){
    $sql = "SELECT * FROM Categories";
    return $this->getData($sql);
}
public function getAllCateJoin(){
    $sql = "SELECT Categories.Cate_id,Cate_name,Categories.Description,COUNT(Products.Cate_id) as Cproduct FROM Categories INNER JOIN Products ON Categories.Cate_id  = Products.Cate_id";
    return $this->getData($sql);
}
}
?>