<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Service;

class ServiceController extends BaseController{
    protected $service;
    protected $category;
    public function __construct()
    {
        $this->service = new Service();
        $this->category = new Category();
    }
    public function listService(){
        $result = $this->service->countColumn();
        $number = 0;
        if ($result != null && count($result) > 0){
            $number = $result[0]->number;
        }
        $pages = ceil($number / 8);
        $current_page = 1;
        if (isset($_GET['page'])){
            $current_page = $_GET['page'];
        }
        $index = ($current_page - 1) * 8;
        $category = $this->category->getAllCategory();
        $service = $this->service->getAllLimit($index);
        $this->render('admin.service.list', compact('service', 'category', 'pages'));
    }
    public function listServiceIdCate($id){
        $result = $this->service->countColumnId($id, 'id_cate');
        $number = 0;
        if ($result != null && count($result) > 0){
            $number = $result[0]->number;
        }
        $pages = ceil($number / 8);
        $current_page = 1;
        if (isset($_GET['page'])){
            $current_page = $_GET['page'];
        }
        $index = ($current_page - 1) * 8;
        $category = $this->category->getAllCategory();
        $service = $this->service->getAllLimitCateId($id, $index);
        $this->render('admin.service.list', compact('service', 'category','pages'));
    }
    public function addServicePost(){
        if (isset($_POST['add-new'])){
            $errors = [];
            if (empty($_POST['namesv'])){
                $errors[] = 'Bạn cần nhập tên dịch vụ';
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'service-list');
            }else{
                $result = $this->service->addService(NULL, $_POST['catesv'], $_POST['namesv']);
                if ($result){
                    redirect('success', 'Thêm mới thành công', 'service-list');
                }
            }
        }
    }
    public function editService($id){
        $category = $this->category->getAllCategory();
        $service = $this->service->getDetailService($id);
        $this->render('admin.service.edit', compact('service', 'category'));
    }
    public function updateServicePost($id){
        if (isset($_POST['btn-sm'])){
            $errors = [];
            if (empty($_POST['namesv'])){
                $errors[] = 'Bạn cần nhập tên dịch vụ';
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'edit-service/'.$id);
            }else{
                $result = $this->service->updateService($id, $_POST['catesv'], $_POST['namesv']);
                if ($result){
                    redirect('success', 'Cập nhật thành công', 'edit-service/'.$id);
                }
            }
        }
    }
    public function deteleService($id){
        $this->service->deleteService($id);
        header('location: '.route('service-list'));
    }
}
?>
