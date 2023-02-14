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

}
?>