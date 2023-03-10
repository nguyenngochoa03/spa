<?php
use Phroute\Phroute\RouteCollector;
use App\admin\controllers\HomeController;
use App\Controllers\AuthController;
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
$router->get('/', [App\Controllers\HomeController::class, 'index']);
$router->get('admin', [App\admin\controllers\HomeController::class, 'index']);
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
$router->get('edit-service/{id}', [App\admin\controllers\ServiceController::class, 'editService']);
$router->post('update-service/{id}', [App\admin\controllers\ServiceController::class, 'updateServicePost']);
$router->get('delete-service/{id}', [App\admin\controllers\ServiceController::class, 'deteleService']);

//
$router->get('home', [App\Controllers\HomeController::class, 'index']);
$router->get('dang-nhap', [AuthController::class, 'login']);


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
