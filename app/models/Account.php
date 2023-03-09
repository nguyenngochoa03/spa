<?php
namespace App\Models;

class Account extends BaseModel{
    protected $table = 'accounts';
    public function getAllAccount(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneAccount($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function addAccount($id, $name, $email, $pass, $address, $phone, $role){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?,?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $email, $pass, $address, $phone, $role]);
    }
    public function updateAccount($id, $name, $email, $pass, $address, $phone, $role){
        $sql = "UPDATE $this->table SET fullname = ?, email = ?, password = ?, address = ?, phone = ?, role = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $email, $pass, $address, $phone, $role, $id]);
    }
    public function deleteAccount($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

}
?>
