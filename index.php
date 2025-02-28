<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require 'vendor/autoload.php';
require_once __DIR__ . '/app/Helpers/helpers.php';

use Bramus\Router\Router;
use App\Controllers\Backend\AuthController;
use App\Controllers\Backend\DashboardController;
use Dotenv\Dotenv;
use App\Middleware\AuthMiddleware;
use App\Controllers\Backend\UserController;
use App\Controllers\Backend\CategoryController;
use App\Controllers\Backend\ProductController;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('BASE_URL', $_ENV['BASE_URL']);

$router = new Router();

// Auth routes
$router->mount('/auth', function () use ($router) {
  $router->get('/', AuthController::class . '@showLogin');
  $router->post('/login', AuthController::class . '@login');
  $router->get('/logout', AuthController::class . '@logout');
});


$router->before('GET|POST', '/admin/.*', function () {
  $middleware = new AuthMiddleware();
  if (!$middleware->handle()) {
    header('Location: /auth');
    exit;
  }
});

$router->mount('/admin', function () use ($router) {
  $router->get('/dashboard', DashboardController::class . '@index');

  $router->mount('/user', function () use ($router) {
    $router->get('/', UserController::class . '@index');
    $router->get('/add', UserController::class . '@add');
    $router->post('/store', UserController::class . '@store');
    $router->get('/edit/{id}', UserController::class . '@edit');
    $router->post('/update/{id}', UserController::class . '@update');
    $router->post('/delete/{id}', UserController::class . '@destroy');
    $router->get('/search', UserController::class . '@search');
  });

  $router->mount('/category', function () use ($router) {
    $router->get('/', CategoryController::class . '@index');
    $router->get('/add', CategoryController::class . '@add');
    $router->post('/store', CategoryController::class . '@store');
    $router->get('/edit/{id}', CategoryController::class . '@edit');
    $router->post('/update/{id}', CategoryController::class . '@update');
    $router->post('/delete/{id}', CategoryController::class . '@destroy');
    $router->get('/search', CategoryController::class . '@search');
  });
  $router->mount('/product', function () use ($router) {
    $router->get('/', ProductController::class . '@index');
    $router->get('/add', ProductController::class . '@add');
    $router->post('/store', ProductController::class . '@store');
    $router->get('/edit/{id}', ProductController::class . '@edit');
    $router->post('/update/{id}', ProductController::class . '@update');
    $router->post('/delete/{id}', ProductController::class . '@destroy');

    $router->get('/search', ProductController::class . '@search');
  });
});


$router->run();
