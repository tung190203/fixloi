<?php
namespace App\Controllers;
use App\Models\Categories;
class CategoriesController extends Categories{
 public function get_AllCate(){
    $result = $this->getAllCate();
 }   
 public function get_AllCateJoin(){
    $result = $this->getAllCateJoin();
    include '../../public/theme/categories.php';
 }
}
?>