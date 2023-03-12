<?php
namespace App\Models;
class Users extends BaseModel{
    protected $table = 'users';
    public function index(){
        $sql="SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function signup($name,$password,$sdt,$email,$image,$total_price,$create_date,$update_date){
        $create_date=date('Y-m-d H:i a');
        $update_date=date('Y-m-d H:i a');
        $sql="INSERT INTO $this->table VALUES (null,'$name','$password','$sdt','$email','$image','$total_price','1','$create_date','$update_date')";
        $this->setQuery($sql);
        return $this->execute();

    }
    public function showUser(){
        $sql="SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addUser($name,$password,$sdt,$email,$image,$total_price,$role_id,$create_date,$update_date){
        $create_date=date('Y-m-d H:i a');
        $update_date=date('Y-m-d H:i a');
        $sql="INSERT INTO $this->table VALUES('','$name','$password','$sdt','$email','$image','$total_price','1','$create_date','$update_date')";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function deleteUser($id){
        $sql="DELETE FROM $this->table where id ='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function updateUser($id,$name,$password,$sdt,$email,$image,$total_price,$role_id,$create_date,$update_date){
//        $create_date=date('Y-m-d H:i a');
//        $update_date=date('Y-m-d H:i a');
        $sql="UPDATE $this->table SET  name='$name',password='$password',sdt='$sdt',email='$email',image='$image',total_price='$total_price',role_id='$role_id',create_date='$create_date',update_date='$update_date' where id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function showUserUpdate($id){
        $sql="SELECT * FROM $this->table WHERE id='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}

?>

