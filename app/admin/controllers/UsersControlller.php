<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\Models\Users;
class UsersControlller extends BaseController{
    protected $user;
    public function __construct()
    {
        $this->user= new User();
    }
    public function showUser(){
        $users= $this->user->showUser();
        $this->render("users.users",compact("users"));
    }
    public function addUser(){
        if(isset($_POST["btn-adduser"])){
            $err=[];
            $this->user->addUser($_POST["email"],$_POST["pass"],$_POST["username"] );
            redirect("success","Thêm Thành Công","users");
        }
        $this->render("users.add");
    }
    public function deleteUser($id){
        if(isset($id)){
            $this->user->deleteUser($id);
            redirect("success","Xóa Thành Công","users");
        }
    }
    public function updateUser($id){
        $showUpdate= $this->user->showUserUpdate($id);
        if(isset($_POST["btn-updateuser"])){
            $this->user->updateUser($id,$_POST["email"],$_POST["pass"],$_POST["username"]);
            redirect("success","Cập Nhật Thành Công","users");
        }
        $this->render('user.updateuser',compact('showUpdate'));
    }
}
?>
