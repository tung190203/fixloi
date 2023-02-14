<?php
namespace App\Controllers;

use App\Models\User;

class UserController extends User
{
    public function get_AllUser()
    {
       $result= $this->getAllUser();
       include '../../public/theme/user.php';
    }

    public function add_User()
    {
        if (isset($_POST['register']) && ($_POST['register'])) {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $comfirm_password = $_POST['comfirm_password'];
            if (strcmp($password, $comfirm_password) == 0) {
                $this->addUser($name, $email, $password);
            }
            header('Location:index.php?act=login');
        }
        require_once './public/register.php';
    }

    public function check_User()
    {
        if (isset($_POST['login']) && ($_POST['login'])) {
            $name = $_POST['username'];
            $password = $_POST['password'];
            $checkUser = $this->checkUser($name, $password);
                if (is_array($checkUser[0])) {        
                    $_SESSION['username'] = $checkUser[0];
                    if ($_SESSION['username']['role'] == 1) {
                        header('Location:./public/theme/index.php');
                    } else {
                        header('Location:index.php');
                    }
            }else{
                echo '<script>alert("Tài khoản không tồn tại")</script>';
                echo '<script>window.location = "http://localhost/Klassy_cafe/index.php?act=login";</script>';
            }
        }
        include './public/login.php';
    }
    public function check_Pass()
    {
        if (isset($_POST['submit']) && ($_POST['submit'])) {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $checkPass = $this->checkPass($name, $email, $phone);
            $password = $checkPass[0]['Password'];
            if (is_array($checkPass)) {
                echo '<script>alert("Mật khẩu của bạn là:' . $password . ' \n ")</script>';
                echo '<script>window.location = "http://localhost/Klassy_cafe/index.php?act=login";</script>';
            } else {
                echo '<script>alert("Tài khoản không tồn tại")</script>';

            }
        }
        include './public/forgot_pass.php';
    }
public function delete_User()
{
    $id = $_GET['User_id'];
    $this->deleteUser($id);
    header('Location:index.php?act=user');
}
public function get_OneUser()
{
    $id = $_GET['User_id'];
    $result=$this->getOneUser($id);
    
    include '../../public/theme/updateuser.php';
}
public function update_User()
{
    
      if(isset($_POST['Update']) &&($_POST['Update'])){
        $id = $_POST['id'];
        $name = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $newpassword = $_POST['newpassword'];
        $role=1;   
        // $this->updateUser($id,$name,$email,$address,$phone,$newpassword,$role);
        header('Location:index.php?act=product');
      }else{
        header('Location:index.php?act=user');
      }
}


}