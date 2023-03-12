<?php

namespace App\models;

class boostrap extends BaseModel
{
    public static function GetAll(){
        $model = new static;
        $sql = "SELECT * FROM $model->table";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }

    public static function findOne($id){
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE id = ?";
        $model->setQuery($sql);
        return $model->loadRow([$id]);
    }
    public static function findAllColumn($id, $column){
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $column = ?";
        $model->setQuery($sql);
        return $model->loadAllRows([$id]);
    }

    public static function delete($id){
        $model = new static;
        $sql = "DELETE FROM $model->table WHERE id = ?";
        $model->setQuery($sql);
        return $model->execute([$id]);
    }

//    data yêu cầu là key = cột trong bảng value là giá trị muốn update
    public static function updatefind($id, $datas = [],$namekey = "id"){
        $model = new static;
        $sql = "UPDATE $model->table SET  ";
        $numItems = count($datas);
        $i = 0;
        $data = [];
        foreach($datas as $key => $value){
            if(++$i === $numItems) {
                $sql.= "$key = ? ";
                $data[] = "$value";
            }else {
                $sql.= "$key = ? , ";
                $data[] = "$value";
            }

        }
        $data[] = $id;
        $sql .= "WHERE $namekey = ?";
        $model->setQuery($sql);
        return $model->execute($data);
    }

    public static function addItems($datas = []){
        $model = new static;
        $sql = "INSERT INTO $model->table VALUES (";
        $totalItems = count($datas);
        $i = 0;
        $data = [];
        foreach($datas as $key => $value){
            if(++$i === $totalItems) {
                $sql.= "?)";
                $data[] = "$value";
            }else {
                $sql.= "? , ";
                $data[] = "$value";
            }

        }
        $model->setQuery($sql);
        return $model->execute($data);
    }
}