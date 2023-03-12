<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\Models\BlogService;
use App\models\insta;
use App\Models\Service;

class BlogServiceController extends BaseController
{
    protected $blogService;
    protected $service;

    public function __construct()
    {
        $this->blogService = new BlogService();
        $this->service = new Service();
    }

    public function listBlogSv()
    {
        $blog = BlogService::GetAll();
        $service = $this->service->getAllService();
        $this->render('admin.blogService.list', compact('blog', 'service'));
    }
    public function listBlogSvIdCate($id){
        $blog = BlogService::findAllColumn($id, 'id_service');
//        var_dump($blog);
//        die();
        $service = $this->service->getAllService();
        $this->render('admin.blogService.list', compact('blog', 'service'));
    }

    public function addBlogSv()
    {
        $service = $this->service->getAllService();
        $this->render('admin.blogService.add', compact('service'));
    }

    public function addBlogSvPost()
    {
        if (isset($_POST['sb-blog'])) {
            $errors = [];
            if (empty($_POST['titlebl'])) {
                $errors[] = "Bạn cần nhập tiêu đề";
            }
            if (empty($_POST['contentbl'])) {
                $errors[] = "Bạn cần nhập content";
            }
            if (isset($_FILES['upload']['name'])) {
                $target_dir = "./public/upload/blogSv/";
                $name = time() . $_FILES["upload"]["name"];
                $target_file = $target_dir . $name;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (file_exists($target_file)) {
                    $errors[] = "Sorry, file already exists.";
                }
// Check file size
                if ($_FILES["upload"]["size"] > 500000) {
                    $errors[] = "Sorry, your file is too large.";
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }

                if (count($errors) > 0) {
                    redirect('errors', $errors, 'add-blog-service');
                } else {
                    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                        date_default_timezone_set("Asia/Ho_Chi_Minh");
                        $date = date("Y-m-d h:i:sa");
                        $result = BlogService::addItems([
                            "id" => NULL,
                            "id_service" => $_POST['serbl'],
                            "content" => $_POST['contentbl'],
                            "image" => $name,
                            "title" => $_POST['titlebl'],
                            "create_date" => $date,
                            "create_update" => NULL
                        ]);
                    }
                    if ($result) {
                        redirect('success', "Cập nhật thành công!", 'add-blog-service');
                    }
                }
            }
        }
    }

    public function editBlogSv($id){
        $blog = BlogService::findOne($id);
        $service = $this->service->getAllService();
        $this->render('admin.blogService.edit', compact('blog', 'service'));
    }
    public function updateBlogSvPost($id){
        if (isset($_POST['sb-blog'])) {
            $errors = [];
            if (empty($_POST['titlebl'])) {
                $errors[] = "Bạn cần nhập tiêu đề";
            }
            if (empty($_POST['contentbl'])) {
                $errors[] = "Bạn cần nhập content";
            }
            if ($_FILES['upload']['name'] != '') {
                $target_dir = "./public/upload/blogSv/";
                $name = time() . $_FILES["upload"]["name"];
                $target_file = $target_dir . $name;
                $image_old = BlogService::findOne($id)->image;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (file_exists($target_file)) {
                    $errors[] = "Sorry, file already exists.";
                }
// Check file size
                if ($_FILES["upload"]["size"] > 500000) {
                    $errors[] = "Sorry, your file is too large.";
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }

                if (count($errors) > 0) {
                    redirect('errors', $errors, 'edit-blog-service/' . $id);
                } else {
                    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                        date_default_timezone_set("Asia/Ho_Chi_Minh");
                        $date = date("Y-m-d h:i:sa");
                        $result = BlogService::updatefind($id,[
                            "id_service" => $_POST['serbl'],
                            "content" => $_POST['contentbl'],
                            "image" => $name,
                            "title" => $_POST['titlebl'],
                            "create_update" => $date
                        ]);
                        if (file_exists('./public/upload/blogSv/'.$image_old)) {
                            unlink('./public/upload/blogSv/'.$image_old);
                        }
                        if ($result) {
                            redirect('success', "Cập nhật thành công!", 'edit-blog-service/' . $id);
                        }
                    }
                }
            }else{
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'edit-blog-service/'.$id);
                }else{
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $date = date("Y-m-d h:i:sa");
                    $result = BlogService::updatefind($id,[
                        "id_service" => $_POST['serbl'],
                        "content" => $_POST['contentbl'],
                        "title" => $_POST['titlebl'],
                        "create_update" => $date
                    ]);
                    if ($result) {
                        redirect('success', "Cập nhật thành công", 'edit-blog-service/' . $id);
                    }
                }
            }
        }
    }
    public function deleteBlogSv($id){
        BlogService::delete($id);
        header('location: '.route('service-blog'));
    }
}
?>