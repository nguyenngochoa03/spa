<?php
namespace App\Models;

class Category extends BaseModel{
    protected $table = 'categorys';
    public function getAllCategory(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneCategory($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function addCategory($id, $name){
        $sql = "INSERT INTO $this->table VALUES (? , ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name]);
    }
    public function updateCategory($id, $name){
        $sql = "UPDATE $this->table SET name = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $id]);
    }
    public function deleteCategory($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
?>
