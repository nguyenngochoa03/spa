<?php
namespace App\Controllers;
use App\Models\Users;
class UsersController extends BaseController{
  protected $user;
  public function __construct()
  {
      $this->user = new Users;
  }
  public function getdangnhap(){
      if(isset($_POST['dangnhap'])){
          $email = $_POST['email'];
        $password = $_POST['password'];
        $checkuser = check_user($email, $password);
        if (is_array($checkuser)){
            $_SESSION['account'] = $checkuser;
            header('location: index.php');
        }else{
            $thongbao = 'Tài khoản không tồn tại';
        }
    }
      }
  }
}
?>
