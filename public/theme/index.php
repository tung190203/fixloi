<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Controllers\ProductController;
use App\Controllers\UserController;

require_once 'header.php';
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            $products = new ProductController();
            $products->getAll_Product();
            break;
        case 'user':
            $user = new UserController();
            $user->get_AllUser(); 
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