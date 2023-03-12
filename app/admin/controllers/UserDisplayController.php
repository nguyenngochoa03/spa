<?php

namespace App\admin\controllers;

use App\Controllers\BaseController;
use App\models\contactUs;
use App\models\insta;
class UserDisplayController extends BaseController
{
    public function index() {
        $allData = contactUs::GetAll();
        $this->render('admin.UserDisplay.contact.contactUs',compact("allData"));
    }

    public function edit($id){
        $oneData = contactUs::findOne($id);
        $this->render('admin.UserDisplay.contact.editContact',compact('oneData'));
    }

    public function update($id){
        if(isset($_POST['sb-contact'])){
            $logo = $_POST['logo'];
            $content = $_POST['content'];
            $meta = $_POST['desribi'];
            $errors = [];
            if(empty($_POST['logo'])){
                $errors[] = 'Bạn cần nhập logo';
            }
            if(empty($_POST['content'])){
                $errors[] = 'Bạn cần nhập tên nội dung';
            }
            if(empty($_POST['desribi'])){
                $errors[] = 'Bạn cần nhập tên mô tả';
            }
            if(count($errors) > 0){
                redirect('errors', $errors, 'edit-contact/'.$id);
            }else {
                $result = contactUs::updatefind($id,[
                    "logo" => $logo,
                    "content" => $content,
                    "meta" => $meta
                ]);

                if ($result){
                    redirect('success', "Cập nhật thành công!", 'edit-contact/'.$id);
                }
            }
        }
    }


    public function insta(){
        $allData = insta::GetAll();
        $this->render('admin.UserDisplay.insta.insta',compact('allData'));
    }

    public function editInsta($id) {
        $oneData = insta::findOne($id);
        $this->render('admin.UserDisplay.insta.edit_insta',compact('oneData'));
    }

    public function updateInsta($id){
        if(isset($_POST['sb-insta'])){
            $image_old = insta::findOne($id)->link;
            $target_dir = "./public/upload/insta/";
            $nameimage = time() . $_FILES["upload-avatar-input"]["name"];
            $target_file = $target_dir . $nameimage;
            $errors = [];
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if (file_exists($target_file)) {
                $errors[] = "Sorry, file already exists.";
            }

// Check file size
            if ($_FILES["upload-avatar-input"]["size"] > 500000) {
                $errors[]= "Sorry, your file is too large.";
            }

// Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }

            if(count($errors) > 0){
                redirect('errors', $errors, 'edit-insta/'.$id);
            }else {
                if (move_uploaded_file($_FILES["upload-avatar-input"]["tmp_name"], $target_file)) {
                    $result = insta::updatefind($id,[
                        "link" => $nameimage,
                    ]);

                    if (file_exists('./public/upload/insta/'.$image_old)) {
                        unlink('./public/upload/insta/'.$image_old);
                    }
                }

                if ($result){
                    redirect('success', "Cập nhật thành công!", 'edit-insta/'.$id);
                }
            }

        }
    }
}