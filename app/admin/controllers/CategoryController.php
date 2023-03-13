<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\Models\Category;

class CategoryController extends BaseController{
    protected $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function tableCategory(){
        $result = $this->category->countColumn();
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
        $category = $this->category->getAllLimit($index);
        $this->render('admin.category.list', compact('category', 'pages'));
    }
    public function addCategoryPost(){
        if (isset($_POST['add-new'])){
            $errors = [];
            if (empty($_POST['namect'])){
                $errors[] = 'Bạn cần nhập tên danh mục';
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'service-category');
            }else{
                $result = $this->category->addCategory(NULL, $_POST['namect']);
                if ($result){
                    redirect('success', 'Thêm mới thành công', 'service-category');
                }
            }
        }
    }
    public function editCategory($id){
        $category = $this->category->getOneCategory($id);
        $this->render('admin.category.edit', compact('category'));
    }
    public function updateCategoryPost($id){
        if (isset($_POST['btn-sm'])) {
            $errors = [];
            if(empty($_POST['namect'])){
                $errors = 'Bạn cần nhập tên danh mục';
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'edit-category/'.$id);
            }else{
                $result = $this->category->updateCategory($id, $_POST['namect']);
                if ($result){
                    redirect('success', 'Cập nhật thành công', 'edit-category/'.$id);
                }
            }
        }
    }

    public function deteleCategory($id){
        $this->category->deleteCategory($id);
        header('location: '.route('service-category'));
    }
}
?>
