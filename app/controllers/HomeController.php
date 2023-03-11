<?php
namespace App\Controllers;
use App\Models\Account;
use App\Models\Product;
class HomeController extends BaseController{
    protected $product;
    protected $account;
    public function __construct()
    {
//        $this->product = new Product();
//        $this->account = new Account();
    }
    public function index(){
        $this->render('users.signin');
    }

}
?>
