<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\Models\Users;
class UsersControlller extends BaseController{
    protected $user;
    public function __construct()
    {
        $this->user= new Users();
    }
    public function showUser(){
        $users= $this->user->showUser();
        $this->render("users.user",compact("users"));
    }
    public function addUser(){
        if(isset($_POST["btn-adduser"])){
            $err=[];
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
            if (empty($_POST['total_price'])) {
                $err["total_price"] = "Bạn chưa nhập total_price";
            }
            if (empty($_POST['create_date'])) {
                $err["create_date	"] = "Bạn chưa nhập create_date	";
            }
            if (empty($_POST['update_date'])) {
                $err["update_date"] = "Bạn chưa nhập update_date";
            }
            if (empty($_FILES['image']['name'])) {
                $err[] = "Image không được bỏ trống";
            }
            $maxsize = 2000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF'];
            $target_dir = './public/upload/';
            $target_file = $target_dir . basename($_FILES['image']["name"]);
            if ($_FILES['image']['size'] > $maxsize) {
                $err[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
            }
            if (in_array($target_file, $allowType)) {
                $err[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            }else{
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                $this->user->addUser($_POST['username'],$_POST['password'],$_POST['sdt'],$_POST['email'],$_POST['image'],$_POST['total_price'],1,$_POST['create_date'],$_POST['update_date'] );
                redirect("success","Thêm Thành Công","user");
            }

        }
        $this->render("users.add");
    }
    public function deleteUser($id){
        if(isset($id)){
            $this->user->deleteUser($id);
            redirect("success","Xóa Thành Công","user");
        }
    }
    public function updateUser($id){
        $showUpdate= $this->user->showUserUpdate($id);
        if(isset($_POST["btn-updateuser"])){
             $err=[];
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
            if (empty($_POST['total_price'])) {
                $err["total_price"] = "Bạn chưa nhập total_price";
            }
            if (empty($_POST['create_date'])) {
                $err["create_date	"] = "Bạn chưa nhập create_date	";
            }
            if (empty($_POST['update_date'])) {
                $err["update_date"] = "Bạn chưa nhập update_date";
            }
            if (empty($_FILES['image']['name'])) {
                $err[] = "Image không được bỏ trống";
            }
            $maxsize = 2000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF'];
            $target_dir = './public/upload/';
            $target_file = $target_dir . basename($_FILES['image']["name"]);
            if ($_FILES['image']['size'] > $maxsize) {
                $err[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
            }
            if (in_array($target_file, $allowType)) {
                $err[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            }else{
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                $this->user->updateUser($id,$_POST['username'],$_POST['password'],$_POST['sdt'],$_POST['email'],$_POST['image'],$_POST['total_price'],1,$_POST['create_date'],$_POST['update_date']);
                redirect("success","Cập Nhật Thành Công","user");
            }

        }
        $this->render('users.updateusers',compact('showUpdate'));
    }
}
?>
