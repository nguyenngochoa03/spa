<?php
namespace App\Controllers;

use App\Models\Users;


class UsersController extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new Users;
    }
    public function signup()
    {
        $err = [];
        if (isset($_POST['btn-signup'])) {
            if (empty($_POST['username'])) {
                $err["name"] = "Bạn chưa nhập Name";
            }
            if (empty($_POST['password'])) {
                $err["password"] = "Bạn chưa nhập Password";
            }
            if (empty($_POST['email'])) {
                $err["sdt"] = "Bạn chưa nhập sdt";
            }
            if (empty($_POST['email'])) {
                $err["email"] = "Bạn chưa nhập Email";
            }
            if (count($err) > 0) {
                $err[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            } else {
                $this->user->signup($_POST['username'], $_POST['password'], $_POST['sdt'], $_POST['email']);
                redirect('success', 'Đăng ký thành công', '');
            }
        }
        $this->render('users.signup', compact('err'));
    }

    public function index()
    {
        $err = [];
        if (isset($_SESSION["login"])) {
            if ($_SESSION["login"]) {
                route("dashboard");
            }
        }

        if (isset($_POST["btn-login"])) {
            $email = $this->user->index();
            if (empty($_POST['email'])) {
                $err["email"] = "Bạn chưa nhập Email";
            }
            if (empty($_POST['password'])) {
                $err["password"] = "Bạn chưa nhập Password";
            }
            if (count($err) == 0) {
                foreach ($email as $item => $value) {

                    if ($_POST["email"] == $value->email && $_POST["password"] == $value->password) {
                        $_SESSION["username"] = $value->name;
                        $_SESSION["login"] = true;
                        if (isset($_POST["remember"])) {
                            setcookie("email", $_POST["email"], time() + 86400, '/');
                            setcookie("pass", $_POST["password"], time() + 86400, '/');
                        }
                        if($value->role_id==0){
                            header('location:./admin');
                            route('hello');
                            redirect('success','Đăng nhập thành công','admin');
                        }
                        else{
                            echo "Đây là trang Client";
                            die();
                        }

                    } else {
                        echo "<script>alert('Dữ liệu nhập k chính xác')</script>";
                    }
                }
            }

        }
        $this->render("users.signin", compact("err"));
    }

    public function dashboard()

    {
        if ($_SESSION["login"] == false) {
            route("");
        }
       return $this->render('admin.home.adminIndex');
    }
}

?>
