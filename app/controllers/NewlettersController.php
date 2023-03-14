<?php
namespace App\controllers;

use App\models\Newletters;

class NewlettersController extends BaseController
{
    public function index()
    {
        $allData = newLetters::GetAll();
        $this->render('newletters.listNewletters', compact("allData"));
    }

    public function edit($id)
    {
        $oneData = newLetters::findOne($id);
        $this->render('newletters.editNewletters', compact('oneData'));
    }

    public function update($id)
    {
        if (isset($_POST['sb-newletters'])) {
            $logo = $_POST['logo'];
            $content = $_POST['content'];
            $meta = $_POST['desribi'];
            $create_date = $_POST['create_date'];
            $errors = [];
            if (empty($_POST['logo'])) {
                $errors[] = 'Bạn cần nhập logo';
            }
            if (empty($_POST['content'])) {
                $errors[] = 'Bạn cần nhập tên nội dung';
            }
            if (empty($_POST['desribi'])) {
                $errors[] = 'Bạn cần nhập tên mô tả';
            }
            if (count($errors) > 0) {
                redirect('errors', $errors, 'edit-newletters/' . $id);
            } else {
                $create_date=date('Y-m-d H:i a');
                $result = newLetters::updatefind($id, [
                    "logo" => $logo,
                    "content" => $content,
                    "meta" => $meta,
                    "create_date" =>$create_date
                ]);

                if ($result) {
                    redirect('success', "Cập nhật thành công!", 'edit-newletters/' . $id);
                }
            }
        }
    }
}
?>
