<?php
use Phroute\Phroute\RouteCollector;
use App\admin\controllers\HomeController;
use App\Controllers\AuthController;
use App\admin\controllers\UserDisplayController;
use App\admin\controllers\QuestionsController;
$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
//$router->get('/', function(){
//    return "trang chủ";
//});
$router->get('/admin', [App\Controllers\UsersController::class, 'dashboard']);
$router->get('/admin-lỗian', [App\admin\controllers\HomeController::class, 'index']);
//Category
$router->get('add-category', [App\admin\controllers\CategoryController::class, 'addCategory']);
$router->post('add-category-post', [App\admin\controllers\CategoryController::class, 'addCategoryPost']);
$router->get('edit-category/{id}', [App\admin\controllers\CategoryController::class, 'editCategory']);
$router->post('update-category/{id}', [App\admin\controllers\CategoryController::class, 'updateCategoryPost']);
$router->get('delete-category/{id}', [App\admin\controllers\CategoryController::class, 'deteleCategory']);
$router->get('service-category', [App\admin\controllers\CategoryController::class, 'tableCategory']);
$router->get('detail-category/{id}', [App\admin\controllers\ServiceController::class, 'listServiceIdCate']);
//Service
$router->get('service-list', [App\admin\controllers\ServiceController::class, 'listService']);
$router->post('add-service-post', [App\admin\controllers\ServiceController::class, 'addServicePost']);
$router->get('edit-service/{id}', [App\admin\controllers\CategoryController::class, 'editService']);
$router->post('update-service/{id}', [App\admin\controllers\CategoryController::class, 'updateServicePost']);
$router->get('delete-service/{id}', [App\admin\controllers\CategoryController::class, 'deteleService']);
$router->get('/log-out', function () {
    $_SESSION["login"] = false;
    setcookie("email",$_POST["email"],time()-86401,'/');
    setcookie("pass",$_POST["password"],time()-86401,'/');
    header("location:./");
});
$router->get('edit-service/{id}', [App\admin\controllers\ServiceController::class, 'editService']);
$router->post('update-service/{id}', [App\admin\controllers\ServiceController::class, 'updateServicePost']);
$router->get('delete-service/{id}', [App\admin\controllers\ServiceController::class, 'deteleService']);
$router->get('detail-service/{id}', [App\admin\controllers\BlogServiceController::class, 'listBlogSvIdCate']);
//Blog Service
$router->get('service-blog', [App\admin\controllers\BlogServiceController::class, 'listBlogSv']);
$router->get('add-blog-service', [App\admin\controllers\BlogServiceController::class, 'addBlogSv']);
$router->post('add-blog-service-post', [App\admin\controllers\BlogServiceController::class, 'addBlogSvPost']);
$router->get('edit-blog-service/{id}', [App\admin\controllers\BlogServiceController::class, 'editBlogSv']);
$router->post('update-blog-service/{id}', [App\admin\controllers\BlogServiceController::class, 'updateBlogSvPost']);

$router->get('delete-blog-service/{id}', [App\admin\controllers\BlogServiceController::class, 'deleteBlogSv']);
//giao-dien
$router->get('contact-us', [UserDisplayController::class, 'index']);
$router->get('quan-li-khach-hang', [UserDisplayController::class, 'index']);
$router->get('instagram', [UserDisplayController::class, 'insta']);
$router->get('edit-contact/{id}', [UserDisplayController::class, 'edit']);
$router->get('edit-insta/{id}', [UserDisplayController::class, 'editInsta']);
$router->post('update-contact/{id}', [UserDisplayController::class, 'update']);
$router->post('update-insta/{id}', [UserDisplayController::class, 'updateInsta']);
$router->get('questions', [QuestionsController::class, 'index']);

$router->get('add-question', [QuestionsController::class, 'addQuestion']);
$router->post('add-question', [QuestionsController::class, 'addQuestionPost']);
$router->get('edit-question/{id}', [QuestionsController::class, 'editQuestion']);
$router->get('update-question/{id}', [QuestionsController::class, 'updateQuestion']);
$router->delete('delete-question/{id}', [QuestionsController::class, 'deleteQuestion']);


//login -register
$router->get('home', [App\Controllers\HomeController::class, 'index']);
$router->get('sign-in', [App\Controllers\UsersController::class, 'index']);
//$router->get('/',function (){
//    return "xin chào Hoa ";
//});
$router->post('sign-in', [App\Controllers\UsersController::class, 'index']);
$router->get('sign-up',[App\Controllers\UsersController::class,'signup']);
$router->post('sign-up',[App\Controllers\UsersController::class,'signup']);
$router->get('user', [App\admin\controllers\UsersControlller::class, 'showUser']);
$router->get('add-user', [App\admin\controllers\UsersControlller::class, 'addUser']);
$router->post('add-user', [App\admin\controllers\UsersControlller::class, 'addUser']);
$router->get('delete-user/{id}', [App\admin\controllers\UsersControlller::class, 'deleteUser']);
$router->get('update-user/{id}', [App\admin\controllers\UsersControlller::class, 'updateUser']);
$router->post('update-user/{id}', [App\admin\controllers\UsersControlller::class, 'updateUser']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
