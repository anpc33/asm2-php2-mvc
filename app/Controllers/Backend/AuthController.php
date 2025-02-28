<?php

namespace App\Controllers\Backend;

use Rakit\Validation\Validator;
use App\Models\UserModel as User;
use App\Controllers\Backend\BaseController;

class AuthController extends BaseController
{
  private $validator;
  private $user;

  public function __construct()
  {
    parent::__construct();
    $this->validator = new Validator();
    $this->user = new User();
  }

  public function showLogin()
  {
    $flash = $this->getToastrFlash();
    $this->render('auth.login', [
      'flash' => $flash
    ]);
  }



  public function login()
  {
    $validator = new Validator;
    $messages = require __DIR__ . '../../../../Lang/vi.php';

    $validation = $validator->make($_POST, [
      'email' => 'required|email',
      'password' => 'required|min:6',
    ]);

    $validation->setMessages($messages);
    $validation->validate();

    if ($validation->fails()) {
      $errors = $validation->errors();
      $this->setToastrFlash('error', implode(' ', $errors->firstOfAll()));
      $this->redirect('/auth');
      return;
    }
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = $this->user->findByEmail($email);

    if (!$user || !password_verify($password, $user['password'])) {
      $this->setToastrFlash('error', 'Email hoặc mật khẩu không đúng');
      $this->redirect('/auth');
      return;
    }


    if ((int)$user['role_id'] !== 1) {
      $this->setToastrFlash('error', 'Bạn không có quyền truy cập vào khu vực quản trị');
      $this->redirect('/auth');
      return;
    }


    $_SESSION['user'] = [
      'id' => $user['id'],
      'email' => $user['email'],
      'role' => $user['role_id'] == 1 ? 'admin' : 'user'
    ];

    error_log('User logged in. Session content: ' . print_r($_SESSION, true));

    $this->setToastrFlash('success', 'Đăng nhập thành công');
    $this->redirect('/admin/dashboard');
  }



  protected function setToastrFlash($type, $message)
  {
    $_SESSION['toastr'] = [
      'type' => $type,
      'message' => $message
    ];
  }

  public function logout()
  {
    unset($_SESSION['user']);
    session_destroy();
    return $this->redirect('/auth');
  }
}
