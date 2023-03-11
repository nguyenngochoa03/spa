<?php

namespace App\admin\controllers;

use App\Controllers\BaseController;
use App\models\contactUs;
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
//
//            contactUs::updatefind($id,[
//                "logo" => "hello world",
//                "content" => $content,
//                "meta" => $meta
//            ]);



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
}