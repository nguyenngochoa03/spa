<?php

namespace App\admin\controllers;

use App\Controllers\BaseController;
use App\models\contactUs;
use App\models\questions;

class QuestionsController extends BaseController
{
    public function index(){
        $questions = questions::GetAll();
        $this->render('admin.UserDisplay.questions.listQuestions',compact('questions'));
    }

    public function addQuestion(){

        $this->render('admin.UserDisplay.questions.addQuestion');
    }

    public function addQuestionPost(){
        if(isset($_POST['sb-question'])){
            $question = $_POST['question'];
            $reply = $_POST['reply'];
            $errors = [];
            if(empty($_POST['question'])){
                $errors[] = 'Bạn cần nhập câu hỏi';
            }
            if(empty($_POST['reply'])){
                $errors[] = 'Bạn cần nhập tên nội dung trả lời';
            }

            if(count($errors) > 0){
                redirect('errors', $errors, 'add-question');
            }else {
                $result = questions::addItems(
                    [
                        "id" =>  NULL,
                        "question" => $question,
                        "reply" => $reply
                    ]
                );
                if ($result){
                    redirect('success', "Cập nhật thành công!", 'add-question');
                }
            }
        }
    }

    public function editQuestion($id){
        $this->render('admin.UserDisplay.questions.editQuestion');
    }

    public function deleteQuestion($id){

    }
    public function blogQuestion(){
        $questions = questions::GetAll();
        $this->render('admin.UserDisplay.questions.blogQuestion',compact('questions'));
    }
}