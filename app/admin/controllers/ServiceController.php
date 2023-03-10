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
//        var_dump($service);
        $this->render('admin.service.list', compact('service', 'category'));
    }
    public function addService(){
//        if ()
    }
}
?>
