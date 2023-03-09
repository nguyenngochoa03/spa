<?php
namespace App\Controllers;
use App\Models\Account;

class AccountController extends BaseController{
    protected $account;
    public function __construct()
    {
        $this->account = new Account();
    }
    public function listAccount(){
        $title = 'ACCOUNT';
        $account = $this->account->getAllAccount();
        $this->render('account.list', compact('title', 'account'));
    }
    public function addAccount(){
        $title = 'ACCOUNT';
        $this->render('account.add', compact('title'));
    }
    public function addAccountPost(){
        $title = "ACCOUNT";
        $errors = [];
        if (isset($_POST['send'])){
            if (empty($_POST['name_ac'])){
                $errors[] = 'Name không được bỏ trống.';
            }
            if (empty($_POST['email_ac'])){
                $errors[] = 'Email không được bỏ trống';
            }
            if (empty($_POST['password_ac'])){
                $errors[] = 'Password không được bỏ trống';
            }
            if (empty($_POST['address_ac'])){
                $errors[] = 'Address không được bỏ trống';
            }
            if (empty($_POST['phone_ac'])){
                $errors[] = 'Phone không đươc bỏ trống';
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'add-account');
            }else{
                $result = $this->account->addAccount(NULL, $_POST['name_ac'], $_POST['email_ac'], $_POST['password_ac'], $_POST['address_ac'], $_POST['phone_ac'], $_POST['role_ac'] );
                if($result){
                    redirect('success', 'Thêm mới thành công', 'add-account');
                }
            }
        }
    }
    public function editAccount($id){
        $title = 'ACCOUNT';
        if ($id > 0){
            $account = $this->account->getOneAccount($id);
            $this->render('account.edit', compact('title', 'account'));
        }
    }
    public function updateAccountPost($id){
        $title = 'ACCOUNT';
        $errors = [];
        if (isset($_POST['update'])){
            if (empty($_POST['name_ac'])){
                $errors[] = 'Name không được bỏ trống.';
            }
            if (empty($_POST['email_ac'])){
                $errors[] = 'Email không được bỏ trống';
            }
            if (empty($_POST['password_ac'])){
                $errors[] = 'Password không được bỏ trống';
            }
            if (empty($_POST['address_ac'])){
                $errors[] = 'Address không được bỏ trống';
            }
            if (empty($_POST['phone_ac'])){
                $errors[] = 'Phone không đươc bỏ trống';
            }
            if(count($errors) > 0){
                redirect('errors', $errors, 'edit-account/'.$id);
            }else{
                $result = $this->account->updateAccount($id, $_POST['name_ac'], $_POST['email_ac'], $_POST['password_ac'], $_POST['address_ac'], $_POST['phone_ac'], $_POST['role_ac']);
                if ($result){
                    redirect('success', "Thêm mới thành công", 'edit-account/'.$id);
                }
            }
        }

    }
    public function deleteAccount($id){
        $title = 'ACCOUNT';
        $result = $this->account->deleteAccount($id);
        if ($result){
            $account = $this->account->getAllAccount();
            $this->render('account.list', compact('title', 'account'));
        }
    }

}
?>
