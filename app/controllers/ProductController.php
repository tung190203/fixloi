<?php
namespace  App\Controllers;
use App\Models\Product;
class ProductController extends Product{
    public function getAll_Product(){
     $result=$this->getAllProduct();
     include_once '../../public/theme/product.php';
    }
    public function add_Product(){

    }
    public function delete_Product(){
$id = $_GET['Cate_id'];
$this->deleteProduct($id);
header('Location:index.php?act=product');
    }
    public function update_Product(){

    }
}
?>