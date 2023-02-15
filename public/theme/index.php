<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Controllers\CategoriesController;
use App\Controllers\ProductController;
use App\Controllers\UserController;

require_once 'header.php';
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //Product
        case 'product':
            $products = new ProductController();
            $products->getAll_Product();
            break;
        case 'deletepr':
            $products  = new ProductController();
            $products->delete_Product();
            $products->getAll_Product();
            break;
            //Categories
            case 'categories':
                $category = new CategoriesController();
                $category->get_AllCateJoin();
                break;
            //User
        case 'user':
            $user = new UserController();
            $user->get_AllUser(); 
            $user->add_UderAdmin();
            break;
        case 'updateus':
            $user = new UserController();
            $user->get_OneUser();
            break;
        case 'updateuser':
            $user = new UserController();
            $user->update_User();
            $user->get_AllUser();
        break;
        case 'deleteus':
            $user = new UserController();
            $user->delete_User();
            $user->get_AllUser();
            break;
        default:
            require_once 'home.php';
    }
} else {
    require_once 'home.php';
}
require_once 'footer.php';