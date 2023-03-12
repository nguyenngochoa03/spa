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
        $category = $this->category->getAllCategory();
        $this->render('admin.category.list', compact('category'));
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
