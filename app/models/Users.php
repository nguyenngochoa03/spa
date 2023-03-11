<?php
namespace App\Models;
class Users extends BaseModel{
    protected $table = 'users';
    public function signup($name,$password,$sdt,$email,$image,$total_price,$create_date,$update_date){
        $sql="INSERT INTO $this->table VALUES (null,'$name','$password','$sdt','$email','$image','$total_price','1','$create_date','$update_date')";
        $this->setQuery($sql);
        return $this->execute();

    }
    public function showUser(){
        $sql="SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addUser($name,$password,$sdt,$email,$image,$total_price,$create_date,$update_date){
        $sql="INSERT INTO $this->table VALUES('','$name','$password','$sdt','$email','$image','$total_price','$create_date','$update_date')";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function deleteUser($id){
        $sql="DELETE FROM $this->table where id ='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function updateUser($id,$name,$password,$sdt,$email,$image,$total_price,$create_date,$update_date){
        $sql="UPDATE $this->table SET `name`='$name',`password`='$password',`sdt`='[value-4]',`email`='[value-5]',`image`='[value-6]',`total_price`='[value-7]',`role_id`='[value-8]',`create_date`='[value-9]',`update_date`='[value-10]'";
        return $this->getData($sql);
    }
    public function showUserUpdate($id){
        $sql="SELECT * FROM $this->table WHERE id='$id'";
        return $this->getData($sql,false);
    }
}
?>

