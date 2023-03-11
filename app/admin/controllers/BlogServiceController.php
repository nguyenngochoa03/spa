<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\Models\BlogService;

class BlogServiceController extends BaseController{
    protected $blogService;
    public function __construct()
    {
        $this->blogService = new BlogService();
    }
    public function listBlogSv(){
        $blog = $this->blogService->getAllBlog();
        $this->render('admin.blogService.list', compact('blog'));
    }
    public function addBlogSv(){
        $this->render('admin.blogService.add');
    }
}
?>
