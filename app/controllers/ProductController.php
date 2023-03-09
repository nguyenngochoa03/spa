<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
class ProductController extends BaseController
{
    protected $product;
    protected $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function listProduct()
    {
        $title = "PRODUCT";
        $products = $this->product->getAllProduct();
        $this->render('product.list', compact('title', 'products'));

    }
    public function addProduct(){
        $title = "PRODUCT";
        $cate = $this->category->getAllCategory();
        $this->render('product.add', compact('title', 'cate'));
    }
    public function addProductPost(){
        $erorrs = [];
        if (isset($_POST['send'])){
            if (empty($_POST['name_pd'])){
                $erorrs[] = "Name không được bỏ trống";
            }
            if (empty($_POST['price_pd'])){
                $erorrs[] = "Price không được bỏ trống";
            }
            if (empty($_POST['category_pd'])){
                $erorrs[] = "Category không được bỏ trống";
            }
            if (empty($_POST['quantity_pd'])){
                $erorrs[] = "Quantity không được bỏ trống";
            }
            if (empty($_FILES['image_pd']['name'])){
                $erorrs[] = "Image không được bỏ trống";
            }
            $maxsize = 2000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF'];
            $target_dir = './public/upload/';
            $target_file = $target_dir . basename($_FILES['image_pd']["name"]);
            if ($_FILES['image_pd']['size'] > $maxsize) {
                $erorrs[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
            }
            if (in_array($target_file, $allowType)) {
                $erorrs[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            }
            if (count($erorrs) > 0){
                redirect('errors', $erorrs, 'add-product');
            }else{
                move_uploaded_file($_FILES['image_pd']['tmp_name'], $target_file);
                $result = $this->product->addProduct(NULL, $_POST['name_pd'],$_POST['quantity_pd'], $_POST['price_pd'], $_FILES['image_pd']['name'], $_POST['category_pd'], '1/1/2023');
                if ($result){
                    redirect('success', 'Thêm mới thành công', 'add-product');
                }
            }
        }

    }
    public function editProduct($id){
        $title = "DETAIL PRODUCT";
        $product = $this->product->getOneProduct($id);
        $cate = $this->category->getAllCategory();
        $this->render('product.edit', compact('title', 'product', 'cate'));
    }
    public function updateProductPost($id){
        $erorrs = [];
        if (isset($_POST['update'])){
            if (empty($_POST['name_pd'])){
                $erorrs[] = "Name không được bỏ trống";
            }
            if (empty($_POST['price_pd'])){
                $erorrs[] = "Price không được bỏ trống";
            }
            if (empty($_POST['category_pd'])){
                $erorrs[] = "Category không được bỏ trống";
            }
            if (empty($_POST['quantity_pd'])){
                $erorrs[] = "Quantity không được bỏ trống";
            }
            $maxsize = 2000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF'];
            $target_dir = './public/upload/';
            $target_file = $target_dir . basename($_FILES['image_pd']["name"]);
            if ($_FILES['image_pd']['size'] > $maxsize) {
                $erorrs[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
            }
            if (in_array($target_file, $allowType)) {
                $erorrs[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            }
            if (count($erorrs) > 0){
                redirect('errors', $erorrs, 'edit-product/'.$id);
            }else{
                move_uploaded_file($_FILES['image_pd']['tmp_name'], $target_file);
                $result = $this->product->updateProduct($id, $_POST['name_pd'], $_POST['quantity_pd'], $_POST['price_pd'], $_FILES['image_pd']['name'], $_POST['category_pd']);
                if ($result){
                    redirect('success', 'Cập nhật thành công', 'edit-product/'.$id);
                }
            }
        }
    }
    public function deleteProduct($id){
        if ($id > 0){
            $this->product->deleteProduct($id);
            $title = "PRODUCT";
            $products = $this->product->getAllProduct();
            $this->render('product.list', compact('title', 'products'));
        }
    }
}
?>
