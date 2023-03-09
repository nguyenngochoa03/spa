<?php
namespace App\Models;
//use App\Models\BaseModel;
class Product extends BaseModel {
    protected $table = 'products';
    public function getAllProduct(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneProduct($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function addProduct($id, $name, $quantity, $price, $image, $category, $date_add){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $quantity, $price, $image, $category, $date_add]);

    }
    public function updateProduct($id, $name, $quantity, $price, $image, $category){
        if ($image != ''){
            $sql = "UPDATE $this->table SET `name` = '$name', `price` = '$price', `image` = '$image', `quantity` = '$quantity', `category` = '$category' WHERE `id` = '$id'";
        }else{
            $sql = "UPDATE $this->table SET `name` = '$name', `price` = '$price', `quantity` = '$quantity', `category` = '$category' WHERE `id` = '$id'";
        }
        $this->setQuery($sql);
        return $this->execute();
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
?>