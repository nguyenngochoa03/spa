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
        $service = $this->service->getAllService();
        $category = $this->category->getAllCategory();
        $this->render('admin.service.list', compact('service', 'category'));
    }
    public function listServiceIdCate($id){
        $category = $this->category->getAllCategory();
        $service = $this->service->getAllCateId($id);
        $this->render('admin.service.list', compact('service', 'category'));
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
                    redirect('success', 'success', 'service-list');
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
                    redirect('success', 'success', 'edit-service/'.$id);
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
