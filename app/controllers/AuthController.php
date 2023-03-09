<?php
namespace App\Controllers;
use App\Models\Auth;

class AuthController extends BaseController{
    protected $auth;
    public function __construct()
    {
        $this->auth = new Auth();
    }
    public function login(){
        $this->render('member.login');
    }
    public function logOut(){
        $title = 'Sign in';
        unset($_SESSION['auth']);
        $this->render('auth.login', compact('title'));
    }
    public function register(){
        $title = 'Register';
        $this->render('auth.register', compact('title'));
    }
    public function registerPost(){
        if (isset($_POST['signup'])){
            $errors = [];
            if (empty($_POST['fullname_rg'])){
                $errors[] = "FullName không được bỏ trống";
            }
            if (empty($_POST['email_rg'])){
                $errors[] = "Email không được bỏ trống";
            }
            if (empty($_POST['password_rg'])){
                $errors[] = "Password không được bỏ trống";
            }
            if (empty($_POST['repassword_rg'])){
                $errors[] = "Confirm Password không được bỏ trống";
            }
            if ($_POST['repassword_rg'] != $_POST['password_rg']){
                $errors[] = "Password cần trùng nhau";
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'sign-up');
            }else{
                $this->auth->register(NULL, $_POST['fullname_rg'], $_POST['email_rg'], $_POST['password_rg'], NULL, NULL, 0);
                redirect('success', 'Đăng ký thành công', 'sign-up');
            }
        }
    }
    public function forgotPass(){
        $title = "Forgot Password";
        $this->render('auth.forgot', compact('title'));
    }
    public function forgotPost(){
        $errors = [];
        if (isset($_POST['send'])){
            if (empty($_POST['email_fg'])){
                $errors[] = "Email không được bỏ trống";
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'forgot');
            }else{
                $result = $this->auth->forgotPassword($_POST['email_fg']);
                if ($result){
                    $this->auth->sendEmail('FORGOT PASSWORD', 'PASSWORD: '.$result->password, $result->email);
                    redirect('success', 'Gửi email thành công', 'sign-in');
                }else{
                    $errors[] = "Email không tồn tại trên hệ thống";
                    redirect('errors', $errors, 'forgot');
                }
            }
        }
    }
    public function pageCommingSoon(){
        $title = "Comming Soon";
        $this->render('auth.comming_soon', compact('title'));
    }
    public function page404(){
        $title = "404";
        $this->render('auth.404_page', compact('title'));
    }
}
?>
