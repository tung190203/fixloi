<?php
namespace  App\Controllers;
use App\Models\Product;
class ProductController extends Product{
    public function getAll_Product(){
     $result=$this->getAllProduct();
     include_once '../../public/theme/product.php';
    }
}
?>