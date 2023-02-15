<?php
namespace App\Models;
require_once 'BaseModel.php';
use BaseModel;

class Product extends BaseModel
{
    public function getAllProduct()
    {
       $sql = "SELECT * FROM Products ";
       return $this->getData($sql);
    }
    public function getOneProduct($id){
        $sql  ="SELECT * FROM Products WHERE id=".$id;
        return $this->getData($sql);
    }
    public function topProduct(){
        $sql ="SELECT * FROM Products ORDER BY Pr_id DESC LIMIT 3";
        return $this->getData($sql);
    }
    public function addProduct($namepr,$desc,$image,$cate_id,$price){
        $sql ="INSERT INTO Products VALUES($namepr,$desc,$image,$cate_id,$price) ";
        $this->getData($sql);
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM Products WHERE Pr_id=".$id;
        $this->getData($sql);
    }
    public function updateProduct($id,$namepr,$desc,$image,$cate_id,$price){
        $sql  ="UPDATE `Products` SET `Name_pr`='$namepr',`Description`='$desc',`Image`='$image',`Cate_id`='$cate_id',`Price`='$price'";
        $this->getData($sql);

    }
}
?>