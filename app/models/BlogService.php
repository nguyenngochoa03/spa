<?php
namespace App\Models;

class BlogService extends BaseModel {
    protected $table = 'blogsservice';
    public function getAllBlog(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAllBlogIdSv($id){
        $sql = "SELECT * FROM $this->table WHERE id_service = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$id]);
    }
    public function getDetailBlog($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function addBlog($id, $id_sv, $conetent, $image, $title, $meta, $create_date, $create_update){
        if ($image != ''){
            $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $this->setQuery($sql);
            return $this->execute([$id, $id_sv, $conetent, $image, $title, $meta, $create_date, $create_update]);
        }else{
            $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?, ?, ?, ?)";
            $this->setQuery($sql);
            return $this->execute([$id, $id_sv, $conetent, $title, $meta, $create_date, $create_update]);
        }
    }

}
?>
