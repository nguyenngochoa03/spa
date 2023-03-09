<?php

namespace App\admin\controllers;
use App\Controllers\BaseController;

class HomeController extends BaseController  {
    public function index(){
//        $title = 'admin';
        $this->render('admin.home.adminIndex');
    }
}