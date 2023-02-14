<?php
session_start();
ob_start();
require_once __DIR__ . '/vendor/autoload.php';
use App\Controllers\UserController;

require_once 'public/header.php';
if (isset($_GET['act']) && ($_GET['act'] != "")) {
  $act = $_GET['act'];
  switch ($act) {
    case 'login':    
      $user = new UserController();
      $user->check_User();
      break;
      case 'logout':
       session_unset();
       header('Location: index.php');
        break;
    case 'register':
      $user = new UserController();
      $user->add_User();
      break;
      case 'forgot':
        $user  = new UserController();
        $user->check_Pass();
        break;
      case '':

        break;
    default:
      require_once 'public/home.php';
  }
} else {
  require 'public/home.php';
}
require_once 'public/footer.php';