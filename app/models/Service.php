<?php
namespace App\Models;

class Service extends BaseModel{
    protected $table = 'service';
    public function getAllService(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAllCateId($id){
        $sql = "SELECT * FROM $this->table WHERE id_cate = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$id]);
    }
    public function getDetailService($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function addService($id, $id_cate, $name){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $id_cate, $name]);
    }
    public function updateService($id, $id_cate, $name){
        $sql = "UPDATE $this->table SET id_cate = ?, name = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id_cate, $name, $id]);
    }
    public function deleteService($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

}
?>
