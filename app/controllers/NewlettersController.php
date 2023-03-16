<?php
namespace App\controllers;

use App\models\Newletters;
use App\models\questions;

class NewlettersController extends BaseController
{
    public function index()
    {
        $allData = newLetters::GetAll();
        $this->render('newletters.listNewletters', compact("allData"));
    }
    public function addNewletters(){

        $this->render('newletters.addNewletters');
    }

    public function addNewlettersPost()
    {
        if (isset($_POST['sp-newletters'])) {
            $content = $_POST['content'];
            $meta = $_POST['desribi'];
            $create_date = $_POST['create_date'];

            $statuts = $_POST['select-search'];
            $errors = [];

            if (empty($_POST['content'])) {
                $errors[] = 'Bạn cần nhập tên nội dung';
            }
            if (empty($_POST['desribi'])) {
                $errors[] = 'Bạn cần nhập tên mô tả';
            }
            if (isset($_FILES['logo']['name'])) {
                $target_dir = "./public/upload/insta/";
                $name = time() . $_FILES["logo"]["name"];
                $target_file = $target_dir . $name;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (file_exists($target_file)) {
                    $errors[] = "Sorry, file already exists.";
                }
// Check file size
                if ($_FILES["logo"]["size"] > 500000) {
                    $errors[] = "Sorry, your file is too large.";
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'add-newletters');
                } else {

                    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                        $create_date = date('Y-m-d H:i a');
                        $result = newLetters::addItems(
                            [
                                "id" => NULL,
                                "logo" => $name,
                                "content" => $content,
                                "meta" => $meta,
                                "statuts " => $statuts,
                                "create_date" => $create_date
                            ]
                        );
                        if ($result) {
                            redirect('success', "Thêm thành công!", 'add-newletters');
                        }
                    }
                }
            }
        }
    }


    public function edit($id)
    {
        $oneData = newLetters::findOne($id);
        $this->render('newletters.editNewletters', compact('oneData'));
    }

    public function update($id)
    {
        if (isset($_POST['sb-newletters'])) {

            $content = $_POST['content'];
            $meta = $_POST['desribi'];
            $create_date = $_POST['create_date'];
            $allData = newLetters::GetAll();
            $errors = [];
            $statuts = $_POST['select-search'];

            if($statuts == 1){
                foreach ($allData as $value){
                    if ($value->statuts  == 1){
                        $errors[] = 'Bạn đã có 1 bài đăng để chế độ publish';
                    }
                }
            }

            if (empty($_FILES['logo'])) {
                $errors[] = 'Bạn cần nhập logo';
            }
            if (empty($_POST['content'])) {
                $errors[] = 'Bạn cần nhập tên nội dung';
            }
            if (empty($_POST['desribi'])) {
                $errors[] = 'Bạn cần nhập tên mô tả';
            }
            if ($_FILES['logo']['name'] != '') {
                $target_dir = "./public/upload/insta/";
                $name = time() . $_FILES["logo"]["name"];
                $target_file = $target_dir . $name;
                $image_old = newLetters::findOne($id)->logo;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (file_exists($target_file)) {
                    $errors[] = "Sorry, file already exists.";
                }
// Check file size
                if ($_FILES["logo"]["size"] > 500000) {
                    $errors[] = "Sorry, your file is too large.";
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'edit-newletters/' . $id);
                } else {
                    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file))  {
                        $create_date = date('Y-m-d H:i a');
                        $result = newLetters::updatefind($id, [
                            "logo" =>$name,
                            "content" => $content,
                            "meta" => $meta,
                            "statuts " => $statuts,
                            "create_date" => $create_date
                        ]);

                        if ($result) {
                            redirect('success', "Cập nhật thành công!", 'edit-newletters/' . $id);
                        }
                    }
                }
            }else{
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'edit-newletters/' . $id);
                } else {
                    $create_date = date('Y-m-d H:i a');
                    $result = newLetters::updatefind($id, [
                            "content" => $content,
                            "meta" => $meta,
                            "statuts " => $statuts,
                            "create_date" => $create_date
                        ]);

                        if ($result) {
                            redirect('success', "Cập nhật thành công!", 'edit-newletters/' . $id);
                        }
                }
            }
        }
    }
    public function deleteNewletters($id){
        newLetters::delete($id);
        $_SESSION['success'] = "Xóa thành công!";
        header('location: '.route('newletters'));
    }
}
?>
