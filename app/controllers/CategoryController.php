<?php
namespace App\Controllers;
use App\Models\Category;

class CategoryController extends BaseController{
    protected $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function listCategory(){
        $title = "CATEGORY";
        $cate = $this->category->getAllCategory();
        $this->render('category.list', compact('title', 'cate'));
    }
    public function addCategory(){
        $title = "CATEGORY";
        $this->render('category.add', compact('title'));
    }
    public function addCategoryPost(){
        $title = "CATEGORY";
        $errors = [];
        if (isset($_POST['send'])){
            if (empty($_POST['name_ct'])){
                $errors[] = "Name Cate không được bỏ trống";
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'add-category');
            }else{
                $result = $this->category->addCategory(NULL, $_POST['name_ct']);
                if ($result){
                    redirect('success', 'Thêm mới thành công', 'add-category');
                }
            }
        }
    }
    public function editCategory($id){
        $title = "CATEGORY";
        $cate = $this->category->getOneCategory($id);
        $this->render('category.edit', compact('title', 'cate'));
    }
    public function updateCategoryPost($id){
        $title = "CATEGORY";
        $errors = [];
        if (isset($_POST['update'])){
            if (empty($_POST['name_ct'])){
                $errors[] = "Name Cate không được bỏ trống";
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'edit-category/'.$id);
            }else{
                $result = $this->category->updateCategory($id, $_POST['name_ct']);
                if ($result){
                    redirect('success', 'Cập nhật thành công', 'edit-category/'.$id);
                }
            }
        }
    }
    public function deleteCategory($id){
        $title = "CATEGORY";
        if ($id > 0){
            $this->category->deleteCategory($id);
            $cate = $this->category->getAllCategory();
            $this->render('category.list', compact('title', 'cate'));
        }
    }

}
?>
